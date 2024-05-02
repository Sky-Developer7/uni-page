<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit('POST request method required');
}

print_r($_FILES);