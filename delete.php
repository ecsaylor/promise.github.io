<?php
  require_once 'db.php';
    session_start();

    if (!isset($_SESSION['uid'])) {
      // echo "<script> alert('Access Denied. Please login') </script>";
      header('Location:index.php');
    }

    if(isset($_POST['delete'])){

      $userId = $_POST['uid'];

      $sql = "DELETE FROM users WHERE id=:xyz";
      $stmt = $link->prepare($sql);
      $stmt->execute(array(':xyz'=>$userId));
      // $_SESSION['success'] = 'User deleted!';
      header("Location:index.php");
      return;
    }

    $stmt = $link->prepare("SELECT id, name FROM users WHERE id=:piz");
    $stmt->execute(array(':piz'=>$_GET['id']));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ( $row === false){
      // $_SESSION['error'] = 'Wrong user ID';
      header("Location:index.php");
      return;
    }
    $n = $row['name'];
    $uid = $_GET['id'];
?>
      
      <p>Confirm: Deleting the user <code><?= $n ?></code></p>
      <form method="post">
        <input type="hidden" name="uid" value="<?= $uid ?>"/>
        <button type="submit" name="delete">Delete</button> | <button><a href = 'javascript:self.history.back();'>Cancel</a></button>
      </form>