<?php
/**
 * Created by PhpStorm.
 * User: iku
 * Date: 4/14/2019
 * Time: 5:51 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
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

    public function company_sign_up()
    {

        $data['business_name'] = $this->input->post('business_name');
        $data['contact'] = $this->input->post('contact');
        $data['email'] = $this->input->post('email1');
        $data['phone'] = $this->input->post('phone');
        $recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
        if ($recaptchaResponse == '') {
            echo('recaptcha_false');
        } else {
            $result = $this->user_manage->insert_company($data);
            if ($result == 'user_exist') {
                echo('user_exist');
            }
            if ($result == 'success') {
                echo('success');
            }
        }

    }

    public function user_signup()
    {

        $data['user_email'] = $this->input->post('user_email');
        $data['first_name'] = $this->input->post('first_name');
        $data['last_name'] = $this->input->post('last_name');
        $data['gender'] = $this->input->post('gender');
        $data['city'] = $this->input->post('city');
        $data['country'] = $this->input->post('country');
        $data['language'] = $this->input->post('language');
        $data['password'] = md5($this->input->post('user_password'));
        $recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
        if ($recaptchaResponse == '') {
            echo('recaptcha_false');
        } else {
            $result = $this->user_manage->insert_user($data);
            if ($result == 'user_exist') {
                echo('user_exist');
            }
            if ($result == 'success') {
                echo('success');
            }
        }

    }

    public function user_signin()
    {

        $data['user_email'] = $this->input->post('account_name');
        $data['password'] = md5($this->input->post('account_password'));
        $result = $this->user_manage->user_login($data);
        if ($result == 'false') {
            echo('false');
        }
        else{
            $sessiondata = array(
                'useremail'  =>$result[0]['user_email'],
                'first_name'     => $result[0]['first_name'],
                'last_name'     => $result[0]['last_name']
            );
            $this->session->set_userdata($sessiondata);
            echo( 'success');
        }

    }
    public function user_logout()
    {
        session_destroy();
        redirect('/welcome/index/');
    }
    public function user_dashbord()
    {

        $this->load->view('user/home');

    }
}