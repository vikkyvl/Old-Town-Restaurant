<?php
add_action('wp_enqueue_scripts', function () {
    wp_deregister_script('jquery');
    wp_deregister_script('jquery-core');

    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', [], null, true);
    wp_enqueue_script('jquery');

    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');

    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/js/main.js',
        [],
        filemtime(get_template_directory() . '/js/main.js'),
        true
    );

    wp_enqueue_script(
        'feedback-js',
        get_template_directory_uri() . '/js/feedback.js',
        [],
        filemtime(get_template_directory() . '/js/feedback.js'),
        true
    );

    wp_enqueue_script(
        'reservation-js',
        get_template_directory_uri() . '/js/reservation.js',
        [],
        filemtime(get_template_directory() . '/js/reservation.js'),
        true
    );
});

add_action('wp_head', function () {
    echo '<link rel="icon" type="image/x-icon" href="' . get_template_directory_uri() . '/public/images/logo-icon.svg">';
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

function submit_feedback_handler() {
    global $wpdb;

    $data = json_decode(file_get_contents("php://input"), true);

    $name = sanitize_text_field($data['name']);
    $dishes_rating = intval($data['dishes_rating']);
    $service_rating = intval($data['service_rating']);
    $text = sanitize_textarea_field($data['text']);
    $date = sanitize_text_field($data['date']);

    $wpdb->insert('feedback', [
        'name' => $name,
        'dishes_rating' => $dishes_rating,
        'service_rating' => $service_rating,
        'text' => $text,
        'date' => $date
    ]);

    echo json_encode(["status" => "success", "message" => "Feedback submitted successfully"]);
    wp_die();
}

add_action('wp_ajax_get_time_slots', 'get_time_slots_handler');
add_action('wp_ajax_nopriv_get_time_slots', 'get_time_slots_handler');

function get_time_slots_handler() {
    global $wpdb;

    $date = sanitize_text_field($_GET['date'] ?? '');

    if (empty($date)) {
        wp_send_json_error(['message' => 'Invalid date provided.']);
    }

    $reserved_slots = $wpdb->get_col(
        $wpdb->prepare("SELECT time FROM reservations WHERE date = %s", $date)
    );

    $all_slots = [];
    for ($hour = 10; $hour <= 23; $hour++) {
        foreach ([0, 30] as $minute) {
            $all_slots[] = sprintf('%02d:%02d', $hour, $minute);
        }
    }

    $available_slots = array_diff($all_slots, $reserved_slots);

    wp_send_json_success($available_slots);
}

add_action('wp_ajax_submit_reservation', 'submit_reservation_handler');
add_action('wp_ajax_nopriv_submit_reservation', 'submit_reservation_handler');

function submit_reservation_handler() {
    global $wpdb;

    check_ajax_referer('reservation_nonce', 'nonce');

    $data = json_decode(file_get_contents("php://input"), true);

    $date = sanitize_text_field($data['date'] ?? '');
    $time = sanitize_text_field($data['time'] ?? '');
    $people = intval($data['people'] ?? 0);
    $name_surname = sanitize_text_field($data['name_surname'] ?? '');
    $phone = sanitize_text_field($data['phone'] ?? '');

    if (empty($date) || empty($time) || $people <= 0 || empty($name_surname) || empty($phone)) {
        wp_send_json_error(['message' => 'Invalid input data.']);
    }

    $wpdb->insert('reservations', [
        'date' => $date,
        'time' => $time,
        'people' => $people,
        'name_surname' => $name_surname,
        'phone' => $phone,
    ]);

    wp_send_json_success(['message' => 'Reservation created successfully.']);
}
?>



