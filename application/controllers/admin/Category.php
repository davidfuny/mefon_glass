<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        header('Cache-Control:no-cache,must-revalidate,max-age=0');
        header('Cache-Control:post-check=0,pre-check=0', false);
        header('Pragma:no-cache');
        $this->load->model('Category_name');
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
        $categories = $this->Category_name->get_category();
        $category['categories'] = $categories;
        $this->load->view('admin/category',$category);

    }

    public function addcategory()
    {
        $this->load->view('admin/addcategory');
    }
    public function addnewcategory()
    {
        $data['categoryName_en'] = $this->input->post('categoryName_en');
        $data['categoryName_cn'] = $this->input->post('categoryName_cn');
        $data['PARENT_ID'] = '0';
        $result = $this->Category_name->insert_category($data);
        $success['message']='success';
        if($result){
            $this->load->view('admin/addcategory',$success);
        }

    }
    public function edit($id)
    {
        $result['category'] = $this->Category_name->edit_category($id)[0];
        $this->load->view('admin/editcategory',$result);
    }
    public function updatecategory()
    {
        $data['categoryName_en'] = $this->input->post('categoryName_en');
        $data['categoryName_cn'] = $this->input->post('categoryName_cn');
        $data['id'] = $this->input->post('id');
        $result['category'] = $this->Category_name->update_category($data)[0];
        $result['message']='success';
        if($result){
            $this->load->view('admin/editcategory',$result);
        }

    }
    public function delete($id)
    {
        $result = $this->Category_name->delete_category($id);
        $category['categories'] = $result;
        $category['delete'] = 'deleted';
        $this->load->view('admin/category',$category);
    }
}