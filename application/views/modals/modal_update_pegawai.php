<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Update Data Pegawai</h3>
      <form method="POST" id="form-update-pegawai">
        <input type="hidden" name="id" value="<?php echo $dataPegawai->id_pegawai; ?>">
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-user"></i>
          </span>
          <input type="text" class="form-control" placeholder="Nama" name="nama" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->nama_pegawai; ?>">
        </div>
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-question-sign"></i>
          </span>
          <input type="text" class="form-control" placeholder="ID" name="idPeserta" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->idPeserta; ?>">
        </div>
          <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-usd"></i>
          </span>
              <input type="text" class="form-control" placeholder="Saldo" name="saldo" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->saldo; ?>">
          </div>
        <div class="input-group form-group" style="display: inline-block;">
          <span class="input-group-addon" id="sizing-addon2">
          <i class="glyphicon glyphicon-ok"></i>
          </span>
          <span class="input-group-addon">
              <input type="radio" name="status" value="1" id="aktif" class="minimal" <?php if($dataPegawai->status == 1){echo "checked='checked'";} ?>>
          <label for="laki">Aktif</label>
            </span>
            <span class="input-group-addon">
              <input type="radio" name="status" value="0" id="nonAktif" class="minimal" <?php if($dataPegawai->status == 0){echo "checked='checked'";} ?>>
          <label for="perempuan">Non Aktif</label>
            </span>
        </div>
        <div class="form-group">
          <div class="col-md-12">
              <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Update Data</button>
          </div>
        </div>
      </form>
</div>

<script type="text/javascript">
$(function () {
    $(".select2").select2();

    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    });
});
</script>