<?php

require_once 'bootstrap.php';

$contact_form_submitted = false;
$contact_form_error_msg = [];

$name = '';
$phone = '';
$email = '';
$message = '';

if(isset($_POST['contact'])) {

    //Step 1: Validation
    $name = clean_input($_POST['contact']['name']);
    $phone = clean_input($_POST['contact']['phone']);
    $email = clean_input($_POST['contact']['email']);
    $message = clean_input($_POST['contact']['message']);

    //Step 2: Validation
    if (empty($name)) {
        $contact_form_error_msg[] = 'Please fill out your full name.';
    }
    if (empty($phone)) {
        $contact_form_error_msg[] = 'Phone number is required.';
    } elseif (strlen($phone) > 50) {
        $contact_form_error_msg['Phone number is too long.'];
    }
    if (empty($email)) {
        $contact_form_error_msg[] = "Email is missing.";
    }
    if (empty($message)) {
        $contact_form_error_msg[] = "Please enter a message.";
    }


//Step 3: Validation
    if (empty($contact_form_error_msg)) {
        try {
            $sql = "INSERT INTO contact_form (name, phone, email, message) VALUES(:name, :phone, :email, :message)";

            $db = $db->prepare($sql);
            $db->bindParam(':name', $name);
            $db->bindParam(':phone', $phone);
            $db->bindParam(':email', $email);
            $db->bindParam(':message', $message);

            $db->execute();

            //Success
            $contact_form_submitted = true;

            //Reset form
            $name = '';
            $phone = '';
            $email = '';
            $message = '';

            $result = mail(
                $config['admin_email']
                , sprintf($config['contact_submission_subject'])
                , wordwrap(sprintf($config['contact_submission_message']))
            );

        } catch (PDOException $e) {
            $contact_form_error_msg[] = $e->getMessage();
        }
    }
}
