<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Models', 'm');
        cekuser();
    }
    public function index()
    {
        $role_id = $this->session->userdata('role_id');
        $table = 'user';
        $where=array(
            'id_user'       =>  $this->session->userdata('id_user')
        );

        $data['user'] = $this->m->Get_Where($where, $table);
        $data['title'] = 'MegaJaya | Profile';
        
            $this->load->view('templates_admin/header', $data);
            $this->load->view('templates_admin/sidebar', $data);
            $this->load->view('templates_admin/navigation', $data);
            $this->load->view('profile/profile', $data);
            $this->load->view('templates_admin/script');
            $this->load->view('templates_admin/footer', $data);
    }
    public function edit()
    {
        $role_id = $this->session->userdata('role_id');
        $data['title'] = 'MegaJaya | Edit Profile';
        $table = 'user';
        $where = array(
            'id_user'        =>    $this->session->userdata('id_user')
        );

        $data['user'] = $this->m->Get_Where($where, $table);

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        if ($this->form_validation->run() == false) {
          
                $this->load->view('templates_admin/header', $data);
                $this->load->view('templates_admin/sidebar', $data);
                $this->load->view('templates_admin/navigation', $data);
                $this->load->view('profile/edit', $data);
                $this->load->view('templates_admin/script');
                $this->load->view('templates_admin/footer');
            
        } else {

            $table = 'user';
            $where = array(
                'id_user'        =>    $this->input->post('id')
            );
            $data = array(
                'nama'          => $this->input->post('name'),
                'email'           => $this->input->post('email'),
            );

            //cek jika ada gambar yg akan diupload
            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/profile';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->m->Update($where, $data, $table);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profil Berhasil Diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
            redirect('editprofile');
        }
    }

    public function changePassword()
    {
        $role_id = $this->session->userdata('role_id');
        $data['title'] = 'Surat Perizinan | Ubah Password';
        $table = 'user';
        $where=array(
            'id_user'       =>  $this->session->userdata('id_user')
        );

        $data['user'] = $this->m->Get_Where($where, $table);



        $this->form_validation->set_rules(
            'current_password',
            'Current Password',
            'required|trim',
            [
                'required' => 'Password Lama Tidak Boleh Kosong'
            ]
        );

        $this->form_validation->set_rules(
            'new_password1',
            'New Password',
            'required|min_length[5]|matches[new_password2]',
            [
                'required' => 'Password Baru Tidak Boleh Kosong',
                'matches'  => 'Password Tidak Sama',
                'min_length' => 'Password Minimal 5 karakter',
            ]
        );

        $this->form_validation->set_rules(
            'new_password2',
            'Confirm New Password',
            'required|min_length[5]|matches[new_password1]|trim',
            [
                'required' => 'Password Baru Tidak Boleh Kosong',
                'matches'  => 'Password Tidak Sama',
                'min_length' => 'Password Minimal 5 karakter',
            ]
        );
        if ($this->form_validation->run() == false) {
           

                $this->load->view('templates_admin/header', $data);
                $this->load->view('templates_admin/sidebar', $data);
                $this->load->view('templates_admin/navigation', $data);
                $this->load->view('profile/changepassword', $data);
                $this->load->view('templates_admin/script');
                $this->load->view('templates_admin/footer');
           
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Lama Salah! <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
                redirect('ubahpassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Baru Tidak Boleh Sama Dengan Password Baru!<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
                    redirect('ubahpassword');
                } else {
                    //password ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $table = 'user';
                    $where = array(
                        'email' => $this->session->userdata('email')
                    );
                    $data = array(
                        'password' =>    $password_hash
                    );
                    $this->m->Update($where, $data, $table);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Berhasil Diubah! <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
                    redirect('ubahpassword');
                }
            }
        }
    }
}
