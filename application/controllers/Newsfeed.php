<?php
defined('BASEPATH') or exit();
class Newsfeed extends MEET_Controller
{
    public function index()
    {
        if (!$this->session->userdata('user_id')) {

            return redirect('login', 'refresh');

        }
		$data['q_post']=$this->Functions->get_my_post();
		$data['title']='Newsfeed';
		$data['page_class']='newfeed';
        $this->load->view('newsfeed', $data);
    }
}
