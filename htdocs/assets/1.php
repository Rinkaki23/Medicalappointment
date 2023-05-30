<!DOCTYPE html> 
<html> 
 
<head> 
 <meta charset="utf-8"> 
 <title>Example of Bootstrap 3 Dropdowns within a Navbar</title> 
 <meta name="viewport" content="width=device-width, initial-scale=1"> 
 <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css"> 
   <link rel="stylesheet" href="assets/css/containers.css">  
 <!-- Optional Bootstrap theme --> 
 <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-theme.css"> 
 
 
</head> 
 
<body class="backgroundimage">
 
 <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-static-top" role="navigation" style="margin-top: 0px "> <img class="img-responsive" src="icons/banner3.jpg" width="1400" height="249"/> 
  <!-- Brand and toggle get grouped for better mobile display --> 
  <div class="container"> 
   <div class="navbar-header"> 
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
                    <span class="sr-only">Toggle navigation</span> 
                    <span class="icon-bar"></span> 
                    <span class="icon-bar"></span> 
                    <span class="icon-bar"></span> 
                </button> 
    <a class="navbar-brand" href="#"><img src="assets/img/logo.jpg" width="40" height="40" class="img-circle" style="margin-top:-5px"/></a> 
   </div> 
   <!-- Collect the nav links, forms, and other content for toggling --> 
   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
    <ul class="nav navbar-nav"> 
     <li><a href="index.php" style="font-size:15px;"><strong><img src="icons/Apps-Home-icon.png" style="max-height:30px;"/> HOME </strong></a></li> 
          <li><a href="#" data-target="#services_offered" data-toggle="modal" style="font-size:15px;"><strong><img src="icons/services-offered.png" style="max-height:30px;"/> Services Offered</strong></a></li>
         <li><a href="#" data-target="#doctor_profile" data-toggle="modal" style="font-size:15px;"><img src="icons/nurse-icon.png" style="max-height:30px;"/><strong> Doctors' Profile</strong></a></li> 
     <li class="dropdown"> 
      <a href="#" data-toggle="dropdown" class="dropdown-toggle">Messages <b class="caret"></b></a> 
      <ul class="dropdown-menu"> 
       <li><a href="#">Inbox</a></li> 
       <li><a href="#">Drafts</a></li> 
       <li><a href="#">Sent Items</a></li> 
       <li class="divider"></li> 
       <li><a href="#">Trash</a></li> 
      </ul> 
     </li> 
    </ul> 
    <ul class="nav navbar-nav navbar-right"> 
     <li class="dropdown"> 
      <a href="#" data-toggle="dropdown" class="dropdown-toggle">Admin <b class="caret"></b></a> 
      <ul class="dropdown-menu"> 
       <li><a href="#">Action</a></li> 
       <li><a href="#">Another action</a></li> 
       <li class="divider"></li> 
       <li><a href="#">Settings</a></li> 
      </ul> 
     </li> 
    </ul> 
   </div> 
   <!-- /.navbar-collapse --> 
  </div> 
 </nav> 
 
 <script src="assets/bootstrap/js/jquery.js"></script> 
 <script src="assets/bootstrap/js/bootstrap.js"></script> 
 
 
</body> 
 
</html>