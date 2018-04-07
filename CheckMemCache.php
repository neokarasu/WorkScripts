<?php

// Checks whether MemCache is vulnerable and can be abused as a reflector in a DDoS attack for example.
// Usage: CheckMemCache.php $ip where $ip is the IP address to be tested

$ip = $argv[1];
$port = 11211;

$pack = "\x00\x00\x00\x00\x00\x01\x00\x00stats\r\n";
$sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
socket_set_nonblock($sock);
socket_sendto($sock, $pack, strlen($pack), 0, $ip, $port);
sleep(2);
$numberOfBytes = @socket_recvfrom($sock, $packageData, 4096, 0, $from, $port);
if ($numberOfBytes !== false && strlen($packageData)>128) {
    echo 'VULNERABLE!'.PHP_EOL;
} else {
echo 'You're OK!'.PHP_EOL;}
?>
