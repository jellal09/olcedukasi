<?php
$site = $this->konfigurasi_model->listing();
// echo form_open(base_url('admin/alumni/proses'));
?>
<p class="btn-group">
  <a href="<?php echo base_url('admin/alumni/tambah') ?>" class="btn btn-success btn-md">
    <i class="fa fa-plus"></i> Tambah Alumni</a>
</p>

<?= $this->session->set_flashdata('pesan') ?>
<div class="table-responsive mailbox-messages">
  <table id="example1" class="display table table-bordered table-hover" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th width=20>No.</th>
        <th>Gambar</th>
        <th>Nama Alumni</th>
        <th>Lulusan</th>
        <th>Pesan</th>
        <th width=50>Aksi</th>
      </tr>
    </thead>

    <?php $no = 1;
    foreach ($alumni as $alum): ?>

      <tbody>
        <tr>
          <td>
            <?= $no++ ?>
          </td>
          <td>
            <img src="<?= base_url('assets/upload/image/' . $alum->gambar) ?>" width="50">
          </td>
          <td>
            <?= $alum->nama_alumni ?>
          </td>
          <td>
            <?= $alum->lulusan ?>
          </td>
          <td>
            <?= word_limiter($alum->pesan, 10) ?>
          </td>
          <td>
            <a href="<?= base_url('admin/alumni/edit/' . $alum->id_alumni) ?>" class="btn btn-warning btn-xs"><i
                class="fa fa-edit"></i></a>
            <a href="<?= base_url() ?>admin/alumni/hapus/<?= $alum->id_alumni; ?>" class="btn btn-danger btn-xs "
              onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
          </td>
        </tr>

      </tbody>
    <?php endforeach ?>
  </table>
</div>