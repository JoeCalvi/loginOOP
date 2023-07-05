<?php

// ensure the user got here the correct way
if(isset($_POST["submit"])) {

  // grabbing the data
  $uid = $_POST["uid"];
  $pwd = $_POST["pwd"];

  // instantiate SignupController
  include "../classes/dbh.classes.php";
  include "../classes/models/Login.php";
  include "../classes/controllers/LoginController.php";

  $login = new LoginController($uid, $pwd);

  // running error handlers and user signup
  $login->loginUser();

  // going back to the front page
  header("location: ../index.php?error=none");
}