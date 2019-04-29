<?php
  function Session_Validator() {
    if (!isset($_SESSION['admin'])) {
      return false;
    } else {
      return true;
    }
  }

  function url_for($script_path) {
    if ($script_path[0] != '/') {
      $script_path = "/".$script_path;
    }
    return WWW_ROOT . $script_path;
  }

  function u($string = "") {
    return urlencode($string);
  }

  function raw_u($string = "") {
    return rawurlencode($string);
  }

  function h($string = "") {
    return htmlspecialchars($string);
  }

  function error_404() {
    header($_SERVER['SERVER_PROTOCOL'] . " 404 Not found");
    exit();
  }

  function error_500() {
    header($_SERVER["SERVER_PROTOCOL"] . " 500 Not found");
    exit();
  }

  function redirect_to($location) {
    header("Location: " . $location);
    exit;
  }

  function is_post_request() {
    return $_SERVER["REQUEST_METHOD"] == 'POST';
  }

  function is_get_request() {
    return $_SERVER['REQUEST_METHOD'] == 'GET';
  }

 ?>