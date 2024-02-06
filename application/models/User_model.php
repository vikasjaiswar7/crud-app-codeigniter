<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_users()
    {
        $query = $this->db->get('users');
        return $query->result();
    }

    public function create_user()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'phone' => $this->input->post('phone'),
            'gender' => $this->input->post('gender'),
            'language' => $this->input->post('language')
        );
        $this->db->insert('users', $data);
    }

    public function get_user($id)
    {
        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row(); 
    }

    public function update_user($id)
    {
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'phone' => $this->input->post('phone'),
            'gender' => $this->input->post('gender'),
            'language' => $this->input->post('language')
        );

        $this->db->where('id', $id);
        $this->db->update('users', $data);
    }

    public function delete_user($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('users');
    }
}
