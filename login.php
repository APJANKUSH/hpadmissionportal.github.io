<html lang="en">
   <head>
 <link type="text/css" href="css/d_index.min.722.css" rel="stylesheet">
     <link type="text/css" href="css/d_esearch_index.min.722.css" rel="stylesheet">
<script type="text/javascript" src="libraries/jquery.min.js"></script>
   <script type="text/javascript" defer="" src="libraries/d_esearch_index.min.722.js"></script>
   </head>
   <body>
      

     
      <div id="overlay_global_search"></div>
      <div class="bg_overlay" style="display: none;"></div>
     <?php include("top_nav.php"); ?>
      <?php include("nav2.php"); ?>
	  <section class="search_page_wrapper container-fluid">

   <div class="row">
    <div class="search_results" style="height:30px; ">
        
     
      <div class="search_result_lists">
	  
         
         <div class="clearfix"></div>
         <div class="row">
		
            <div class="login-right login-all font-set" style="height: 268px;">
     <div class="main-form login-form data-wrap" style="display: inline-block;">
   <div class="login-div">
      <p id="show_error_login_top1"></p>
      <h4>
         <svg class="icon icon-white">
            <use xlink:href="#icon-usermale"></use>
         </svg>
         Login
      </h4>
      <div id="success-regis"></div>
      <br>
      <div class="row">
        
      </div>
      <div class="text-center" style="height:15px;border-bottom:1px solid #c6c8cc;margin-bottom:20px"><span style="font-size:20px;background-color:#f6f6f6;padding:0 10px">or</span></div>
      <form id="login_form" action="verify_user.php" method="post">
         <input placeholder="Email" class="lemail" for="email ID" type="text" id="username" name="username">
         <p id="show_error_login_email"></p>
         <input placeholder="Password" class="nonull lpassword" for="password" type="password" id="password" name="password">
         <p id="show_error_login_pwd"></p>
         <button class="btn new_login_btn" type="submit">Login</button>
		 <a class="forgot to-forgot link-change" href="forgot_password1.php" _pageexpand_="104">Forgot my Password ?</a>
		    <br><br><p class="next-link">Not a Member Yet! <a class="link-change to-registration" href="register.php" title="Sign Up" _pageexpand_="40">Join Us</a> it's Free.</p>
      </form>
   </div>
      </div>
        
           
         </div>
      </div>
	  <!--
      <blockquote>
         <div class="dataTables_paginate paging_simple_numbers" id="paginate" style="text-align:center">
            <ul class="pagination" style="margin:0 auto;text-align:center">
               <li class="paginate_button" id="next"><a href="https://collegedunia.com/e-search?query=dharwad&amp;c=college&amp;start=15" aria-controls="example2" data-dt-idx="0" tabindex="0" _pageexpand_="192">Next</a></li>
            </ul>
         </div>
      </blockquote> //-->
      <div id="insert_listing_data"></div>
      <div class="clearfix"></div>
   </div>
</section>
	


     
   </body>
</html>