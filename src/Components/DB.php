<?php

namespace App\Components;

use PDO;

class DB
{
    public static function getConnection()
    {
        $paramsPath = ROOT . "/Config/db_parameters.php";
        $params = include $paramsPath;
        $params = include $paramsPath;
        $connection = mysqli_connect(
            $params['db']['server'],
            $params['db']['username'],
            $params['db']['password'],
            $params['db']['name']
        );
        if (!$connection) {
            echo "Connection to Database unsuccessful <br>";
            echo mysqli_connect_error();
            die();
        }
        return($connection);
    }
}
