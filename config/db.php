<?php

preg_match('|postgres://([a-z0-9]*):([a-z0-9]*)@([^:]*):([0-9]*)/(.*)|i', getenv('DATABASE_URL'), $matches);

$user = $matches[1];
$password = $matches[2];
$server = $matches[3];
$port = $matches[4];
$database = $matches[5];

return [
  'driver' => "pgsql",
  'server' => $server,
  'user' => $user,
  'password' => $password,
  'database' => $database,
  'schema' => getenv('DB_SCHEMA'),
  'tablePrefix' => getenv('DB_TABLE_PREFIX'),
  'port' => $port
];