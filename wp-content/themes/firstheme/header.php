<?php /***The Header for theme.*/ ?>

<!DOCTYPE html>

<!--[if IE 7]>

<html class="ie ie7" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 8]>

<html class="ie ie8" <?php language_attributes(); ?>>

<![endif]-->

<!--[if !(IE 7) | !(IE 8)  ]><!-->

<html <?php language_attributes(); ?> dir="<?php echo $rtl = get_option("first_theme_rtl"); ?>">

<!--<![endif]-->

<head>

		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0" />


		<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>

        

		<link type="text/css" rel="stylesheet" href="/min/b=wp-content/themes/<?php echo get_template(); ?>&amp;f=css/bootstrap.min.css,css/bootstrap-responsive.min.css,css/font-awesome.css,css/modulposition.css,css/docs.css,admin/config.css,style.css" />
        
		<script type="text/javascript" src="/min/b=wp-content/themes/firstheme/js&amp;f=bootstrap.min.js,jquery.min.js"></script> 
        
        <!--[if lt IE 9]>
			<script type="text/javascript" src="wp-content/themes/<?php echo get_template(); ?>/js/html5.js"></script>
        <![endif]-->

        <!--[if lt IE 9]>

        	<link type="text/css" rel="stylesheet" href="wp-content/themes/<?php echo get_template(); ?>/css/font-awesome-ie7.min.css" />

        <![endif]-->
		


		<?php include (TEMPLATEPATH. '/css/dyn-css.php'); ?>

        

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        

		<link href='http://fonts.googleapis.com/css?family=<?php $title_font = get_option("first_theme_title_font"); echo str_replace(" ","+","$title_font"); ?>:<?php $title_font_weight = get_option("first_theme_title_font_weight"); echo "$title_font_weight"; ?>|<?php $subtitle_font = get_option("first_theme_subtitle_font"); echo str_replace(" ","+","$subtitle_font"); ?>:<?php $subtitle_font_weight = get_option("first_theme_subtitle_font_weight"); echo "$subtitle_font_weight"; ?>|<?php $body_font = get_option("first_theme_body_font"); echo str_replace(" ","+","$body_font"); ?>:<?php $body_font_weight = get_option("first_theme_body_font_weight"); echo "$body_font_weight"; ?>|<?php $my_font = get_option("first_theme_my_font"); echo str_replace(" ","+","$my_font"); ?>:<?php $my_font_weight = get_option("first_theme_my_font_weight"); echo "$my_font_weight"; ?>' rel='stylesheet' type='text/css'>



        <?php wp_head(); ?>

</head>



<body <?php body_class(); ?>>
<div class="wrapper">

	<header>

        	<div class="row-fluid">

				<div class="container">

					<div class="fluid-grid">


                        	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('top-a') ) : endif; ?>
                            
                            
                            
                            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('top-b') ) : endif; ?>
                            

                     <div class="row-fluid">    
                   

							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('logo-one') ) : endif; ?>

        

                            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('logo-two') ) : endif; ?>

        

                            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('search') ) : endif; ?>

        

                            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('menu-one') ) : endif; ?>

        

                            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('menu-two') ) : endif; ?>

						</div>

					</div>

				</div>

            </div>

	</header>