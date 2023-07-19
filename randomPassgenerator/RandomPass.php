<?php

function generaPasswordCasuale($lunghezza) {
    $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+[{]};:,.<>?';
    $lunghezza_caratteri = strlen($caratteri);
    $password = '';

    for ($i = 0; $i < $lunghezza; $i++) {
        $index = rand(0, $lunghezza_caratteri - 1);
        $password .= $caratteri[$index];
    }

    return $password;
}