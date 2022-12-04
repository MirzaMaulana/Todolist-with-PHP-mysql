<?php require "functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Create Task</title>
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
        #input form {
          font-family: rubik;
        }
        #input form input {
          border-bottom: 2px solid red;
          padding: 10px;
        }
        #input form button {
          width: 250px;
          padding: 5px;
          font-size: 15px;
          border: none;
          color: white;
          border-radius: 30px;
        }
        .nav-item {
          font-size: 20px;
        }
        .nav {
          border-radius: 30px 30px 0px 0px;
        }
        .nav-item a {
          color: white;
        }
        .nav-item a:hover {
          color: gray;
        }
        .kategori p{
          font-family: poppins;
        }
      }
    </style>
  </head>
  <body class="mx-2">

    <section id="input" class="container-fluid mt-4">
      <?php
      if($error){ ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $error ?>
      </div>
      <?php
      }
      ?>
      <?php
      if($sukses){ ?>
      <div class="alert alert-success" role="alert">
        <?php echo $sukses ?>
      </div>
      <?php
      }
      ?>
      <form method="POST" action="" class="text-center">
        <input
          class="form-control"
          type="text"
          name="namatodo"
          placeholder="Task Tittle"
          aria-label="default input example"
        />
        <input
          class="form-control mt-3"
          type="time"
          name="date"
          aria-label="default input example"
        />
        <div class="kategori mt-3">
          <p class="fs-5">category</p>
            <input type="radio" class="btn-check" name="options-outlined" value="school" id="danger-outlined" autocomplete="off" checked>
            <label class="school btn btn-outline-danger" for="danger-outlined">School</label>

            <input type="radio" class="btn-check" name="options-outlined" value="work" id="warning-outlined" autocomplete="off">
            <label class="work btn btn-outline-warning" for="warning-outlined">Work</label>

            <input type="radio" class="btn-check" name="options-outlined" value="personal" id="primary-outlined" autocomplete="off">
            <label class="personal btn btn-outline-primary" for="primary-outlined">Personal</label>
        </div>
        
        <button type="submit" name="save" class="btn btn-lg btn-danger mt-3 text-center">
          Add New Task
        </button>
      </form>
    </section>
    <section>
      <ul class="nav mx-2 justify-content-center fixed-bottom bg-danger">
      <li class="nav-item">
        <a class="nav-link active me-5" aria-current="page" href="read.php"
          ><i class="bi bi-house-fill"></i
        ></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create.php"
          ><i class="bi bi-patch-plus-fill"></i
        ></a>
      </li>
      <li class="nav-item">
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
