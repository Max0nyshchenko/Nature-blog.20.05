<?php
function console_log($data)
{
  echo '<script>';
  echo 'console.log(' . json_encode($data) . ')';
  echo '</script>';
};

$config = array(
  'title' => 'Nature Blog',
  'db' => array(
    'server' => '127.0.0.1',
    'username' => 'root',
    'password' => '',
    'name' => 'NatureBlog'
  )
);

require "db.php";
