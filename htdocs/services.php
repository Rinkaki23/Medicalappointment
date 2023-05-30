
<?php include 'config.php'; ?>
<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
  <meta charset="UTF-8"> 
  <title>Appointment System</title> 

  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-theme.css">  
  <link rel="stylesheet" href="assets/css/containers.css">  
  
  <script src="assets/bootstrap/js/jquery.js"></script> 
  <script src="assets/bootstrap/js/bootstrap.js"></script> 
<style>
 .imgframe img{
    	margin:15px;
    	height:200px;
    	width:200px;
    	border-radius:3px;
    	border:3px solid #ddd;
    }
</style>
</head> 
 
<body style="background-image: url(icons/Bkg2.jpg);">
  <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation" style="margin-top: 0px "> <img class="img-responsive" style="width:100%" src="icons/banner3.1.jpg"  height="auto"/> 
      <div class="collapse navbar-collapse" id="navbarCollapse"> 
        <ul class="nav navbar-nav"> 
          <li><a href="index.php" style="font-size:15px;"><strong><img src="icons/Apps-Home-icon.png" style="max-height:30px;"/> HOME </strong></a></li> 
          
          <li><a href="services.php" style="font-size:15px;"><strong><img src="icons/services-offered.png" style="max-height:30px;"/> Services </strong></a></li> 
          <li><a href="doctors.php" style="font-size:15px;"><strong><img src="icons/nurse-icon.png" style="max-height:30px;"/> Doctors </strong></a></li>  
        </ul> 
        <ul class="nav navbar-nav navbar-right" style="margin-right:auto"> 
                <li role="presentation"><a href="#login_modal" data-target="#login_modal" data-toggle="modal" style="font-size:15px;"><img src="icons/sign-in.png" style="max-height:30px;"/><strong> Sign In </strong></a></li>
                <li style="margin-right:-2px" role="presentation"><a href="#addpatient_modal" data-target="#addpatient_modal" data-toggle="modal" style="font-size:15px;"><img src="icons/sign-in.png" style="max-height:30px;"/><strong> Sign up </strong></a></li>
                
          </ul>
      </div> 
  </nav>
  
        <div style="margin-top:15%;" class="col-md-12 carcolumn">
            <div class="container" style="background-color:rgba(255,255,255,0.65);width:auto;margin-top:0px;margin-right:0px;margin-left:0px;height:450px; text-align: justify;">
                <div class="row">
                	<div class="col-md-6">
                		<h1>Welcome!</h1>
                    <p>Welcome to our medical appointment website! We understand that your health is a top priority, and we are here to help you conveniently schedule and manage your medical appointments with ease. Our user-friendly platform is designed to provide a seamless and efficient experience for patients seeking medical care.</p>
                		<h1>Founded on Faith. Focused on Family.</h1>
                    <p>We are among the most established multi-specialty hospital that provides a complete range of medical services. We are known for our commitment to offer excellent customer service. We are always here to assist you in every way. From infants to elderly, degenerative diseases, heart or hormonal diseases, we are the right people to help you.
</p>
<p>We are dedicated to providing you with easy access to the best in healthcare. Our doctors and medical team prioritise patient care and are well supported by warm and caring clinic staff. Our clinicians genuinely care about you and your health concerns.
</p>
                	</div>
                	<div class="col-md-6">
                		<div class="container"  style="margin-top:20px;width:auto;">
    <h1 align="center" style="color:black;">Services Offered</h1>
    <div role="tablist" aria-multiselectable="true" class="panel-group" id="accordion-1">
    <div class="panel panel-default">
        <div role="tab" class="panel-heading">
            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-1" aria-expanded="false" href="#accordion-1 .item-1" style="font-size:15px;color:black;"><b>Consultation</b></a></h4></div>
        <div role="tabpanel" class="panel-collapse collapse item-1">
<!---->
<div class="container" style="width:auto;">
            <div role="tablist" aria-multiselectable="true" class="panel-group" id="accordion-2">
    <div class="panel panel-default">
        <div role="tab" class="panel-heading">
            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-2" aria-expanded="false" href="#accordion-2 .item-10" style="font-size:13px;color:blue;">Hypertension</a></h4></div>
        <div role="tabpanel" class="panel-collapse collapse item-10">
            <div class="panel-body"><span>Excessively high arterial blood pressure.</span></div>
        </div>
    </div>
    <div class="panel panel-default">
        <div role="tab" class="panel-heading">
            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-2" aria-expanded="false" href="#accordion-2 .item-11" style="font-size:13px;color:blue;">Diabetes</a></h4></div>
        <div role="tabpanel" class="panel-collapse collapse item-11">
            <div class="panel-body"><span>Any of several diseases characterized by thirst and excessive urinary secretion.</span></div>
        </div>
    </div>
    <div class="panel panel-default">
        <div role="tab" class="panel-heading">
            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-2" aria-expanded="false" href="#accordion-2 .item-12" style="font-size:13px;color:blue;">Heart Diseases</a></h4></div>
        <div role="tabpanel" class="panel-collapse collapse item-12">
            <div class="panel-body"><span>Item body.</span></div>
        </div>
    </div>
    <div class="panel panel-default">
        <div role="tab" class="panel-heading">
            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-2" aria-expanded="false" href="#accordion-2 .item-13" style="font-size:13px;color:blue;">Kidney Problems</a></h4></div>
        <div role="tabpanel" class="panel-collapse collapse item-13">
            <div class="panel-body"><span>Item body.</span></div>
        </div>
    </div>
    <div class="panel panel-default">
        <div role="tab" class="panel-heading">
            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-2" aria-expanded="false" href="#accordion-2 .item-14" style="font-size:13px;color:blue;">Liver Diseases</a></h4></div>
        <div role="tabpanel" class="panel-collapse collapse item-14">
        <!--Liver Diseases-->
            <div class="container" style="width:auto;">
                <div role="tablist" aria-multiselectable="true" class="panel-group" id="accordion-3">
                    <div class="panel panel-default">
                        <div role="tab" class="panel-heading">
                            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-3" aria-expanded="false" href="#accordion-3 .item-20" style="font-size:13px;color:green;">Hepatitis</a></h4></div>
                        <div role="tabpanel" class="panel-collapse collapse item-20">
                            <div class="panel-body"><span>Inflammation of the liver.</span></div>
                        </div>
                        <div role="tab" class="panel-heading">
                            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-3" aria-expanded="false" href="#accordion-3 .item-21" style="font-size:13px;color:green;">Fatty Liver</a></h4></div>
                        <div role="tabpanel" class="panel-collapse collapse item-21">
                            <div class="panel-body"><span>Fatty liver is a term used to describe the accumulation of fat in the liver of people who drink little or no alcohol.</span></div>
                        </div>
                        <div role="tab" class="panel-heading">
                            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-3" aria-expanded="false" href="#accordion-3 .item-23" style="font-size:13px;color:green;">Liver Cirrhosis</a></h4></div>
                        <div role="tabpanel" class="panel-collapse collapse item-23">
                            <div class="panel-body"><span>Item body.</span></div>
                        </div>
                    </div>
                </div>
            </div>
        <!---->
        </div>
    </div>
    <div class="panel panel-default">
        <div role="tab" class="panel-heading">
            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-2" aria-expanded="false" href="#accordion-2 .item-15" style="font-size:13px;color:blue;">Pneumonia</a></h4></div>
        <div role="tabpanel" class="panel-collapse collapse item-15">
            <div class="panel-body"><span>Acute inflammation of the lungs characterized by accumulation of fluid in the alveoli and difficult breathing.</span></div>
        </div>
    </div>
    <div class="panel panel-default">
        <div role="tab" class="panel-heading">
            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-2" aria-expanded="false" href="#accordion-2 .item-16" style="font-size:13px;color:blue;">Tuberculosis</a></h4></div>
        <div role="tabpanel" class="panel-collapse collapse item-16">
            <div class="panel-body"><span>A communicable disease caused by the tubercle bacillus and characterized by tubercles in the lungs or other organs or tissues of the body.</span></div>
        </div>
    </div>
    <div class="panel panel-default">
        <div role="tab" class="panel-heading">
            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-2" aria-expanded="false" href="#accordion-2 .item-17" style="font-size:13px;color:blue;">Heatstroke</a></h4></div>
        <div role="tabpanel" class="panel-collapse collapse item-17">
            <div class="panel-body"><span>Heatstoke is a condition caused by your body overheating, usually as a result of prolonged exposure to or physical exertion in high temperatures. This most
            serious form of heat injury, heatstroke can occur if your body temperature rises to 104 F (40 C) or higher.</span></div>
        </div>
    </div>
</div>
</div>
<!---->
        </div>
    </div>
    <div class="panel panel-default">
        <div role="tab" class="panel-heading">
            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-1" aria-expanded="false" href="#accordion-1 .item-2" style="font-size:15px;color:black;"><b>Prenatal Check-up</b></a></h4></div>
        <div role="tabpanel" class="panel-collapse collapse item-2">
            <div class="panel-body"><span>Item body.</span></div>
        </div>
    </div>
    <div class="panel panel-default">
        <div role="tab" class="panel-heading">
            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-1" aria-expanded="false" href="#accordion-1 .item-3" style="font-size:15px;color:black;"><b>Pap Smear</b></a></h4></div>
        <div role="tabpanel" class="panel-collapse collapse item-3">
            <div class="panel-body"><span>Item body.</span></div>
        </div>
    </div>
    <div class="panel panel-default">
        <div role="tab" class="panel-heading">
            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-1" aria-expanded="false" href="#accordion-1 .item-4" style="font-size:15px;color:black;"><b>Excision</b></a></h4></div>
        <div role="tabpanel" class="panel-collapse collapse item-4">
            <div class="panel-body"><span>Item body.</span></div>
        </div>
    </div>
    <div class="panel panel-default">
        <div role="tab" class="panel-heading">
            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-1" aria-expanded="false" href="#accordion-1 .item-5" style="font-size:15px;color:black;"><b>Circumcision</b></a></h4></div>
        <div role="tabpanel" class="panel-collapse collapse item-5">
            <div class="panel-body"><span>Item body.</span></div>
        </div>
    </div>
    <div class="panel panel-default">
        <div role="tab" class="panel-heading">
            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion-1" aria-expanded="false" href="#accordion-1 .item-6" style="font-size:15px;color:black;"><b>Vaccination</b></a></h4></div>
        <div role="tabpanel" class="panel-collapse collapse item-6">
            <div class="panel-body"><span>Item body.</span></div>
        </div>
    </div>

    </div>
</div>
                	</div>
                </div>
            </div>
        </div>


        <?php include ('admin/modals/admin_login_modal.php'); ?>
<?php include ('admin/modals/add_patient_modal.php'); ?>
    
 <script src="assets/bootstrap/js/jquery.min.js"></script>
 <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body> 
 
</html>