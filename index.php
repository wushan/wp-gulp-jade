<?php
/**
 * Index File
 */

get_header();

?>
<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class='restrict'>
			<article id="post-<?php the_ID(); ?>" role="article">
				<header class="article-header">

					<h1 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					<p class="entry-meta">
						<?php printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
	   								/* the time the post was published */
	   								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
	   								/* the author of the post */
	   								'<span class="by">'.__( 'by', 'bonestheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
						); ?>
					</p>
				</header>

				<section class="entry-content">
					<?php the_content(); ?>
				</section>

				<footer class="article-footer">
				</footer>

			</article>
		</div>
	<?php endwhile; ?>
	<?php else : ?>
		<div class='restrict'>
			<article id="post-not-found" class="hentry">
				<header class="article-header">
					<h1>Oops, Post Not Found!</h1>
				</header>
					<section class="entry-content">
					<p>Uh Oh. Something is missing. Try double checking things.</p>
				</section>
				<footer class="article-footer">
					<p>This is the error message in the index.php template.</p>
				</footer>
			</article>
		</div>

	<?php endif; ?>


</main>

<?php get_sidebar(); ?>



<?php get_footer(); ?>
