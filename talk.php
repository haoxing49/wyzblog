<?php

/* Template Name:talk*/

get_header(); ?>
<link href="<?php bloginfo('template_url'); ?>/talk.css" rel="stylesheet">

<div class="shuoshuo">
 <ul class="archives-monthlisting">
 <?php query_posts("post_type=talk&post_status=publish&posts_per_page=-1");
 if (have_posts()):while (have_posts()) : the_post();?>
 <li>
 <span class="tt"><?php the_time('Y年n月j日G:i'); ?></span>
 <div class="shuoshuo-content"><?php the_content(); ?></div>
 </li>
 <?php endwhile;?>
 <?php endif; ?>
 </ul>
</div>
<?php get_footer();?>