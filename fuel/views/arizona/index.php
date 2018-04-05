
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
  <meta name="description" content="Assignment 1">
  <meta name="author" content="Thomas Sciano Jon Hunt">
   <link rel="icon" href="http://webcom.colostate.edu/alumline/files/2014/02/rams-icon-dark.png">

  <title>Assignment 1 - Arizona</title>

  <!-- Bootstrap core CSS -->

  <!-- Custom styles for this template -->


</head>

<body id="page-top" >


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #CFB53B;" id="mainNav">
      <div class="container" >
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Arizona</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo Uri::create('arizona/a1'); ?>">Pima Air & Space Museum</a>
            </li>
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo Uri::create('arizona/a2'); ?>">Painted Desert</a>
            </li>
        <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo Uri::create('arizona/a3'); ?>">Grand Canyon</a>
            </li>
        <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo Uri::create('arizona/about'); ?>">About</a>
            </li>
        <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo Uri::create('arizona/contact'); ?>">Contact</a>
            </li>
          </ul>

        </div>
         <ul class="nav pull-right">
            <li class="dropdown" id="menuLogin">
              <a class="dropdown-toggle " href="#" data-toggle="dropdown" id="navLogin">Login</a>
              <div class="dropdown-menu" style="padding:17px;">
              <?php
  if (!(Session::get('username'))) {?>
   <form action="check" method="POST">
     <input type="text" name="username" placeholder="Please enter username"/>
     <input type="password" name="password" placeholder="Please enter password"/>
     <input type="submit" value="submit">
   </form>

  <?php
  }?>
  <?php
  if ((Session::get('username'))) {?>
    <a href="logout">logout</a>
   <?php
   }?>


              </div>
            </li>
          </ul>
      </div>

    </nav>


    <div class="container">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
    <?php echo Asset::img('Pima.jpg');?>
<!--       <img class="d-block img-fluid" src="Pima.jpg" alt="Pima Air & Space Museum"> -->
      <div class="carousel-caption">
        <h1>Pima Air & Space Museum!</h3>
        <p>Wow Planes! Very Space!</p>
      </div>
    </div>
    <div class="carousel-item">
    <?php echo Asset::img('Painted.jpg');?>
<!--       <img class="d-block img-fluid" src="Painted.jpg" alt="Painted Desert" > -->

       <div class="carousel-caption" style="text-color:black" >
        <h1>Painted Desert!</h3>
        <p>Wow Pretty Rocks! Much Nature!</p>
        <p> Source : http://www.douglasdolde.com</p>
      </div>
    </div>
    <div class="carousel-item">
    <?php echo Asset::img('Canyon.jpg');?>
<!--       <img class="d-block img-fluid" src="Canyon.jpg" alt="Third slide"> -->
	   <div class="carousel-caption" style="text-color:black" >
        <h1>Grand Canyon!</h3>
        <p>Wow Very Large! Much Canyon!</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
    </div>

     <div class="container">
<center><h3> Welcome to the Arizona Assignment Webpage!<h3></center>
    </div>

<section id="Welcome">
  <!-- <div class="container"> -->
  <div class="container">
    <p> Welcome to the Arizona Assignment Web Page for CT310! We will be showing you Three Wonderful Attractions in Arizona!</p>
  </div>

</section>


  </body>

  </html>
