<?php 
require('./database.php');

if(isset($_POST['delete'])){

    $deleteId = $_POST['deleteid'];

    $queryDeletedId = "DELETE FROM feedback where id=$deleteId";
    $sqlDelete = mysqli_query($connection,$queryDeletedId);

   
    header("Location: /php/feedback.php");
exit;
} else {
    header("Location: /php/feedback.php");
exit;
}
    






?>