<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jawahar Education Society</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"  />
            
        
        
            
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">    
            <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
            <!-- <link rel="stylesheet" href="assets/css/styles.css"> -->
           
            <!-- FEVICON -->
            <link rel="icon" href="../assets/img/index/fevicon.png" type="image/x-icon">
            <link rel="stylesheet" type="text/css" href="../css/style.css">
           
            
            
            <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> 
            <!-- Required meta tags -->
            
            
          
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        
            <link rel="stylesheet" href="../fonts/icomoon/style.css">
        
            <link rel="stylesheet" href="../css/owl.carousel.min.css">
        
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="../css/bootstrap.min.css">
            
            <!-- Style -->
            <link rel="stylesheet" href="../css/style.css">
            <style>
                body {
               
        
                .hero {
                    background: url('academic-hero.jpg') no-repeat center center/cover;
                    height: 400px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    color: #fff;
                    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
                    margin-bottom: 40px;
                }
        
                .hero h1 {
                    font-size: 4em;
                    margin: 0;
                }
        
                .content {
                    padding: 40px 20px;
                    max-width: 1200px;
                    margin: 0 auto;
                }
        
                .section {
                    margin-bottom: 60px;
                    text-align: center;
                }
        
                .section h1, .section h2 {
                    margin-bottom: 20px;
                    color: #900;
                }
        
                .section p {
                    font-size: 1.2em;
                    margin-bottom: 30px;
                    color: #666;
                }
        
                .gallery {
                    display: grid;
                    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
                    gap: 20px;
                }
        
                .gallery img {
                    width: 100%;
                    height: auto;
                    border-radius: 10px;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    transition: transform 0.3s, box-shadow 0.3s;
                }
        
                .gallery img:hover {
                    transform: scale(1.05);
                    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
                }
        
                .features ul {
                    list-style: none;
                    padding: 0;
                }
        
                .features ul li {
                    margin: 10px 0;
                    font-size: 1.2em;
                    color: #555;
                    display: flex;
                    align-items: center;
                }
        
                .features ul li::before {
                    content: "✔";
                    margin-right: 10px;
                    color: #28a745;
                    font-size: 1.5em;
                }
        
                .testimonials p {
                    font-size: 1.2em;
                    margin-bottom: 20px;
                    font-style: italic;
                    color: #555;
                }
        
                .contact p {
                    font-size: 1.2em;
                    margin-bottom: 20px;
                }
        
                .contact a {
                    color: #900;
                    text-decoration: none;
                    font-weight: bold;
                }
        
                .contact a:hover {
                    text-decoration: underline;
                }
        
              
                }
            </style>
    </head>
<body>
<?php include('../about/header.php') ?>

    <section class="hero">
        <h1>Innovation Center</h1>
    </section>

    <div class="content">
        <section class="section innovation-center">
            <h1>Our Innovation Center</h1>
            <p>The Innovation Center at JIT Nashik is a hub for creativity and technological advancement, fostering a culture of innovation among students and staff.</p>
            <div class="gallery">
                <img src="lab.jpg" alt="Innovation Lab">
                <img src="workshop.jpg" alt="Workshop">
                <img src="meeting.jpg" alt="Meeting Room">
            </div>
        </section>
        
        <section class="section features">
            <h2>Features of Our Innovation Center</h2>
            <ul>
                <li>State-of-the-art Laboratories</li>
                <li>Collaborative Workspaces</li>
                <li>3D Printing and Prototyping</li>
                <li>Advanced Computing Facilities</li>
                <li>Regular Workshops and Seminars</li>
                <li>Industry Collaboration</li>
            </ul>
        </section>

        <section class="section testimonials">
            <h2>What Our Innovators Say</h2>
            <p>"The Innovation Center provides the perfect environment for bringing ideas to life. The resources available are top-notch." - A Student Innovator</p>
            <p>"Collaborating with peers in this state-of-the-art facility has been an incredible experience." - Another Innovator</p>
        </section>

        <section class="section contact">
            <h2>Contact Us for More Information</h2>
            <p>If you have any questions or need more details about our Innovation Center, please contact our innovation coordinator at:</p>
            <p>Email: <a href="mailto: principaljitnashik@gmail.com"> principaljitnashik@gmail.com</a></p>
            <p>Phone: 0253-2970078</p>
        </section>
    </div>

    <?php include('../about/footer.php') ?>
    
    <script>
      AOS.init({
  duration: 2000 // Duration in milliseconds
  });
    </script>
    
  
     
      <script src="../js/jquery-3.3.1.min.js"></script>
      <script src="../js/popper.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <script src="../js/jquery.sticky.js"></script>
      <script src="../js/main.js"></script>
</body>
</html>
