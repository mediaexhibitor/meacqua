<style>
h1, h2, h3{	font-family:<?php echo $title_font = get_option("first_theme_title_font"); ?>;	font-weight:normal;}
h4, h5, h6{	font-family:<?php echo $subtitle_font = get_option("first_theme_subtitle_font"); ?>;}
body{	font-family:<?php  echo $body_font = get_option("first_theme_body_font"); ?>; color:<?php echo $body_textcolor = get_option('body_textcolor'); ?>;}
.myfont{	font-family:<?php echo $my_font = get_option("first_theme_my_font"); ?>;}
a, footer { color:<?php echo $link_color = get_option('link_color'); ?>; }
a:hover, a:hover i { color:<?php echo $link_hover_color = get_option('link_hover_color'); ?>; }
header { background-color:<?php echo $header_bgcolor = get_option('header_bgcolor'); ?>; }
footer { background-color:<?php echo $footer_bgcolor = get_option('footer_bgcolor'); ?>; }
h3.heading{ color:<?php echo $heading_textcolor = get_option('heading_textcolor'); ?>;}
i{ color:<?php echo $icon_color = get_option('icon_color'); ?>;}
</style>