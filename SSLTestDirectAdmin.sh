#!/bin/bash
for port in {443,25,110,143,993,995}; do
    if echo | timeout 1 openssl s_client -showcerts -connect $1:$port 2>/dev/null | grep -A2 'Server certificate' | grep -q -e 'emailAddress=webmaster@localhost'; then
        echo default cert on $port
    fi
done

# Checks whether standard SSL certs from the installer are being used for the ports. If so then it states on which ports. This means the config needs to be changed to their own SSL certs to be safe.
# Usage ./SSLTestDirectAdmin.sh $ip where $ip is the IP address to be tested
