<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('user_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['users'] = $this->user_model->get_users();
        $this->load->view('users/index', $data);
    }

    public function create()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('language', 'Language', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('users/create');
        } else {
            $this->user_model->create_user();
            redirect('users');
        }
    }

    public function edit($id)
    {
        $data['user'] = $this->user_model->get_user($id);

        if (empty($data['user'])) {
            show_404();
        }

        $this->load->view('users/edit', $data);
    }

    public function update($id)
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('language', 'Language', 'required');

        if ($this->form_validation->run() === FALSE) {

            $data['user'] = $this->user_model->get_user($id);
            $this->load->view('users/edit', $data);
        } else {

            $this->user_model->update_user($id);
            redirect('users');
        }
    }

    public function delete($id)
    {
        $this->user_model->delete_user($id);
        redirect('users');
    }
}
