<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "todo";

$connect = mysqli_connect($host, $user, $pass, $db);

if(!$connect){
    die("not connect");
}   

$tasks = mysqli_query($connect, "SELECT * FROM tasks");

// //  total
//   $tasks = mysqli_query($connect, "SELECT * FROM tasks");
//   $getdata = mysqli_query($connect, "SELECT * FROM tasks");
//   $total   = mysqli_num_rows($getdata);
//   delete
  if (isset($_GET['del_task'])) {
    $id = $_GET['del_task'];
    mysqli_query($connect, "DELETE FROM tasks WHERE id=$id");
    header('location: read.php');
  }
  // create 
  $task     = "";
  $date     = "";
  $kategori = "";
  $error    = "";
  $sukses   = "";

  if(isset($_POST['save'])){
   $task = $_POST['namatodo'];
   $date = $_POST['date'];
   $kategori = $_POST['options-outlined'];

    if($task && $date){
      $sql1 = "insert into tasks(task,date,kategori) values ('$task','$date','$kategori')";
      $q1   = mysqli_query($connect, $sql1);
    if($q1){
      $sukses = "successfully created data";
    }else {
      $error ="failed to create data";
    }
    
  }else{
    $error = "please enter the name of the data";
  }
}
?>