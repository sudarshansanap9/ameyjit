<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JIT Nashik</title>
  
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"  />
  


  <link rel="icon" type="image/x-icon" href="assets/img/index/fevicon.png">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">    
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- <link rel="stylesheet" href="assets/css/styles.css"> -->
 
  <!-- FEVICON -->
  <link rel="icon" href="assets/img/index/fevicon.png" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="css/style.css">
 
  
  
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> 
  <!-- Required meta tags -->
  
  

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  
 



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>


.heading {
    color: #900;
    font-weight: bold;
    transition: color 0.3s ease, transform 0.3s ease;
}

.heading:hover {
    color: #d00;
    transform: scale(1.1);
}

.alumni-link {
    color: #007bff;
    transition: color 0.3s ease, transform 0.3s ease;
}

.alumni-link:hover {
    color: #0056b3;
    transform: scale(1.1);
}

</style>
</head>
<body>
  <?php include('header.php') ?>
<div class="container mt-5">
    <h1 class="text-center heading">Alumni List</h1>
    <table class="table table-bordered mt-4">
        <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Branch Name</th>
            <th>Batch</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Computer Engineering</td>
            <td>2015-2016</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Civil Engineering</td>
            <td>2015-2016</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Mechanical Engineering</td>
            <td>2015-2016</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Electrical Engineering</td>
            <td>2015-2016</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Electronics & Telecommunication Engineering</td>
            <td>2015-2016</td>
        </tr>
        </tbody>
    </table>

    <div class="text-center mt-5">
        <a href="#" class="alumni-link">for Alumni Registration please click here</a><br>
        <a href="#" class="alumni-link">for More Details Please Visit "Alumni Blog...."</a><br>
        <a href="#" class="alumni-link">for Alumni Meet Report please click here</a>
    </div>
</div>

<?php include ('footer.php') ?>
<script>
  AOS.init({
duration: 2000 // Duration in milliseconds
});
</script>


 
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/main.js"></script>
  <script>
  const hamBurger = document.querySelector(".toggle-btn");
  hamBurger.addEventListener("click", function () {
      document.querySelector("#sidebar").classList.toggle("expand");
  });
</script>

<script>
AOS.init({
duration: 2000 // Duration in milliseconds (2000ms = 2 seconds)
});
</script>
</body>
</html>
