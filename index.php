<?php
require_once('model/message.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = 'reset';
} else {
    $action = strtolower($action);
}

switch ($action) {
    case 'reset':
        // Reset values for variables
        $first_name = '';
        $last_name = '';
        $comment = '';
        $email = '';

        // Load view
        include 'view/main.php';
        break;
        case 'submit':
        // Copy form values to local variables
        $first_name = trim(filter_input(INPUT_POST, 'first_name'));
        $last_name = trim(filter_input(INPUT_POST, 'last_name'));
        $phone_number = trim(filter_input(INPUT_POST), 'phone_number');
        $comment = trim(filter_input(INPUT_POST, 'comment'));
        $email = trim(filter_input(INPUT_POST, 'email'));

        // Set up email variables
    
        $to_address = 'randtremodeling5@gmail.com';
        $to_name = $first_name . ' ' . $last_name;
        $from_address = 'contact@ashlandportfolio.herokuapp.com';
        $from_name = 'Contact Form';
        $subject = 'Portfolio Message';
        $body = $email . "<br><br>" . $phone_number . "<br><br>" . trim(filter_input(INPUT_POST, 'comment'));
        $is_body_html = true;
        
        // Send email
        try {
            send_email($to_address, $to_name, 
                    $from_address, $from_name, 
                    $subject, $body, $is_body_html);
            include 'view/success.php';
        } catch (Exception $ex) {
            $error = $ex->getMessage();
            include 'view/main.php';
        }        
        break;
}
?>