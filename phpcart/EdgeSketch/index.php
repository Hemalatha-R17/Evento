﻿<?php
session_start();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Evento</title>
	 <link rel="shortcut icon" href="assets/img/evento1.png" type="image/x-icon" />


    <link href="assets/css/bootstrap.css" rel="stylesheet" />
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
	<link href="assets/css/flexslider.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />    
 
</head>
<body >
   
 <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img class="logo-custom" src="assets/img/evento1.png" alt=""  /></a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="iPortfolio/iPortfolio/index.html">SERVICE PROVIDERS</a></li>
                    <li ><a href="../../index.php">BACK</a></li>
                     
                     
                </ul>
            </div>
           
        </div>
    </div>
     
       <div class="home-sec" id="home" >
           <div class="overlay">
 <div class="container">
           <div class="row text-center " >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
                <div class="flexslider set-flexi" id="main-section" >
                    <ul class="slides move-me">
                        <!-- Slider 01 -->
                        <li>
                              <h3>EVENTO SERVICE PROVIDERS</h3>
                           <h1>WHAT ARE YOU WAITING FOR? CHOOSE NOW?</h1>
                            <a  href="#features-sec" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#ln">
                                USER SIGN IN
                            </a>
                             <a  href="#features-sec" class="btn btn-success btn-lg" data-toggle="modal" data-target="#su">
                                USER SIGN UP
                            </a>
							
							<a  href="#features-sec" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#an">
                                ADMIN LOGIN
                            </a>
                        </li>
                        <!-- End Slider 01 -->
                        
                        <!-- Slider 02 -->
                        <li>
                            <h3>YOUR CHOICE - OUR SERVICE</h3>
                           <h1>WE HAVE WHAT YOU NEED</h1>
                             <a  href="#features-sec" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#ln">
                               USER SIGN IN
                            </a>
                             <a  href="#features-sec" class="btn btn-success btn-lg" data-toggle="modal" data-target="#su">
                                USER SIGN UP
                            </a>
							
							<a  href="#features-sec" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#an">
                                ADMIN LOGIN
                            </a>
                        </li>
                        <!-- End Slider 02 -->
                        
                        <!-- Slider 03 -->
                        <li>
                            <h3>CHOOSE ACCORDING TO YOUR WISH</h3>
                           <h1>CHOICE IS YOURS</h1>
                             <a  href="#features-sec" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#ln">
                                USER SIGN IN
                            </a>
                             <a  href="#features-sec" class="btn btn-success btn-lg" data-toggle="modal" data-target="#su">
                                USER SIGN UP
                            </a>
							<a  href="#features-sec" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#an">
                                ADMIN LOGIN
                            </a>
                        </li>
                        <!-- End Slider 03 -->
                    </ul>
                </div>
                   
     
              
              
            </div>
                
               </div>
                </div>
           </div>
           
       </div>
       <!--HOME SECTION END-->   
    <div  class="tag-line" >
         <div class="container">
           <div class="row  text-center" >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
        <h2 data-scroll-reveal="enter from the bottom after 0.1s" ></h2>
                   </div>
               </div>
             </div>
        
    </div>
    <!--HOME SECTION TAG LINE END-->   
        
			 <br />
       <br />
       <br />
             </div>
      <!-- COURSES SECTION END-->
     <div class="modal fade" id="su" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-sm">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Registration Form</h4>
              </div>
              <div class="modal-body">
            
				
				 <form role="form" method="post" action="register.php">
                   <fieldset>
					
							<div class="form-group">
                                <input class="form-control" placeholder="Firstname" name="ruser_firstname" type="text" required>
							</div>
							
							<div class="form-group">
                                <input class="form-control" placeholder="Lastname" name="ruser_lastname" type="text" required>
							</div>
							
							<div class="form-group">
                                <input class="form-control" placeholder="Address" name="ruser_address" type="text" required>
							</div>
							
                            <div class="form-group">
                                <input class="form-control" placeholder="Email" name="ruser_email" type="email" required>
							</div>
							
							<div class="form-group">
                                <input class="form-control" placeholder="Password" name="ruser_password" type="password" required>
							</div>
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-md btn-warning btn-block" name="register">Sign Up</button>
				
				 <button type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal">Cancel</button>
				   </form>
              </div>
            </div>
          </div>
        </div>
<!-- Script -->


     <div class="modal fade" id="ln" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-sm">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 style="color:white" class="modal-title" id="myModalLabel">Customer Login</h4>
              </div>
              <div class="modal-body">
            
				
				 <form role="form" method="post" action="userlogin.php">
                   <fieldset>
					
						
                            <div class="form-group">
                                <input class="form-control" placeholder="Email" name="user_email" type="email" required>
							</div>
							
							<div class="form-group">
                                <input class="form-control" placeholder="Password" name="user_password" type="password" required>
							</div>
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-md btn-warning btn-block" name="user_login">Sign In</button>
				
				 <button type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal">Cancel</button>
				   </form>
				   
              </div>
            </div>
          </div>
        </div>
		
		<div class="modal fade" id="an" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-sm">
           <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 style="color:white" class="modal-title" id="myModalLabel">Administrator Credentials</h4>
              </div>
              <div class="modal-body">
            
				
				 <form role="form" method="post" action="adminlogin.php">
                   <fieldset>
					
						
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="admin_username" type="text" required>
							</div>
							
							<div class="form-group">
                                <input class="form-control" placeholder="Password" name="admin_password" type="password" required>
							</div>
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-md btn-warning btn-block" name="admin_login">Login</button>
				
				 <button type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal">Cancel</button>
				   </form>
              </div>
            </div>
          </div>
        </div>
		 <br />
			 <br />
			 <br />
<!-- Script -->
     <!-- CONTACT SECTION END-->
    <div id="footer">
          EVENTO - Events Visualizing Entertaining Newly Tactful Organization<a style="color: #fff" target="_blank"></a>| All Rights Reserved |  Design by : EVENTO
    </div>
     <!-- FOOTER SECTION END-->
   
    <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  Flexslider Scripts --> 
         <script src="assets/js/jquery.flexslider.js"></script>
     <!--  Scrolling Reveal Script -->
    <script src="assets/js/scrollReveal.js"></script>
    <!--  Scroll Scripts --> 
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  Custom Scripts --> 
         <script src="assets/js/custom.js"></script>
</body>
</html>