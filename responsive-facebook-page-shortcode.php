<?php
/**
 * @package responsive-facebook-page-shortcode
*/
/*
Plugin Name: Responsive Facebook Page Shortcode
Plugin URI: http://www.sparxstudios.com
Description: New Facebook Page Plugin Shortcode - Version 2.8
Version: 1.0
Author: sparxstudios
Author URI: http://www.sparxstudios.com
*/

add_shortcode('responsivefacebook', 'responsiveFacebookShortcode');
function responsiveFacebookShortcode($atts){
  $atts = shortcode_atts(array(
               'fb_url' => 'http://www.facebook.com/FacebookDevelopers',
                'hide_cover' => 'false',
                'show_faces' => 'true',
                'show_streams' => 'true',
                'name' => 'Facebook',
                'header' => 'true',
                'height' => 300,
                'width' => 300,
				'small_header' => 'false',
				'adapt_width' => 'true'
  ), $atts);
  extract($atts);
        if(!empty($fb_url)):
?>

<div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
<div class="ultimate-facebook-page-plugin">
 <div class="fb-page" data-href="<?php echo $fb_url;?>" data-width="<?php echo $width;?>" data-height="<?php echo $height;?>" data-small-header="<?php echo $small_header; ?>" data-adapt-container-width="<?php echo $adapt_width; ?>" data-hide-cover="<?php echo $hide_cover; ?>" 
 data-show-facepile="<?php echo $show_faces; ?>" data-show-posts="<?php echo $show_streams; ?>"><div class="fb-xfbml-parse-ignore"><blockquote cite="<?php echo $fb_url;?>"><a href="<?php echo $fb_url;?>"><?php echo $name;?></a></blockquote></div></div>
 <div class="support" style="font-size: 9px;text-align: right;"><a href="http://hayesroofing.com/" target="_blank" style="color: #808080;" title="click here">Edmonds Roofer</a></div>
</div>
<?php
        endif;
        return false;
 }