<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_user extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_users');
    }

    public function index()
    {
        
        $users = $this->M_users->get_list();
        $data['users'] = $users;
        $this->load->view('users/index', $data);
    }

    public function add()
    {   
        $user = $this->M_users->new_object();
        $user->UserName = "A";
        $data['user'] = $user;
        $this->load->view('users/add', $data);
    }

    public function addsave()
    {   
        $user = $this->M_users->new_object();
        $user->UserName = "Test";
        $user->save();
    }

    public function edit($id)
    {   
        $user = $this->M_users->get($id);
        $data['user'] = $user;
        $this->load->view('users/edit', $data);
    }

    public function editsave()
    {
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $user = $this->M_users->get($id);
        $user->UserName = $username ;
        $user->save();
        redirect('M_user/edit/'.$id);
    }

    public function delete($id){
        // your delete method goes here

    }

    private function loadview($viewName, $data)
	{
        // your load view method goes here
		$this->paging->load_header();
		$this->load->view($viewName, $data);
        $this->paging->load_footer();
    } 

}