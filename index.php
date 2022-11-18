<?php
echo "<hr/><center>";
// Memcached
$mem = new Memcached();
$mem->addServer("127.0.0.1", 11211);
$result = $mem->get("blah");if ($result) {
echo $result;
} else {
echo "No matching key found. I’ll add that now!";
$mem->set("blah", "I am data! I am held in memcached!") or die("Couldn’t save anything to memcached…");
}
echo "<hr/>";
// Email
// if (false) {
if (mail('test-byc5hep0i@srv1.mail-tester.com', 'Greetings', 'Hey there!', 'From: test10@test3.clo.southbridge.ru')) {
  echo "email has been sent";
} else {
  echo "email hasn't been sent";
}
echo "<hr/>";
echo get_ip();
echo "<hr/></center>";
// PHP info
phpinfo();
echo "<hr/>";

// Get ip address
function get_ip()
{
  $value = '';
  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $value = $_SERVER['HTTP_CLIENT_IP'];
  } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $value = $_SERVER['HTTP_X_FORWARDED_FOR'];
  } elseif (!empty($_SERVER['REMOTE_ADDR'])) {
    $value = $_SERVER['REMOTE_ADDR'];
  }
  return $value;
}
?>
