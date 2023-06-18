<?php
require('config.php');
require('read.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Leave Feedback</title>
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-light bg-light mb-4">
    <div class="container">
      <a class="navbar-brand" href="<?php echo $homeLink ?>"><?php echo $logoName ?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
           <a class="nav-link" href="<?php echo $homeLink ?>"><?php echo $homeNavbar ?></a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="<?php echo $feedbackLink ?>"><?php echo $feedbackNavbar ?></a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="<?php echo $aboutLink ?>"><?php echo $aboutNavbar ?></a>
         </li>
        </ul>
      </div>
  </div>
</nav>

<main>
  <div class="container d-flex flex-column align-items-center text-center">
   
    <a href="?column=id&sort=<?php echo $sort ?>" class="text-decoration-none text-dark"><h2>Feedback</h2></a>
    <?php if (mysqli_num_rows($sqlFetch) > 0) { ?>    
<?php while($results = mysqli_fetch_array($sqlFetch)) { ?> 
  <div class="card my-3 w-100">
    <div class="card-body position-relative ">
        <form action="delete.php" method="POST">
            <input type="hidden" name="deleteid" value="<?php echo $results['id']; ?>">
            <button type="submit" name="delete" class="position-absolute top-0 end-0 mx-2 my-1 text-danger" style="background: none; border: none;">
            <i class="fa-sharp fa-solid fa-xmark"></i>
            </button>
        </form>
        <div class="py-3"><?php echo $results['feedback']; ?></div>   
        <div><?php echo $results['name']; ?> <span>on <?php echo date('g:ia \o\n l jS F Y', strtotime($results['date'])); ?></span></div>
    </div>
  </div>
<?php } ?>
<?php } else { ?>
      <h4 class="mt-5">There is no feedback.</h4>
    <?php } ?>


   

   

  </div>
</main>

<footer class="text-center mt-5">
<?php echo $footerName?>
</footer>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

