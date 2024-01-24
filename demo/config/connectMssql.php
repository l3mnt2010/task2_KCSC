<?php
    $serverName = "ASUSEXPERTBOOK";

    $uid = 'sa';
    $pwd = '123456';

    $connectionInfo =  [ "UID"=>$uid, "PWD"=>$pwd, "Database"=>"LAMQuery" ];

    $conn = sqlsrv_connect( $serverName, $connectionInfo);
    if( $conn === false )
    {
        echo "Không kết nối được";
        die( print_r(sqlsrv_errors(), true));
    }


?>

