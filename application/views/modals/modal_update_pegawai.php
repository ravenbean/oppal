<?php global $base_url; ?>
<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
    <div class="form-msg"></div>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 style="display:block; text-align:center;">Update Data Siswa</h3>
    <div align="center">
        <img class="img-responsive" src='<?php echo $base_url;?>uploads/images/<?php echo $dataPegawai->foto; ?>' style="max-height:250px;">
    </div>

    <form method="POST" id="form-update-pegawai">
        <div class="input-group form-group">
            <h4 class="modal-title">Update Foto :</h4>
            <input type="file" name="file" id="file" class="inputFile">
        </div>
        <input type="hidden" name="id" value="<?php echo $dataPegawai->id; ?>">
        <input type="hidden" name="oldName" value="<?php echo $dataPegawai->nama; ?>">
        <input type="hidden" name="oldID" value="<?php echo $dataPegawai->user_id; ?>">
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-user"></i>
          </span>
            <input type="text" class="form-control" placeholder="Nama" name="nama" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->nama; ?>">
        </div>
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-question-sign"></i>
          </span>
            <div class="input-box">
                <input type="text" placeholder="ID" name="idPeserta" value="<?php $arr = explode("-", $dataPegawai->user_id, 2); echo $arr[1]; ?>">
                <span class="unit"><?php print_r($this->session->userdata('userdata')->company_id)?> - </span>
            </div>
        </div>
        <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-credit-card"></i>
      </span>
            <input type="password" onkeypress='return event.charCode >= 48 && event.charCode <= 57' minlength="6" maxlength="6" class="form-control" placeholder="PIN" name="pin" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->pin?>">
        </div>
        <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-credit-card"></i>
      </span>
            <input type="password" onkeypress='return event.charCode >= 48 && event.charCode <= 57' minlength="6" maxlength="6" class="form-control" placeholder="Konfirmasi PIN" name="repin" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->pin?>">
        </div>
        <div class="input-group form-group" style="display: inline-block;">
      <span class="input-group-addon" id="sizing-addon2">
      <i class="glyphicon glyphicon-ok"></i>
      </span>
            <span class="input-group-addon">
          <input type="radio" name="status" value="1" id="laki" class="minimal" <?php if($dataPegawai->status == 1){echo "checked='checked'";}?>>
      <label for="laki">Aktif</label>
        </span>
            <span class="input-group-addon">
          <input type="radio" name="status" value="0" id="perempuan" class="minimal" <?php if($dataPegawai->status == 0){echo "checked='checked'";}?>>
      <label for="perempuan">Non Aktif</label>
        </span>
        </div>
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-usd"></i>
          </span>
            <input type="text" disabled class="form-control" placeholder="Saldo" name="saldo" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->saldo; ?>">
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Update Data</button>
            </div>
        </div>
    </form>
</div>

<style>
    .input-box { position: relative; }

    input { display: block; border: 1px solid #d7d6d6; background: #fff; padding: 9px 10px 10px 30px; width: 100%; }

    .unit { position: absolute; display: block; left: 5px; top: 10px; z-index: 9; padding-left: 8px }

    $(function () {
        $(".select2").select2();

    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_flat-blue',
        radioClass: 'iradio_flat-blue'
    });
    });

</style>