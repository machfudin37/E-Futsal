<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Member extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Register_model');
        $this->load->model(array('DataMember_model'));
        if ($this->session->userdata('status') == false) {
            redirect('Login');
        }
    }
    public function index()
    {

        $this->data['member'] = $this->DataMember_model->select3();
        $this->loadViewsAdmin("admin/DataMember_view/index", $this->data, NULL);
    }
    public function createUser()
    {
        $this->data = null;
        $this->loadViewsAdmin("admin/DataMember_view/create", $this->data, NULL);
    }
    function addNewMember()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama_member', 'Nama Member', 'trim|required|max_length[25]|min_lenght[3]|alphabet');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|max_length[25]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[35]');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('no_hp', 'Nomor HandPhone', 'trim|required|min_length[10]|max_length[13]');
        if ($this->form_validation->run() != FALSE) {
            $this->createUser();
        } else {
            $nama = $this->input->post('nama_member');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $gender = $this->input->post('jenis_kelamin');
            $alamat = $this->input->post('alamat');
            $no = $this->input->post('no_hp');
            $email = $this->input->post('email');
            $data = $this->Register_model->jumlah_user();

            $valid_user = $this->Register_model->check_username($username);
            if ($valid_user[0]->jumlah == 1) {
                $this->session->set_flashdata('error', 'Username Sudah ada');
                redirect('backend/member/createUser');
            } else {
                $data_member = array(
                    'nama_member' => $nama,
                    'gender' => $gender,
                    'alamat' => $alamat,
                    'no_hp' => $no,
                    'email' => $email,
                    'id_user' => $data[0]->jumlah //biar tau id usernya
                );

                $data_user = array(
                    'id_user' => $data[0]->jumlah, //biar tau id usernya
                    'username' => $username,
                    'status' => '2', //identfikasi ini member
                    'password' => md5($password)
                );
                $this->Register_model->add_user($data_user);
                $this->Register_model->add_member($data_member);
                $this->session->set_flashdata('success', 'New User created successfully');
                redirect('backend/member/index');
            }
        }
    }
    function editMember($id)
    {
        $this->data['datas'] = $this->DataMember_model->getDetailUser2($id);
        $this->loadViewsAdmin("admin/DataMember_view/edit", $this->data, NULL);
    }
    public function updateMember()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama_member');
        $user = $this->input->post('username');
        $email = $this->input->post('email');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');
        $pass = $this->input->post('password');
        
        $data = array('nama_member' => $nama, 'email' => $email, 'gender' => $jenis_kelamin, 'alamat' => $alamat, 'no_hp' => $no_hp);
        $password_lama = $this->DataMember_model->getUserById($id); // pastikan fungsi ini ada

        if (!empty($pass)) {
            $hash_pass = md5($pass);
        } else {
            $hash_pass = $password_lama->password; 
        }
        $data2 = array('username' => $user, 'password' => $hash_pass);

        $result = $this->DataMember_model->editUser3($data, $id);
        $result = $this->DataMember_model->editUser2($data2, $id);

        if ($result > 0) {
            $this->session->set_flashdata('success', 'Edit User successfully');
        } else {
            $this->session->set_flashdata('error', 'User creation failed');
        }

        redirect('backend/member');
    }
    function delete($id)
    {
        $result = $this->DataMember_model->deleteUser($id);
        $result = $this->DataMember_model->deleteUser2($id);
        redirect('backend/member');
    }
}
