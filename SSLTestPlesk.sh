#!/bin/bash

# Checks whether standard SSL certs from the installer are being used for the ports. If so then it states on which ports. This means the config needs to be changed to their own SSL certs to be safe.
# Usage SSLTestPlesk.sh $ip where $ip is the IP address to be tested

if [ -n "$1" ]; then
	for port in {443,25,110,143,993,995}; do
    		if echo | timeout 1 openssl s_client -showcerts -connect $1:$port 2>/dev/null | grep -A2 'Server certificate' | grep -q -e 'emailAddress=info@parallels.com' -e 'emailAddress=info@plesk.com'; then
        	echo default cert on $port
    		fi
	done
else
	echo 'Error: IP address is missing in the input.';
fi
