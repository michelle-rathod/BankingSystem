<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>HOME</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\BankingSys\sty.css">
</head>

<style type="text/css">
  <?php include "sty.css"?>
</style>

<body style="background-color:#d0e1f9;">
<div id="navbar"> 
  <ul>
  <li><a href="index.php">Home</a></li> 
  <li><a href="transfermoney.php">Transfer-Money</a></li> 
  <li><a href="transactionhistory.php">Transaction-History</a></li>  
  </ul> 
</div>

<div class="container">
  <div class="row">
    <div class="col">
      <img style="text-align: center;" src="http://localhost/BankingSys/transaction.png">
      <br>
      <a href="transfermoney.php"><button type="button" class="btn btn-lg btn-ligth" style="background-color:#283655;color: white;">Transfer Money</button></a>
    </div>
    <div class="col">
      <img style="text-align: center;" src="http://localhost/BankingSys/mhistory.png">
      <br>
      <a href="transactionhistory.php"><button type="button" class="btn btn-lg btn-ligth" style="background-color:#283655;color: white;">View History</button></a>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>