<div class="container-fluid">
    <h3><i class ="fas fa-edit"></i>EDIT DATA BARANG</h3>
<?php foreach($barang as $brg) : ?>
    <form action="<?php echo base_url(). 'admin/data_barang/update' ?>" method="post">
    <div class="form-group">
            <label>ID</label>
            <input type="hidden" name="id" class="form-control" value="<?php echo $brg->id ?>">
            <label>Nama Barang</label>
            <input type="text" name="nama_brg" class="form-control" value="<?php echo $brg->nama ?>">
          </div>
          <div class="form-group">
            <label>Keterangan</label>
            <input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan ?>">
          </div>
          <div class="form-group">
            <label>Kategori</label>
            <input type="text" name="kategori" class="form-control" value="<?php echo $brg->kategori ?>">
          </div>
          <div class="form-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
          </div>
          <div class="form-group">
            <label>Stok</label>
            <input type="text" name="stok" class="form-control" value="<?php echo $brg->stok?>">
          </div>
          <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
<?php endforeach ?>
</div>