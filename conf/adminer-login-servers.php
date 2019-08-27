<?php
require_once('plugins/login-servers.php');

return new AdminerLoginServers([
    'PostGres' => [
        'server' => 'postgres', 
        'driver' => 'pgsql', 
        'username' => 'postgres', 
        'password' => 'postgres'
    ]
]);
