<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" type="css" href="style2.css" >
<style>

  
.navbar{
    background-color: aqua;
}
.navbar-nav{
    margin-left: 200px;
}
.nav-link{
    padding: 25px;
}

   .background{ background-image: url(educa1.jpg);
    background-size:cover;
    background-repeat: no-repeat;
}
    span
    {color:rgb(219, 226, 230);
    font-family: 'PT Serif', serif;
    text-decoration: underline;
    }
    ul
    {    text-align: right;
        list-style-type: none;
        line-height: 30px;
        margin-right: 50px;
    }
    li
    {
        display: inline-block;
    }
    a
    {
        float: right;
        display: block;
        color: white;
        text-decoration: none;
        margin-right: 20px;
    }
    a:link
    {color:lightskyblue;
        }
    a:visited
    {color: rgb(54, 221, 221);
        
    }
    a:hover
    {color:white;
    
    }
    a:active
    {color:teal;
    }
    p{
        text-decoration-line: underline;
        font-family: 'Lobster', cursive;
    }
    .form
    {
      color: indigo;
    background-color: white;
    position: relative;
    margin: 2% 30% 20% 30%;
    border-radius: 15px; 
}
.form1{
  border-radius: 6px;
  border-width: 5px;
}

.table
{
    border-collapse:collapse;
    margin:25px;
    font-size:0.9cm;
    min-width:400px;
}
.table thead tr{
    background-color:#089175;
    color:white;
    text-align: left;
    font-weight: bold;
}
.div2{
  margin-top: 30%;
  margin-left: 50%;
}
.table th,
.table td 
{ 
    padding:14px 16px;
}
.table tbody tr:nth-of-type(even)
{
 background-color:#aedad1;
}
.foot{
  background-color: black;
  position: relative;
  bottom: 0;
  }
</style>
    <title>Assignment 3</title>
</head>
<header style="text-align: center;">
<nav class="navbar navbar-expand-lg" style="background-color:teal ">
    <h2>HOME TUTION</h2>
    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" 
    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
    </button>
  
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse div1" id="basicExampleNav">
  
    <!-- Links -->
    <ul class="navbar-nav mr-auto " style="text-align: center;">
        <li class="nav-item active nav-1">
            <a class="nav-link" href="#About">HOME<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item nav-2">
            <a class="nav-link" href="table.html">FEE STRUCTURE</a>
        </li>
        <li class="nav-item nav-3">
          <a class="nav-link" href="about.html">ABOUT US</a>
        </li>
  
        <!-- Dropdown -->
        <li class="nav-item dropdown">
          
          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">HOME</a>
            <a class="dropdown-item" href="#">FEE STRUCTURE</a>
            <a class="dropdown-item" href="#">ABOUT US</a>
          </div>
        </li>
  
      </ul>
      <!-- Links -->

    </div>
</nav>
</header>


<body class="background">
<?php
include "form.php";
?>

<footer class="conatiner row foot ">
  <div class="col-md-4 address">
    <span href="#" class=" glyphicon glyphicon-home ">
      <p>Address : chaitanya enclave,ranchi,jharkhand<p> 
    </span>
  </div>

  <div class="col-md-4 address">
    <span href="#" class=" "><i class="fa fa-commenting" aria-hidden="true"> FEEDBACK</i>
      <a href="#" class="btn btn-info btn-lg">Fill Form</a>
      <br><br>
      <span style="padding: 70px;"><p class="glyphicon glyphicon-copyright-mark">Copyright 2013-2021 </p></span>
    </span>
  </div>
  <div class="col-md-4 address">
    <span href="#" class" ">
      <p><b>FOLLOW US</b></p>
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-yahoo"></a>
      <a href="#" class="fa fa-google-plus"></a>
      <a href="#" class="fa fa-linkedin"></a>
    </span>
  </div>
</footer>
</body>
</html>