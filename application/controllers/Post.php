<?php
defined('BASEPATH') or exit();
class Post extends MEET_Controller
{
    public function index()
    {
        if (!$this->session->userdata('user_id')) {

            return redirect('login', 'refresh');

        } else {
		
			$post_text = $this->input->post('content');

			$poster = $this->session->userdata('user_id');

			$date = date('Y-m-d H:i:s');
			
			$this->Functions->new_post(nl2br($post_text), $poster, $date);
			
			$data['q_post']=$this->Functions->get_my_post();
			$data['title']='Newsfeed';
			$data['page_class']='newfeed';
			
			return redirect('', 'refresh');
		
		}
    }
}
