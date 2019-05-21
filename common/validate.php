<?php

function validate_login_form($username="", $pass = "") {
    $errors = array();

    if (empty($username)) {
        $errors['empty_username'] = 'The username must not be empty';
    }

    if (empty($pass)) {
        $errors['empty_pass'] = 'The password field must not be empty';
    }

    return $errors;
}

function validate_student_grade_form($studentId, $firstName, $lastName, $grade) {
    $errors = array();

    if (empty($studentId)) {
        $errors['empty_student_id'] = 'The student id must not be empty!';
    }

    if (empty($firstName)) {
        $errors['empty_first_name'] = 'The first name must not be empty';
    }

    if (empty($lastName)) {
        $errors['empty_last_name'] = 'The last name must not be empty';
    }

    if (empty($grade)) {
        $errors['empty_grade'] = 'The grade must not be empty';
    }

    return $errors;
}

function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}