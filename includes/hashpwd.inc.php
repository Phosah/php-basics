<?php

$pwdSignup = 'Phosah';

$options = [
    'cost' => 12
];

$hashedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);

$pwdLogin = 'Phosah';

if (password_verify($pwdSignup, $hashedPwd)) {
    echo "Passwords are the same!";
} else {
    echo "Passwords are not the same";
}
