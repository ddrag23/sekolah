<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index(){
        // cekAlreadyLogin();
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('module/auth/login');
        }else {
            $this->proses();
        }
        
    }
    
    private function proses(){
        $post = $this->input->post(null, TRUE);
        if (isset($post['login'])) {
            
            $this->load->model('M_user', 'users');
            $query = $this->users->login($post);
            //   cek user
            if ($query->num_rows() > 0) {
            $row = $query->row();
            $params = array(
                'id' => $row->id,
                'level' => $row->level
            );
            // echo json_encode($row);die();
            $this->session->set_userdata($params);
            $this->session->set_flashdata('sukses', 'Selamat data di pengelolahan data siswa');
            redirect('dashboard');
          }else {
              $this->session->set_flashdata('pesan', 'username / pass tidak valid');
              redirect('auth');
          }
      }
    }

       public function register(){
        $this->load->view('module/auth/register');
        
    }

    public function logout(){
        $params = array('id','level');
        $this->session->unset_userdata($params);
        redirect('auth');
    }
}