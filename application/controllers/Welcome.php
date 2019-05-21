<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    function __construct()
    {
        parent::__construct();
        header('Cache-Control:no-cache,must-revalidate,max-age=0');
        header('Cache-Control:post-check=0,pre-check=0', false);
        header('Pragma:no-cache');

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
		$this->load->view('home');
	}
    public function test()
    {
        $this->load->view('test');
    }
    public function formPost()
    {
        echo('fff');
//        $recaptchaResponse =trim($this->input->post('g-recaptcha-response'));
//        $secret = $this->config->item('google_secret');
//        $fields_string='';
//        $fileds = array("secret" => $secret, "response" => $recaptchaResponse);
//        foreach ($fileds as $key=>$value){
//            $fields_string.=$key.'='.$value.'&';
//
//        }
//        $fields_string=rtrim($fields_string,'&');
//
//
//        $url="https://www.google.com/recaptcha/api/siteverify";
////        $jsonRequest = array("secret" => $secret, "response" => $recaptchaResponse);
////        $jsonRequestString = json_encode($jsonRequest);
//        $ch = curl_init();
////
//        curl_setopt($ch, CURLOPT_URL, $url);
//        curl_setopt($ch, CURLOPT_POST, 1);
//        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);
//        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
//        $output = curl_exec($ch);
//        curl_close($ch);
//        $status= json_decode($output, true);
//        echo($status['success']);
//        echo($output);
//        echo($status);

//        if ($status['success']) {
//            print_r('Google Recaptcha Successful');
//            exit;
//        }else{
//            $this->session->set_flashdata('flashError', 'Sorry Google Recaptcha Unsuccessful!!');
//        }
//
//        redirect('welcome/test', 'refresh');
    }

    public function page_company()
    {
        $this->load->view('company');
    }
    public function about()
    {
        $this->load->view('about');
    }
    public function page_product()
    {
        $this->load->view('page_product');
    }
}
