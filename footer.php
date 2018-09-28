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
					
					<h3 class = "widget-title text-light">Наші реквізити</h3>
					<p class = "text-light">Україна,
						ул. Старовокзальна, 17, <br>
						м. Київ, 01032
					</p>
					
						<p class = "text-light "> e-mail: <br>
							med@apollo.kiev.ua,<br>
							ldc@apollo.kiev.ua
						</p>
					</div>

				<div id = "supplementary" class="col">
					<h3 class=" widget-title text-light ">Работа с клиентами</h3>
					<p class = "text-light ">	
						тел./факс:<br> 
						+38(044) 235-7829,<br>
						+38(044) 236-7959.</p>
						<p class = "text-light ">
							пн.-пт. з 8-00 год. до 20-00 год.
						</p>				
						
				</div>
				
			</div><!-- #page -->
</footer><!-- #colophon -->

			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script>window.jQuery || document.write('<script src="vendor/jquery-3.2.1.slim.min.js"><\/script>')</script>


			<?php wp_footer(); ?>

		</body>
		</html>
