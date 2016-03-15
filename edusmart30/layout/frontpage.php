<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Moodle's edusmart30 theme, an example of how to make a Bootstrap theme
 *
 * DO NOT MODIFY THIS THEME!
 * COPY IT FIRST, THEN RENAME THE COPY AND MODIFY IT INSTEAD.
 *
 * For full information about creating Moodle themes, see:
 * http://docs.moodle.org/dev/Themes_2.0
 *
 * @package   theme_edusmart30
 * @copyright 2013 Moodle, moodle.org
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Get the HTML for the settings bits.
$html = theme_edusmart30_get_html_for_settings($OUTPUT, $PAGE);

// Set default (LTR) layout mark-up for a three column page.
$regionmain = 'span9 pull-right';
$sidepre = 'span3 desktop-first-column';
// Reset layout mark-up for RTL languages.
if (right_to_left()) {
    $regionmain = 'span9';
    $sidepre = 'span3 pull-right';
}

require_once(dirname(__FILE__).'/includes/df-values.php'); 

$hasfacebook    = (empty($PAGE->theme->settings->facebook)) ? false : $PAGE->theme->settings->facebook;
$hastwitter     = (empty($PAGE->theme->settings->twitter)) ? false : $PAGE->theme->settings->twitter;
$hasgoogleplus  = (empty($PAGE->theme->settings->googleplus)) ? false : $PAGE->theme->settings->googleplus;
$hasin  = (empty($PAGE->theme->settings->in)) ? false : $PAGE->theme->settings->in;
$hasyoutube  = (empty($PAGE->theme->settings->youtube)) ? false : $PAGE->theme->settings->youtube;
$copyright = (empty($PAGE->theme->settings->copyright)) ? false : $PAGE->theme->settings->copyright;
	
echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    
    <?php require_once(dirname(__FILE__).'/includes/pagelink1.php'); ?>  
    
	<?php require_once(dirname(__FILE__).'/includes/pagescript.php'); ?>  


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='https://fonts.googleapis.com/css?family=Raleway:400,500' rel='stylesheet' type='text/css'>
</head>

<body <?php echo $OUTPUT->body_attributes('two-column'); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>


<!--
Header Start Hrere
 -->
<div role="banner" class="navbar navbar-fixed-top<?php echo $html->navbarclass ?> moodle-has-zindex">
    <nav role="navigation" class="navbar-inner">
        <div class="container-fluid">
            <div class="logo_section"><?php echo $OUTPUT->full_header(); ?></div>   
            <div class="cusMenu offset3"> 
               
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            
            
            <div class="nav-collapse collapse">
                <?php echo $OUTPUT->custom_menu(); ?>
                <ul class="nav pull-right">
                    <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                </ul>
            </div>
             
             
             
<?php if(isloggedin()){ ?>
                            
 <?php echo $OUTPUT->user_menu();  ?>
                            
	<?php if(isguestuser()){ ?>
	
	<a href="<?php echo new moodle_url('/login/index.php', array('sesskey'=>sesskey())), get_string('login') ?> "> <?php echo get_string('login') ?></a>	
	
	<?php }else{ ?>
										
	<?php } ?>
											
	<?php }else{ ?>	

	<?php require_once(dirname(__FILE__).'/includes/loginfo.php'); ?>  
						
<?php } ?>
             
            </div>  <!--End cusMenu -->
            <div class="clearfix"></div>
        </div> <!--End container-fluid -->
    </nav>
</div>

<!--
End Header Here
 -->
 
 
 
 <!--
Banner Start Hrere
 -->

<section id="Banner-img">
<?php  if ($display_slider) { ?>
     <div class="slider_container">
		<div class="flexslider">
	      <ul class="slides">
          
          <li>
	          <img src="<?php echo $slide1image ?>" alt="" />

               <?php  if ($displayslidertext1) { ?>
               
	            <div class="flex-caption container-fluid">
	            <div class="caption_title_line">
	                <h2 id="myslidertext1"><?php echo $slide1caption ?></h2>
	                 <a href="<?php echo $slidertext1 ?>"><?php echo $sliderlink1 ?></a>
                </div>
                </div>
                <?php }else{?>
                <?php }?>

          </li>
          
          <li>
	          <img src="<?php echo $slide2image ?>" alt="" />
	          
               <?php  if ($displayslidertext2) { ?>
               
	            <div class="flex-caption container-fluid">
	            <div class="caption_title_line">
	                <h2 id="myslidertext2"><?php echo $slide2caption ?></h2>
	                 <a href="<?php echo $slidertext2 ?>"><?php echo $sliderlink2 ?></a>
	            </div>
                </div>   
                <?php }else{?>
                <?php }?>
          </li>
          
          <li>
	          <img src="<?php echo $slide3image ?>" alt="" />
	          
               <?php  if ($displayslidertext3) { ?>
               
	            <div class="flex-caption container-fluid">
	            <div class="caption_title_line">
	                 <h2 id="myslidertext3"><?php echo $slide3caption ?></h2>
	                 <a href="<?php echo $slidertext3 ?>"><?php echo $sliderlink3 ?></a>
	            </div>
                </div>
                <?php }else{?>
                <?php }?>

          </li>
          
          
        </ul>
      </div>
    </div>
 

  <?php }else{?>
  <div class="plainimage">
  <img src="<?php echo $CFG->wwwroot ?>/theme/edusmart30/pix/images/slider/01.jpg" alt="" width="100%" />
  </div>
  <?php }?>

   <div class="clearfix"></div>


</section>
<div class="clearfix"></div>



 <!--
End Banner Here
 -->
 <!--
Welcome Information
 -->



<div id="b-bottom" class="row-fluid">
	<div id="info-main" class="container-fluid">
	<?php  if ($display_marketing_section) { ?>
	
		<div id="info-main1" class="span4">
			<div class="img-section">
			<?php echo $marketing1icon ?>
			</div>
			
			<div class="text-section">
			<h4><?php echo $marketing1title ?></h4>
			<p><?php echo $marketing1content ?></p>
			</div>
			
		</div>
		
		<div id="info-main2" class="span4">
			<div class="img-section">
			<?php echo $marketing2icon ?>
			</div>
			
			<div class="text-section">
			<h4><?php echo $marketing2title ?></h4>
			<p><?php echo $marketing2content ?></p>
			</div>		
			
		</div>
		
		<div id="info-main3" class="span4">
			<div class="img-section">
			<?php echo $marketing3icon ?>
			</div>
			
			<div class="text-section">
			<h4><?php echo $marketing3title ?></h4>
			<p><?php echo $marketing3content ?></p>
			</div>
			
		</div>
		 <?php }else{?>
		 <?php }?>
	</div>
</div>


 <!--
Welcome Information
 -->
 
 
 	 
 
<!--
	  Main Section Start
 -->
 


<div id="page" class="container-fluid">

            <?php
            echo $OUTPUT->course_content_header();
            echo $OUTPUT->main_content();
            echo $OUTPUT->course_content_footer();
            ?>
     
    </div>

  <!--
	  Main Section End
 -->

<!--
	  Footer Section
 -->

    <footer id="page-footer">
    	<div class="container-fluid">
     	 <?php echo $OUTPUT->blocks('side-pre', $sidepre); ?>
     	 <?php //echo $OUTPUT->blocks('side-post', $sidepost); ?>
     	 </div>
     	 
     	 <div class="clearfix"></div>
     	 
      <div id="bottom-footer-wrapper">
     	 <div class="container-fluid">
	     	 <div class="footer-left">		     	 
		     	 <ul class="footer-link-list">
		     	 	<li><a class="footer-link" target="_blanck" href="http://www.chumontreal.qc.ca/enseignement-academie/direction-de-l-enseignement-et-de-l-academie-chum/nous-joindre"><img src="<?php echo $CFG->wwwroot ?>/theme/edusmart30/pix/images/list-black.png" alt="" />Nous joindre</a></li>
		     	 	<li><a class="footer-link" target="_blanck" href="http://www.chumontreal.qc.ca/"><img src="<?php echo $CFG->wwwroot ?>/theme/edusmart30/pix/images/list-black.png" alt="" />Accueil général du CHUM</a></li>		     	 
		     	 </ul>
		     	 <p>Réalisé par l'Académie CHUM</p>
		     	 <p class="chum-footer-copy"><b><?php echo $copyright; ?></b>&#169; 2016 CHUM - Tous droits réservés</p>
				 
	     	 </div>
	     	 
	     	 <div class="footer-middle">
			    <div id="course-footer"><?php echo $OUTPUT->course_footer(); ?></div>
		        <p class="helplink"><?php echo $OUTPUT->page_doc_link(); ?></p>
		        <?php
		        echo $html->footnote;
		        echo $OUTPUT->login_info();
		        if (empty($PAGE->theme->settings->hidemoodlelogo)) {
	        		echo $OUTPUT->home_link();
	        	}
		        echo $OUTPUT->standard_footer_html();
		        ?>
	     	 </div>
     	  

	     <div class="footer-right">
	        <div class="social-net">
		        <div class="socials">
		        <ul class="socials unstyled">
		          <?php if ($hasfacebook) { ?>
		          <li><a href="<?php echo $hasfacebook; ?>" target="_blank"><img src="<?php echo $OUTPUT->pix_url('social/social_facebook', 'theme')?>" alt="facebook" /></a></li>
		          <?php } ?>
		          <?php if ($hastwitter) { ?>
		          <li><a href="<?php echo $hastwitter; ?>" target="_blank"><img src="<?php echo $OUTPUT->pix_url('social/social_twitter', 'theme')?>" alt="twitter" /></a></li>
		          <?php } ?>
		          <?php if ($hasyoutube) { ?>
		          <li><a href="<?php echo $hasyoutube; ?>" target="_blank"><img src="<?php echo $OUTPUT->pix_url('social/social_youtube', 'theme')?>" alt="Youtube" /></a></li>
		          <?php } ?>
		          <li><a href="https://www.flickr.com/photos/chumontreal" target="_blank"><img src="<?php echo $OUTPUT->pix_url('social/social_deuxrond', 'theme')?>" alt="flickr" /></a></li>
		          <li><a href="http://www.chumontreal.qc.ca/rss.xml" target="_blank"><img src="<?php echo $OUTPUT->pix_url('social/social_echo', 'theme')?>" alt="RSS" /></a></li>		          
		          <?php if ($hasin) { ?>
		          <li><a href="<?php echo $hasin; ?>" target="_blank"><img src="<?php echo $OUTPUT->pix_url('social/social_linkedin', 'theme')?>" alt="linked in" /></a></li>
		          <?php } ?>
		          
		        </ul>
		        </div>
		    </div>
		 </div>
		    
		    <div class="clearfix"></div>

	      </div>
	    </div>
	       
    </footer>

  
 
</div>  
<!--
	  End Footer Section
 -->

<?php echo $OUTPUT->standard_end_of_body_html() ?>




<script src="<?php echo $CFG->wwwroot ?>/theme/edusmart30/javascript/main.js"></script> <!-- Gem jQuery -->
<a id='backTop' href="#"><img src="<?php echo $CFG->wwwroot ?>/theme/edusmart30/pix/images/backtotop.png" alt="" /></a>
<script src="<?php echo $CFG->wwwroot ?>/theme/edusmart30/javascript/jquery.backTop.min.js"></script> <!-- Modernizr -->
<script>
       $(document).ready( function() {
	       $('#backTop').backTop({
	        'position' : 1600,
	        'speed' : 500,
	        'color' : 'red',
            
            });		
       });
  </script>
  

<style>
	
    #bottom-footer-wrapper {
    	background-image: url("<?php echo $CFG->wwwroot ?>/theme/edusmart30/pix/images/bg-footer.png");
    	background-repeat: repeat-x;
    	background-position-y: -3px;
    }

</style>

</body>
</html>
