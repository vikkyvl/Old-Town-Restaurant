<?php
/* Template Name: Lunch */
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
        <section class="menu lunch">
            <!-- <h2>LUNCH</h2> -->
            <div class="col-6">
                <div class="menu-section">
                    <h1>S O U P S</h1>
                    <div class="menu-item">
                        <div class="menu-header">
                            <h3>CHICKEN BROTH WITH<br> NOODLES AND CIABATTA</h3>
                            <p class="price">70 UAH</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-header">
                            <h3>GREEN BORSCHT</h3>
                            <p class="price">95 UAH</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-header">
                            <h3>MUSHROOM CREAM SOUP</h3>
                            <p class="price">110 UAH</p>
                        </div>
                    </div>
                </div>
                <div class="menu-section">
                    <h1>S A L A D S</h1>
                    <div class="menu-item">
                        <div class="menu-header">
                            <h3>SALAD WITH EEL & AVOCADO</h3>
                            <p class="price">200 UAH</p>
                        </div>
                        <p class="kumbh-sans-bold-txt">salad mix, smoked eel, avocado, cucumber,<br> bell pepper, white sesame, unagi sauce, lemon</p>
                    </div>
                    <div class="menu-item">
                        <div class="menu-header">
                            <h3>CAESAR SALAD WITH CHICKEN</h3>
                            <p class="price">140 UAH</p>
                        </div>
                        <p class="kumbh-sans-bold-txt">baked chicken fillet, salad mix, parmesan,<br> cherries, crackers, quail eggs, Caesar sauce</p>
                    </div>
                    <div class="menu-item">
                        <div class="menu-header">
                            <h3>CAESAR SALAD WITH TIGER PRAWNS</h3>
                            <p class="price">220 UAH</p>
                        </div>
                        <p class="kumbh-sans-bold-txt">tiger shrimp, salad mix, cherries,<br> lemon, parmesan, crackers, Caesar sauce</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="menu-section">
                    <h1>P A S T E</h1>
                    <div class="menu-item">
                        <div class="menu-header">
                            <h3>PASTA WITH SEAFOOD</h3>
                            <p class="price">180 UAH</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-header">
                            <h3>PASTA WITH CHICKEN 
                                AND MUSHROOMS</h3>
                            <p class="price">150 UAH</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-header">
                            <h3>PASTA CARBONARA</h3>
                            <p class="price">140 UAH</p>
                        </div>
                    </div>
                </div>
                <div class="menu-section">
                    <h1>G R I L L</h1>
                    <div class="menu-item">
                        <div class="menu-header">
                            <h3>GRILLED VEGETABLES</h3>
                            <p class="price">140 UAH</p>
                        </div>
                        <p class="kumbh-sans-bold-txt">tomato, bell pepper, mushrooms,<br> zucchini, blue onion</p>
                    </div>
                    <div class="menu-item">
                        <div class="menu-header">
                            <h3>GRILLED MACKEREL WITH<br> GRILLED VEGETABLES</h3>
                            <p class="price">130 UAH</p>
                        </div>  
                    </div>
                    <div class="menu-item">
                        <div class="menu-header">
                            <h3>CHICKEN STEAK</h3>
                            <p class="price">150 UAH</p>
                        </div>
                        <p class="kumbh-sans-bold-txt">chicken breast, Caesar sauce</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>