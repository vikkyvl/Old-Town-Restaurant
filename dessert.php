<?php
/* Template Name: Dessert */
get_header(); 
?>

<main>
        <section class="menus button selection">
            <h2>MENUS</h2>
            <nav class="tool bar">
                <ul class="navigation menu">
                    <li><a href="<?php echo site_url('/breakfast'); ?>" class="bold-txt">BREAKFAST</a></li>
                    <li><a href="<?php echo site_url('/lunch'); ?>" class="bold-txt">LUNCH</a></li>
                    <li><a href="<?php echo site_url('/dinner'); ?>" class="bold-txt">DINNER</a></li>
                    <li><a href="<?php echo site_url('/dessert'); ?>" class="bold-txt">DESSERT</a></li>
                    <li><a href="<?php echo site_url('/drinks'); ?>" class="bold-txt">DRINKS</a></li>
                </ul>
            </nav>
        </section>
        <section class="menu dessert">
            <!-- <h2>DESSERT</h2> -->
            <div class="col">
                <div class="menu-item">
                    <div class="menu-header">
                        <h3>APPLE PIE</h3>
                        <p class="price">220 UAH</p>
                    </div>
                    <p class="kumbh-sans-bold-txt">apple pie, salted caramel,<br> ice cream</p>
                </div>
                <div class="menu-item">
                    <div class="menu-header">
                        <h3>LAVACAKE</h3>
                        <p class="price">200 UAH</p>
                    </div>
                    <p class="kumbh-sans-bold-txt">hot dark chocolate cake,<br> ice cream, raspberry sauce</p>
                </div>
                <div class="menu-item">
                    <div class="menu-header">
                        <h3>TOFFEE PUDDING</h3>
                        <p class="price">200 UAH</p>
                    </div>
                    <p class="kumbh-sans-bold-txt">brown butter caramel sauce,<br> toasted almond & single malt scotch<br> ice cream, brandy snaps</p>
                </div>
                <div class="menu-item">
                    <div class="menu-header">
                        <h3>CARAMELIZED PEACH<br>CHEESECAKE</h3>
                        <p class="price">150 UAH</p>
                    </div>
                    <p class="kumbh-sans-bold-txt">vanilla sour cream, peach compote,<br> rosemary & lavender</p>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>