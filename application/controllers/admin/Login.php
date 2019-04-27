<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        header('Cache-Control:no-cache,must-revalidate,max-age=0');
        header('Cache-Control:post-check=0,pre-check=0', false);
        header('Pragma:no-cache');
        $this->load->model('user_manage');
        $this->load->library('session');
        if (!(isset($_SESSION["language"]))) {
            $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
            if ($lang == 'zh') {
                $_SESSION["language"] = 'chinese';
            } else {
                $_SESSION["language"] = 'english';
            }

        }
    }
    public function index()
    {
        $this->load->view('admin/index');
    }
    public function admin_login()
    {

        $data['email'] = $this->input->post('username');
        $data['password'] = md5($this->input->post('password'));
        $result = $this->user_manage->admin_login($data);
        if ($result == 'false') {
            $this->session->set_flashdata('flashError', 'Email or password is incorrect!');
            redirect('admin/login', 'refresh');
        }
        else{
            $sessiondata = array(
                'adminemail'  =>$result[0]['email'],
                'admin_name'     => $result[0]['user_name'],
            );
            $this->session->set_userdata($sessiondata);
            $this->load->view('admin/dashboard');
        }

    }
}