<div class="container-fluid">
  <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah"><i class="fas fa-plus fa-sm"></i>Tambah Barang</button>
</div>
<div class="card shadow mb-4">
  <div class="card-body">
    <table class="table table-bordered">
      <tr>
        <th>NO</th>
        <th>NAMA BARANG</th>
        <th>KETERANGAN</th>
        <th>KATEGORI</th>
        <th>HARGA</th>
        <th>STOK</th>
        <th colspan="3">AKSI</th>
      </tr>

      <?php
      $no = 1;
      foreach ($barang as $brg) : ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $brg->nama ?></td>
          <td><?php echo $brg->keterangan ?></td>
          <td><?php echo $brg->kategori ?></td>
          <td><?php echo $brg->harga ?></td>
          <td><?php echo $brg->stok ?></td>
          <td>
            <div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>
          </td>
          <td><?php echo anchor('admin/data_barang/edit/' . $brg->id, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
          <td><?php echo anchor('admin/data_barang/hapus/' . $brg->id, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">FORM INPUT PRODUK</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url() . 'admin/data_barang/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_brg" class="form-control">
          </div>
          <div class="form-group">
            <label>Keterangan</label>
            <input type="text" name="keterangan" class="form-control">
          </div>
          <div class="form-group">
            <label>Kategori</label>
            <select>
              <option>Elektronik</option>
              <option>Pakaian Pria</option>
              <option>Pakaian Wanita</option>
              <option>Pakaian Anak</option>
              <option>Peralatan Olahraga</option>
            </select>
          </div>
          <div class="form-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control">
          </div>
          <div class="form-group">
            <label>Stok</label>
            <input type="text" name="stok" class="form-control">
          </div>
          <div class="form-group">
            <label>Gambar Produk</label>
            <input type="file" name="gambar" class="form-control">
          </div>
          <!-- Add other form fields as needed -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>