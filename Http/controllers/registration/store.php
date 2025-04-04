<?php

use Core\Validator;
use Core\Database;
use Core\App;

$email = $_POST['email'];
$password = $_POST['password'];


// validate the form inputs

if (!Validator::email($email)) {
    $errors['email'] = 'Please provide valid email address.';
}

if (!Validator::string($password, 7, 255)) {
    $errors['password'] = 'Please provide a password of at least seven character';
}

if (! empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}
$db = App::resolve(Database::class);
//check if the accounnt already exists
$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

if($user){
    //if yes,redirect to a login page
    header('Location:/');
    exit();
}else{
    //if not,save one to the database,and then log the user in, and redirect.
    $db->query('INSERT INTO users(email,password) VALUES(:email,:password)',[
        'email' =>$email,
        'password' => $password
    ]);


    //mark that user has logged in.

    $_SESSION['user'] = [
        'email' => $email
    ];
    
    header('location:/');
    exit();
}


