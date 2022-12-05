<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>profile Todolist</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Rubik&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <style>
      @media screen and (min-width: 470px) {
        * {
          display: none;
        }
      }
      @media screen and (max-width: 470px) {
        .nav-item {
          font-size: 25px;
        }
        .nav {
          box-shadow: 2px 0px 10px 0px;
          border-radius: 30px 30px 0px 0px;
        }
        .nav-item a {
          color: white;
        }
        .nav-item a:hover {
          color: gray;
        }
        .habbit form {
          font-family: rubik;
          font-weight: 600;
        }
        .habbit form h5 {
          margin-top: 30px;
        }
        .habbit form input {
          padding: 10px;
          border-radius: 20px;
        }
        .habbit form button {
          padding: 5px 50px;
          border-radius: 20px;
          color: white;
        }
        .carousel-item {
          height: 300px;
          width: 100%;
        }
        .carousel-item img {
          width: 270px;
          margin: 20px;
        }
        .habbit p {
          font-family: rubik;
        }
      }
    </style>
  </head>
  <body class="mx-1">
    <section class="habbit text-center container-fluid">
      <p class="text-start mt-1 fs-5">
        <img src="./asset./img/logo.png" width="40px" alt="" />Bo<b
          class="text-danger"
          >Task</b
        >
      </p>
      <div
        id="carouselExampleControls"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./asset./img/main 1.png" class="d-block" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="./asset./img/main 2.png" class="d-block" alt="..." />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleControls"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleControls"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <form method="post" action="">
        <h5 class="text-start">Edit Your Name</h5>
        <input
          type="text"
          class="form-control mt-2"
          name="nama"
          placeholder="Mirza Maulana"
        />
        <a href="read.php"
          ><button type="submit" class="btn btn-danger my-4">Edit</button></a
        >
      </form>
    </section>
    <ul class="nav mx-2 bg-danger justify-content-center fixed-bottom">
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
        <a class="nav-link ms-5 fs-3" href="profile.php"
          ><i class="bi bi-person-fill"></i
        ></a>
      </li>
    </ul>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
