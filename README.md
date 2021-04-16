# Workscripts
Simple scripts for various things I use for work.

* CheckMemCache.php
  - Checks whether MemCache is vulnerable  and can be abused as a reflector in a DDoS attack for example. 
  - Usage: CheckMemCache.php $ip where $ip is the address to be tested

* SSLTestDirectAdmin.sh
  - Checks whether standard SSL certs from the installer are being used for the ports. If so then it states on which ports. This means the config needs to be changed to use their own SSL certs to be safe.
  - Usage: ./SSLTestDirectAdmin.sh $ip where $ip is the address to be tested

* SSLTestPlesk.sh
  - Checks whether standard SSL certs from the installer are being used for the ports. If so then it states on which ports. This means the config needs to be changed to use their own SSL certs to be safe.
  - Usage: ./SSLTestPlesk.sh $ip where $ip is the address to be tested

* DNSSEC-DSFromKey.php
  - Performs a dig for the DNSKEy of a domain name on one of its nameservers, generates a SHA256 DS key for it and outputs it.
  - Dependency: bind9utils
  - Usage: DNSSEC-DSFromKey.php $domain where $domain is the domain name the DS key needs to be generated for.

* DigAll.php
  - Performs a simple dig for the A-record of a domain on the domain's nameservers as well as the Google resolver 8.8.8.8 and shows the output.
  - Usage: DigAll.php $domain where $domain is the domain name the digs should be performed for.

* DigSoaAll.php
  - Performs a simple dig for the SOA of a domain on the domain's nameservers as well as the Google resolver 8.8.8.8 and shows the output.
  - Usage: DigSoaAll.php $domain where $domain is the domain name the digs should be performed for.


