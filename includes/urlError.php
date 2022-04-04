<?php

if ( $_SERVER['REQUEST_METHOD']=='GET') {
    header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
    die( header( 'location: /error.php' ) );
    }

?>