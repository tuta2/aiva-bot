<?php
  if ($_SERVER['SERVER_NAME'] == 'localhost') {
    define('ROOT_URL', 'http://localhost/aiva-bot');
    $host = 'localhost';
    $dbname = 'aiva_db';
    $username = 'root';
    $password = '';
    define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] . '/aiva-bot');
  } else {
    define('ROOT_URL', 'https://aivabot.ezktech.com');
    $host = 'localhost';
    $dbname = 'ezktech_aiva';
    $username = 'ezktech_aiva';
    $password = 'as5wEa5zbuxsjJLJLHMU';
    define('ROOT_PATH', dirname(__FILE__));
  }

  try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    die("Could not connect to the database $dbname: " . $e->getMessage());
  }
?>
