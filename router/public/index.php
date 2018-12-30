<?php

require_once __DIR__ . '/../../vendor/autoload.php';
   
require_once __DIR__ . '/../../sparrow/sparrow.php';


$klein = new \Klein\Klein();

$klein->respond('GET', '/', function () {
    require '../views/index.php';
});

$klein->respond('POST', '/task', function ($request) {
$db = new Sparrow();
    $db->setDb([
       'hostname' => '',
        'username' => '',
        'password' => '',
        'type' => '',
        'database' => '',
    ]);
    
    $data = [];
    foreach ($request->data as $el) {
        $data[$el['name']] = $el['value'];
    }
    
$db->from('tasks')
    ->insert($data)->execute();
    
return json_encode($db->from('tasks')
    ->many());
});

$klein->dispatch();
