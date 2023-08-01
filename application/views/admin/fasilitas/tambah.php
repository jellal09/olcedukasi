<div class="row">
  <div class="col-md-12">

    <div class="card-body">
      <form action="<?= base_url('admin/fasilitas/tambahAksi') ?>" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label>Fasilitas</label>
          <input type="text" name="nama_fasilitas" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Gambar</label>
          Upload gambar max. 1 MB
          <input type="file" accept="image/png, .jpg, .jpeg" name="gambar" id="gambar" onchange="gambar1(this.value)">
          <img src="holder.jpg" name="preview" id="preview" width="100px">
        </div>
        <button type="submit" class="btn btn-success btn-md">Simpan</button>
      </form>
    </div>

  </div>
</div>