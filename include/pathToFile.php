<?php
echo "<p>Constant __DIR__ (available from PHP 5.3) is: " . __DIR__ . "</p>";
echo "<p>Constant __FILE__ is: " . __FILE__ . "</p>";
echo "<p>Filename-part of __FILE__ is: " . basename(__FILE__) . "</p>";
echo "<p>Directory-part of __FILE__ is: " . dirname(__FILE__) . "</p>";

echo "<p>Lets include a file by using __FILE__ and __DIR__ to create the absolute path.</p>";
include(dirname(__FILE__) . '/empty_file.php');
include(__DIR__ . '/empty_file.php');
include 'empty_file.php';
?>