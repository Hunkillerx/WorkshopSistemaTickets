<?php
define('ENV', 'dev');

define('DB', array(
    'dsn' => (ENV === 'dev') ? 'mysql:host=localhost;dbname=tickets' : '',
    'user' => (ENV === 'dev') ? 'root' : '',
    'pass' => (ENV === 'dev') ? '' : ''
));