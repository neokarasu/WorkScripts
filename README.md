# Workscripts
Simple scripts for various things I need for work.

* CheckMemCache.php
  - Checks whether MemCache is vulnerable  and can be abused as a reflector in a DDoS attack for example. 
  - Usage: CheckMemCache.php $ip where $ip is the address to be tested

* SSLTestDirectAdmin.sh
  - Checks whether standard SSL certs from the installer are being used for the ports. If so then it states on which ports. This means the config needs to be changed to use their own SSL certs to be safe.
  - Usage: ./SSLTestDirectAdmin.sh $ip where $ip is the address to be tested

* SSLTestPlesk.sh
  - Checks whether standard SSL certs from the installer are being used for the ports. If so then it states on which ports. This means the config needs to be changed to use their own SSL certs to be safe.
  - Usage: ./SSLTestPlesk.sh $ip where $ip is the address to be tested
