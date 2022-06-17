<?php

namespace App\Models;

class Msg extends Model
{
    public function addNewItem($newItem)
    {
        if(isset($_POST['name'])) {
            $statement = "'".$newItem['name']."', '".$newItem['email']."', '".
            $newItem['subject']."', '".$newItem['message']."'";
            $addItemQuery = mysqli_query(
                $this->connection, "INSERT INTO `msgs` (`id`, `name`, `email`, `subject`, `message`, `timestamp`) 
                                    VALUES (NULL, $statement, CURRENT_TIMESTAMP);"
            );
        }
    }
}

