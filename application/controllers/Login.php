<?php
defined('BASEPATH') or exit();
class Login extends MEET_Controller
{
    public function index()
    {
        if ($this->session->userdata('user_id')) {

            return redirect('newsfeed', 'refresh');
        }

        $this->load->view('login', array('title' => 'Login', 'page_class' => 'login'));
    }

    public function try_login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        if($this->Functions->check_login($username,$password))
        {
            $id = $this->Functions->get_user_id_from_username($username);

            $status = $this->Functions->check_active_user($id);

            if ($status == 1) 
            {
                $this->session->set_userdata('user_id', $id);

                return redirect('', 'refresh');
            }
            else
            {
                $this->session->set_flashdata('unactive_user', 'Please activate your account');
                return redirect('');
            }
        }
        else
        {
            $this->session->set_flashdata('failed_login', 'Invalid username or password');
            return redirect('');
        }
    }

    public function logout() {
        $this->session->unset_userdata('user_id');

        return redirect('','refresh');
    }
}
