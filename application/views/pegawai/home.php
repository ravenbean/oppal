<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <div class="col-md-6" style="padding: 0;">
        <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-pegawai" style="width: auto"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Siswa</button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Nama</th>
          <th>ID</th>
          <th>Saldo</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
      </thead>
      <tbody id="data-pegawai">
        
      </tbody>
    </table>
  </div>
</div>

<?php echo $modal_tambah_pegawai; ?>

<div id="tempat-modal"></div>
