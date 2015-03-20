<?php
/**
 * Template Name: Project Template
 *
 * @package Make
 */

get_header();
global $post;
?>

<main id="site-main" class="site-main" role="main">
	<div class="projects">
		<h2 class="page-title">Projects</h2>	
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php
			/**
			 * Allow for changing the template partial.
			 *
			 * @since 1.2.3.
			 *
			 * @param string     $type    The default template type to use.
			 * @param WP_Post    $post    The post object for the current post.
			 */		
			
			
			//Grab all projects, checking for filtering
			$projects = get_field("projects");
			
			$projectIDs = array();
			foreach($projects as $project) {
				$projectIDs[] = $project->ID;
			}
			
			$args = array( 'post_type' => 'project', 'post__in'=>$projectIDs,'order'=>'DESC', 'posts_per_page' => -1);
			$loop = new WP_Query( $args);
			
			?>
			
			<!-- Loop through the projects -->
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
						
				<!-- Image and title of project to link to project page -->
				<a href="<?php echo get_permalink();?>">
				<div class="project"> 
					<div class="thumb">
						<?php $thumb = wp_get_attachment_image_src(get_field('project_thumbnail'), 'allProjectsThumb'); ?> 
						<img src="<?php  echo $thumb[0]; ?>" />
					</div>
					<div class="project-title">
						 <?php the_title() ?>
					</div>
				</div>
				</a>
				<div class="project-year">
					<?php $year = get_field("project_year");
						echo($year);
					?>
				</div>
				<div class="project-description">
					<?php $desc = get_field("project_description");
						echo($desc);
					?>
				</div>

				<?php $projectCount++;
				?>
			<?php endwhile; ?>
			
			 
			<?php
			
			$template_type = apply_filters( 'make_template_content_archive', 'archive', $post );
			get_template_part( 'partials/content', $template_type ); ?>
		<?php endwhile; ?>
	
		<?php get_template_part( 'partials/nav', 'paging' ); ?>
	
	<?php else : ?>
		<?php get_template_part( 'partials/content', 'none' ); ?>
	<?php endif; ?>
	</div>
</main>

<?php get_footer(); ?>
