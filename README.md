# address
interacting with geonames api searching for street  postcode and other information of a latitude and longitude



instruction:
1. download the folder into the htdocs of xampp
2. go to localhost/findnearbyplacename
3. if you want to see how the php curl works go to the following url:
  localhost/address/libs/php/address.php



Index.html is written and only serves as bare tempplate which links to
the script.js
script.js files is an ajax post call to findNearbyPlaceName.php
address.php imitates browising the url and returns a json object
which is read by the script.js which then writes to the index.html.
