<?php 
class Data_barang extends CI_Controller{
    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/data_barang', $data);
        $this->load->view('template_admin/footer');
    }
    public function tambah_aksi(){
        $nama_brg = $this->input->post('nama_brg');
        $keterangan = $this->input->post('keterangan');
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $gambar = $_FILES['gambar']['name'];
if ($gambar != '') {
    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'jpg|png|jpeg|gif';

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('gambar')) {
        echo "Gambar Gagal Diposting";
    } else {
        $gambar = $this->upload->data('file_name');
    }
}

        $data = array (
            'nama' => $nama_brg,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
            'harga' => $harga,
            'stok' => $stok,
            'gambar' => $gambar
        );
        $this->model_barang->tambah_barang($data, 'barang');
        redirect('admin/data_barang/index');
    }
    public function edit($id){
        $where = array('id' => $id);
        $data['barang'] = $this->model_barang->edit_barang($where, 'barang')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/edit_barang', $data);
        $this->load->view('template_admin/footer');
    }
    public function update(){
        $id = $this->input->post('id');
        $nama_brg = $this->input->post('nama_brg');
        $keterangan = $this->input->post('keterangan');
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');

        $data = array (
            'nama' => $nama_brg,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
            'harga' => $harga,
            'stok' => $stok,
        );
        $where = array ('id' => $id);
        $this->model_barang->update_data($where,$data, 'barang');
        redirect('admin/data_barang/index'); 
    }
    public function hapus($id){
        $where = array('id'=> $id);
        $this->model_barang->hapus_data($where, 'barang');
        redirect('admin/data_barang/index'); 
    }
}
?>
