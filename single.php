<?php
/**
 * Pages Template
 * @subpackage marine
 *
 *
 * @file           page.php

 */

get_header(); ?>


<main class="main-content inner" id="main-content" role="main">
	<div class="main-content-inner">

		<!--
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb('
				<p id="breadcrumbs">','</p>
				');
			}
			?>
		-->

			<div class="heading">
				<h1 class="title"><?php the_title(); ?></h1>
			</div>
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="single-content">


				<?php the_content(); ?>

			</div>
			<?php endwhile; ?>

	</div>
</main>


<?php get_footer(); ?>
