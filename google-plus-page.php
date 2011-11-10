<?php
/*
Plugin Name: Google+ for Page
Plugin URI: http://www.darkomitrovic.com/wp-plugin/google-plus-page/
Description: Add the Google+ Badge or Icon to your website to increase engagement and create a lasting connection with your audience.
Version: 1.1
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
    $instance = wp_parse_args( (array) $instance, array( 'link' => '111145877060315232068', 'style' => '1', 'name' => 'Page name', 'lang' => 'en' ) );
    $link = $instance['link'];
    $style = $instance['style'];
    $name = $instance['name'];
    $lang = $instance['lang'];
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
		Standard badge<br />
		<input type="radio" id="<?php echo $this->get_field_name('style'); ?>" name="<?php echo $this->get_field_name('style'); ?>" value="2" <?php if($instance['style'] == 2) {echo 'checked="checked"';} ?> />		
		Small badge<br />
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
 
 
 
<p>
	<label for="<?php echo $this->get_field_id('lang'); ?>">
	<strong>Language:</strong>
	</label>
	<select id="<?php echo $this->get_field_id( 'lang' ); ?>" name="<?php echo $this->get_field_name( 'lang' ); ?>">
		<option value="ar" <?php if($instance['lang'] == ar) {echo 'selected="selected"';} ?>>Arabic</option>
		<option value="bg" <?php if($instance['lang'] == bg) {echo 'selected="selected"';} ?>>Bulgarian</option>
		<option value="ca" <?php if($instance['lang'] == de) {echo 'selected="selected"';} ?>>Catalan</option>
		<option value="zh" <?php if($instance['lang'] == zh) {echo 'selected="selected"';} ?>>Chinese</option>
		<option value="hr" <?php if($instance['lang'] == hr) {echo 'selected="selected"';} ?>>Croatian</option>
		<option value="cs" <?php if($instance['lang'] == cs) {echo 'selected="selected"';} ?>>Czech</option>
		<option value="da" <?php if($instance['lang'] == da) {echo 'selected="selected"';} ?>>Danish</option>
		<option value="nl" <?php if($instance['lang'] == nl) {echo 'selected="selected"';} ?>>Dutch</option>
		<option value="en" <?php if($instance['lang'] == en) {echo 'selected="selected"';} ?>>English</option>
		<option value="et" <?php if($instance['lang'] == et) {echo 'selected="selected"';} ?>>Estonian</option>
		<option value="fil" <?php if($instance['lang'] == fil) {echo 'selected="selected"';} ?>>Filipino</option>
		<option value="fi" <?php if($instance['lang'] == fi) {echo 'selected="selected"';} ?>>Finnish</option>
		<option value="fr" <?php if($instance['lang'] == fr) {echo 'selected="selected"';} ?>>French</option>
		<option value="de" <?php if($instance['lang'] == de) {echo 'selected="selected"';} ?>>German</option>
		<option value="el" <?php if($instance['lang'] == el) {echo 'selected="selected"';} ?>>Greek</option>
		<option value="iw" <?php if($instance['lang'] == iw) {echo 'selected="selected"';} ?>>Hebrew</option>
		<option value="hi" <?php if($instance['lang'] == hi) {echo 'selected="selected"';} ?>>Hindi</option>
		<option value="hu" <?php if($instance['lang'] == hu) {echo 'selected="selected"';} ?>>Hungarian</option>
		<option value="id" <?php if($instance['lang'] == id) {echo 'selected="selected"';} ?>>Indonesian</option>
		<option value="it" <?php if($instance['lang'] == it) {echo 'selected="selected"';} ?>>Italian</option>
		<option value="ja" <?php if($instance['lang'] == ja) {echo 'selected="selected"';} ?>>Japanese</option>
		<option value="ko" <?php if($instance['lang'] == ko) {echo 'selected="selected"';} ?>>Korean</option>
		<option value="lv" <?php if($instance['lang'] == lv) {echo 'selected="selected"';} ?>>Latvian</option>
		<option value="lt" <?php if($instance['lang'] == lt) {echo 'selected="selected"';} ?>>Lithuanian</option>
		<option value="ms" <?php if($instance['lang'] == ms) {echo 'selected="selected"';} ?>>Malay</option>
		<option value="no" <?php if($instance['lang'] == no) {echo 'selected="selected"';} ?>>Norwegian</option>
		<option value="fa" <?php if($instance['lang'] == fa) {echo 'selected="selected"';} ?>>Persian</option>
		<option value="pl" <?php if($instance['lang'] == pl) {echo 'selected="selected"';} ?>>Polish</option>
		<option value="pt" <?php if($instance['lang'] == pt) {echo 'selected="selected"';} ?>>Portuguese</option>
		<option value="ro" <?php if($instance['lang'] == ro) {echo 'selected="selected"';} ?>>Romanian</option>
		<option value="ru" <?php if($instance['lang'] == ru) {echo 'selected="selected"';} ?>>Russian</option>
		<option value="sr" <?php if($instance['lang'] == sr) {echo 'selected="selected"';} ?>>Serbian</option>
		<option value="sv" <?php if($instance['lang'] == sv) {echo 'selected="selected"';} ?>>Swedish</option>
		<option value="sk" <?php if($instance['lang'] == sk) {echo 'selected="selected"';} ?>>Slovak</option>
		<option value="sl" <?php if($instance['lang'] == sl) {echo 'selected="selected"';} ?>>Slovenian</option>
		<option value="es" <?php if($instance['lang'] == es) {echo 'selected="selected"';} ?>>Spanish</option>
		<option value="th" <?php if($instance['lang'] == th) {echo 'selected="selected"';} ?>>Thai</option>
		<option value="tr" <?php if($instance['lang'] == tr) {echo 'selected="selected"';} ?>>Turkish</option>
		<option value="uk" <?php if($instance['lang'] == uk) {echo 'selected="selected"';} ?>>Ukrainian</option>
		<option value="vi" <?php if($instance['lang'] == vi) {echo 'selected="selected"';} ?>>Vietnamese</option>
	</select>			
</p>



 
  
<?php
  }
  
  

 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    $instance['link'] = $new_instance['link'];
    $instance['style'] = $new_instance['style'];
    $instance['name'] = $new_instance['name'];
    $instance['lang'] = $new_instance['lang'];
  return $instance;
  }
 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
 
    echo $before_widget;
	
    if (!empty($instance['name'])) {
		$google_title = $instance['name'] . '';
		$title = empty($instance['name']) ? ' ' : apply_filters('widget_title', $google_title);
		
		echo $before_title . $title . $after_title;
	}


	$link = $instance['link'];
	$style = $instance['style'];
	$name = $instance['name'];
	$lang = $instance['lang'];


 
    // WIDGET CODE GOES HERE
 	
	//1
	if($instance['style'] == 1 ) {
	echo '<!-- Google+ for Page | by darkomitrovic.com --!>';
    echo '<div class="g-plus" data-href="https://plus.google.com/'.$link.'" data-size="badge"></div>';
	}
	
 	//2
	else if($instance['style'] == 2 ) {
	echo '<!-- Google+ for Page | by darkomitrovic.com --!>';
    echo '<div class="g-plus" data-href="https://plus.google.com/'.$link.'" data-size="smallbadge"></div>';
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



function google_code() {

	
$options = get_option("widget_googlepluspagewidget"); 


//var_dump($options);
$link = $options[3]['link'];
$style = $options[3]['style'];
$lang = $options[3]['lang'];
//$lang = 'en-US';




	
	echo '
	<!-- Google+ for Page | by darkomitrovic.com --!>
	<link href="https://plus.google.com/'.$link.'/" rel="publisher" />
	';
	
	if ($style == '1' or $style == '2') {
	?>
		<script type="text/javascript">
		window.___gcfg = {lang: '<?php echo $lang ?>'};
		(function() 
		{var po = document.createElement("script");
		po.type = "text/javascript"; po.async = true;po.src = "https://apis.google.com/js/plusone.js";
		var s = document.getElementsByTagName("script")[0];
		s.parentNode.insertBefore(po, s);
		})();</script>
	<?php	
	}
	
	echo '
	<!-- Google+ for Page | by darkomitrovic.com --!>	
	';
	
}
add_action('wp_head', 'google_code');

?>