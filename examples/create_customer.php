<?php

require '../src/index.php';

$customer = new \Resellerclub\Customer;

$customerDetails = array(
  'username' => 'newmail@example.com',
  'passwd' => 'r@ndomP@sswd',
  'name' => 'Jane Doe',
  'company' => 'N/A',
  'address-line-1' => 'Test Address Line',
  'city' => 'Mumbai',
  'state' => 'Maharashtra',
  'country' => 'IN',
  'zipcode' => '567889',
  'phone-cc' => '91',
  'phone' => '9876543210',
  'lang-pref' => 'en',
);

$apiOut = $customer->createCustomer($customerDetails);

var_dump($apiOut);
