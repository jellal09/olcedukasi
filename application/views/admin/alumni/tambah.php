<div class="row">
  <div class="col-md-12">

    <div class="card-body">
      <form action="<?= base_url('admin/Alumni/tambahAksi') ?>" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label>Nama Alumni</label>
          <input type="text" name="nama_alumni" class="form-control" required>
          <?= form_error('nama_alumni', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label>Lulusan</label>
          <input type="text" name="lulusan" class="form-control" required>
          <?= form_error('lulusan', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label>Pesan</label>
          <textarea name="pesan" class="form-control" id="isi" placeholder="Pesan">
            <?= set_value('pesan') ?>
          </textarea>
        </div>
        <div class="form-group">
          <label>Foto</label>
          Upload gambar Max. 1 MB
          <input type="file" accept="image/png, .jpg, .jpeg" name="gambar" id="gambar" onchange="gambar1(this.value)">
          <img src="holder.jpg" name="preview" id="preview" width="100px">
        </div>

        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
      </form>
    </div>

  </div>
</div>