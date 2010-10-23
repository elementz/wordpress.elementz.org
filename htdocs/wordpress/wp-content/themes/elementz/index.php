<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Elementz
 * @subpackage Give Camp Theme
 * @since 2010
 */

  get_header();
?>
  <div id="container">
    <div id="content" role="main">
      <?php get_template_part('loop', 'index'); ?>
    </div><!-- #content -->
  </div><!-- #container -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>