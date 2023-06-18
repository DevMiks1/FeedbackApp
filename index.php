<?php 
require('config.php');

$name = $email = $feedback = "";
$nameErr = "";
$emailErr = "";
$feedbackErr = "";


if (isset($_POST["submit"])) {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST['name'];
  }

  if (empty($_POST["body"])) {
    $feedbackErr = "Feedback is required";
  } else {
    $feedback = $_POST["body"];
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST['email'];
  }
  
  if (empty($nameErr) && empty($feedbackErr) && empty($emailErr)) {
    // Process the form data
    require('./create.php');
   
}

  }
  
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <title>Leave Feedback</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light mb-4">
      <div class="container">
        <a class="navbar-brand" href="<?php echo $homeLink ?>"><?php echo $logoName ?></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $homeLink; ?> "><?php echo $homeNavbar ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $feedbackLink; ?>"
                ><?php echo $feedbackNavbar ?></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $aboutLink; ?>"><?php echo $aboutNavbar ?></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main>
      <div class="container d-flex flex-column align-items-center">
        <img src="./img/logo.png" width="200" class="mb-3" alt="" />
        <h2>Feedback</h2>
        <p class="lead text-center">Leave feedback for Kodego Bootcamp</p>
        <form action="" method="post" class="mt-4 w-75">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input
              type="text"
              class="form-control"
              id="name"
              name="name"
              placeholder="Enter your name"
              value="<?php echo $name; ?>"
            />
            <span class="text-danger"><?php echo $nameErr; ?></span>
          <div class="mt-3">
            <label for="email" class="form-label">Email</label>
            <input
              type="email"
              class="form-control"
              id="email"
              name="email"
              placeholder="Enter your email"
              value="<?php echo $email; ?>"
            />
          </div>
          <span class="text-danger "><?php echo $emailErr; ?></span>
          <div class="mt-3">
            <label for="body" class="form-label">Feedback</label>
            <textarea
              class="form-control"
              id="body"
              name="body"
              placeholder="Enter your feedback"
              
            ><?php echo $feedback; ?></textarea>
          </div>
          <span class="text-danger "><?php echo $feedbackErr; ?></span>
          <div class="my-3">
            <input
              type="submit"
              name="submit"
              value="Send"
              class="btn btn-dark w-100"
            />
          </div>
        </form>
      </div>
    </main>

    <footer class="text-center mt-5"><?php echo $footerName?></footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
