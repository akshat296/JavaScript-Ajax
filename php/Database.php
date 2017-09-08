<?php 
class database extends PDO
{
    function __construct()
    {
        try{
        parent::__construct("mysql:host=localhost;dbname=login","root","",array(PDO::ATTR_PERSISTENT=>true));
       
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
}

?>