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
         <a rel="nofollow" id="info_popup_true" href="javascript:void(0)" data-href="#" _pageexpand_="12"></a>
         <h1>List of <span>colleges</span></h1>
         <div class="results_founds">
       
            <div class="result_categories">
               <ul>
                  
                

               </ul>
            </div>
         </div>
      </div>
      <div class="search_result_lists">
	  
         <div class="heads">
            <h3>Colleges</h3>
            <span class="view_more"></span>
         </div>
         <div class="clearfix"></div>
         <div class="row">
		 <?php
	include("db_connect.php");
	$sql="select * from college_details";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res))
	{
	?>

            <div class="col-md-4 col-sm-6 lists_wrap">
               <div class="grid_listing_college_snippet">
                  <div class="snippet-top">
                     <div class="div-container">
                        <img class="clgdn_lazyload" title=";<?php echo $row['college_name']?> logo" src="admin/file/<?php echo $row['image']?>?tr=w-379,h-180,c-force" _pageexpand_="472">
                        <div class="overlay"></div>
                        <div class="overlay"></div>
                        <div class="snippet-extras">
                           <div class="data-left"></div>
                           <div class="data-right college_rating pull-right">
                              <a rel="nofollow" href="javascript:void(0)" data-href="#" data-city="Dharwad" class="btn-snipp open-popup-inline" _pageexpand_="976">
                                 <svg class="svg-lg svg-white">
                                    <use xlink:href="#icon-solid_heart"></use>
                                 </svg>
                              </a>
                           </div>
                           <div class="data-right college_rating pull-right"><span class="small-font"></span></div>
                        </div>
                     </div>
                  </div>
                  <div class="snippet-middle">
                     <img class="clgdn_lazyload" title="<?php echo $row['college_name']?> logo" src="college_photo/college_logo/<?php echo $row['college_logo']?>?tr=w-70,h-70,c-force" _pageexpand_="332">
                     <div class="college_details"><a href="#" class="ga-listing-snippet college_name" _pageexpand_="476"><span> <?php echo $row['college_name']?></span></a></div>
                     <span class="college_location">
                        <svg class="svg-sm">
                           <use xlink:href="#icon-location_new"></use>
                        </svg>
						<?php echo $row['address']?>
                        <?php echo $row['city']?>, <?php echo $row['state']?> (INDIA)   
                        
                     </span>
                  </div>
                  <div class="snippet-bottom">
                     <div class="courses">
                        <span class="heading">courses offered</span>
                        <div class="course_detail_tab" style="display:inline-block">
						<?php
						$sql1="select * from college_courses cc,course_details cd where cc.course_id=cd.course_id and cc.college_id='".$row["college_id"]."'";
	$res1=mysql_query($sql1);
	while($row1=mysql_fetch_array($res1))
	{
						?>
                           <a class="ga-listing-snippet" data-gtmaction="Courses Click" data-gtmlabel="<?php echo $row1["course_name"]; ?>" href="courses.php?course=<?php echo $row1["course_id"]; ?>& college_id= <?php echo $row['college_id']; ?>" title="<?php echo $row["college_name"]; ?>, <?php echo $row["city"]; ?> - Course Details " _pageexpand_="884">
                              <div class="course_details">
                                 <span class="course_name">  <?php echo $row1["course_name"]; ?>   </span>
                                 <span class="course_fees">
                                    <svg class="svg-rupee svg-white">
                                       <use xlink:href="#icon-rupee"></use>
                                    </svg>
                                    <?php echo $row1["course_fees"]; ?> <span class="extra_data">/year</span>
                                 </span>
                              </div>
                           </a>
                          <?php
						  }
						  ?>
						  <a href="courses_fees.php?college_id=<?php echo $row["college_id"]; ?>" class="bottom-nav-tab" _pageexpand_="484"> courses-fees </a>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
			<?php
			}
			?>
           
        
           
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