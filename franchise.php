<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Franchaise</title>
  </head>

   <style>
        body {
            background-color: #fdfaf5;
        }
        /* Navbar */
        .navbar {
            background-color: green;
        }
        .navbar-nav .nav-link {
            color: white !important;
            font-weight: 500;
        }
        .navbar-nav .nav-link:hover {
            background-color: orange;
            color: #fff !important;
        }
        /* Header bar below navbar */
        .sub-header {
            background-color: orange;
            height: 5px;
        }
         </style>
        

  
  <!-- include/header.php -->
<div class="bg-white shadow-sm py-2">
  <div class="container d-flex align-items-center justify-content-between">
    <a href="index.php" class="d-flex align-items-center text-decoration-none">
      <img src="image/logo.png" alt="Logo" style="height:50px; width:auto; margin-right:10px;">
      <span class="fw-bold fs-4 text-dark">ABC Computer Franchise</span>
    </a>
    <div class="text-end small">
      <span class="me-3">📧 info@abc.com</span>
      <span>📞 +91-9876543210</span>
    </div>
  </div>
</div>

<!-- Main Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item"><a class="nav-link <?=($page=='home')?'active':''?>" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link <?=($page=='about')?'active':''?>" href="about_us.php">About Us</a></li>
        <li class="nav-item"><a class="nav-link <?=($page=='courses')?'active':''?>" href="course.php">Courses</a></li>
        <li class="nav-item"><a class="nav-link <?=($page=='franchise')?'active':''?>" href="franchise.php">Franchise</a></li>
        <li class="nav-item"><a class="nav-link <?=($page=='gallery')?'active':''?>" href="gallery.php">Gallery</a></li>
        <li class="nav-item"><a class="nav-link <?=($page=='downloads')?'active':''?>" href="downloads.php">Downloads</a>
          <!-- STUDENT Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="student.php" id="studentDropdown" role="button" data-bs-toggle="dropdown">
            Student
          </a>
          <ul class="dropdown-menu" aria-labelledby="studentDropdown">
            <li><a class="dropdown-item" class="nav-link <?=($page=='student')?'active':''?>" href="student.php">Registration Process</a></li>
            <li><a class="dropdown-item" href="student.php">Enrollment Verification</a></li>
            <li><a class="dropdown-item" href="student.php">Online Exam</a></li>
            <li><a class="dropdown-item" href="student.php">Online Result</a></li>
          </ul>
        </li>
</li>
        <li class="nav-item">
        <li class="nav-item"><a class="nav-link <?=($page=='services')?'active':''?>" href="services.php">Services</a></li>
        <li class="nav-item"><a class="nav-link <?=($page=='contact')?'active':''?>" href="contact.php">Contact us</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php echo'franchaise details' ?>

<?php include 'include/footer.php'; ?>

  <body>
    
    <h1></h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
