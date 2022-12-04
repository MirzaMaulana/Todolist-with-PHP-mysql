<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Botask Manager</title>
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
        .navbar img {
          margin-top: -5px;
        }
        .navbar a {
          font-family: poppins;
          font-weight: 600;
        }
        .navbar a b {
          color: red;
        }
        .tittle {
          margin-bottom: 100px;
          font-family: poppins;
        }
        .tittle h1 {
          font-weight: 600;
          font-size: 30px;
        }
        .get {
          border-radius: 40px;
        }
        .nav-link {
          margin-top: -10px;
        }
        .img-fluid {
          margin: 30px 30px 30px 40px;
          width: 300px;
          position: absolute;
          animation-name: main;
          animation-duration: 2s;
          animation-iteration-count: 1000;
        }
        @keyframes main {
          0% {
            width: 295px;
          }
          50% {
            width: 300px;
          }
          100% {
            width: 295px;
          }
        }
        .get{
          font-family: poppins;
        }
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img
            src="./asset./img/logo.png"
            alt="Logo"
            width="40"
            class="d-inline-block align-text-top"
          />
          Bo<b>task</b>
        </a>
        <a class="nav-link active text-danger" aria-current="page" href="#"
          >Login</a
        >
      </div>
    </nav>
    <section class="container-fluid">
      <img src="./asset./img/main.png" class="img-fluid" alt="..." />
      <div class="tittle fixed-bottom text-center mt-3">
        <h1>
          Manage your<br />
          daily task
        </h1>
        <p>Make your best day</p>
      </div>
      <a href="read.php" class="get btn btn-danger btn-lg fixed-bottom m-5">
        Get Started
      </a>
    </section>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
