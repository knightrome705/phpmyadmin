<!-- <?php
// session_start();
// if(!isset($_SESSION['key']))
// {
//   header('location:student_login.php');
// }
// else 
// {
// ?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #one{
            position:fixed;
            top: 0px;
            width: 100%;
            z-index: 9999;
          
        }
        .body1{
            margin-top: 180px;
            background-image: url(https://cdn-ghnlj.nitrocdn.com/JBtnaqNLUFzDSKzWbkatZJZXEwtGDlyg/assets/images/optimized/rev-a1a6314/thefuturalabs.com/wp-content/themes/Netstager_Creative_Suite-3.0/images/banner.jpg);
             
            background-position-x: center; 
            justify-content: center;
            text-align: center;
            height: 680px;
            background-size: cover; 
            padding-top: 80px;
            
        }
        .navbar-nav .nav-item .nav-link:hover{
            color: yellow;
        }
        li .b1{
            background-color: orange;
        }
        .A{
            margin-top: 30px;
        }
        li a{
            margin-left: 10px;
            margin-right: 10px;
            font-size: 20px;
        }
        ul ul{
            display:none;
            text-decoration: none;
            position: absolute;
            background-color: white;
        }
        li:hover > ul{
        display:block;
        padding-left: 10px;
    }
     li{
        
        list-style-type: none;
    }
    .last:hover{
      border: 2px solid purple;
    }

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <header>
       <div id="one">
       <div class="col-12">
        <nav class="head2 navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <!-- <a class="navbar-brand" href="#">
                <img src="./image/futuralogo.png" alt="futuralogo"> -->
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" style="margin-left:250px;">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Internship
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67z"/>
                          </svg>
                        <ul>
                            <li class="nav-item">
                                <a class="nav-link " href="#">Python</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " href="#">Flutter</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " href="#">PHP</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " href="#">MERN</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " href="#">React JS</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " href="#">UI/UX</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " href="#">FrontEndDevelopment</a>
                              </li>
                        </ul>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="#">Placements</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="#">Careers</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="#">Contact</a>
                  </li>
                  

                  
                  <li class="nav-item">
                    <!-- <a href="logout.php" class="btn btn-warning">Logout</a> -->
                    <a href="student_login.php" class="btn btn-warning">Logout</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

       </div>
       </div>
    </header> 
    <section>
        <div class="container" style="margin-top: 100px;">
            <center><h1>Let's Go-></h1></center>
            <div class="row" style="margin-top: 100px;">
                <div class="col-3">
                    <div class="last" style="background-color: pink; height: 250px; border-top-right-radius: 2rem;border-bottom-left-radius: 1.5rem;border-bottom-right-radius: 2rem;">
                      <center><img  class="A" src="./image/quality.png" alt=""></center>
                      <h5><center>Lorem, ipsum dolor.</center></h5>
                      <p><center>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, expedita!</center></p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="last" style="background-color:pink; height: 250px; border-top-right-radius: 2rem;border-bottom-left-radius: 1.5rem;border-bottom-right-radius: 2rem;">
                      <center><img  class="A" src="./image/hands.png" alt=""></center>
                      <h5><center>Lorem, ipsum dolor.</center></h5>
                      <p><center>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, expedita!</center></p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="last" style="background-color: pink; height: 250px; border-top-right-radius: 2rem;border-bottom-left-radius: 1.5rem;border-bottom-right-radius: 2rem;">
                      <center><img  class="A" src="./image/placement.png" alt=""></center>
                      <h5><center>Lorem, ipsum dolor.</center></h5>
                      <p><center>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, expedita!</center></p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="last" style="background-color: pink; height: 250px; border-top-right-radius: 2rem;border-bottom-left-radius: 1.5rem;border-bottom-right-radius: 2rem;">
                      <center><img  class="A" src="./image/trainers.png" alt=""></center>
                      <h5><center>Lorem, ipsum dolor.</center></h5>
                      <p><center>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, expedita!</center></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>   
</body>
</html>
<!-- <?php
// }
?> -->