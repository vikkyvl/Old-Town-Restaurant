<?php
/* Template Name: Breakfast */
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
    <section class="menu breakfast">
        <div class="colum-4">
            <div class="menu-item">
                <div class="menu-header">
                    <h3>ENGLISH BREAKFAST</h3>
                    <p class="price">149 UAH</p>
                </div>
                <p class="kumbh-sans-bold-txt">egg glaze, cream, mushrooms,<br> zucchini, tomato, bell pepper, sausage,<br> toast with homemade ciabatta</p>
            </div>
            <div class="menu-item">
                <div class="menu-header">
                    <h3>GREEN BREAKFAST</h3>
                    <p class="price">280 UAH</p>
                </div>
                <p class="kumbh-sans-bold-txt">hummus, quinoa, blanched broccoli, fried zucchini,<br> blanched edamame beans, a slice of fresh cucumber,<br> poached egg, hollandaise sauce,<br> salmon gravlax, salad mix</p>
            </div>
            <div class="menu-item">
                <div class="menu-header">
                    <h3>SCRAMBLE CROISSANT</h3>
                    <p class="price">250 UAH</p>
                </div>
                <p class="kumbh-sans-bold-txt">butter croissant, truffle crème fraîche,<br> fried mushrooms, scramble from 2 eggs,<br> Pecorino cheese, salad mix, vinaigrette sauce</p>
            </div>
        </div>
        <div class="colum-4">
            <div class="menu-item">
                <div class="menu-header">
                    <h3>OATMEAL</h3>
                    <p class="price">220 UAH</p>
                </div>
                <p class="kumbh-sans-bold-txt">rolled oats, quinoa, dark flax, Gouda, Parmesan,<br> Pecorino, poached egg, fresh cucumber,<br> olive oil, Maldon salt</p>
            </div>
            <div class="menu-item">
                <div class="menu-header">
                    <h3>SHRIMP SCRAMBLE</h3>
                    <p class="price">320 UAH</p>
                </div>
                <p class="kumbh-sans-bold-txt">toasted bread, creamy melted cheese,<br> basil pesto, chili cucumbers, fried shrimp,<br> creamy scramble from three eggs, cilantro</p>
            </div>
            <div class="menu-item">
                <div class="menu-header">
                    <h3>CROC MADAME</h3>
                    <p class="price">290 UAH</p>
                </div>
                <p class="kumbh-sans-bold-txt">toasted bread, turkey pastrami, mornay sauce,<br> cheese mousse, crispy bacon, blue onion marmalade,<br> mozzarella cheese, salad mix, pickled blue onion,<br> creamy mousse with parmesan and parsley</p>
            </div>
        </div>
        <div class="colum-4">
            <div class="menu-item">
                <div class="menu-header">
                    <h3>ALMOND CROISSANT</h3>
                    <p class="price">200 UAH</p>
                </div>
                <p class="kumbh-sans-bold-txt">croissant with almond filling and custard,<br> decorated with almond flakes and powdered sugar</p>
            </div>
            <div class="menu-item">
                <div class="menu-header">
                    <h3>GRANOLA WITH BASIL<br> ICE CREAM</h3>
                    <p class="price">180 UAH</p>
                </div>
                <p class="kumbh-sans-bold-txt">craft granola with added dark chocolate.<br> Strawberry yogurt, basil ice cream,<br> fresh strawberries and blueberries</p>
            </div>
            <div class="menu-item">
                <div class="menu-header">
                    <h3>CHEESE OMELETTE</h3>
                    <p class="price">250 UAH</p>
                </div>
                <p class="kumbh-sans-bold-txt">omelet with 3 eggs and 3 types of cheese:<br> Gouda, Cheddar, Pecorino; melted butter,<br> fresh cucumber, vinaigrette sauce</p>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
