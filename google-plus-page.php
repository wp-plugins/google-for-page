<?php
/*
Plugin Name: Google+ for Page
Plugin URI: http://www.darkomitrovic.com/wp-plugin/google-plus-page/
Description: Add the Google+ Badge or Icon to your website to increase engagement and create a lasting connection with your audience.
Version: 1.0
Author: Darko Mitrovic
Author URI: http://www.darkomitrovic.com/
License: GPL2
*/



class GooglePlusPageWidget extends WP_Widget
{
  function GooglePlusPageWidget()
  {
    $widget_ops = array('classname' => 'GooglePlusPageWidget', 'description' => 'Displays a Google+ Badge or Icon' );
    $this->WP_Widget('GooglePlusPageWidget', 'Google+ for Page', $widget_ops);
  }
 
  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'link' => '111145877060315232068', 'style' => '3', 'name' => 'Page name' ) );
    $link = $instance['link'];
    $style = $instance['style'];
    $name = $instance['name'];
?>





<p>
	<label for="<?php echo $this->get_field_id('link'); ?>">
	<strong>Link to your Google+ page:</strong>
	</label>
		https://plus.google.com/<input class="widefat" id="<?php echo $this->get_field_id('link'); ?>" name="<?php echo $this->get_field_name('link'); ?>" type="text" value="<?php echo attribute_escape($link); ?>" />
</p>



<p>
	<label for="<?php echo $this->get_field_id('style'); ?>">
	<strong>Chose your style:</strong>
	</label><br />
		<input type="radio" id="<?php echo $this->get_field_name('style'); ?>" name="<?php echo $this->get_field_name('style'); ?>" value="1" <?php if($instance['style'] == 1) {echo 'checked="checked"';} ?> />
		Standard badge (coming soon)<br />
		<input type="radio" id="<?php echo $this->get_field_name('style'); ?>" name="<?php echo $this->get_field_name('style'); ?>" value="2" <?php if($instance['style'] == 2) {echo 'checked="checked"';} ?> />		
		Small badge (coming soon)<br />
		<input type="radio" id="<?php echo $this->get_field_name('style'); ?>" name="<?php echo $this->get_field_name('style'); ?>" value="3" <?php if($instance['style'] == 3) {echo 'checked="checked"';} ?> />		
		Small icon<br />
		<input type="radio" id="<?php echo $this->get_field_name('style'); ?>" name="<?php echo $this->get_field_name('style'); ?>" value="4" <?php if($instance['style'] == 4) {echo 'checked="checked"';} ?> />		
		Medium icon<br />
		<input type="radio" id="<?php echo $this->get_field_name('style'); ?>" name="<?php echo $this->get_field_name('style'); ?>" value="5" <?php if($instance['style'] == 5) {echo 'checked="checked"';} ?> />		
		Large icon<br />
</p>


<p>
	<label for="<?php echo $this->get_field_id('name'); ?>">
	<strong>Customize name:</strong>
	</label> 
		<input class="widefat" id="<?php echo $this->get_field_id('name'); ?>" name="<?php echo $this->get_field_name('name'); ?>" type="text" value="<?php echo attribute_escape($name); ?>" />
</p>
 
 
 


 
  
<?php
  }
  
  

 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    $instance['link'] = $new_instance['link'];
    $instance['style'] = $new_instance['style'];
    $instance['name'] = $new_instance['name'];
   return $instance;
  }
 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
 
    echo $before_widget;
	
    if (!empty($instance['name'])) {
		$google_title = $instance['name'] . ' on Google+';
		$title = empty($instance['name']) ? ' ' : apply_filters('widget_title', $google_title);
		
		echo $before_title . $title . $after_title;
	}


	$link = $instance['link'];
	$style = $instance['style'];
	$name = $instance['name'];


 
    // WIDGET CODE GOES HERE
 	
	//1
	if($instance['style'] == 1 && empty($instance['name']) ) {
	echo '<!-- Google+ for Page | by darkomitrovic.com --!>';
    echo '<!-- script coming soon --!>';
    echo '<img src="https://developers.google.com/+/images/badge-sample-large.png" alt="Google+" />';
	}
	else if($instance['style'] == 1 && !empty($instance['name']) ) {
	echo '<!-- Google+ for Page | by darkomitrovic.com --!>';
    echo '<!-- script coming soon --!>';
    echo '<img src="https://developers.google.com/+/images/badge-sample-large.png" alt="Google+" />';
	}
	
 	//2
	else if($instance['style'] == 2 && empty($instance['name']) ) {
	echo '<!-- Google+ for Page | by darkomitrovic.com --!>';
    echo '<!-- script coming soon --!>';
    echo '<img src="https://developers.google.com/+/images/badge-sample-small.png" alt="Google+" />';
	}
 	else if($instance['style'] == 2 && !empty($instance['name']) ) {
	echo '<!-- Google+ for Page | by darkomitrovic.com --!>';
    echo '<!-- script coming soon --!>';
    echo '<img src="https://developers.google.com/+/images/badge-sample-small.png" alt="Google+" />';
	}

 
 	//3
	else if ( $instance['style'] == 3 && empty($instance['name']) ) {
	echo '<!-- Google+ for Page | by darkomitrovic.com --!>';
    echo '<a href="https://plus.google.com/'.$link.'/?prsrc=3" target="_blank" style="text-decoration: none;"><img src="https://ssl.gstatic.com/images/icons/gplus-16.png" width="16" height="16" style="border: 0;"/></a>';
	}

	else if($instance['style'] == 3 && !empty($instance['name']) ) {
	echo '<!-- Google+ for Page | by darkomitrovic.com --!>';
	echo'<a href="https://plus.google.com/'.$link.'/?prsrc=3" target="_blank" style="text-decoration: none; color: #333;"><div style="display: inline-block;"><span style="float: left; font: bold 13px/16px arial,sans-serif; margin-right: 4px;">'.$name.'</span><span style="float: left; font: 13px/16px arial,sans-serif; margin-right: 11px;">on</span><div style="float: left;"><img src="https://ssl.gstatic.com/images/icons/gplus-16.png" width="16" height="16" style="border: 0;"/></div><div style="clear: both"></div></div></a>';
	}
 
 
 	//4
	else if($instance['style'] == 4 && empty($instance['name']) ) {
	echo '<!-- Google+ for Page | by darkomitrovic.com --!>';
    echo '<a href="https://plus.google.com/'.$link.'/?prsrc=3" target="_blank" style="text-decoration: none;"><img src="https://ssl.gstatic.com/images/icons/gplus-32.png" width="32" height="32" style="border: 0;"/></a>';
	}
 
	else if($instance['style'] == 4 && !empty($instance['name']) ) {
	echo '<!-- Google+ for Page | by darkomitrovic.com --!>';
    echo '<a href="https://plus.google.com/'.$link.'/?prsrc=3" target="_blank" style="text-decoration: none; color: #333;"><div style="display: inline-block;"><span style="float: left; font: bold 13px/16px arial,sans-serif; margin-right: 4px; margin-top: 7px;">'.$name.'</span><span style="float: left; font: 13px/16px arial,sans-serif; margin-right: 11px; margin-top: 7px;">on</span><div style="float: left;"><img src="https://ssl.gstatic.com/images/icons/gplus-32.png" width="32" height="32" style="border: 0;"/></div><div style="clear: both"></div></div></a>';
	}
 
 
 	//5
	else if($instance['style'] == 5 && empty($instance['name']) ) {
	echo '<!-- Google+ for Page | by darkomitrovic.com --!>';
    echo '<a href="https://plus.google.com/'.$link.'/?prsrc=3" target="_blank" style="text-decoration: none;"><img src="https://ssl.gstatic.com/images/icons/gplus-64.png" width="64" height="64" style="border: 0;"></img></a>';
	}
	
	else if($instance['style'] == 5 && !empty($instance['name']) ) {
	echo '<!-- Google+ for Page | by darkomitrovic.com --!>';
    echo '<a href="https://plus.google.com/'.$link.'/?prsrc=3" target="_blank" style="text-decoration: none; color: #333;"><div style="display: inline-block; *display: inline;"><div style="text-align: center;"><img src="https://ssl.gstatic.com/images/icons/gplus-64.png" width="64" height="64" style="border: 0;"></img></div><div style="font: bold 13px/16px arial,sans-serif; text-align: center;">'.$name.'</div><div style="font: 13px/16px arial,sans-serif;"> on Google+ </div></div></a>';
	}

 
 
    echo $after_widget;
  }
  

}

add_action( 'widgets_init', create_function('', 'return register_widget("GooglePlusPageWidget");') );



/*
function google_code() {
echo '<!-- Google+ for Page | by darkomitrovic.com --!>';
echo'<link href="https://plus.google.com/'.$link.'/" rel="publisher" />';
}
add_action('wp_head', 'google_code');
*/

?>