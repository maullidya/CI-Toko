<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
            <?php 
            $grand_total =0;
            if ($keranjang = $this->cart->contents()){
                foreach ($keranjang as $item){
                    $grand_total = $grand_total + $item['subtotal'];
                }
                echo "Total Belanja Anda: Rp. " .number_format($grand_total, 0,',','.') ; 
            
            ?>
            </div><br><br>
        <h3>Input Alamat Pengiriman & Pembayaran</h3> 
        <form method="post" action="<?php echo base_url()?>dashboard/proses_pesanan">
        <div class="form-group">
         <label>Nama lengkap</label>
         <input type="text" name="nama" placeholder="Masukkan Nama Lengkap Anda" class="form-control" >
        </div>
        <div class="form-group">
         <label>Alamat lengkap</label>
         <input type="text" name="alamat" placeholder="Masukkan Alamat Lengkap Anda" class="form-control" >
        </div>
        <div class="form-group">
         <label>No. Telepon</label>
         <input type="text" name="no_telp" placeholder="Masukkan Nomor Telepon Anda" class="form-control">
        </div>
        <div class="form-group">
         <label>Jasa Pengiriman</label>
         <select class="form-control">
            <option>JNE</option>
            <option>J&T</option>
            <option>SiCepat</option>
            <option>Gosend</option>
         </select>
        </div>
        <div class="form-group">
         <label>Metode Pembayaran</label>
         <select class="form-control">
            <option>Dana</option>
            <option>Gopay</option>
            <option>OVO</option>
            <option>Cod</option>
            <option>Bank</option>
         </select>
        </div>
        <button type="submit" class="btn btn-sm btn-primary mb-3" >Pesan</button>
        </form>
        <?php }else {
            echo "Keranjang Belanja Anda Masih Kosong";
        }
        ?>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>