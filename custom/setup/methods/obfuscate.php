<?php
function getObfuscatedEmailLink($email) {
    $crackme = "";
    for ($i=0; $i<strlen($email); $i++){
        $crackme .= "&#" . ord($email[$i]) . ";";
    }
    return '<a href="mailto:' . $crackme . '">' . $email . '</a>';
}