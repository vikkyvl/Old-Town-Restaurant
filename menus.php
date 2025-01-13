<?php
/* Template Name: Menus */
get_header(); 
?>
<main>
    <section class="menus banner" style=" background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo esc_url(get_template_directory_uri()); ?>/public/images/menus/menus-background.svg');">
        <h1 class="bold-txt-u">MENUS</h1>
        <img src="<?php echo get_template_directory_uri(); ?>/public/images/menus/plate.svg" alt="Plate">
    </section>
    <section class="main-menus">
        <nav class="tool bar">
            <ul class="navigation menu">
                <li><a href="<?php echo site_url('/breakfast'); ?>" class="bold-txt-u">BREAKFAST</a></li>
                <li><a href="<?php echo site_url('/lunch'); ?>" class="bold-txt-u">LUNCH</a></li>
                <li><a href="<?php echo site_url('/dinner'); ?>" class="bold-txt-u">DINNER</a></li>
                <li><a href="<?php echo site_url('/dessert'); ?>" class="bold-txt-u">DESSERT</a></li>
                <li><a href="<?php echo site_url('/drinks'); ?>" class="bold-txt-u">DRINKS</a></li>
            </ul>
        </nav>
    </section>
</main>
<?php get_footer(); ?>

