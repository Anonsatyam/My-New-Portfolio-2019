<?php
  require_once('config.php');
?>
<?php
if(isset($_POST)){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $interest = $_POST['interest'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $files = $_POST['files'];
    $sql ="INSERT INTO clients(name, email, interest, phone, message, files) VALUES(?,?,?,?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$name, $email, $interest, $phone, $message, $files]);
    if($result){
      echo 'Thanks! I Will Contact You Soon.';
    }else{
      echo 'Not Saved';
    }
  }else{
      echo 'No data';
  }