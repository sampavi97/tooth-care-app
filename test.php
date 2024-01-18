
<?php

include __DIR__ . '/config.php';
include __DIR__ . '/helpers/AppManager.php';

require_once __DIR__ . '/models/User.php';

$userModel = new User();

// if ($userModel->createUser("sam", "password123", "operator", "sam@example.com")) {
//     echo "User created successfully!";
// } else {
//     echo "Failed to create user. May be user already exist!";
// }

// if ($userModel->createUser("leela", "leela18", "doctor", "leela@gmail.com")) {
//     echo "User created successfully!";
// } else {
//     echo "Failed to create user. May be user already exist!";
// }
if ($userModel->createUser("John", "jo123", "doctor", "john@example.com")) {
    echo "User created successfully!";
} else {
    echo "Failed to create user. May be user already exist!";
}


$users = $userModel->getAllActive();

dd($users);
