<?php
/* Template Name: Drinks */
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
        <section class="menu  drinks">
            <!-- <h2>DRINKS</h2> -->
            <div class="row">
                <h1>SOFT  DRINKS</h1>
                <div class="col-4">
                    <div class="menu-item">
                        <div class="menu-header">
                            <h3>FLAT WHITE</h3>
                            <p class="price">67 UAH</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-header">
                            <h3>HOT CHOCOLATE</h3>
                            <p class="price">49 UAH</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-header">
                            <h3>AMERICANO</h3>
                            <p class="price">32 UAH</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-header">
                            <h3>ESPRESSO</h3>
                            <p class="price">32 UAH</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-header">
                            <h3>LATTE</h3>
                            <p class="price">64 UAH</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-header">
                            <h3>CAPPUCCINO</h3>
                            <p class="price">54 UAH</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="menu-item">
                        <div class="menu-header">
                            <h3>BREWED TEA</h3>
                            <p class="price">37 UAH</p>
                        </div>
                        <p class="kumbh-sans-bold-txt">black, green, herbal, fruity</p>
                    </div>
                    <div class="menu-item">
                        <div class="menu-header">
                            <h3>GINGER TEA</h3>
                            <p class="price">52 UAH</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-header">
                            <h3>MOROCCAN TEA</h3>
                            <p class="price">69 UAH</p>
                        </div>
                        <p class="kumbh-sans-bold-txt">lemon, mint, orange, green tea, cinnamon, 
                            honey</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="menu-item">
                        <div class="menu-header">
                            <h3>FRESH ORANGE</h3>
                            <p class="price">79 UAH</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-header">
                            <h3>FRESH GRAPEFRUIT</h3>
                            <p class="price">79 UAH</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-header">
                            <h3>FRESH ORANGE-<br> GRAPEFRUIT</h3>
                            <p class="price">79 UAH</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <h1>ALCOHOLIC  DRINKS</h1>
                <div class="col-4">
                    <div class="menu-item">
                        <div class="menu-header">
                            <h3>THE LAST LOVE ON<br> EARTH COCKTAIL</h3>
                            <p class="price">160 UAH</p>
                        </div>
                        <p class="kumbh-sans-bold-txt">gin, Aperol, fresh grapefruit,<br> resh lemon, elderberry syrup</p>
                    </div>
                    <div class="menu-item">
                        <div class="menu-header">
                            <h3>COCKTAIL VANILLA<br> ESPRESSO MARTINI</h3>
                            <p class="price">140 UAH</p>
                        </div>
                        <p class="kumbh-sans-bold-txt">vanilla ice cream, vodka,<br> creme de cafe liqueur, espresso</p>

                    </div>
                </div>
                <div class="col-4">
                    <div class="menu-item">
                        <div class="menu-header">
                            <h3>APEROL</h3>
                            <p class="price">160 UAH</p>
                        </div>
                        <p class="kumbh-sans-bold-txt">aperol, champagne,<br> schweps</p>
                    </div>
                    <div class="menu-item">
                        <div class="menu-header">
                            <h3>FLAMINGO</h3>
                            <p class="price">130 UAH</p>
                        </div>
                        <p class="kumbh-sans-bold-txt">rum, orange juice,<br> grenadine syrup, lime</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="menu-item">
                        <div class="menu-header">
                            <h3>SUNSET</h3>
                            <p class="price">170 UAH</p>
                        </div>
                        <p class="kumbh-sans-bold-txt">gold tequila, orange juice, lemon juice,<br> blackcurrant liqueur, honey</p>
                    </div>
                    <div class="menu-item">
                        <div class="menu-header">
                            <h3>PINA COLADA</h3>
                            <p class="price">70 UAH</p>
                        </div>
                        <p class="kumbh-sans-bold-txt">rum, pineapple juice,<br> pineapple syrup, cream</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>