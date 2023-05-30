<nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation" style="margin-top: 0px "> <img class="img-responsive" src="../icons/banner3.1.jpg" width="1400" height="249"/> 
      <div class="collapse navbar-collapse" id="navbarCollapse"> 
        <ul class="nav navbar-nav">
          <li><a href="index.php" style="font-size:15px;"><strong><img src="../icons/Apps-Home-icon.png" style="max-height:30px;"/> Home </strong></a></li> 
          <li><a href="add_appointment.php" style="font-size:15px;"><img src="../icons/requested-appointments.png" style="max-height:30px;"/> Request Appointments</a></li> 
        
              <ul class="nav navbar-nav navbar-right"> 
                     <li style="margin-right:100px" class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size:15px;">
			  <img src="../icons/nurse-icon.png" style="max-height:30px;"/><strong> Hi, <?php echo $userRow1['fullname']; ?></strong><span class="caret"></span></a>
              <ul class="dropdown-menu">
               <li><a href="#update_patient_account" data-target="#update_patient_account" data-toggle="modal" style="font-size:15px;"><img src="../icons/Manage.png" style="max-height:30px;"/> Settings</a></li>
                <li><a href="logout.php" style="font-size:15px;"><img src="../icons/sign-out.png" style="max-height:30px;"/> Sign Out</a></li>
          </ul>
          </li>
          </ul>
      </div> 
  </nav> 