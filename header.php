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
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) & !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
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
	<!-- <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" /> -->
	<link rel="pingback" href="<?php echo  get_stylesheet_directory_uri(); ?>>" />
<!--[if lt IE 9]>
<script src="<?php echo  get_stylesheet_directory_uri(); ?>/assets/js/html5.js" type="text/javascript"></script>
<![endif]-->
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

			<div class="row bg-dark" >
				<div class="col-sm-5 text-light">
					<i class="fa fa-phone" aria-hidden="true"></i>
					+38 (050) 123-4567 
					<i class="fa fa-clock-o" aria-hidden="true"></i>
					7/24 экстренная помощь
				</div>
				
				<div class="col text-light" align = "right">
					<a href="" class="text-light bg-dark"><i class="fa fa-vk" aria-hidden="true"></i></a>
					<a href="" class="text-light bg-dark"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="" class="text-light bg-dark"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href="" class="text-light bg-dark"><i class="fa fa-google" aria-hidden="true"></i></a>
				</div>
			</div> 

			<div class="row">
				<div class="col-md-3" ><img src="<?php echo  get_stylesheet_directory_uri(); ?>/images/logo_apollo.png" class="img-fluid" alt="" width="30%" alt="Responsive image"></div>
				
				<div class="col-md-9">
					<div class="row" align = "right">
						<div class="col-sm-8">
							<p align = "right">
								<br>
								<button type="button" class="btn btn-danger mt-1" data-toggle="modal" data-target="#exampleModalCenter">Записаться на прием</button>
							</p>
						</div>
						<!-- Button trigger modal -->
						<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  					Запустить модальное окно
  				</button> -->

  				<!-- Modal -->
  				<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  					<div class="modal-dialog modal-dialog-centered" role="document">
  						<div class="modal-content">
  							<div class="modal-header">
  								<h5 class="modal-title" id="exampleModalLongTitle">Записатся на прием</h5>
  								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  									<span aria-hidden="true">&times;</span>
  								</button>
  							</div>
  							<div class="modal-body">

  								<form method="POST" action="/"> 
  									<div class="row">
  										<div class="col-4">
  											<p class="text-left">Ваш телефон: </p>
  											<p class="text-left">Дата посещения:</p>
  											<p class="text-left">В какое отделение:</p>
  											<p class="text-left">К какому Специалисту:</p> 

  											<!-- <input type="submit" /> -->
  										</div>
  										<div class="col">
  											<p class="text-left"><input type="text" name="phone"/></p>
  											<p class="text-left"><input type="text" name="date" /></p>
  											<p class="text-left"><input type="text" name="service" /></p>
  											<p class="text-left"><input type="text" name="specialist" /></p>
  										</div>
  									</div>
  									<p class="text-left">Tекст: <textarea name="message" placeholder="Введите дополнительную информацию о цели Вашего визита"></textarea></p>
  								</form>
  							</div>

  							<div class="modal-footer">
  								<button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
  								<button type="button" class="btn btn-primary">Отправить</button>
  							</div>
  						</div>
  					</div>
  				</div>


  				<div class="col-sm-4" >
  					<p>
  						+38 (044) 123-4567 <br>
  						+38 (050) 123-4567 <br>
  						+38 (067) 123-4567 <br>						
  					</p>	
  				</div>
  			</div> <!-- class = "row" -->
  		</div>
  		</div>
  	

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


  <h3 class = 'widget-title'>ПОИСК</h3>
  <form method="get" id="searchform" action="http://localhost/">
  	<label for="s" class="assistive-text">Search</label>
  	<input class="field" name="s" id="s" placeholder="Поиск" type="text">
  	<input class="submit" name="submit" id="searchsubmit" value="Поиск" type="submit">
  </form>
</nav>




<div id="main">
