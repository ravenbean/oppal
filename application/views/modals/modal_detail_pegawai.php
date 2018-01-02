<style>
    .main {
        float:right;
        width:60%;
        padding:0 20px;
    }
    .right {
        background-color:#e5e5e5;
        float:right;
        width:20%;
        padding:15px;
        margin-top:7px;
        text-align:center;
    }
</style>

<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
    <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 style="display:block; text-align:center;">Detail siswa</h3>

    <div class="main">
        <h2><?php echo $pegawai->nama; ?></h2>
        <p>Saldo: <?php echo $pegawai->saldo; ?></p>
    </div>

    <div class="right" style="background-color: #f5f5f5">
        <div align="center" style="width: auto">
            <img class="img-responsive" src='uploads/images/<?php echo $pegawai->foto; ?>' style="max-height:500px;">
        </div>
    </div>
</div>


</div>