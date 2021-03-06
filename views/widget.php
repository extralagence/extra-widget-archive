<!-- This file is used to markup the public-facing widget. -->
<?php
extract( $args );
// these are the widget options
$title = apply_filters('widget_title', $instance['title']);
$show_by_date = $instance['show_by_date'];
$show_by_popularity = $instance['show_by_popularity'];
$show_by_category = $instance['show_by_category'];

// Display the widget
// Check if title is set
if ( $title ) {
	echo $before_title . $title . $after_title;
}
?>
<ul class="extra-widget-archive-handles">
	<?php if ($show_by_date) : ?>
		<li class="active">
			<a href="#extra-widget-archive-by-date">
				<span class="icon icon-clock"></span> <?php _e("Date", "extra-widget-archive"); ?>
			</a>
		</li>
	<?php endif; ?>
	<?php if ($show_by_popularity) : ?>
		<li<?php echo (!$show_by_date) ? ' class="active"' : ''; ?>>
			<a href="#extra-widget-archive-by-popularity">
				<span class="icon icon-bubbles"></span> <?php _e("Popularité", "extra-widget-archive"); ?>
			</a>
		</li>
	<?php endif; ?>
	<?php if ($show_by_category) : ?>
		<li<?php echo (!$show_by_date && !$show_by_popularity) ? ' class="active"' : ''; ?>>
			<a href="#extra-widget-archive-by-category">
				<span class="icon icon-tag"></span> <?php _e("Catégorie", "extra-widget-archive"); ?>
			</a>
		</li>
	<?php endif; ?>
</ul>

<div class="extra-widget-archive-content">
	<?php if ($show_by_date) : ?>
		<div class="extra-widget-archive-by-date active">
			<ul>
				<?php wp_get_archives(); ?>
			</ul>
		</div>
	<?php endif; ?>
	<?php if ($show_by_popularity) : ?>
		<div class="extra-widget-archive-by-popularity<?php echo (!$show_by_date) ? ' active' : ''; ?>">
			<ul>
			<?php
			$args = array(
				'posts_per_page' => 3,
				'orderby' => 'comment_count',
				'suppress_filters' => true
			);
			$popular_posts_query = new WP_Query($args);
			$popular_posts = $popular_posts_query->get_posts();
			foreach ($popular_posts as $popular_post) : ?>
				<li>
					<a href="<?php echo get_permalink($popular_post->ID); ?>"><?php echo $popular_post->post_title; ?> (<?php echo $popular_post->comment_count; ?>)</a>
				</li>
			<?php endforeach; ?>
			</ul>
		</div>
	<?php endif; ?>
	<?php if ($show_by_category) : ?>
		<div class="extra-widget-archive-by-category<?php echo (!$show_by_date && !$show_by_popularity) ? ' active' : ''; ?>">
			<ul>
				<?php wp_list_categories(array('title_li' => '')); ?>
			</ul>
		</div>
	<?php endif; ?>
</div>