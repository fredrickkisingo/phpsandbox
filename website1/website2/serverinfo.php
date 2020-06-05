<?php
#server super global
//create server array
$server =[
    'Host Server Name' =>$_SERVER['SERVER_NAME'],
    'Host Header' =>$_SERVER['HTTP_HOST'],
    'Server Software' =>$_SERVER['SERVER_SOFTWARE'],
    'Document Root' =>$_SERVER['DOCUMENT_ROOT'],
    'Current Page' =>$_SERVER['PHP_SELF'],
    'Absolute Path' =>$_SERVER['SCRIPT_FILENAME']
];

//print_r($server);


//create client array
$client=[
    'Client System Info' =>$_SERVER['HTTP_USER_AGENT']

];
//print_r($client);
?>