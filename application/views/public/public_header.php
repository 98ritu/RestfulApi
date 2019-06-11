<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html
{
  height: 100%;
  margin: 0;
}

.bg {
  background-image: url("<?=base_url()?>background_image/back7.jpg");
  height: 100%; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
   opacity: 1;
}
.center { text-align: center; }
  marquee {
        width: 100%;
        padding: 10px 0;
        background-color:white;
      }
	  li.dropdown {
  display: inline-block;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: pink;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: white;}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<title>SimpliLearn</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap_min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo base_url();?>"><b>Simpli</b><i>learn</i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <li class="dropdown">
    <a  class="nav-link" href="javascript:void(0)" class="dropbtn">Courses</a>
    <div class="dropdown-content">
      <a href="#">HTML</a>
      <a href="#">CSS</a>
      <a href="#">JAVASCRIPT</a>
	  <a href="#">PYTHON</a>
	  <a href="#">DATABASE MANAGEMENT SYSTEM</a>
	  <a href="#">ANDROID</a>
    </div>
  </li>
      </li>
      <li class="nav-item">
        <li class="dropdown">
    <a  class="nav-link" href="javascript:void(0)" class="dropbtn">Certifications</a>
    <div class="dropdown-content">
      <a href="#">HTML CERTIFICATION</a>
      <a href="#">CSS CERTIFICATION</a>
      <a href="#">JAVASCRIPT CERTIFICATION </a>
	  <a href="#">PYTHON CERTIFICATION</a>
	  <a href="#">DATABASE MANAGEMENT SYSTEM CERTIFICATION</a>
	  <a href="#">ANDROID CERTIFICATION</a>
    </div>
  </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About us</a>
      </li>
    </ul>
  </div>
</nav>
<div class="bg">
