<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
    <div class="form-msg"></div>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 style="display:block; text-align:center;">Tambah Data Siswa</h3>

    <form id="form-tambah-pegawai" method="POST" enctype="multipart/form-data">
        <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
            <input type="text" class="form-control" placeholder="Nama" name="nama" aria-describedby="sizing-addon2" autofocus="autofocus">
        </div>
        <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-question-sign"></i>
      </span>
            <div class="input-box">
                <input type="text" placeholder="ID" name="idPeserta">
                <span class="unit"><?php print_r($this->session->userdata('userdata')->company_id)?> - </span>
            </div>
        </div>
        <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-usd"></i>
      </span>
            <input type="text" class="form-control" placeholder="Saldo" name="saldo" onkeypress='return event.charCode >= 48 && event.charCode <= 57' aria-describedby="sizing-addon2">
        </div>
        <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-credit-card"></i>
      </span>
            <input type="password" onkeypress='return event.charCode >= 48 && event.charCode <= 57' minlength="6" maxlength="6" class="form-control" placeholder="PIN" name="pin" aria-describedby="sizing-addon2">
        </div>
        <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-credit-card"></i>
      </span>
            <input type="password" onkeypress='return event.charCode >= 48 && event.charCode <= 57' minlength="6" maxlength="6" class="form-control" placeholder="Konfirmasi PIN" name="repin" aria-describedby="sizing-addon2">
        </div>
        <div class="input-group form-group" style="display: inline-block;">
      <span class="input-group-addon" id="sizing-addon2">
      <i class="glyphicon glyphicon-ok"></i>
      </span>
            <span class="input-group-addon">
          <input type="radio" name="status" value="1" id="laki" class="minimal">
      <label for="laki">Aktif</label>
        </span>
            <span class="input-group-addon">
          <input type="radio" name="status" value="0" id="perempuan" class="minimal">
      <label for="perempuan">Non Aktif</label>
        </span>
        </div>
        <div class="input-group form-group">
            <h4 class="modal-title">Upload Photo</h4>
            <input type="file" name="file" id="file" class="inputFile" required>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Submit</button>
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