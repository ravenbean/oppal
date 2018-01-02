<?php
  foreach ($dataPegawai as $pegawai) {
    ?>
    <tr>
      <td style="min-width:230px;"><?php echo $pegawai->pegawai; ?></td>
      <td><?php echo $pegawai->id; ?></td>
      <td><?php echo $pegawai->saldo; ?></td>
      <td class="text-center" style="min-width:230px;">
        <button class="btn btn-warning update-dataPegawai" data-id="<?php echo $pegawai->id; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
        <button class="btn btn-info detail-dataPegawai" data-id="<?php echo $pegawai->id; ?>" data-toggle="modal"><i class="glyphicon glyphicon-info-sign"></i> Detail</button>
        <button class="btn btn-danger topUpSaldo-pegawai" data-id="<?php echo $pegawai->id; ?>" data-toggle="modal"><i class="glyphicon glyphicon-flash"></i> Top Up</button>
      </td>
    </tr>
    <?php
  }
?>