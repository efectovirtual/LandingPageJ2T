
<?php get_header(); ?>

<div class="fixed-width">
    <div class="row">
        <div class="col-md-12">
            <ul class="bxslider">
			  <li style="background: url(<?php echo get_template_directory_uri(); ?>/images/b001.jpg); background-position: center; background-size: cover;"><img src="<?php echo get_template_directory_uri(); ?>/images/bg.png" /></li>
			  <li style="background: url(<?php echo get_template_directory_uri(); ?>/images/b002.jpg); background-position: center; background-size: cover;"><img src="<?php echo get_template_directory_uri(); ?>/images/bg.png" /></li>
			</ul>
        </div>
    </div>
</div>


<div class="container ontop">
	
	<div class="row">
		<div class="col-lg-3 col-xs-offset-6  col-md-offset-9 text-center">
			<ul class="menu-language">
				<li><a href="#"><?php the_field('selectlanguage') ?></a>
					<ul class="submenu-language"><?php pll_the_languages();?></ul>
				</li>
			</ul>
		</div>
	</div>

<div class="menulogo">
	<div class="row">
		<div class="col-sm-12 col-lg-4">
			<div class="col-md-12 text-center">
				<img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logoj2t.png" alt="J2T">
			</div>
		</div>

		<div class="col-sm-12 col-lg-8">
			<ul class="botonestop text-center">
	                <nav class="navterm" role="navigation">
						<?php top_menu(); ?>
					</nav>
			</ul>
		</div>

	</div>
</div>


				


			<div class="row">

				<div class="col-md-8 col-sm-12">

					<div class="col-md-6 col-sm-12 botonj2t">
						<a href="<?php the_field('url1'); ?>"><div class="botonopen"><p><?php the_field('button1'); ?></p></div></a>
					</div>
					<div class="col-md-6 col-sm-12 botonj2t">
						<a href="<?php the_field('url2'); ?>"><div class="botonopen"><p><?php the_field('button2'); ?></p></div></a>
					</div>

				</div>

				<div class="col-md-4 col-sm-12 botonj2t">
					<a href="<?php the_field('url3'); ?>"><div class="botonopen2"><p><?php the_field('button3'); ?></p></div></a>
				</div>

			</div>
	
</div>
		

<?php get_footer(); ?>



