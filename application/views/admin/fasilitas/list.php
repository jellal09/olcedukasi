<p class="btn-group">
  <a href="<?php echo base_url('admin/fasilitas/tambah') ?>" class="btn btn-success btn-md">
    <i class="fa fa-plus"></i> Tambah Fasilitas</a>
</p>

<div class="table-responsive mailbox-messages">
  <table id="example1" class="display table table-bordered table-hover" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th width=20>No.</th>
        <th>Gambar</th>
        <th>Fasilitas</th>
        <th width=50>Aksi</th>
      </tr>
    </thead>

    <?php $no = 1;
    foreach ($fasilitas as $fas): ?>

      <tbody>
        <tr>
          <td>
            <?= $no++ ?>
          </td>
          <td>
            <img src="<?= base_url('assets/upload/image/' . $fas->gambar) ?>" width="50">
          </td>
          <td>
            <?= $fas->nama_fasilitas ?>
          </td>
          <td>
            <a href="<?= base_url('admin/fasilitas/edit/' . $fas->id_fasilitas) ?>" class="btn btn-warning btn-sm"><i
                class="fa fa-edit"></i></a>
            <a href="<?= base_url() ?>admin/fasilitas/hapus/<?= $fas->id_fasilitas ?>" class="btn btn-danger btn-sm"
              onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
          </td>
        </tr>
      </tbody>

    <?php endforeach ?>
  </table>
</div>