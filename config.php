<?php

/*
|===============================================
| GSX lookups
|===============================================
|
| Access to GSX and certificates are required for use of this module
|
| The GSX module is designed to be used as a supplement to the warranty module.
| It is now required for both the warranty and GSX modules to be enabled at
| the same time. This is different from before when it was recommended that only
| one of the modules be enabled at a time.
|
| Use GSX article OP1474 and
| https://www.watchmanmonitoring.com/generating-ssl-certificates-to-meet-applecares-august-2015-requirements/
| to assist with creating certificates and whitelisting your IPs. Additional documentation can be found in the
| Readme.md located in the GSX module.
|
| To use the GSX module, set enable to TRUE and uncomment and
| fill out rest of configuration options. When setting the date format
| make sure it is either 'd/m/y', 'm/d/y', or 'y/m/d'. Lower case letters
| are required.
*/

return [
  'gsx_enable'       => env('GSX_ENABLE', false),
  'gsx_cert'         => env('GSX_CERT'),
  'gsx_cert_keypass' => env('GSX_CERT_KEYPASS'),
  'gsx_sold_to'      => env('GSX_SOLD_TO'),
  'gsx_ship_to'      => env('GSX_SHIP_TO'),
  'gsx_username'     => env('GSX_USERNAME'),
  'gsx_date_format'  => env('GSX_DATE_FORMAT', 'm/d/y'),
];
