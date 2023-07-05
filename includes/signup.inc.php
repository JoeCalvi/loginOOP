<?php

// ensure the user got here the correct way
if(isset($_POST["submit"])) {

  // grabbing the data
  $uid = $_POST["uid"];
  $pwd = $_POST["pwd"];
  $pwdRepeat = $_POST["pwdRepeat"];
  $email = $_POST["email"];

  // instantiate SignupController
  include "../classes/dbh.classes.php";
  include "../classes/models/Signup.php";
  include "../classes/controllers/SignupController.php";

  $signup = new SignupController($uid, $pwd, $pwdRepeat, $email);

  // running error handlers and user signup
  $signup->signupUser();

  // going back to the front page
  header("location: ../index.php?error=none");
}