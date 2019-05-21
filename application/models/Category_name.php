<?php
/**
 * Created by PhpStorm.
 * User: iku
 * Date: 5/19/2019
 * Time: 9:27 AM
 */

class Category_name extends CI_Model
{
    public function insert_category($data){
        $this->db->set('id', 'UUID()', FALSE);
        $this->db->insert('categories', $data);
        return True;
    }
    public function get_category(){
        $query = $this->db->get_where('categories', array('parent_id' => '0'));
        $result = $query->result();
        return $query->result_array();

    }
    public function edit_category($id){
        $query = $this->db->get_where('categories', array('id' => $id));
        $result = $query->result();
        return $query->result_array();

    }
    public function update_category($data){
        $this->db->update('categories',$data, array('id' => $data['id']));
        $result = $this->edit_category($data['id']);
        return $result;

    }
    public function delete_category($id){
        $this->db->delete('categories', array('id' => $id));
        $result = $this->get_category();
        return $result;

    }
}