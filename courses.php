<!DOCTYPE HTML>
<html lang="en">
   <head>
    
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <title></title>
      
      <link rel="icon" href="https://images.static-collegedunia.com/public/asset/img/favicon.png" type="image/gif" sizes="16x16">
      <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    
      <link type='text/css' href='css/d_college.min.722.css' rel='stylesheet' />
     <script type="text/javascript" src="libraries/jquery.min.js"></script>
	 <script type="text/javascript" src="libraries/postscribe.min.js" defer="defer"></script>
	 <script type='text/javascript' defer src='libraries/d_college.min.722.js'></script>
	 
      
   </head>
   <body itemscope itemtype="http://schema.org/WebPage">
      
      <div class="bg_overlay"></div>
        <?php include("top_nav.php"); ?>
      <?php include("nav1.php"); ?>
      <div id="body_slideoverlay"></div>
      <script type="text/javascript">var PAGE_NAME="college_courses-fees_page"</script>
      <div class="college_top_wrapper">
         <div class="bg-overlay"></div>
		  <?php
	include("db_connect.php");
	$college_id=$_REQUEST["college_id"];
	$sql="select * from college_details where college_id='$college_id'";
	$res=mysql_query($sql);
$row=mysql_fetch_array($res);
	?>
         <img src="admin/file/<?php echo $row['image']?>?tr=w-1286,h-193,c-force" alt="<?php echo $row['college_name']?> - Course &amp; Fees Details " class="img-resposnsive bg-college">
         <div class="container-fluid wrapper-top">
            <div class="college-info">
               <a class="college_logo_wrap" href="#" title="<?php echo $row['college_name']?>"><img src="college_photo/college_logo/<?php echo $row['college_logo']?>?tr=w-72,h-80,c-force" alt="<?php echo $row['college_name']?> logo" title="<?php echo $row['college_name']?> logo" class="img-responsive bg-logo"></a>
               <div class="college_data">
                  <div id="breadcrumbs">
                     <p class="college-breadcrumbs">
                        <span itemprop="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                        
                        
                     </p>
                  </div>
                  <h1 id="page_h1" class="college_name"><?php echo $row['college_name']?> - Course &amp; Fees Details </h1>
                  <div class="extra_info">
                     <span>
                        <svg>
                           <use xlink:href="#icon-pin"/>
                        </svg>
                        <?php echo $row['address']?>
                        <?php echo $row['city']?>, <?php echo $row['state']?> (INDIA)  
                     </span>
                    
                    
                   
                  </div>
               </div>
              
               
               <div class="contact-details-link">
                 
               </div>
            </div>
         </div>
      </div>
      <input type="hidden" value="57672" id="college_id"><input type="hidden" value="1" id="college_type"><input type="hidden" value="courses-fees" id="tab">
      <div class="wrapper-nav" id="js-nav">
         <div class="container-fluid pad-wrap">
            <div class="college_nav">
               <div class="college_nav_ul">
                  <div class=" college_tab "><a href="about_college.php?college_id=<?php echo $row["college_id"]; ?>" title="<?php echo $row['college_name']?>" class="tab_list 1  " data-tab-name="home">   Info   </a></div>
                  <div class=" change_tab active college_tab "><a href="#" title="<?php echo $row['college_name']?> - Course &amp; Fees Details " class="tab_list 1  active" data-tab-name="courses-fees">   Courses &amp; Fees   </a></div>
 <div class=" college_tab "><a href="college_photos.php?college_id=<?php echo $row["college_id"]; ?>" title="<?php echo $row['college_name']?>" class="tab_list 1  " data-tab-name="home">   College Photos   </a></div>
               </div>
            </div>
         </div>
      </div>
      <input type="hidden" id="data_for_ad_log" value="{&quot;type&quot;:&quot;university&quot;,&quot;type_id&quot;:&quot;57672&quot;,&quot;type_name&quot;:&quot;<?php echo $row['college_name']?>&quot;,&quot;ip_address&quot;:&quot;61.3.19.182&quot;,&quot;is_mobile&quot;:false}">
      <div class="col-xs-12 nopadding college-content js-sticky-compare">
         <div class="container-fluid">
            <div class="pad-wrap">
               <div id="headerslot_0" class="headerslot content-box"></div>
            </div>
         </div>
         <div id="course_filter_flag"></div>
         <div id="renderTabData">
            <div id="course_full_detail"></div>
			<?php
						$sql1="select * from college_courses cc,course_details cd where cc.course_id=cd.course_id and cc.college_id='".$row["college_id"]."'";
	$res1=mysql_query($sql1);
	while($row1=mysql_fetch_array($res1))
	{
						?>
            <div class="container-fluid single_course course_snipp coursefees automate_client_img_snippet" data-stream="B.Tech">
               <div class="pad-wrap">
                  <div class="content_box nopadding">
                     <div class="course_snipp_body new courseSnippet" data-slug="18">
                        <div class="div-top">
                           <div class="left">
                              <div><a href="<?php echo $row1["course_type"]; ?>" class="course_name"><?php echo $row1["course_name"]; ?></a></div>
                              <div>
                                 <span class="course_info duration-yr">
                                    <svg>
                                       <use xlink:href="#icon-time-1"/>
                                    </svg>
                                    <?php echo $row1["course_duration"]; ?> Years
                                 </span>
                                 <span class="course_info duration-txt">
                                    <svg>
                                       <use xlink:href="#icon-c-53-book"/>
                                    </svg>
                                    <?php echo $row1["course_type"]; ?>
                                 </span>
                                 
                              </div>
                           </div>
                           <div class="right">
                              <div>
                                 <span class="fees-rupee ru">₹</span><span class="fees"><?php echo $row1["first_year_fees"]; ?>  </span><span class="fees_per_yr"><br>FIRST<br/>YEAR</span>
                                
                              </div>
                           </div>
                        </div>
                       
                       
                        <hr class="divider">
                        <div class="width_maintain">
						  <table class="table" style="margin:20px 0">
                              <thead>
                                 <tr>
								 <?php
								 $i=1;
								 while($i<=$row1["course_duration"])
								 {
								 ?>
                                    <th colspan="2">year <?php echo $i++; ?> </th>
                                 <?php
								 }
								 $cfees=$row1["first_year_fees"]+($row1["course_fees"]*($row1["course_duration"]-1));
								 ?>
                                    <th>PROGRAM GRAND TOTAL</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td class="text-center" colspan="2">₹<?php echo $row1["first_year_fees"]; ?> </td>
									 <?php
								 $i=2;
								 while($i<=$row1["course_duration"])
								 {
								  $i++;
								 ?>
                                    <td class="text-center" colspan="2">₹<?php echo $row1["course_fees"]; ?> </td>
                                   <?php
								 }
								 ?>
                                    <td style="border:none">₹<?php echo $cfees; ?></td>
                                 </tr>
                              </tbody>
                           </table>
                           <table class="table" style="margin:20px 0">
                              <thead>
                                 <tr>
								
                                    <th>Description </th>
                                <th>Eligibility Criteria </th>
								 <th>Additional Requirements </th>
								 <th>Course Stream </th>
								 <th>Course Type </th>
								 <th>Course Substream </th>
								 
								 <th>program type </th>
                                    
                                 </tr>
                              </thead>
							  <tbody>
							
							  
							  
                              
                                  <tr>
								
                                    <td><?php echo $row1['course_description']; ?> </td>
                                <td><?php echo $row1['eligibility_criteria']; ?> </td>
								 <td><?php echo $row1['additional_requirements']; ?> </td>
								 <td><?php echo $row1['course_stream']; ?> </td>
								 <td><?php echo $row1['course_type']; ?> </td>
								 <td><?php echo $row1['course_substream']; ?> </td>
								 <td><?php echo $row1['program_type']; ?> </td>
                                   
                                 </tr>
								
                              </tbody>
                           </table>
						   
                        </div>
                        <hr class="divider dividerB0">
                       
                        <hr class="divider dividerB0">
                        <div class="snippt_bottom">
                           <div class="menu native_links_18"><a href="#">Eligibility criteria</a></div>
                           <div class="review-container"></div>
                           <hr class="divider">
                           <div class="lead_buttons">
						    <?php
		    if(isset($_SESSION["reg_id"]) && $_SESSION["reg_id"]!="")
			{
		  ?>
                              <a href="apply_course.php?cc_id=<?php echo $row1["college_course_id"]; ?>" title="Apply For <?php echo $row["college_name"]; ?>" class="apply_now_btn" data-course="18">
                                 <svg>
                                    <use xlink:href="#icon-mail-send"/>
                                 </svg>
                                 <span>APPLY FOR THIS COURSE</span>
                              </a>
                              <a  href="admin/file/<?php echo $row["prospectus"]; ?>"  title="Download <?php echo $row["college_name"]; ?> brochure" class="download_brouchure" data-course="18">
                                 <span>DOWNLOAD BROCHURE</span>
                                 <svg>
                                    <use xlink:href="#icon-download-icon"/>
                                 </svg>
                              </a>
            <?php
			}
			else
			{
			?>
			                              <a href="login.php" title="Apply For <?php echo $row["college_name"]; ?>" class="apply_now_btn" data-course="18">
                                 <svg>
                                    <use xlink:href="#icon-mail-send"/>
                                 </svg>
                                 <span>APPLY FOR THIS COURSE</span>
                              </a>
                              <a  href="login.php"  title="Download <?php echo $row["college_name"]; ?> brochure" class="download_brouchure" data-course="18">
                                 <span>DOWNLOAD BROCHURE</span>
                                 <svg>
                                    <use xlink:href="#icon-download-icon"/>
                                 </svg>
                              </a>
			<?php
			}
			?>                  
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
           
			<?php
			}
			?>
           
         </div>
         <div id="add_faq"></div>
        
         
         
     
   
      </div>
      <div id="goto_top">
         <svg>
            <use xlink:href="#icon-up-arrow"/>
         </svg>
      </div>
      <div class="clearfix"></div>
<?php include("footer.php"); ?>

   </body>
</html>
</html>