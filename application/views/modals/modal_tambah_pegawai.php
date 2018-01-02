<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
    <div class="form-msg"></div>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 style="display:block; text-align:center;">Tambah Data Siswa</h3>

    <form id="form-tambah-pegawai" method="POST" enctype="multipart/form-data">
        <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
            <input type="text" class="form-control" placeholder="Nama" name="nama" aria-describedby="sizing-addon2">
        </div>
        <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-question-sign"></i>
      </span>
            <input type="text" class="form-control" placeholder="ID" name="idPeserta" aria-describedby="sizing-addon2">
        </div>
        <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-usd"></i>
      </span>
            <input type="text" class="form-control" placeholder="Saldo" name="saldo" aria-describedby="sizing-addon2">
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