<?php

// ensure the user got here the correct way
if(isset($_POST["submit"])) {

  // grabbing the data
  $uid = $_POST["uid"];
  $pwd = $_POST["pwd"];
  $pwdrepeat = $_POST["pwdrepeat"];
  $email = $_POST["email"];

  // instantiate SignupController
  include "../classes/dbh.classes.php";
  include "../classes/models/Signup.php";
  include "../classes/controllers/SignupController.php";

  $signup = new SignupController($uid, $pwd, $pwdrepeat, $email);

  // running error handlers and user signup

  // going back to the front page
}