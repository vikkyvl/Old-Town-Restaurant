<?php
/* Template Name: Reservation */
get_header();
?>
<main> 
    <div class="container">
        <div class="col-7">
            <div class="reservation-title">
                <div class="star">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/main/star.svg" alt="Star">
                </div>
                <h2 class="bold-txt">RESERVATION</h2>
                <div class="star">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/main/star.svg" alt="Star">
                </div>
            </div>
            <form id="reservation-form">
                <?php wp_nonce_field('reservation_nonce_action', 'reservation_nonce'); ?>
                <h3 class="bold-txt">FIND A TABLE</h3>
                <label for="date" class="kumbh-sans-bold-txt">DATE</label>
                <input class="semibold-txt" type="date" id="date" name="date" required>

                <label for="time" class="kumbh-sans-bold-txt">TIME</label>
                <select id="time" name="time" class="semibold-txt" required></select>
                                                                                    
                <label for="people" class="kumbh-sans-bold-txt">NUMBER OF PEOPLE</label>
                <input class="semibold-txt" type="number" id="people" name="people" min="1" max="10" required>

                <h3 class="bold-txt">YOUR DETAILS</h3>
                <label for="name_surname" class="kumbh-sans-bold-txt">YOUR FIRST AND LAST NAME</label>
                <input class="semibold-txt" type="text" id="name_surname" name="name_surname" placeholder="Your first and last name" required>

                <label for="phone" class="kumbh-sans-bold-txt">PHONE NUMBER</label>
                <input class="semibold-txt" type="tel" id="phone" name="phone" placeholder="+38 (0XX) XXX-XX-XX" required>

                <input type="submit" value="CONFIRM RESERVATION">
            </form> 
        </div>
        <div class="col-5" style=" background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo esc_url(get_template_directory_uri()); ?>/public/images/reservation/reservation.svg');">
            <h1>Old Town</h1>
            <img src="<?php echo get_template_directory_uri(); ?>/public/images/logo-icon-without-background.svg" alt="Logo Icon">
        </div>
    </div>              
</main>
<div id="success-message" class="success-message" style="display: none;">
    <div class="message-content">
        <p id="success-text"></p>
        <span class="close-btn">&times;</span> 
    </div>
</div>
<div id="overlay" style="display: none;"></div>
<?php get_footer(); ?>

