<?php

require("../phpMQTT.php");

$server = "m24.cloudmqtt.com";     // change if necessary
$port = 14981;                     // change if necessary
$username = "ctkohopx";                   // set your username
$password = "UvHXYzVWihzN";                   // set your password
$client_id = "phpMQTT-publisher"; // make sure this is unique for connecting to sever - you could use uniqid()

$mqtt = new phpMQTT($server, $port, $client_id);

if ($mqtt->connect(true, NULL, $username, $password)) {
	$mqtt->publish("bluerhinos/phpMQTT/examples/publishtest", "Hello World! at " . date("r"), 0);
	$mqtt->close();
} else {
    echo "Time out!\n";
}
