<?php

class SignupController extends Signup {

  private $uid;
  private $pwd;
  private $pwdrepeat;
  private $email;

  public function __construct($uid, $pwd, $pwdrepeat, $email) {
    $this->uid = $uid;
    $this->pwd = $pwd;
    $this->pwdrepeat = $pwdrepeat;
    $this->email = $email;
  }

  private function signupUser() {
    if($this->emptyInput() == false) {
      // echo "Empty input!"
      header("location: ../index.php?error=emptyinput");
      exit();
    } else if($this->invalidUid() == false) {
      // echo "Invalid username!"
      header("location: ../index.php?error=username");
      exit();
    } else if($this->invalidEmail() == false) {
      // echo "Invalid email!"
      header("location: ../index.php?error=email");
      exit();
    } else if($this->pwdMatch() == false) {
      // echo "Password do not match!"
      header("location: ../index.php?error=pwdmatch");
      exit();
    } else if($this->uidTakenCheck() == false) {
      // echo "Username or email taken!"
      header("location: ../index.php?error=usernameoremailtaken");
      exit();
    }

    $this->setUser($this->uid, $this->pwd, $this->email);
  }

  private function emptyInput() {
    $result = true;
    
    if(empty($this->uid) || empty($this->pwd) || empty($this->pwdrepeat) || empty($this->email)) {
      $result = false;
    } else {
      $result = true;
    }

    return $result;
  }

  private function invalidUid() {
    $result = true;
    
    if(!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
      $result = false;
    } else {
      $result = true;
    }

    return $result;
  }

  private function invalidEmail() {
    $result = true;

    if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
      $result = false;
    } else {
      $result = true;
    }

    return $result;
  }

  private function pwdMatch() {
    $result = true;

    if($this->pwd !== $this->pwdrepeat) {
      $result = false;
    } else {
      $result = true;
    }

    return $result;
  }

  private function uidTakenCheck() {
    $result = true;

    if(!$this->checkUser($this->uid, $this->email)) {
      $result = false;
    } else {
      $result = true;
    }

    return $result;
  }
}