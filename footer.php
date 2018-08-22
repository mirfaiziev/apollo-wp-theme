<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Apollo
 * @since Apollo 0.1
 */
?>

<!-- </div>.container -->
</div><!-- #main -->

<footer id="colophon" role="contentinfo">
	<div class="row">
		

		<?php
				/*
				 * A sidebar in the footer? Yep. You can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() ) {
					get_sidebar( 'footer' );
				}
				?>		


				<div id = "supplementary" class="col">
					
					<h3 class = "widget-title text-light">Наши реквизиты</h3>
					<p class = "text-light">Україна,
						м.Київ, 01234,<br>
						вул. Старовокзальна, 17
						<br>
					тел. 502-34-62</p>
					<p class = "text-light">e-mail: info@apollo.kiev.ua</p>
				</div>

				<div id = "supplementary" class="col">
					<h3 class=" widget-title text-light ">Работа с клиентами</h3>
					<p class = "text-light"> +38 (044) 123-4567 <br>
						+38 (050) 123-4567 <br>
						+38 (067) 123-4567 <br>	
					</p>
						
						<a href="" class="text-light "><i class="fa fa-vk" aria-hidden="true"></i></a>
						<a href="" class="text-light "><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="" class="text-light "><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="" class="text-light "><i class="fa fa-google" aria-hidden="true"></i></a>
				</div>
				
			</div><!-- #page -->
</footer><!-- #colophon -->

			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script>window.jQuery || document.write('<script src="vendor/jquery-3.2.1.slim.min.js"><\/script>')</script>


			<?php wp_footer(); ?>

		</body>
		</html>
