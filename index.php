<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
    <?php
    include 'nav.php';
    ?>
    <div class="container-fluid">
      <!-- Activity section -->
      <div class="row activity text-center">
        <div class="col-md act">
          <img src="Transfer.png" style="width:480px;height:395px; margin-top: 15px;" class="img-fluid">
          <br>
          <br>
          <a href="transfermoney.php"><button style="background-color : #0041C2;">Make a Transaction</button></a>
        </div>
        <div class="col-md act">
          <img src="TH.png" style="width:600px;height:430px;" class="img-fluid">
          <br>
          <a href="thistory.php"><button style="background-color : #0041C2;">Transaction History</button></a>
        </div>
      </div>
    </div>   
    <footer class="text-center mt-5 py-2">
      <p>&copy 2021. Made by <b>Sanket</b> <br> The Sparks Foundation</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>