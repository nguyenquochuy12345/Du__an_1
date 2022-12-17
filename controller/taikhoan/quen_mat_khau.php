<?php
if (isset($_POST['gui'])) {
  $email = $_POST['email'];
  $username = $_POST['username'];

  if (!isset($_SESSION['errors']['username']) && !isset($_SESSION['errors']['email'])) {
    quenmatkhau($email, $username);
  }
}
