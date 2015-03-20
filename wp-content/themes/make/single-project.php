<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Make
 */
 
get_header(); ?>

<?php
	$projectYear	= get_field("project_year");
	$projectDate	= get_field("project_date");
	$projectDesc	= get_field("project_description");

	$projectSite	= get_field("project_website");
	$projectProcess = get_field("project_process_site");
		
	$images			= get_field("project_images");
	$people			= get_field("project_people");
	$collaborators	= get_field("project_collaborators");
	$sponsors		= get_field("project_sponsors");
	$press			= get_field("project_press");
?>

<div id="project">
	<div id="project-title">
		<?php echo the_title(); ?>
	</div>
	
	<div id="project-year">
		<?php echo($projectYear); ?>
	</div>
	
	<div id="project-people">
		<ul>
		<?php if($people) foreach($people as $person):?>
			<?php
				echo( "<li class='person'>" 
					. get_field("person_first_name",$person) . " " 
					. get_field("person_last_name",$person)
					//. ", " . get_field("person_title", $person)
					. "</li>");
			?>
		<?php endforeach;  ?>
		</ul>
	</div>
	
	<div id="project-description">
		<?php echo($projectDesc); ?>
	</div>
	
	<div id="links-to-project-sites">
		<ul>
			<?php if($projectSite) echo("<li><a href='http://" . $projectSite . "'>" . $projectSite . "</a></li>"); ?>
			<?php if($projectProcess) echo("<li><a href='http://" . $projectProcess . "'>" . $projectProcess . "</a></li>"); ?>
		</ul>
	</div>
	

</div>
			
<?php get_footer(); ?>