<?php
session_start();
error_reporting(0);
 ?>
 <nav class="navbar" id="main-navbar-1">
         <div class="container-fluid" id="navbar-container">
            <div class="collapse navbar-collapse top_bar_nav" id="main-navbar-collapse-1">
               <div class="tab_nav_brand">
                  <div id="tab_view_button"></div>
                  <a class="navbar-brand" href="index.php" title="Career Guidance" _pageexpand_="40"><img src="images/logo.png" alt="logo" class="img-responsive" id="web_logo" _pageexpand_="68"></a>
               </div>
               <div id="tablet_menu_overlay"></div>
               <ul class="nav navbar-nav navbar-main">
                 
              
               </ul>
			    <?php
		    if(isset($_SESSION["reg_id"]) && $_SESSION["reg_id"]!="")
			{
		  ?>
               <ul class="nav navbar-nav navbar-right">
                  <li class="main-navbar-tab nav-login">
                     <a href="profile.php" class="font-white" _pageexpand_="108">
                        <svg class="svg-sm" style="fill:#fff">
                           <use xlink:href="#icon-login_icon"></use>
                        </svg>
                        Hi,  <?php echo $_SESSION["sname"]; ?> 
                     </a>
                  </li>
                 <li class="main-navbar-tab nav-login">
                     <a href="profile.php" class="font-white" _pageexpand_="108">
                        <svg class="svg-sm" style="fill:#fff">
                           <use xlink:href="#icon-login_icon"></use>
                        </svg>
                       My Profile
                     </a>
                  </li>
				  <li class="main-navbar-tab nav-login">
                     <a href="logout.php" class="font-white" _pageexpand_="108">
                        <svg class="svg-sm" style="fill:#fff">
                           <use xlink:href="#icon-login_icon"></use>
                        </svg>
                        Logout 
                     </a>
                  </li>
               </ul>
			   <?php
			   }
			   else
			   {
			   ?>
			     <ul class="nav navbar-nav navbar-right">
                  <li class="main-navbar-tab nav-login">
                     <a href="login.php" class="font-white" _pageexpand_="108">
                       <svg class="svg-sm" style="fill:#fff"><use xlink:href="#icon-login_icon"></use></svg>
                       Login  
                     </a>
                  </li>
                 
               </ul>
			   <?php
			   }
			   ?>
            </div>
         </div>
      </nav>