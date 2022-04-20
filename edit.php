<?php
require 'db.php';
  session_start();

  if (!isset($_SESSION['uid'])) {
    // echo "<script> alert('Access Denied. Please login') </script>";
    header('Location:index.php');
  }

    if(isset($_POST['send'])){

      $name = $_POST['name'];
      $email = $_POST['email'];
      $mobile = $_POST['mobile'];
      $userId = $_POST['uid'];

      $sql = "UPDATE users SET name=:name, email=:email, mobile=:mobile WHERE id=:user_id";
      $stmt = $link->prepare($sql);
      $stmt->execute(array(':name'=>$name, ':email'=>$email, ':mobile'=>$mobile, ':user_id'=>$userId));
      // $_SESSION['success'] = 'User Updated';
      header("Location:index.php");
      return;
    }

    $stmt = $link->prepare("SELECT * FROM users WHERE id=:user_id");
    $stmt->execute(array(':user_id'=>$_GET['id']));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
      if($row === false){
        // $_SESSION['error'] = 'Wrong value for user';
        header("Location:index.php");
        return;
    }

    $n = $row['name'];
    $e = $row['email'];
    $m = $row['mobile'];
    $id = $_GET['id'];

?>

    <h2>Update Info</h2>
    <form method="post">    
        <div>
          <label for="name">Name</label>
          <input type="text" name="name" id="name" value="<?= $n ?>">
        </div>
        <div>
          <label for="email">Email address</label>
          <input type="email" name="email" id="email" value="<?= $e ?>">
        </div>
        <div>
          <label for="mobile">Phone No</label>
          <input type="number" name="mobile" value="<?= $m ?>">
        </div>
        <input type="hidden" name="uid" value="<?= $id ?>"/>
        <button type="submit" name="send">Edit</button> | <button><a href = 'javascript:self.history.back();'>Cancel</a></button>
      </form>