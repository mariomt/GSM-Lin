<?php
  function find_all_reviews() {
    global $db;
    $query = "SELECT * FROM Reviews";
    $result=mysqli_query($db,$query);
    confirm_result_set($result);
    return $result;
  }

  function find_review_by_id($id) {
    global $db;
    $query = "SELECT * FROM Reviews WHERE Folio='" . $id . "'";
    $result = mysqli_query($db, $query);
    confirm_result_set($result);
    $review = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $review;
  }

  function insert_review($review) {
    global $db;
    $query = "INSERT INTO Reviews (ID_Device,  Upload_date, Last_upload_date,";
    $query .= " Review_name, Content, Image) VALUES ";
    $query .= "('" . $review['ID_Device'] . "', '" . $review['Upload_date'] . "', ";
    $query .= " '" . $review['Last_upload_date'] . "', '" . $review['Review_name'] . "', ";
    $query .= "'" . $review['Content'] . "', " . $review['Image'] . "')";
  }

  function find_all_devices() {
    global $db;
    $query = "SELECT * FROM Devices ORDER BY ID_Device ASC";
    $result = mysqli_query($db, $query);
    confirm_result_set($result);
    return $result;
  }

  function find_device_by_id($id) {
    global $db;
    $query = "SELECT * FROM Devices WHERE ID_Devive='" . $id . "'";
    $result = mysqli_query($db, $query);
    confirm_result_set($result);
    $device = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $device;
  }

  function get_user($user, $pass) {
    global $db;
    $query = "SELECT * FROM Users WHERE User_name='" . $user . "' AND ";
    $query .= "Password='" . $pass . "';";
    $result = mysqli_query($db, $query);
    confirm_result_set($result);
    return $result;
  }




 ?>
