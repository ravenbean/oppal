<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Tgl Transaksi</th>
          <th>Merchant</th>
        </tr>
      </thead>
      <tbody id="data-transaksi">

      </tbody>
    </table>
  </div>
</div>
