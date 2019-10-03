
<?php get_header(); ?>


<!--- Start Course Section -->
<div id="course" class="offset">
	
</div>
<!--- End Course Section -->

<!--- Start Feactures Section -->
<div id="features" class="offset">
	
</div>
<!--- End features Section -->

<!--- Start resources Section -->
<div id="resources" class="offset">
	
</div>
<!--- End resources Section -->

<!--- Start client Section -->
<div id="client" class="offset">
	
</div>
<!--- End client Section -->

<!--- Start contact Section -->
<div id="contact" class="offset">
	
</div>
<!--- End contact Section -->

<?php
    while(have_posts()){
        the_post(); ?>
       <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
       <h2><?php the_content();?></h2>

   <?php    
    }
?>

<?php get_footer();?>