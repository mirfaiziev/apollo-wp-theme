<?php

/**
 * Header template for the theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage Apollo
 * @since Apollo 0.1
 */
?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />

	
	<title>
		<?php
	// Print the <title> tag based on what is being viewed.
		global $page, $paged;

		wp_title( '|', true, 'right' );

	// Add the blog name.
		bloginfo( 'name' );

	// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) ) {
			echo " | $site_description";
		}


		?>
	</title>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php echo  get_stylesheet_directory_uri(); ?>>" />

<?php
	/*
	 * We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	/*
	 * Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */



	wp_head();
	?>


</head>

<body <?php body_class(); ?>>
	<div class="container">

		<div class="header">

			<div class="row">
				<div class="col-md-3" ><br><img src="<?php echo  get_stylesheet_directory_uri(); ?>/images/logo_apollo.png" class="img-fluid" alt="Responsive image">
        </div>
				
				
					

            <div class="col-md-9" ><br>
              <h1 class ="text-primary text-right font-weight-bold" >ЛІКУВАЛЬНО-ДІАГНОСТИЧНИЙ ЦЕНТР «АПОЛЛО»</h1><br>
              <p class = "text-right">
                Ліцензія МОЗ серія АГ №570585.<br>
                ул. Старовокзальна, 17, м. Київ, 01032.<br>
                тел./факс: +38(044) 235-7829,<br>
                +38(044) 236-7959.<br>                
                e-mail:  med@apollo.kiev.ua,<br>
                ldc@apollo.kiev.ua.<br>      <br>
                Режим роботи: пн.-пт. з 8-00 год. до 20-00 год.          
              </p>
            </div>
           
       
      </div><!-- row --> 


<div class="row" >
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">

   <div class="col" style="background: url('<?php echo  get_stylesheet_directory_uri(); ?>/images/headers/med-thumbnail.jpg') no-repeat; background-size: 100%;">
    <div class="col" id = "we" align = "right">					
     <br>
     <br>
     <br>
     <p><img src="<?php echo  get_stylesheet_directory_uri(); ?>/images/apollo.png" class="img-fluid" alt="" width="30%" alt="Responsive image"></p>
     <h3 class = "text-primary">Мы позаботимся </h3>
     <h3 class = "text-primary">о Вашем здоровье</h3>

     <h5 class = "text-primary">Аполло предоставляет полный спектр</h5> 
     <h5 class = "text-primary">медицинского обслуживания</h5>
     <br>
     <br>
   </div>
 </div>

</a>
</div>

</div><!-- </header> -->


<nav role="navigation" class = "navbar navbar-expand-lg navbar-light bg-primary border-primary sticky-top border-top ">
 <button 
 class="navbar-toggler" 
 type="button" 
 data-toggle="collapse" 
 data-target="#navbarSupportedContent" 					
 area-label="Toggel navigation">
 <span class="navbar-toggler-icon"></span>
</button>
<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>

<?php wp_nav_menu( array( 
				// 'theme_location' => 'primary', 
 'container_class' => 'navbar-collapse collapse ',
 'container_id' => 'navbarSupportedContent',
 'menu_class' => 'navbar-nav mr-auto', 
) ); ?>



<form method="get" id="searchform" action="/">
 <label for="s" class="assistive-text">Search</label>
 <input class="field" name="s" id="s" placeholder="Поиск по сайту" type="text">
 <input class="submit" name="submit" id="searchsubmit" value="Поиск" type="submit">
</form>
</nav>




<div id="main">
