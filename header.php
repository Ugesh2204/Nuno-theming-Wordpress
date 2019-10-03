<!DOCTYPE <!DOCTYPE html>
<html>
<head>
   <?php wp_head();?>
</head>
<body data-spy="scroll" data-target="#navbarResponsive">
<!--- Start Home Section -->
<div id="home">
   <!--Start navigation -->
   <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#"><img src="<?php echo get_bloginfo('template_url');?>/img/nuno.png"/></a>
      <!--button for mobile menu-->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
         <!--adding the hamberger menu-->
         <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
         <ul class="navbar-nav ml-auto">
            <li class="nav-item">
               <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#course">Course</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#features">Features</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#resources">Resources</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#client">Client</a>
            </li>
            <li class="nav-item">
                  <a class="nav-link" href="#contact">Contact</a>
            </li>
         </ul>
      </div>

   </nav>
	<!--end navigation -->
   <!--start landing page section -->
   <div class="landing">
      <div class="home-wrap">
         <div class="home-inner">

         </div>
      </div>
   </div>

   <div class="caption text-center">
      <h1> Welcom to Nuno</h1>
      <h3>Bootstrap 4 </h3>
      <a class="btn btn-outline-light btn-lg" href="#course">Get Started </a>
   </div>

     
     
   <!--end landing page section -->

</div>
<!--- End Home Section -->
    
