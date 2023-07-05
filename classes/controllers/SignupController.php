<?php

class SignupController extends Signup {

  private $uid;
  private $pwd;
  private $pwdRepeat;
  private $email;

  public function __construct($uid, $pwd, $pwdRepeat, $email) {
    $this->uid = $uid;
    $this->pwd = $pwd;
    $this->pwdRepeat = $pwdRepeat;
    $this->email = $email;
  }

  public function signupUser() {
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
    $result = null;
    
    if(empty($this->uid) || empty($this->pwd) || empty($this->pwdRepeat) || empty($this->email)) {
      $result = false;
    } else {
      $result = true;
    }

    return $result;
  }

  private function invalidUid() {
    $result = null;
    
    if(!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
      $result = false;
    } else {
      $result = true;
    }

    return $result;
  }

  private function invalidEmail() {
    $result = null;

    if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
      $result = false;
    } else {
      $result = true;
    }

    return $result;
  }

  private function pwdMatch() {
    $result = null;

    if($this->pwd !== $this->pwdRepeat) {
      $result = false;
    } else {
      $result = true;
    }

    return $result;
  }

  private function uidTakenCheck() {
    $result = null;

    if(!$this->checkUser($this->uid, $this->email)) {
      $result = false;
    } else {
      $result = true;
    }

    return $result;
  }
}