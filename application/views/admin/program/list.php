<p class="btn-group">
  <a href="<?= base_url('admin/program/tambah') ?>" class="btn btn-success btn-md">Tambah <i class="fa fa-plus"></i></a>
</p>

<div class="table-responsive mailbox-messages">
  <table id="example1" class="display table table-bordered table-hover" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th width=20>No.</th>
        <th>Nama Program</th>
        <th>Keterangan</th>
        <th>Jenis</th>
        <!-- <th>Tipe</th>
        <th>Isi</th> -->
        <th width=50>Aksi</th>
      </tr>
    </thead>

    <?php $no = 1;
    foreach ($program as $prog): ?>

      <tbody>
        <tr>
          <td>
            <?= $no++ ?>
          </td>
          <td>
            <?= $prog->nama_program ?>
          </td>
          <td>
            <?= word_limiter($prog->keterangan, 10) ?>
          </td>
          <td>
            <?= $prog->jenis ?>
          </td>
          <!-- <td>
            <?= $prog->nama_tipe ?>
          </td>
          <td>
            <?= word_limiter($prog->isi, 10) ?>
          </td> -->
          <td>
            <a href="<?= base_url('admin/program/edit/' . $prog->id_program) ?>" class="btn btn-warning btn-sm"><i
                class="fa fa-edit"></i></a>
            <a href="<?= base_url() ?>admin/program/hapus/<?= $prog->id_program; ?>" class="btn btn-danger btn-sm"
              onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
          </td>
        </tr>
      </tbody>

    <?php endforeach ?>
  </table>
</div>