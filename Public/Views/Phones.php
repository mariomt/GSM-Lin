<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../Public/css/Stylesheet.css">
    <title>GSM Lin - Phones</title>
  </head>
  <?php
    require_once('../../Private/Initialize.php');
    session_start();

    if (!Session_Validator()) {
      redirect_to(url_for('/Views/Login.php'));
    }
    $device_set = find_all_devices();
  ?>

    <body>
      <div class="headers">
        <header>

        </header>
      </div>

      <nav class="menu-bar">
        <a href="Index.php"> REVIEWS </a>
        <a href="Phones.php"> PHONES </a>
        <a href="CloseSession.php"> LOGOUT </a>
        <a href="About.php"> GSM Lin </a>
      </nav>

      <div class="content">
        <h1>PHONES</h1>
      </div>

      <div class="create-button">
        <a href="CreatePhone.php"> <img src="../Images/Create.png" alt=""> </a>
      </div>

      <div class="content-device">
      <?php while($device = mysqli_fetch_assoc($device_set)) { ?>

        <div class="device">
          <div class="to-show">
            <div class="info-review">
              <div class="title">
                  <h3><?php echo h($device['Device_name']); ?></h3>
              </div>

              <p>Brand: <?php echo h($device['Brand']); ?></p>
              <p>Launch Date: <?php echo h($device['Launch_date']); ?></p>
            </div>
          </div>

          <div class="device-hidden">
            <div class="hide">
              <h6>Edit</h6>
              <a href="<?php echo url_for('Views/EditPhones.php?id=' . h(u($device['ID_Device']))) ?>"><img src="../../Public/Images/Edit.png" alt=""></a>
            </div>

            <div class="hide">
              <h6>Preview</h6>
              <a href="<?php echo url_for('Views/ViewPhone.php?id=' . h(u($device['ID_Device']))) ?>"><img src="../../Public/Images/Show.png" alt=""></a>
            </div>

            <div class="hide">
              <h6>Delete</h6>
              <a href="<?php echo url_for('Views/DeletePhone.php?id=' . h(u($device['ID_Device']))) ?>"><img src="../../Public/Images/Delete.png" alt=""></a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </body>
</html>
