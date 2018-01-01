<?php
  foreach ($dataTransaksi as $trans) {
    ?>
    <tr>
      <td><?php echo $trans->Transaction_ID ?></td>
      <td><?php echo $trans->From_User_Name; ?></td>
      <td><?php echo $trans->Transaction_Date; ?></td>
      <td><?php echo $trans->Store_Name; ?></td>
    </tr>
    <?php
  }
?>