<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>JIT Nashik</title>
        
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"  />
        
    
    
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">    
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
        <!-- <link rel="stylesheet" href="assets/css/styles.css"> -->
       
        <!-- FEVICON -->
        <link rel="icon" type="image/x-icon" href="../assets/img/index/fevicon.png">
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
            .card {
                border: none;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s;
            }
            .card:hover {
                transform: scale(1.02);
            }
            .fee-table {
            margin: 20px auto;
            width: 100%;
            max-width: 100%;
            border-collapse: collapse;
        }
        .fee-table th, .fee-table td {
            padding: 10px; /* Reduced padding for smaller devices */
            text-align: center;
        }
        .fee-table thead th {
            background-color: #f8d7da;
            color: #000;
        }
        .fee-table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .fee-table tbody tr:nth-child(odd) {
            background-color: #fdfdfe;
        }
        .fee-table tfoot td {
            text-align: left;
            font-style: italic;
            font-size: 0.9em;
        }
        @media (max-width: 576px) { /* Small devices (576px and below) */
            .fee-table th, .fee-table td {
                padding: 8px;
                /* Further reduce padding for smaller devices */
            }
        }
        @media (max-width: 576px){
            
               .table-responsive{
                font-size: 10px;
              
               }
            }
      
        </style>
      </head>
<body>
<?php include('../about/header.php') ?>

      <div class="wrapper">
      <?php include ("admissionslider.php") ?>
        <div class="container" style="width: 100%;">
            <h2 class="text-center my-4">Fee Structure for Academic Year 24-25</h2>
            <div class="table-responsive" >
                <table class="table fee-table table-bordered" style="width: 300px;">
                    <thead>
                        <tr>
                            <th colspan="2">Category</th>
                            <th>For MS Candidate*<br>Fees (in Rs.)</th>
                            <th>For OMS Candidate*<br>Fees (in Rs.)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="4" class="align-middle text-center">First Year Engineering To All Branches</td>
                            <td>Open</td>
                            <td>77,997</td>
                            <td>78,497</td>
                        </tr>
                        <tr>
                            <td>OBC/EBC/EWS</td>
                            <td>45,553</td>
                            <td>46,053</td>
                        </tr>
                        <tr>
                            <td>SBC/NT/VJ/TFWS</td>
                            <td>13,109</td>
                            <td>13,609</td>
                        </tr>
                        <tr>
                            <td>SC/ST</td>
                            <td>4,997</td>
                            <td>5,497</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4" class="text-left">* with Institute Level Scholarship (Conditions Apply)</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <?php include ('../about/footer.php') ?>
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