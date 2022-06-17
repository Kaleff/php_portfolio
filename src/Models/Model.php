<?php

namespace App\Models;

abstract class Model
{
    protected $connection;
    public function __construct()
    {
        $this->connection = \App\Components\DB::getConnection();
    }
    public function getDatabaseInfo()
    {
        $dbQuery = mysqli_query($this->connection, "SELECT * FROM `projects`");
        $dbInfo = mysqli_fetch_all($dbQuery);
        return $dbInfo;
    }
}
