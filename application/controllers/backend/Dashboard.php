<?php

use LDAP\Result;

if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Dashboard extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dashboard_model');
        if ($this->session->userdata('status') == NULL) {
            redirect('Login');
        }
    }
    public function index()
    {
        $this->data['penyewaan'] =  $this->Dashboard_model->select();
        $this->loadViewsAdmin("admin/dashboard", $this->data, NULL);
    }
}
