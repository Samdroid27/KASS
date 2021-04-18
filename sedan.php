
    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kreon:wght@500&display=swap" rel="stylesheet">
    
    <title>Profile</title>
    <style>
        
        body{
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;   
    background: url(static/img/pic_1.jpg);
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
  
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
        h1{
             
             text-align: center;
        }
        </style>
  </head>
  <body>
  <?php
include("includes/header.php");
?>
  <h1>CARS</h1>
    <?php
    include("includes/sqlconn.php");
    $sql = "SELECT * FROM car where category='sedan'";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){  
        echo'
        <div class="container">
    <div class="main-body">
    
         
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="static/img/carv1.jpg" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>'.$row['model'].'</h4>
                    </div>
                  </div>
                </div>
             </div>
            </div>
            <div class="col-md-8">
              <div class="card ">
                <div class="card-body">
            <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">make</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    '.$row['make'].'
                    </div>
                  </div>
                  <hr>
            
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">model</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    '.$row['model'].'
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">registration number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     '.$row['regno'].'
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">model year</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    '.$row['model_year'].'
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">mileage</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    '.$row['mileage'].'
                    </div>
                  </div>
              <hr>
             
           
          </div>
        </div>
    </div>';
    
}
?>
  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
