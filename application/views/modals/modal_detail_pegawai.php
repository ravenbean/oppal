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
    <div id="content">
        <div style="width: 70%; float:left">
            <div>   <img class="img-responsive" src='uploads/images/<?php echo $pegawai->foto; ?>' align="center"> </div>
        </div>

        <div style="width: 30%; float:right"; align="center">
            <h1><?php echo $pegawai->nama; ?></h1>
            <p>Saldo: <?php echo $pegawai->saldo; ?></p>
            <p>Status: <?php if($pegawai->status == 1){echo 'Aktif';} else{echo 'Tidak Aktif';} ?></p>
            <p>ID: <?php echo $pegawai->user_id; ?></p>
        </div>
    </div>

</div>


</div>