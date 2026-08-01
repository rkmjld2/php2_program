<?php

$host = "gateway01.ap-southeast-1.prod.aws.tidbcloud.com";
$port = 4000;
$user = "ax6KHc1BNkyuaor.root";
$password = "EP8isIWoEOQk7DSr";
$dbname = "studentdb";

/* Initialize MySQLi */
$conn = mysqli_init();

/* Enable SSL/TLS */
mysqli_ssl_set(
    $conn,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);

/* Connect to TiDB Cloud using SSL */
mysqli_real_connect(
    $conn,
    $host,
    $user,
    $password,
    $dbname,
    $port,
    NULL,
    MYSQLI_CLIENT_SSL
);

/* Check connection */
if (mysqli_connect_errno()) {
    die("Connection Failed: " . mysqli_connect_error());
}

echo "TiDB Cloud connection successful!";

?>
