<?php
/* Template Name: Dinner */
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
        <section class="menu dinner">
            <!-- <h2>DINNER</h2> -->
            <div class="col-6">
                <div class="menu-item">
                    <div class="menu-header">
                        <h3>STUFFED CHICKEN THIGH WITH<br> MUSHROOMS, MOZZARELLA AND PEPPER</h3>
                        <p class="price">250 UAH</p>
                    </div>
                    <p class="kumbh-sans-bold-txt">chicken thigh, mozzarella, mushrooms,<br> bell pepper, onion</p>
                </div> 
                <div class="menu-item">
                    <div class="menu-header">
                        <h3>TURKEY WITH SALSA SAUCE</h3>
                        <p class="price">270 UAH</p>
                    </div>
                    <p class="kumbh-sans-bold-txt">turkey fillet, canned pineapple,<br> blue onion, bell pepper, sauce</p>
                </div> 
                <div class="menu-item">
                    <div class="menu-header">
                        <h3>COTOLETTA CHICKEN SCHNITZEL</h3>
                        <p class="price">220 UAH</p>
                    </div>
                    <p class="kumbh-sans-bold-txt">chicken fillet breaded with<br> panko breadcrumbs, served with<br> slices of potato, tomato,<br> mozzarella and pesto sauce</p>
                </div> 
            </div>
            <div class="col-6">
                <div class="menu-item">
                    <div class="menu-header">
                        <h3>BEEF ROAST BEEF</h3>
                        <p class="price">300 UAH</p>
                    </div>
                    <p class="kumbh-sans-bold-txt">beef, fried Romaine salad,<br> baked cherry tomatoes, new potatoes,<br> elder capers, pesto sauce</p>
                </div> 
                <div class="menu-item">
                    <div class="menu-header">
                        <h3>DUCK WITH BEETROOT AND CHERRY</h3>
                        <p class="price">290 UAH</p>
                    </div>
                    <p class="kumbh-sans-bold-txt">Fried duck fillet (medium), beetroot and smoked pear mousse,<br> compressed beetroot with cherry,<br> cherry and beef jus sauce, blackberry berries</p>
                </div> 
                <div class="menu-item">
                    <div class="menu-header">
                        <h3>TONGUE UNDER CREAMY<br> MUSHROOM SAUCE</h3>
                        <p class="price">280 UAH</p>
                    </div>
                    <p class="kumbh-sans-bold-txt">veal tongue, mushrooms, onion, cream, cheese</p>
                </div> 
            </div>
        </section>
    </main>

<?php get_footer(); ?>