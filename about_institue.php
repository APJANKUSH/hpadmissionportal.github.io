<!DOCTYPE HTML>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <title></title>
      
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
      <script type="text/javascript">var PAGE_NAME="institute_home_page"</script>
      <div class="institute_top_wrapper">
         <div class="bg-overlay"></div>
        <?php
	include("db_connect.php");
		$institute_id=$_REQUEST["institute_id"];
	$sql="select * from institute_details where institute_id='$institute_id'";
	$res=mysql_query($sql);
$row=mysql_fetch_array($res);
	?>
         <img src="admin/file/<?php echo $row['image']?>?tr=w-1286,h-193,c-force" alt="<?php echo $row['institute_name']?> - Course &amp; Fees Details " class="img-resposnsive bg-college">
         <div class="container-fluid wrapper-top">
            <div class="college-info">
               <a class="institute_logo_wrap" href="#" title="<?php echo $row['institute_name']?>"><img src="admin/file/<?php echo $row['image']?>?tr=w-72,h-80,c-force" alt="<?php echo $row['institute_name']?> logo" title="<?php echo $row['institute_name']?> logo" class="img-responsive bg-logo"></a>
               <div class="institute_data">
                  <div id="breadcrumbs">
                     <p class="college-breadcrumbs">
                        <span itemprop="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                        
                        
                     </p>
                  </div>
                  <h1 id="page_h1" class="institute_name"><?php echo $row['institute_name']?> - About Institute </h1>
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
      <input type="hidden" value="57672" id="institute_id"><input type="hidden" value="1" id="institute_type"><input type="hidden" value="home" id="tab">
      <div class="wrapper-nav" id="js-nav">
         <div class="container-fluid pad-wrap">
            <div class="college_nav">
               <div class="college_nav_ul">
                     <div class=" change_tab active  college_tab "><a href="about_college.php?institute_id=<?php echo $row["institute_id"]; ?>" title="<?php echo $row['institute_name']?>" class="tab_list 1  " data-tab-name="home">   Info   </a></div>
                  <div class=" college_tab "><a href="courses_fees.php?institute_id=<?php echo $row["institute_id"]; ?>" title="<?php echo $row['institute_name']?> - Course &amp; Fees Details " class="tab_list 1  active" data-tab-name="courses-fees">   Courses &amp; Fees   </a></div>
 <div class="college_tab "><a href="institute_photos.php?institute_id=<?php echo $row["institute_id"]; ?>" title="<?php echo $row['institute_name']?>" class="tab_list 1  " data-tab-name="home">   Institute Photos   </a></div>
               </div>
            </div>
         </div>
      </div>
      <input type="hidden" id="data_for_ad_log" value="{&quot;type&quot;:&quot;university&quot;,&quot;type_id&quot;:&quot;57672&quot;,&quot;type_name&quot;:&quot;Indian Institute of Technology - [IIT] - Dharwad&quot;,&quot;ip_address&quot;:&quot;61.3.19.182&quot;,&quot;is_mobile&quot;:false}">
      <div class="col-xs-12 nopadding college-content js-sticky-compare">
         <div class="container-fluid">
            <div class="pad-wrap">
               <div id="headerslot_0" class="headerslot content-box"></div>
            </div>
         </div>
         <div id="external_course_filter_flag"></div>
         <div id="renderTabData">
            <div class="container-fluid about-article">
               <div class="pad-wrap">
                  <div class="content_box nopadding">
                     <h3 class="content_head">about college</h3>
                     <div class="content_body">
                        <div class="content_p">
                          
                           <p><?php echo $row["institute_desc"]; ?></p>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            
         </div>
      </div>
     
      </div>
      <script type="text/javascript">var institute_id="57672";  </script>
      <div id="responsive_modal" class="ajax_responsive_modal">
         <div class="responsive-modal-content">
            <span class="close_modal">&times;</span>
            <div id="responsive-modal-content"></div>
         </div>
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