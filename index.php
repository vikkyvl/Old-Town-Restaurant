<?php get_header(); ?>

    <main>  
        <section class="restraurant-banner row" style=" background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo esc_url(get_template_directory_uri()); ?>/public/images/main/banner.svg');">
            <div class="overlay">
                <div class="col image">
                    <h1 class="bold-txt">ABOUT US</h1>
                    <img class="people" src="<?php echo get_template_directory_uri(); ?>/public/images/main/people.svg" alt="Guests">
                    <img class="mobile-people" src="<?php echo get_template_directory_uri(); ?>/public/images/main/people-mobile.svg" alt="Guests">
                </div>
                <div class="col information">
                    <h2 class="semibold-txt">Welcome to <span>Old Town</span></h2>
                    <p class="semibold-txt">At Old Town, we take pride in presenting a menu<br> that showcases a diverse array of dishes inspired by<br> global flavors, each meticulously crafted using only<br> the finest ingredients.</p>
                    <p class="semibold-txt">Our elegant atmosphere is the perfect setting for family<br> gatherings, romantic dinners, or special occasions.<br> Join us to celebrate tradition while enjoying an<br> unforgettable dining experience.</p>
                    <p class="semibold-txt">We eagerly await each and every one<br> of you at Old Town! Come and enjoy<br> a unique experience with exquisite dishes.</p>
                </div>
            </div>
        </section>
        <section class="guest favorites colums">
            <div class="title">
                <div class="star"><img src="<?php echo get_template_directory_uri(); ?>/public/images/main/star.svg" alt="Star"></div>
                <h1 class="bold-txt">GUEST FAVORITES</h1>
                <div class="star"><img src="<?php echo get_template_directory_uri(); ?>/public/images/main/star.svg" alt="Star"></div>
            </div>
            <div class="col-4">
                <h3 class="bold-txt">Salad with eel & avocado</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/main/dish-1.png" alt="Salad with eel & avocado">
                <p class="semibold-txt">salad mix, smoked eel, avocado,<br> cucumber, bell pepper,<br> white sesame, unagi sauce, lemon</p>
            </div>
            <div class="vertical-line"></div>
            <div class="col-4">
                <h3 class="bold-txt">Curry chicken pot pie</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/main/dish-2.png" alt="Curry chicken pot pie">
                <p class="semibold-txt">curry chicken, peas, carrots,<br> fingerling potatoes,<br> puff pastry</p>
            </div>
            <div class="vertical-line"></div>
            <div class="col-4">
                <h3 class="bold-txt">Toffee pudding</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/main/dish-3.png" alt="Toffee pudding">
                <p class="semibold-txt">brown butter caramel sauce,<br> toasted almond &<br> single malt scotch ice cream,<br> brandy snaps</p>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
