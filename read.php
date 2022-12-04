<?php require "functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Task Manager</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins&family=Rubik&display=swap"
      rel="stylesheet"
    />
    <link href="/website/css/uicons-solid-rounded.css" rel="stylesheet" />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
    />
    <style>
      @media screen and (min-width: 470px) {
        * {
          display: none;
        }
      }
      @media screen and (max-width: 470px) {
        .nama h2{
          margin-top: -15px;
          font-family: rubik;
          font-weight: bold;
        }
        .nama p{
          font-family: poppins;
        }
        .kategori .row .col a{
          text-decoration: none;
          font-family: poppins;
          font-weight: 600;
          color: gray;
        }
        .kategori h1{
          font-family: poppins;
        }
        .card{
          width: 100px;
          height: 150px;
        }
        .card img{
          margin-top: 10px;
          width: 70px;
        }
        .card-body{
          font-family: rubik;
          font-weight: 600;
          margin-top: -10px;
        }
        .card-body h5{
          font-size: 16px;
        }
        .card-body p{
          color: red;
          font-family: poppins;
          font-size: 13px;
          margin-top: -10px;
        }
        .card .card-3{
          margin-top: 20px;
          width: 85px;
        }
        .data1{
          margin-bottom: 20px;
          width: 100%;
          height: 100px;
          border-left: 5px solid red;
          border-radius: 10px;
        }
        .data2{
          margin-bottom: 20px;
          width: 100%;
          height: 100px;
          border-left: 5px solid yellow;
          border-radius: 10px;
        }
        .data3{
          margin-bottom: 20px;
          width: 100%;
          height: 100px;
          border-left: 5px solid blue;
          border-radius: 10px;
        }
        .data-header{
          font-family: poppins;
          font-weight: 600;
          margin: 0px 10px;
        }
        .data-body{
          margin: -15px 0px 0px 10px;
          font-family: rubik;
        }
        .data-body p{
          margin-top: -5px;
          color: gray;
        }
        .progres{
          font-family: poppins;
          font-weight: 600;
          color: gray;
        }
        .data-header button{
          margin-top: 5px;
          font-size: 10px;
          padding: 4px 10px;
        }
        .add a i{
          font-size: 40px;
        }
        .add li a{
          font-family: poppins;
        }
        .dropdown-menu{
          transition: all ease-in-out 0.3s;
        }
        .nav-item {
          margin-top: -18px;
          font-size: 20px;
        }
        .nav {
          border-radius: 30px 30px 0px 0px;
        }
        .nav .item1{
          margin-top: -2px;
        }
        .nav-item a {
          color: white;
        }
        .nav-item a:hover {
          color: gray;
        }
        .nav .item3{
          margin-right: 15px;
          margin-top: -1px;
        }
        .nav .item2{
          margin-top: -8px;
          font-size: 25px;
        }
      }
    </style>
  </head>
  <body class="mx-2">
    <nav class="navbar navbar mt-1">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">
          <i class="fs-2 bi bi-arrow-left"></i>
        </a>
        <span class="ms-auto me-3"
          ><a class="nav-link active" aria-current="page" href="#"
            ><i class="fs-3 bi bi-bell"></i></a
        ></span>
        <span>
          <a class="nav-link active" aria-current="page" href="#"
            ><img src="./asset./img/logo.png" width="40" alt=""></span>
      </div>
    </nav>
    <section class="container-fluid mt-2">
      <div class="row">
        <div class="nama col">
          <?php $tanggal = date('M d, Y');?>
          <p><?php echo $tanggal;?></p>
          <h2>Mirza Maulana</h2>
        </div>
        <div class="col-4 text-end"><img src="https://th.bing.com/th/id/OIP.zYXxYGmrY2I1FJJeLqtR6QHaHa?pid=ImgDet&rs=1" alt="" class="rounded
          " width="50px"></div>
      </div>
    </section>
    <section class="kategori container-fluid mt-4">
      <h1 class="">Category</h1>
      <div class="row">
        <div class="col-4 text-center">
          <div class="card shadow border-danger">
            <img src="./asset./img/main 1.png" alt="" class="card-img mx-2">
            <div class="card-body">
              <h5>School</h5>
              <p>5 tasks</p>
            </div>
          </div>
        </div>
        <div class="col-4 text-center">
          <div class="card shadow border-warning">
            <img src="./asset./img/main 2.png" alt="" class="card-img mx-2">
            <div class="card-body">
              <h5>Work</h5>
              <p>5 tasks</p>
            </div>
          </div>
        </div>
        <div class="col-4 text-center">
          <div class="card shadow border-primary">
            <img src="./asset./img/main 3.png" alt="" class="card-3 mx-2">
            <div class="card-body">
              <h5>Personal</h5>
              <p>5 tasks</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="read mt-3 container-fluid">
      <p class="progres">IN PROGRESS</p>
      <?php 
      $sql2 = "select * from tasks order by id desc";
      $q2   = mysqli_query($connect,$sql2);
      while($row = mysqli_fetch_array($q2)){ ?>
      <?php if ($kategori === "school") { ?>
        <div class="data1 shadow">
              <div class="data-header">
               <a href="read.php?del_task=<?php echo $row['id']?>"><button type="button" class="btn btn-outline-danger float-end">Delete</button></a>
                <p class="text-danger"><?php echo $row['kategori']?></p>
             </div>
              <div class="data-body">
                <h5><?php echo $row['task']?></h5>
               <p><?php echo $row['date']?></p>
              </div>
           </div>
      <?php } elseif($kategori === "work"){ ?>
        <div class="data2 shadow">
              <div class="data-header">
                <a href="read.php?del_task=<?php echo $row['id']?>"><button type="button" class="btn btn-outline-danger float-end">Delete</button></a>
                <p class="text-danger"><?php echo $row['kategori']?></p>
             </div>
             <div class="data-body">
               <h5><?php echo $row['task']?></h5>
               <p><?php echo $row['date']?></p>
             </div>
            </div>
      <?php } else { ?>
        <div class="data3 shadow">
             <div class="data-header">
              <a href="read.php?del_task=<?php echo $row['id']?>"><button type="button" class="btn btn-outline-danger float-end">Delete</button></a>
               <p class="text-danger"><?php echo $row['kategori']?></p>
             </div>
             <div class="data-body">
               <h5><?php echo $row['task']?></h5>
               <p><?php echo $row['date']?></p>
             </div>
           </div>
      <?php } ?>      
      <?php } ?>
    </section>

    <section>
      <ul class="nav mx-2 justify-content-center fixed-bottom bg-danger">
      <li class="item1 nav-item">
        <a class="nav-link me-5" aria-current="page" href="read.php"
          ><i class="bi bi-house-fill"></i
        ></a>
      </li>
      <li class="item2 nav-item">
        <a class="nav-link" href="create.php"
          ><i class="bi bi-patch-plus-fill text-"></i
        ></a>
      </li>
      <li class="item3 nav-item">
        <a class="nav-link ms-5" href="profile.php"
          ><i class="bi bi-person-fill"></i
        ></a>
      </li>
      </div>
    </section>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
