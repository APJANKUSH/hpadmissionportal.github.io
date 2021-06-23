<!DOCTYPE HTML>
<html lang="en">
   <head>
     
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <title>Career Guidance</title>
    
      <link type='text/css' href='css/d_listing.min.722.css' rel='stylesheet' />
      <script type="text/javascript" src="libraries/jquery.min.js"></script>
	  <script type="text/javascript" src="libraries/postscribe.min.js" defer="defer"></script>
	  <script type='text/javascript' defer src='libraries/d_listing.min.722.js'></script>
   </head>
   <body itemscope itemtype="http://schema.org/WebPage">
     
      <div class="bg_overlay"></div>
      <?php include("top_nav.php"); ?>
      <?php include("nav2.php"); ?>
      <div id="body_slideoverlay"></div>
      <script type="text/javascript">var PAGE_NAME="listing_page"</script><input type="hidden" id="data_for_ad_log" value="{&quot;type&quot;:&quot;Listing&quot;,&quot;type_id&quot;:&quot;&quot;,&quot;type_name&quot;:&quot;&quot;,&quot;ip_address&quot;:&quot;61.3.19.182&quot;,&quot;is_mobile&quot;:false}">
      <div id="goto_top">
         <svg>
            <use xlink:href="#icon-up-arrow"/>
         </svg>
      </div>
	  <?php
	   include('connection.php');
				 $sql="select * from college_details";
				 if(isset($_REQUEST["city"]) && $_REQUEST["city"]!="")
				    $sql.=" where ucase(city) like '%".$_REQUEST["city"]."%'";
				else if(isset($_REQUEST["stream"]) && $_REQUEST["stream"]!="")
				    $sql.=" where college_id in(select college_id from college_courses cc,course_details cd where cc.course_id=cd.course_id and ucase(cd.course_stream) like '%".$_REQUEST["stream"]."%')";
                 else if(isset($_REQUEST["substream"]) && $_REQUEST["substream"]!="")
				    $sql.=" where college_id in(select college_id from college_courses cc,course_details cd where cc.course_id=cd.course_id and ucase(cd.course_substream) like '%".$_REQUEST["substream"]."%')";					
                  else if(isset($_REQUEST["college_type"]) && $_REQUEST["college_type"]!="")
				    $sql.=" where ucase(college_type) like '%".$_REQUEST["college_type"]."%'";
					
	$res=mysql_query($sql);
	  ?>
      <div class="listing-wrapper">
         <div class="container-fluid">
            <div class="col-xs-12 listing_top">
               <div class="breadcrumbs" itemprop="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                  
               </div>
               <h1 class="top-heading"> List of Colleges </h1>
            </div>
           
            <div class="col-xs-3 filter_side" id="filter-wrapper">
              
               <section class="filter-listing-container">
                  <div class="filters-wrapper"><span class="total_exams">FOUND 4403 Colleges</span></div>
                  <div class="slug_filters filters-wrapper">
                     <div class="dropdown"></div>
                  </div>
                  <div class="filters-wrapper">
                    
                  <div class="filters-wrapper">
                     <h4 data-toggle="collapse" data-target="#city" class="">
                        city
                        <div class="filter_toggle"><span class="bar"></span><span class="bar"></span></div>
                     </h4>
                     <div class="collapse in" id="city">
                        
                        <ul class="listing_filter">
                           <li><label for="Dharwad"><a href="search_colleges.php?city=Dharwad" title="Dharwad"> Dharwad</a></label></li>
                           <li><label for="Hubli"><a href="search_colleges.php?city=Hubli" title="Hubli">Hubli</a></label></li>
                          <li><label for="Belgaum"><a href="search_colleges.php?city=Belgaum" title="Belgaum">Belgaum</a></label></li> 
						  <li><label for="Gadag"><a href="search_colleges.php?city=Gadag" title="Gadag">Gadag</a></label></li>
                        </ul>
                        <div class="border"></div>
                     </div>
                  </div>
                  <div class="filters-wrapper">
                     <h4 data-toggle="collapse" data-target="#stream" class="">
                        Stream
                        <div class="filter_toggle"><span class="bar"></span><span class="bar"></span></div>
                     </h4>
                     <div id="stream">
                        
                        <ul class="listing_filter">
                           <li><label for="General"><a href="search_colleges.php?stream=ARTS"> ARTS</a></label></li>
                          <li><label for="General"><a href="search_colleges.php?stream=COMMERCE"> COMMERCE</a></label></li>
						  <li><label for="General"><a href="search_colleges.php?stream=SCIENCE"> SCIENCE</a></label></li>
                        <div class="border"></div>
                     </div>
                  </div>
              <div class="filters-wrapper">
                     <h4 data-toggle="collapse" data-target="#substream" class="">
                        Sub Stream
                        <div class="filter_toggle"><span class="bar"></span><span class="bar"></span></div>
                     </h4>
                     <div id="substream">
                        
                        <ul class="listing_filter">
                           <li><label for="General"><a href="search_colleges.php?substream=Bachelores">Bachelores</a></label></li>
                          <li><label for="General"><a href="search_colleges.php?substream=Masters"> Masters</a></label></li>
						  <li><label for="General"><a href="search_colleges.php?substream=Diploma"> Diploma</a></label></li>
                        <div class="border"></div>
                     </div>
                  </div>
				  <div class="filters-wrapper">
                     <h4 data-toggle="collapse" data-target="#college_type" class="">
                        College Type
                        <div class="filter_toggle"><span class="bar"></span><span class="bar"></span></div>
                     </h4>
                     <div id="college_type">
                        
                        <ul class="listing_filter">
                           <li><label for="General"><a href="search_colleges.php?college_type=Private">Private</a></label></li>
                          <li><label for="General"><a href="search_colleges.php?college_type=Public"> Public</a></label></li>
						  <li><label for="General"><a href="search_colleges.php?college_type=Government"> Government</a></label></li>
                        <div class="border"></div>
                     </div>
                  </div>
               </section>
               <div id="toefl_left"></div>
               <div class="notification_container js-cd_notification_container"></div>
               <div id="left_side_barslot_1" class="sideBarSlot" style="overflow:hidden"></div>
               <div id="left_side_barslot_2" class="sideBarSlot" style="overflow:hidden"></div>
               <div id="left_side_barslot_3" class="sideBarSlot" style="overflow:hidden"></div>
            </div>
            <div class="col-xs-9 snippet_side">
             
               <div class="listing-block-cont">
                 <?php
				
while($row=mysql_fetch_array($res))
{
$sql1="select * from college_photos  where college_id='".$row["college_id"]."'";
	$res1=mysql_query($sql1);
	$num_photos=mysql_num_rows($res1);
				 ?>
                  <div class="col-sm-4 automate_client_img_snippet  ">
                     <div class="listing-block">
                        <div class="top-block">
                           <img class="clgdn_lazyload snippet-banner" title="<?php $row["college_name"].",".$row["city"]; ?> logo" data-src="admin/file/<?php echo $row["image"]; ?>?tr=w-305,h-145,c-force" src="admin/file/<?php echo $row["image"]; ?>?tr=w-305,h-145,c-force">
                           <div class="img-overlay"></div>
                           <a class="data-icon" target="_blank" href="college_photos.php?college_id=<?php echo $row["college_id"]; ?>">
                              <svg class="svg-sm">
                                 <use xlink:href="#icon-images_flat"/>
                              </svg>
                              <?php echo $num_photos; ?>
                           </a>
                          
                           
                           <div class="clg-name-address"><a target="_blank" href="about_college.php?college_id=<?php echo $row["college_id"]; ?>" class="college_name"><?php $row["college_name"].",".$row["city"]; ?></a></div>
                        </div>
                        <div class="bottom-block">
                           <div class="clg-head">
                              <div class="clg-logo"><img class="clgdn_lazyload" title="<?php $row["college_name"].",".$row["city"]; ?>  logo" data-src="college_photo/college_logo/<?php echo $row["college_logo"]; ?>?tr=w-40,h-40,c-force" src="college_photo/college_logo/<?php echo $row["college_logo"]; ?>?tr=w-40,h-40,c-force"></div>
                              <span class="location-badge">
                                 <span>
                                    <svg>
                                       <use xlink:href="#icon-pin"/>
                                    </svg>
                                   <?php $row["address"].",".$row["city"]; ?>    
                                 </span>
                                 &nbsp; 
                                 
                              </span>
                           </div>
                           <ul class="clg-fee-review tile_details_div">
						   <?php
						   $sql1="select * from college_courses cc,course_details cd where cc.course_id=cd.course_id and cc.college_id='".$row["college_id"]."'";
	$res1=mysql_query($sql1);
	if($row1=mysql_fetch_array($res1))
	{
						   ?>
                              <li class="lr"><a target="_blank" href="courses_fees.php?college_id=<?php echo $row["college_id"]; ?>" class="js-url-cookie" ><span class="lr-key">₹ <?php echo $row1["first_year_fees"]; ?>  </span><span class="lr-value" title="<?php echo $row1["course_name"]; ?> - FIRST YEAR FEE"> <?php echo $row1["course_name"]; ?> -<span class="first-year">First year fee</span></span><span class="lr-stream"></span></a></li>
                            <?php
							}
							?>
                             
                           </ul>
                        </div>
                    
                        <div class="clg-links"><a href="courses_fees.php?college_id=<?php echo $row["college_id"]; ?>" class="college_nav_tab first_tab" title="<?php $row["college_name"].",".$row["city"]; ?> - About Collge "> Info </a><a href="courses_fees.php?college_id=<?php echo $row["college_id"]; ?>" class="college_nav_tab first_tab" title="<?php $row["college_name"].",".$row["city"]; ?> - Course &amp; Fees Details "> Courses &amp; Fees </a><a href="college_photos.php?college_id=<?php echo $row["college_id"]; ?>" class="college_nav_tab first_tab" title="<?php $row["college_name"].",".$row["city"]; ?> - College Photos "> Gallery </a></div>
                       <?php
		    if(isset($_SESSION["reg_id"]) && $_SESSION["reg_id"]!="")
			{
		  ?>
					    <a class="clg-apply open-popup-inline apply-now-button" href="apply_course.php?cc_id=<?php echo $row1["college_course_id"]; ?>" title="Apply For <?php echo $row["college_name"]; ?>"  class="btn-snipp open-popup-inline apply-now-button">
                           <svg class="svg-sm">
                              <use xlink:href="#icon-apply"/>
                           </svg>
                           Apply Now
                        </a>
                        <a class="clg-brochure open-popup-inline download_brouchure" href="admin/file/<?php echo $row["prospectus"]; ?>">
                           <svg class="svg-sm">
                              <use xlink:href="#icon-download-icon"/>
                           </svg>
                           Brochure
                        </a>
					<?php
					}
					else
					{
					?>
					<a class="clg-apply open-popup-inline apply-now-button" href="login.php" title="Apply For <?php echo $row["college_name"]; ?>"  class="btn-snipp open-popup-inline apply-now-button">
                           <svg class="svg-sm">
                              <use xlink:href="#icon-apply"/>
                           </svg>
                           Apply Now
                        </a>
                        <a class="clg-brochure open-popup-inline download_brouchure" href="login.php">
                           <svg class="svg-sm">
                              <use xlink:href="#icon-download-icon"/>
                           </svg>
                           Brochure
                        </a>
					<?php
					}
					?>	
                        <div class="clearfix"></div>
                     </div>
                  </div>
				  <?php
				  }
				  ?>
                 
                  
                  
                  
                  
            </div>
         </div>
      </div>
      <?php include("footer.php"); ?>

   </body>
</html>
</html>