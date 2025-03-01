<?php

class Kategori extends CI_Controller
{
    public function elektronik()
    {
        $data['elektronik'] = $this->model_kategori->data_elektronik()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('kategori/elektronik', $data);
        $this->load->view('template/footer');
    }
    public function pakaian_pria()
    {
        $data['pakaian_pria'] = $this->model_kategori->data_pakaian_pria()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('kategori/pakaian_pria', $data);
        $this->load->view('template/footer');
    }
    public function pakaian_wanita()
    {
        $data['pakaian_wanita'] = $this->model_kategori->data_pakaian_wanita()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('kategori/pakaian_wanita', $data);
        $this->load->view('template/footer');
    }
    public function pakaian_anak()
    {
        $data['pakaian_anak'] = $this->model_kategori->data_pakaian_anak()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('kategori/pakaian_anak', $data);
        $this->load->view('template/footer');
    }
    public function peralatan_olahraga()
    {
        $data['peralatan_olahraga'] = $this->model_kategori->data_peralatan_olahraga()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('kategori/peralatan_olahraga', $data);
        $this->load->view('template/footer');
    }
}
