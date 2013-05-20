    <head>

    	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/admin/css/jquery.ui.all.css">

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/admin/css/farbtastic.css" type="text/css" />

		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/admin/js/farbtastic.js"></script>		

		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/admin/js/jquery-1.9.1.js"></script>

        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/admin/js/jquery.ui.core.js"></script>

        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/admin/js/jquery.ui.widget.js"></script>

        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/admin/js/jquery.ui.accordion.js"></script>

        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/admin/js/rm.js"></script>

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/admin/css/demos.css">

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/admin/css/admin.css">

        <script>

			$(function() {

				$( "#accordion" ).accordion({

					collapsible: true

				});

			});

            function showdiv(id){

			document.getElementById(id).style.display = "block";

			}

        </script>

		<script type="text/javascript">

			jQuery(document).ready(function($){
				$('.my-color-field').wpColorPicker();
			});

        </script>

    </head>

    <body>

        <div class="wrap"> 

            <?php screen_icon('themes'); ?> <h2>Front page elements</h2>  

            <div id="message" class="updated" style="display:none">Settings saved</div> 

            <form method="POST" action="">

                <div id="accordion">

                    <h3>Select Your google font !</h3>

                    <div>

                    	<div class="info">

                        	.css<br />

                            {<br />

                                font-family:;<br />

                            }

                        </div>

                        <table width="798" border="0" cellspacing="20">

                          <tr>

                            <td width="419">Select Title {h1, h2, h3} Font:-</td>

                            <td width="315"><?

                                    if (isset($_POST["update_settings"])) {  

                                        $title_font = esc_attr($_POST["title_font"]);

                                        update_option("first_theme_title_font", $title_font);

                                    }

                                    $title_font = get_option("first_theme_title_font");

                                    ?>

                              <select id="title_font" name="title_font">

                                <option value="<? echo $title_font; ?>" ><? echo $title_font; ?></option>

                              </select>

                              <!---------------------------------------------------------Font Weight ------------------------------------------------->

                              <?

                                    if (isset($_POST["update_settings"])) {  

                                        $title_font_weight = esc_attr($_POST["title_font_weight"]);

                                        update_option("first_theme_title_font_weight", $title_font_weight);

                                    }

                                    $title_font_weight = get_option("first_theme_title_font_weight");

                                    ?>

                            <input type="text" id="title_font_weight" name="title_font_weight"  value="<?php echo $title_font_weight;?>" size="5" /></td>

                          </tr>

                          <tr>

                            <td>Select Sub-Title {h4, h5, h6} Font:-</td>

                            <td><?

                                    if (isset($_POST["update_settings"])) {  

                                        $subtitle_font = esc_attr($_POST["subtitle_font"]);

                                        update_option("first_theme_subtitle_font", $subtitle_font);

                                    }

                                    $subtitle_font = get_option("first_theme_subtitle_font");

                                    ?>

                              <select id="subtitle_font" name="subtitle_font">

                                <option value="<? echo $subtitle_font; ?>" ><? echo $subtitle_font; ?></option>

                              </select>

                              <!---------------------------------------------------------Font Weight ------------------------------------------------->

                              <?

                                    if (isset($_POST["update_settings"])) {  

                                        $subtitle_font_weight = esc_attr($_POST["subtitle_font_weight"]);

                                        update_option("first_theme_subtitle_font_weight", $subtitle_font_weight);

                                    }

                                    $subtitle_font_weight = get_option("first_theme_subtitle_font_weight");

                                    ?>

                            <input type="text" id="subtitle_font_weight" name="subtitle_font_weight"  value="<?php echo $subtitle_font_weight;?>" size="5" /></td>

                          </tr>

                          <tr>

                            <td>Select Body Font:-</td>

                            <td><?

                                    if (isset($_POST["update_settings"])) {  

                                        $body_font = esc_attr($_POST["body_font"]);

                                        update_option("first_theme_body_font", $body_font);

                                    }

                                    $body_font = get_option("first_theme_body_font");

                                    ?>

                              <select id="body_font" name="body_font">

                                <option value="<? echo $body_font; ?>" ><? echo $body_font; ?></option>

                              </select>

                              <!---------------------------------------------------------Font Weight ------------------------------------------------->

                              <?

                                    if (isset($_POST["update_settings"])) {  

                                        $body_font_weight = esc_attr($_POST["body_font_weight"]);

                                        update_option("first_theme_body_font_weight", $body_font_weight);

                                    }

                                    $body_font_weight = get_option("first_theme_body_font_weight");

                                    ?>

                            <input type="text" id="body_font_weight" name="body_font_weight"  value="<?php echo $body_font_weight;?>" size="5" /></td>

                          </tr>

                          <tr>

                            <td height="26">Select My Font:-</td>

                            <td><?

                                    if (isset($_POST["update_settings"])) {  

                                        $my_font = esc_attr($_POST["my_font"]);

                                        update_option("first_theme_my_font", $my_font);

                                    }

                                    $my_font = get_option("first_theme_my_font");

                                    ?>

                              <select id="my_font" name="my_font">

                                <option value="<? echo $my_font; ?>" ><? echo $my_font; ?></option>

                              </select>

                              <!---------------------------------------------------------Font Weight ------------------------------------------------->

                              <?

                                    if (isset($_POST["update_settings"])) {  

                                        $my_font_weight = esc_attr($_POST["my_font_weight"]);

                                        update_option("first_theme_my_font_weight", $my_font_weight);

                                    }

                                    $my_font_weight = get_option("first_theme_my_font_weight");

                                    ?>

                            <input type="text" id="my_font_weight" name="my_font_weight"  value="<?php echo $my_font_weight;?>" size="5" /></td>

                          </tr>

                        </table>

                    </div>

                    <h3>Connect With Social !</h3>
                    <div>
                    <table width="799" border="0" cellspacing="20">
                      <tr>
                        <td width="420"><?

                                if (isset($_POST["update_settings"])) {  

                                    $tweet_user = esc_attr($_POST["tweet_user"]);

                                    update_option("first_theme_tweet_user", $tweet_user);

                                }

                                $tweet_user = get_option("first_theme_tweet_user");

						?>
                          <label>Add your Twitter Username Ex: mediaexhibitor</label></td>
                        <td width="315"><input type="text" id="tweet_user" name="tweet_user"  value="<?php echo $tweet_user;?>" size="25" /></td>
                      </tr>
                      <tr>
                        <td><?

                                if (isset($_POST["update_settings"])) {  

                                    $facebook_user = esc_attr($_POST["facebook_user"]);

                                    update_option("first_theme_facebook_user", $facebook_user);

                                }

                                $facebook_user = get_option("first_theme_facebook_user");

						?>
                          <label>Add your Facebook Username Ex: mediaexhibitor</label></td>
                        <td><input type="text" id="facebook_user" name="facebook_user"  value="<?php echo $facebook_user;?>" size="25" /></td>
                      </tr>
                      <tr>
                        <td><?

                                if (isset($_POST["update_settings"])) {  

                                    $github_user = esc_attr($_POST["github_user"]);

                                    update_option("first_theme_github_user", $github_user);

                                }

                                $github_user = get_option("first_theme_github_user");

						?>
                          <label>Add your Github Username Ex: mediaexhibitor</label></td>
                        <td><input type="text" id="github_user" name="github_user"  value="<?php echo $github_user;?>" size="25" /></td>
                      </tr>
                      <tr>
                        <td><?

                                if (isset($_POST["update_settings"])) {  

                                    $linkedin_user = esc_attr($_POST["linkedin_user"]);

                                    update_option("first_theme_linkedin_id", $linkedin_user);

                                }

                                $linkedin_user = get_option("first_theme_linkedin_id");

						?>
                          <label>Add your Linkedin ID Ex: 123456789</label></td>
                        <td><input type="text" id="linkedin_user" name="linkedin_user"  value="<?php echo $linkedin_user;?>" size="25" /></td>
                      </tr>
                      <tr>
                        <td><?

                                if (isset($_POST["update_settings"])) {  

                                    $pinterest_user = esc_attr($_POST["pinterest_user"]);

                                    update_option("first_theme_pinterest_user", $pinterest_user);

                                }

                                $pinterest_user = get_option("first_theme_pinterest_user");

						?>
                          <label>Add your Pinterest Username Ex: mediaexhibitor</label></td>
                        <td><input type="text" id="pinterest_user" name="pinterest_user"  value="<?php echo $pinterest_user;?>" size="25" /></td>
                      </tr>
                      <tr>
                        <td><?

                                if (isset($_POST["update_settings"])) {  

                                    $google_plus_user = esc_attr($_POST["google_plus_user"]);

                                    update_option("first_theme_google_plus_url", $google_plus_user);

                                }

                                $google_plus_user = get_option("first_theme_google_plus_url");

						?>
                          <label>Add your Google Plus Full URL Ex: https://plus.google.com/u/0/***********************/posts</label></td>
                        <td><input type="text" id="google_plus_user" name="google_plus_user"  value="<?php echo $google_plus_user;?>" size="25" /></td>
                      </tr>
                    </table>
                    </div>
                    
                    <h3>Anaylaze From Google !</h3>
                    <div>
                      <table width="803" border="0" cellspacing="20">
                   	    <tr>
                   	      <td width="424">
						  <?

                                if (isset($_POST["update_settings"])) {  

                                    $google_anaylatic_id = esc_attr($_POST["google_anaylatic_id"]);

                                    update_option("first_theme_google_anaylatic_id", $google_anaylatic_id);

                                }

                                $google_anaylatic_id = get_option("first_theme_google_anaylatic_id");

						?>
                          		<label>Add your Google Anaylatics ID EX: UA-xxxxxxxx-x</label>
                          </td>
                   	      <td width="315">
								<input type="text" id="google_anaylatic_id" name="google_anaylatic_id"  value="<?php echo $google_anaylatic_id;?>" size="25" />
                          </td>
               	        </tr>
                   	    <tr>
                   	      <td>
                          	<?

                                if (isset($_POST["update_settings"])) {  

                                    $google_anaylatic_url = esc_attr($_POST["google_anaylatic_url"]);

                                    update_option("first_theme_google_anaylatic_url", $google_anaylatic_url);

                                }

                                $google_anaylatic_url = get_option("first_theme_google_anaylatic_url");

							?>
                          		<label>Add your Website Address EX: example.com (without http:// or https://)</label>
                          </td>
                   	      <td>
                          		<input type="text" id="google_anaylatic_url" name="google_anaylatic_url"  value="<?php echo $google_anaylatic_url;?>" size="25" />
                          </td>
               	        </tr>
               	      </table>
                    </div>
				<h3>Change Direction to RTL</h3>
                <div>
               	  <table width="802" border="0" cellspacing="20">
                	  <tr>
                	    <td width="425">
								<?
    
                                    if (isset($_POST["update_settings"])) {  
    
                                        $rtl = esc_attr($_POST["rtl"]);
    
                                        update_option("first_theme_rtl", $rtl);
    
                                    }
    
                                    $rtl = get_option("first_theme_rtl");
    
                                ?>
                          		<label>To Change Direction To RTL Type RTL</label>
                                </td>
                	    <td width="313">
                          		<input type="text" id="rtl" name="rtl"  value="<?php echo $rtl;?>" size="25" />
                        </td>
              	    </tr>
              	  </table>
                </div>
             </div>
<p>

                <input type="submit" value="Save settings" class="button-primary" onClick="showdiv('message');"/>  

                <input type="hidden" name="update_settings" value="Y" />

            </p>

            </form>

        </div>

	</body>