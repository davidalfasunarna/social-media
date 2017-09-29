<?php
defined('BASEPATH') or exit('Um Hum, Cheatin Huh??');
class Functions extends CI_Model
{
    public function get_header($page = 'default')
    {
        if (!$page || $page == 'default') {
            $this->load->view('includes/header');
        }
    }
    public function get_navbar($page = 'default')
    {
        if (!$page || $page == 'default') {
            $this->load->view('includes/navbar');
        }
    }
    public function get_footer($page = 'default')
    {
        if (!$page || $page == 'default') {
            $this->load->view('includes/footer');
        }
    }
    public function register($fn, $ln, $dn, $email, $username, $pass, $token)
    {
        return $this->db->set('first_name', $fn)
            ->set('last_name', $ln)
            ->set('display_name', $dn)
            ->set('email', $email)
            ->set('login', $username)
            ->set('password', $pass)
            ->set('status', '0')
            ->set('token', $token)
            ->insert('users');
    }
    public function get_user_id_from_username($username)
    {
        $q = $this->db->select('id')
            ->where('login', $username)
            ->get('users');
        return $q->row('id');
    }
    public function check_token($user, $token)
    {

        $q = $this->db->where('login', $user)

            ->where('token', $token)

            ->get('users');

        return $q->row('id');

    }

    public function activate_user($login)
    {

        return $this->db->where('login', $login)

            ->set('status', '1')

            ->update('users');

    }
    public function check_login($username, $pass)
    {

        $q = $this->db->where('login', $username)

            ->where('password', $pass)
            
            ->get('users');

        if ($q->row('id')) {

            return true;

        }

    }
    public function check_active_user($id)
    {
        $q = $this->db->select('status')
            ->where('id', $id)
            ->get('users');
        return $q->row('status');
    }
    public function new_post($content, $poster, $date)
    {

        return $this->db->set('content', $content)

            ->set('poster_id', $poster)

            ->set('date', $date)

            ->insert('posts');

    }
	
	
	  public function get_my_post()
    {
		$poster = $this->session->userdata('user_id');
     
		$this->db->where('poster_id', $poster);
		$this->db->order_by('date','desc');       
		$q=$this->db->get('posts');
			

        if ($q->row('id')) {

            return $q;

        }

    }
	
}
