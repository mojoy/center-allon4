<?php

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Archive Template
 *
 * @file           archive.php
 */

get_header(); ?>




	<main class="main-content inner" id="main-content" role="main">
		<div class="main-content-inner">
			<div class="page-wrapper wrapper page-pdf">
				<div class="page-content content sections ">

					<?php
					global $template;
					echo basename($template);
					?>

					<h1><?php single_cat_title(); ?></h1>

					<div class="box-video-holder">
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="box-holder"  itemscope itemtype="http://schema.org/ImageObject">
								<?php edit_post_link('редактировать', '<p class="btn-edit">', '</p>'); ?>
								1
							</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	</main>


<?php get_footer(); ?>