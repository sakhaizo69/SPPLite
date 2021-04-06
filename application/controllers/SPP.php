<?php
class SPP extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('M_SPP');
	}

	public function index(){
		if($this->session->userdata('login')!= TRUE){
			redirect('login');
		}

		$data['title'] = "Data SPP";
		$data['spp'] = $this->M_SPP->data_spp();
		$this->template->load_admin('index','spp',$data);
	}

	public function tambah(){
		if($this->session->userdata('login')!= TRUE){
			redirect('login');
		}

		$data['title'] = "Data SPP";
		$data['subtitle'] = "Tambah Data SPP";
		$this->template->load_admin('index','spp_tambah',$data);
	}

	public function simpan(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $this->M_SPP->simpan();
        redirect('spp');
    }

    public function edit(){
        if($this->session->userdata('login')!=TRUE){
            redirect('login');
        }

        $data['title'] = "Data SPP";
        $data['subtitle'] = "Edit Data SPP";

        $id = $this->uri->segment(3);
        $data['spp'] = $this->M_SPP->data_spp_by_id($id);
        $this->template->load_admin('index','spp_edit',$data);
    }

    public function update(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $this->M_SPP->update();
        redirect('spp');
    }

	public function hapus(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $id = $this->uri->segment(3);
        $this->M_SPP->hapus_data_spp($id);
        redirect('spp');
    }
}