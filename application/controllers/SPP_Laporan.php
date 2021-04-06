<?php
class SPP_Laporan extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_SPP_Laporan');
    }

    public function index(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Laporan Data SPP";
        $data['spp_laporan'] = $this->M_SPP_Laporan->data_spp_laporan();
        $this->template->load_admin('index','spp_laporan',$data);
    }
}