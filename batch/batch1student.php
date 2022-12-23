<?php
include "configstud.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Batch1 Dashboard</title>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- bootstrap 5 css -->

  <!-- BOX ICONS CSS-->
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
  <!-- custom css -->
  <link rel="stylesheet" href="../admindash/admindash.css" />
</head>

<body>
  <!-- Side-Nav -->
  <aside class="sidebar position-fixed top-0 left-0 overflow-auto h-100 float-left" id="show-side-navigation1">
  <i class="uil-bars close-aside d-md-none d-lg-none" data-close="show-side-navigation1"></i>
  <div class="sidebar-header d-flex justify-content-center align-items-center px-3 py-4">
    <img
         class="rounded-pill img-fluid"
         width="65"
         src="https://t4.ftcdn.net/jpg/00/65/77/27/360_F_65772719_A1UV5kLi5nCEWI0BNLLiFaBPEkUbv5Fv.jpg"
         alt="">
    <div class="ms-3">
      <h5 class="fs-5 mb-0">
        <a class="text-decoration-none text-light" href="#"><?php echo $_SESSION['username']; ?></a>
      </h5>
     
    </div>
  </div>

  <div class="search position-relative text-center px-4 py-3 mt-2 bg-">

    <i class="fa fa-search position-absolute d-block fs-6"></i>
  </div>

  <ul class="">
    <li class="">
    <a href="batch1.php" class="text-light fw-bold">DashBoard</a>
    <hr class="border border-danger border-2 opacity-50">
    </li>
    <li class="">
    <a href="batch1student.php" class="text-light fw-bold">Student Details</a>
    <hr class="border border-primary border-2 opacity-50">
    </li>
    <li class="">
      <a href="batch1lab.php" class="text-light fw-bold">Lab Details</a>
      <hr class="border border-warning border-2 opacity-50">
    </li>
    
    <li class="">
      <a href="batch1timetable.php" class="text-light fw-bold">Time Table</a>
      <hr class="border border-success border-2 opacity-50">
    </li>
    <li class="">
      <a href="#" class="text-light fw-bold"> Contact</a>
      <hr class="border border-secondary border-2 opacity-50">
    </li>
   
   
   
  </ul>
</aside>

<section id="wrapper">
  <nav class="navbar navbar-expand-md">
    <div class="container-fluid mx-2">
      <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggle-navbar" aria-controls="toggle-navbar" aria-expanded="false" aria-label="Toggle navigation">
          <i class="uil-bars text-white"></i>
        </button>
        <a class="navbar-brand fw-bold" href="#">Batch<span class="main-color fw-bold">B1</span></a>
      </div>
      <div class="collapse navbar-collapse" id="toggle-navbar">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdownvfw-bold">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Settings
            </a>
            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
            <li>
                <a class="dropdown-item text-light" href="#">My account</a>
              </li>
              <li><a class="dropdown-item text-light" href="#">My inbox</a>
              </li>
              <li><a class="dropdown-item text-light" href="#">Help</a>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item text-light" href="../mainpage/mainpage.php">Log out</a></li>
            </ul>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>

  <div class="p-4">
    <div class="welcome">
      <div class="content rounded-3 p-3">
        <h1 class="fs-3 text-light">Student Database Table</h1>
        <p class="mb-0">It consists of all the student related details</p>
      </div>
    </div>

   

   
    <section class="charts mt-4">
      <div class="chart-container p-4">
            <table class="table table-striped table-dark table-hover">
                <thead>
                    <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">USN</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col">DBMS</th>
                    <th scope="col">MP</th>
                    <th scope="col">SS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $b1=1;
                        $sql = "SELECT id, usn, name, surname, dbms, mp, ss FROM students where batch=$b1";
                        $result=mysqli_query($mysql_db,$sql);
                        if($result){
                            while($row=mysqli_fetch_assoc($result)){
                                $id=$row['id'];
                                $usn=$row['usn'];
                                $name=$row['name'];
                                $surname=$row['surname'];
                                $dbms=$row['dbms'];
                                $mp=$row['mp'];
                                $ss=$row['ss'];
                                echo '<tr>
                                <th scope="row">'.$id.'</th>
                                <td>'.$usn.'</td>
                                <td>'.$name.'</td>
                                <td>'.$surname.'</td>
                                <td>'.$dbms.'</td>
                                <td>'.$mp.'</td>
                                <td>'.$ss.'</td>
                            
                            </tr>';
                            }
                        }
                    ?>
                </tbody>
            </table>
        
        </div>
    </section>
   
  
  </div>
</section>
  <!-- bootstrap js -->
  <script src="../admindash/adimindash.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>