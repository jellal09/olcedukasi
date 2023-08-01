<div class="row">
  <div class="col-md-12">

    <div class="card-body">
      <form action="<?= base_url('admin/program/tambahAksi') ?>" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label>Nama Program</label>
          <input type="text" name="nama_program" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Jenis</label>
          <input type="text" name="jenis" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Keterangan</label>
          <textarea name="keterangan" class="form-control" id="isi"
            placeholder="Keterangan"><?php echo set_value('keterangan') ?></textarea>
        </div>
        <button type="submit" class="btn btn-success btn-md">Simpan</button>
      </form>
    </div>

  </div>
</div>