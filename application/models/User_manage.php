<?php
/**
 * Created by PhpStorm.
 * User: iku
 * Date: 4/15/2019
 * Time: 4:15 PM
 */

class user_manage extends CI_Model
{
    public function insert_company($data){
        $query = $this->db->get_where('company', array('email' => $data['email']));
        $result = $query->result();
//        echo $result;
        if (count($result)>0){
            return ('user_exist');
        }
        else{
            $this->db->insert('company', $data);
            return ('success');
        }
    }
    public function insert_user($data){
        $query = $this->db->get_where('users', array('user_email' => $data['user_email']));
        $result = $query->result();
//        echo $result;
        if (count($result)>0){
            return ('user_exist');
        }
        else{
            $this->db->insert('users', $data);
            return ('success');
        }

    }

    public function user_login($data){
        $query = $this->db->get_where('users', array('user_email' => $data['user_email'],'password' => $data['password'],));
        $result = $query->result();
//        echo $result;
        if (count($result)>0){
            return $query->result_array();
        }
        else{
            return ('false');
        }

    }

    public function admin_login($data){
        $query = $this->db->get_where('administrators', array('email' => $data['email'],'password' => $data['password'],));
        $result = $query->result();
//        echo $result;
        if (count($result)>0){
            return $query->result_array();
        }
        else{
            return ('false');
        }

    }
}