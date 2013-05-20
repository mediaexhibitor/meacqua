<?php

	function setup_theme_admin_menus() {  

	add_theme_page('Theme settings', 'Theme settings', 'manage_options', 'theme_settings', 'theme_settings_page');  

    }  

      

    // We also need to add the handler function for the top level menu  

    function theme_settings_page() {  

		include (TEMPLATEPATH .'/admin/index.php');

    }  

	

	add_action("admin_menu", "setup_theme_admin_menus");  

	

	if (is_admin()) {  

		wp_enqueue_script('jquery-ui-sortable');  

	} 

	

	/**

	 * Setup the WordPress core custom background feature.

	 *

	 * Use add_theme_support to register support for WordPress 3.4+

	 * as well as provide backward compatibility for previous versions.

	 * Use feature detection of wp_get_theme() which was introduced

	 * in WordPress 3.4.

	 *

	 * Hooks into the after_setup_theme action.

	 *

	 */

	function shape_register_custom_background() {

		$args = array(

			'default-color' => 'e9e0d1',

		);

	 

		$args = apply_filters( 'shape_custom_background_args', $args );

	 

		if ( function_exists( 'wp_get_theme' ) ) {

			add_theme_support( 'custom-background', $args );

		}

	}

	add_action( 'after_setup_theme', 'shape_register_custom_background' );

	

	

	

	/*?>---------------------------------------Meta Box For Post-----------------------------------<?php */

	

	add_action( 'add_meta_boxes', 'firstheme_post_extra_add' );

	function firstheme_post_extra_add()

	{

		add_meta_box( 'my-meta-box-id', 'Post Extra settings', 'firstheme_post_extra_subtitle', 'post', 'normal', 'high' );

	}

	

	function firstheme_post_extra_subtitle( $post )

	{

		$values = get_post_custom( $post->ID );

		$text = isset( $values['firstheme_subtitle_text'] ) ? esc_attr( $values['firstheme_subtitle_text'][0] ) : '';

        $video_id = isset( $values['firstheme_video_id'] ) ? esc_attr( $values['firstheme_video_id'][0] ) : '';
		
		$video_width = isset( $values['firstheme_video_width'] ) ? esc_attr( $values['firstheme_video_width'][0] ) : '';
		
		$video_height = isset( $values['firstheme_video_height'] ) ? esc_attr( $values['firstheme_video_height'][0] ) : '';

		$option_left = isset( $values['left_sidebar'] ) ? esc_attr( $values['left_sidebar'][0] ) : '';

		$option_right = isset( $values['right_sidebar'] ) ? esc_attr( $values['right_sidebar'][0] ) : '';

		wp_nonce_field( 'firstheme_subtitle_nonce', 'meta_box_nonce' );

		?>

		<p>
			<label>Add Your Post Subtitle</label>
			<input type="text" name="firstheme_subtitle_text" id="firstheme_subtitle_text" value="<?php echo $text; ?>" size="150"/>

		</p>
		<br />
        <p>

        	<label>Select Left Sidebar Width</label>

			<select id="left_sidebar" name="left_sidebar">

            	<option value="" <?php selected( $option_left, '' ); ?>>None</option>

            	<option value="span1" <?php selected( $option_left, 'span1' ); ?>>span1</option>

                <option value="span2" <?php selected( $option_left, 'span2' ); ?>>span2</option>

                <option value="span3" <?php selected( $option_left, 'span3' ); ?>>span3</option>

                <option value="span4" <?php selected( $option_left, 'span4' ); ?>>span4</option>

                <option value="span5" <?php selected( $option_left, 'span5' ); ?>>span5</option>

                <option value="span6" <?php selected( $option_left, 'span6' ); ?>>span6</option>

            </select>

        	<label>Select Right Sidebar Width</label>

			<select id="right_sidebar" name="right_sidebar">

            	<option value="" <?php selected( $option_right, '' ); ?>>None</option>

            	<option value="span1" <?php selected( $option_right, 'span1' ); ?>>span1</option>

                <option value="span2" <?php selected( $option_right, 'span2' ); ?>>span2</option>

                <option value="span3" <?php selected( $option_right, 'span3' ); ?>>span3</option>

                <option value="span4" <?php selected( $option_right, 'span4' ); ?>>span4</option>

                <option value="span5" <?php selected( $option_right, 'span5' ); ?>>span5</option>

                <option value="span6" <?php selected( $option_right, 'span6' ); ?>>span6</option>

            </select>

		</p>
		<br />
        <p>
			<label>Add Vimeo ID</label>
			<input type="text" name="firstheme_video_id" id="firstheme_video_id" value="<?php echo $video_id; ?>" size="25"/>
            <label>Add Vimeo Width</label>
			<input type="text" name="firstheme_video_width" id="firstheme_video_width" value="<?php echo $video_width; ?>" size="25"/>
            <label>Add Vimeo Height</label>
			<input type="text" name="firstheme_video_height" id="firstheme_video_height" value="<?php echo $video_height; ?>" size="25"/>

		</p>
		<?php	

	}

	

	

	add_action( 'save_post', 'cd_meta_box_save' );

	function cd_meta_box_save( $post_id )

	{

		// Bail if we're doing an auto save

		if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

		

		// if our nonce isn't there, or we can't verify it, bail

		if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'firstheme_subtitle_nonce' ) ) return;

		

		// if our current user can't edit this post, bail

		if( !current_user_can( 'edit_post' ) ) return;

		

		// now we can actually save the data

		$allowed = array( 

			'a' => array( // on allow a tags

				'href' => array() // and those anchords can only have href attribute

			)

		);

		

		// Probably a good idea to make sure your data is set

		if( isset( $_POST['firstheme_subtitle_text'] ) )

			update_post_meta( $post_id, 'firstheme_subtitle_text', wp_kses( $_POST['firstheme_subtitle_text'], $allowed ) );
			
		if( isset( $_POST['firstheme_video_id'] ) )

			update_post_meta( $post_id, 'firstheme_video_id', wp_kses( $_POST['firstheme_video_id'] ) );
		
		if( isset( $_POST['firstheme_video_width'] ) )

			update_post_meta( $post_id, 'firstheme_video_width', wp_kses( $_POST['firstheme_video_width'] ) );
		
		if( isset( $_POST['firstheme_video_height'] ) )

			update_post_meta( $post_id, 'firstheme_video_height', wp_kses( $_POST['firstheme_video_height'] ) );
		

		if( isset( $_POST['left_sidebar'] ) )

			update_post_meta( $post_id, 'left_sidebar', wp_kses( $_POST['left_sidebar'] ) );

		if( isset( $_POST['right_sidebar'] ) )

			update_post_meta( $post_id, 'right_sidebar', wp_kses( $_POST['right_sidebar'] ) );

	}

	

	

	/*?>---------------------------------------Meta Box For Page-----------------------------------<?php */

	

	

	

	add_action( 'add_meta_boxes', 'firstheme_post_extra' );

	function firstheme_post_extra()

	{

		add_meta_box( 'my-meta-box-id', 'Page Extra settings', 'firstheme_page_extra_config', 'page', 'normal', 'high' );

	}

	

	function firstheme_page_extra_config( $post )

	{

		$values = get_post_custom( $post->ID );
		
        $video_id = isset( $values['firstheme_video_id'] ) ? esc_attr( $values['firstheme_video_id'][0] ) : '';
		
		$video_width = isset( $values['firstheme_video_width'] ) ? esc_attr( $values['firstheme_video_width'][0] ) : '';
		
		$video_height = isset( $values['firstheme_video_height'] ) ? esc_attr( $values['firstheme_video_height'][0] ) : '';

		$option_left = isset( $values['left_sidebar'] ) ? esc_attr( $values['left_sidebar'][0] ) : '';

		$option_right = isset( $values['right_sidebar'] ) ? esc_attr( $values['right_sidebar'][0] ) : '';

		wp_nonce_field( 'firstheme_meta_box_nonce', 'meta_box_nonce' );

		?>
		
        <p>
			<label>Add Vimeo ID</label>
			<input type="text" name="firstheme_video_id" id="firstheme_video_id" value="<?php echo $video_id; ?>" size="25"/>
            <label>Add Vimeo Width</label>
			<input type="text" name="firstheme_video_width" id="firstheme_video_width" value="<?php echo $video_width; ?>" size="25"/>
            <label>Add Vimeo Height</label>
			<input type="text" name="firstheme_video_height" id="firstheme_video_height" value="<?php echo $video_height; ?>" size="25"/>

		</p>
        
		<br />
		<p>

        	<label>Select Left Sidebar Width</label>

			<select id="left_sidebar" name="left_sidebar">

            	<option value="" <?php selected( $option_left, '' ); ?>>None</option>

            	<option value="span1" <?php selected( $option_left, 'span1' ); ?>>span1</option>

                <option value="span2" <?php selected( $option_left, 'span2' ); ?>>span2</option>

                <option value="span3" <?php selected( $option_left, 'span3' ); ?>>span3</option>

                <option value="span4" <?php selected( $option_left, 'span4' ); ?>>span4</option>

                <option value="span5" <?php selected( $option_left, 'span5' ); ?>>span5</option>

                <option value="span6" <?php selected( $option_left, 'span6' ); ?>>span6</option>

            </select>

        	<label>Select Right Sidebar Width</label>

			<select id="right_sidebar" name="right_sidebar">

            	<option value="" <?php selected( $option_right, '' ); ?>>None</option>

            	<option value="span1" <?php selected( $option_right, 'span1' ); ?>>span1</option>

                <option value="span2" <?php selected( $option_right, 'span2' ); ?>>span2</option>

                <option value="span3" <?php selected( $option_right, 'span3' ); ?>>span3</option>

                <option value="span4" <?php selected( $option_right, 'span4' ); ?>>span4</option>

                <option value="span5" <?php selected( $option_right, 'span5' ); ?>>span5</option>

                <option value="span6" <?php selected( $option_right, 'span6' ); ?>>span6</option>

            </select>

		</p>

		<?php	

	}

	

	

	add_action( 'save_post', 'firstheme_page_box_save' );

	function firstheme_page_box_save( $post_id )

	{

		// Bail if we're doing an auto save

		if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

		

		// if our nonce isn't there, or we can't verify it, bail

		if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'firstheme_meta_box_nonce' ) ) return;



		// if our current user can't edit this post, bail

		if( !current_user_can( 'edit_post' ) ) return;

		

		// now we can actually save the data

		$allowed = array( 

			'a' => array( // on allow a tags

				'href' => array() // and those anchords can only have href attribute

			)

		);

		

		// Probably a good idea to make sure your data is set
		
		if( isset( $_POST['firstheme_video_id'] ) )

			update_post_meta( $post_id, 'firstheme_video_id', wp_kses( $_POST['firstheme_video_id'] ) );
		
		if( isset( $_POST['firstheme_video_width'] ) )

			update_post_meta( $post_id, 'firstheme_video_width', wp_kses( $_POST['firstheme_video_width'] ) );
		
		if( isset( $_POST['firstheme_video_height'] ) )

			update_post_meta( $post_id, 'firstheme_video_height', wp_kses( $_POST['firstheme_video_height'] ) );
		
		if( isset( $_POST['left_sidebar'] ) )

			update_post_meta( $post_id, 'left_sidebar', wp_kses( $_POST['left_sidebar'] ) );

		if( isset( $_POST['right_sidebar'] ) )

			update_post_meta( $post_id, 'right_sidebar', wp_kses( $_POST['right_sidebar'] ) );
		

	}

	

	

	

	if ( ! function_exists('first_theme_features') ) {



	// Register Theme Features

	function first_theme_features()  {

		global $wp_version;

	

		// Add theme support for Automatic Feed Links

		if ( version_compare( $wp_version, '3.0', '>=' ) ) :

			add_theme_support( 'automatic-feed-links' );

		endif;

	

		// Add theme support for Post Formats

		$formats = array( 'status', 'quote', 'gallery', 'image', 'video', 'audio', 'link', 'aside', 'chat', );

		add_theme_support( 'post-formats', $formats );	

	

		// Add theme support for Featured Images

		add_theme_support( 'post-thumbnails', array( 'post', 'page', 'movie' ) );	

	

		// Add theme support for Custom Background

		$background_args = array(

			'default-color'          => 'efefef',

			'default-image'          => '',

			'wp-head-callback'       => '_first_theme_background',

			'admin-head-callback'    => '',

			'admin-preview-callback' => '',

		);

		if ( version_compare( $wp_version, '3.4', '>=' ) ) :

			add_theme_support( 'custom-background', $background_args );

		endif;

	

		// Add theme support for Custom Header

		$header_args = array(

			'default-image'          => '',

			'width'                  => 0,

			'height'                 => 0,

			'flex-width'             => true,

			'flex-height'            => true,

			'random-default'         => false,

			'header-text'            => false,

			'default-text-color'     => '',

			'uploads'                => true,

	

		);

		if ( version_compare( $wp_version, '3.4', '>=' ) ) :

			add_theme_support( 'custom-header', $header_args );

		endif;

	}

	

	// Hook into the 'after_setup_theme' action

	add_action( 'after_setup_theme', 'first_theme_features' );

	

	}

	

	

	

	// Add Shortcode

	function twitter_shortcode() {

	

	// Code

	$tweet_user = get_option("first_theme_tweet_user");

	include_once(ABSPATH . WPINC . '/feed.php');

	$rss = fetch_feed("https://api.twitter.com/1/statuses/user_timeline.rss?screen_name=".$tweet_user);

	$maxitems = $rss->get_item_quantity(2);

	$rss_items = $rss->get_items(0, $maxitems);

	?>

	<ul>

	<?php if ($maxitems == 0) echo '<li>No items.</li>';

	else

	// Loop through each feed item and display each item as a hyperlink.

	foreach ( $rss_items as $item ) : ?>

	<i class="icon-twitter"></i><li>

	<a href='<?php echo $item->get_permalink(); ?>'>

	<?php echo $item->get_title(); ?>

	</a>

	</li>

	<?php endforeach; ?>

	</ul><?

	return '';

	}

	add_shortcode( 'tweet', 'twitter_shortcode' );

	

	function register_my_menus() {

	  register_nav_menus(

		array(

		  'header-menu' => __( 'Header Menu', 'firstheme' ),

		  'sidebar-menu' => __( 'Sidebar Menu', 'firstheme' ),

		  'footer-menu' => __( 'Footer Menu', 'firstheme' )

		)

	  );

	}

	add_action( 'init', 'register_my_menus' );

	

	function my_theme_add_editor_styles() {

		add_editor_style( 'custom-editor-style.css' );

	}

	add_action( 'init', 'my_theme_add_editor_styles' );
	
	
	
	
	// Add Shortcode
	function firstheme_social() { ?>
	<div class="social">
	<a href="https://twitter.com/<? echo $tweet_user = get_option("first_theme_tweet_user"); ?>"><i class="icon-twitter"></i></a>
	<a href="http://www.facebook.com/<? echo $tweet_user = get_option("first_theme_facebook_user"); ?>"><i class="icon-facebook-sign"></i></a>
	<a href="https://github.com/<? echo $tweet_user = get_option("first_theme_github_user"); ?>"><i class="icon-github-alt"></i></a>
	<a href="http://www.linkedin.com/profile/view?id=<? echo $tweet_user = get_option("first_theme_linkedin_id"); ?>"><i class="icon-linkedin-sign"></i></a>
	<a href="http://pinterest.com/<? echo $tweet_user = get_option("first_theme_pinterest_user"); ?>"><i class="icon-pinterest-sign"></i></a>
	<a href="<? echo $tweet_user = get_option("first_theme_google_plus_url"); ?>"><i class="icon-google-plus-sign"></i></a>
	</div>
	<? return '';
	}
	add_shortcode( 'socialmedia', 'firstheme_social' );



	// Add Shortcode
	function google_analytics() {?>
			<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			  ga('create', '<?php echo $google_anaylatic_id = get_option("first_theme_google_anaylatic_id"); ?>', '<?php echo $google_anaylatic_url = get_option("first_theme_google_anaylatic_url"); ?>');
			  ga('send', 'pageview');</script><?
	return '';
	}
	add_shortcode( 'google_analytics_shortcode', 'google_analytics' );





/**
 * Contains methods for customizing the theme customization screen.
 * 
 * @link http://codex.wordpress.org/Theme_Customization_API
 * @since firstheme 1.0
 */
class firstheme_Customize
{
   
   /**
    * This hooks into 'customize_register' (available as of WP 3.4) and allows
    * you to add new sections and controls to the Theme Customize screen.
    * 
    * Note: To enable instant preview, we have to actually write a bit of custom
    * javascript. See live_preview() for more.
    *  
    * @see add_action('customize_register',$func)
    * @param \WP_Customize_Manager $wp_customize
    * @link http://ottopress.com/2012/how-to-leverage-the-theme-customizer-in-your-own-themes/
    * @since firstheme 1.0
    */
   public static function register ( $wp_customize )
   {
     
		//2. Register new settings to the WP database...
		$wp_customize->add_setting(
		'link_color', //Give it a SERIALIZED name (so all theme settings can live under one db record)
		array(
			'default' => '#2BA6CB', //Default setting/value to save
			'type' => 'option', //Is this an 'option' or a 'theme_mod'?
			'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
			'transport' => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
		 ) );
		 $wp_customize->add_setting(
		'link_hover_color', //Give it a SERIALIZED name (so all theme settings can live under one db record)
		array(
			'default' => '#2BA6CB', //Default setting/value to save
			'type' => 'option', //Is this an 'option' or a 'theme_mod'?
			'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
			'transport' => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
		 ) );
		$wp_customize->add_setting(
		'header_bgcolor',
		array(
			'default'     => '#F5F5F5', //Default setting/value to save
			'type' => 'option', //Is this an 'option' or a 'theme_mod'?
			'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
			'transport'   => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
		) );
		$wp_customize->add_setting(
		'footer_bgcolor',
		array(
			'default'     => '#F5F5F5', //Default setting/value to save
			'type' => 'option', //Is this an 'option' or a 'theme_mod'?
			'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
			'transport'   => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
		) 
		); 
		$wp_customize->add_setting(
		'body_textcolor',
		array(
			'default'     => '#272727', //Default setting/value to save
			'type' => 'option', //Is this an 'option' or a 'theme_mod'?
			'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
			'transport'   => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
		) 
		);
		$wp_customize->add_setting(
		'heading_textcolor',
		array(
			'default'     => '#272727', //Default setting/value to save
			'type' => 'option', //Is this an 'option' or a 'theme_mod'?
			'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
			'transport'   => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
		) 
		);
		$wp_customize->add_setting(
		'icon_color',
		array(
			'default'     => '#000000', //Default setting/value to save
			'type' => 'option', //Is this an 'option' or a 'theme_mod'?
			'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
			'transport'   => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
		) 
		);
	  
            
		//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
		$wp_customize->add_control( new WP_Customize_Color_Control( //Instantiate the color control class
		$wp_customize, //Pass the $wp_customize object (required)
			'link_color', //Set a unique ID for the control
		array(
			'label' => __( 'Link Color', 'firstheme' ), //Admin-visible name of the control
			'section' => 'colors', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
			'settings' => 'link_color', //Which setting to load and manipulate (serialized is okay)
		)));
		$wp_customize->add_control( new WP_Customize_Color_Control( //Instantiate the color control class
		$wp_customize, //Pass the $wp_customize object (required)
			'link_hover_color', //Set a unique ID for the control
		array(
			'label' => __( 'Link Hover Color', 'firstheme' ), //Admin-visible name of the control
			'section' => 'colors', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
			'settings' => 'link_hover_color', //Which setting to load and manipulate (serialized is okay)
		)));
		$wp_customize->add_control( new WP_Customize_Color_Control( //Instantiate the color control class
		$wp_customize, //Pass the $wp_customize object (required)
			'header_bgcolor',
		array(
			'label'        => __( 'Header Background Color', 'firstheme' ),
			'section'    => 'colors',
			'settings'   => 'header_bgcolor',
		)));
		$wp_customize->add_control( new WP_Customize_Color_Control( //Instantiate the color control class
		$wp_customize, //Pass the $wp_customize object (required)
			'footer_bgcolor',
		array(
			'label'        => __( 'Footer Background Color', 'firstheme' ),
			'section'    => 'colors',
			'settings'   => 'footer_bgcolor',
		)));
		$wp_customize->add_control( new WP_Customize_Color_Control( //Instantiate the color control class
		$wp_customize, //Pass the $wp_customize object (required)
			'body_textcolor',
		array(
			'label'        => __( 'Body Text Color', 'firstheme' ),
			'section'    => 'colors',
			'settings'   => 'body_textcolor',
		)));
		$wp_customize->add_control( new WP_Customize_Color_Control( //Instantiate the color control class
		$wp_customize, //Pass the $wp_customize object (required)
			'heading_textcolor',
		array(
			'label'        => __( 'Heading Text Color', 'firstheme' ),
			'section'    => 'colors',
			'settings'   => 'heading_textcolor',
		)));
		$wp_customize->add_control( new WP_Customize_Color_Control( //Instantiate the color control class
		$wp_customize, //Pass the $wp_customize object (required)
			'icon_color',
		array(
			'label'        => __( 'Icon Color', 'firstheme' ),
			'section'    => 'colors',
			'settings'   => 'icon_color',
		)));
	  
      
      //4. We can also change built-in settings by modifying properties. For instance, let's make some stuff use live preview JS...
      $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
      $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
      $wp_customize->get_setting( 'link_textcolor' )->transport = 'postMessage';
      $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
   }

   
   /**
    * This will output the custom WordPress settings to the live theme's WP head.
    * 
    * Used by hook: 'wp_head'
    * 
    * @see add_action('wp_head',$func)
    * @since firstheme 1.0
    */
   public static function header_output()
   {
      ?>
      <!--Customizer CSS--> 
      <style type="text/css">
			<?php self::generate_css('#site-title a', 'color', 'header_textcolor', '#'); ?> 
			<?php self::generate_css('body', 'background-color', 'background_color', '#'); ?>
      </style> 
      <!--/Customizer CSS-->
      <?php
   }
   
   /**
    * This outputs the javascript needed to automate the live settings preview.
    * Also keep in mind that this function isn't necessary unless your settings 
    * are using 'transport'=>'postMessage' instead of the default 'transport'
    * => 'refresh'
    * 
    * Used by hook: 'customize_preview_init'
    * 
    * @see add_action('customize_preview_init',$func)
    * @since firstheme 1.0
    */
   public static function live_preview()
   {
      wp_enqueue_script( 
           'firstheme-themecustomizer', //Give the script an ID
           get_template_directory_uri().'/admin/js/theme-customizer.js', //Define it's JS file
           array( 'jquery','customize-preview' ), //Define dependencies
           '', //Define a version (optional) 
           true //Specify whether to put in footer (leave this true)
      );
   }

    /**
     * This will generate a line of CSS for use in header output. If the setting
     * ($mod_name) has no defined value, the CSS will not be output.
     * 
     * @uses get_theme_mod()
     * @param string $selector CSS selector
     * @param string $style The name of the CSS *property* to modify
     * @param string $mod_name The name of the 'theme_mod' option to fetch
     * @param string $prefix Optional. Anything that needs to be output before the CSS property
     * @param string $postfix Optional. Anything that needs to be output after the CSS property
     * @param bool $echo Optional. Whether to print directly to the page (default: true).
     * @return string Returns a single line of CSS with selectors and a property.
     * @since firstheme 1.0
     */
    public static function generate_css( $selector, $style, $mod_name, $prefix='', $postfix='', $echo=true)
    {
      $return = '';
      $mod = get_theme_mod($mod_name);
      if ( ! empty( $mod ) )
      {
         $return = sprintf('%s { %s:%s; }',
            $selector,
            $style,
            $prefix.$mod.$postfix
         );
         if ( $echo )
         {
            echo $return;
         }
      }
      return $return;
    }
    
}

//Setup the Theme Customizer settings and controls...
add_action( 'customize_register' , array( 'firstheme_Customize' , 'register' ) );

//Output custom CSS to live site
add_action( 'wp_head' , array( 'firstheme_Customize' , 'header_output' ) );

//Enqueue live preview javascript in Theme Customizer admin screen
add_action( 'customize_preview_init' , array( 'firstheme_Customize' , 'live_preview' ) );