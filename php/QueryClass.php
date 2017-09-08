<?php
spl_autoload_register(function ($class)
{
    include_once("$class.php");
}); 

class QueryClass
{
    protected $db;
    function __construct()
    {
     $this->db=new Database();
    } 
    function getAll()
    {
        $stmt=$this->db->prepare("Select * from users");
        $stmt->setFetchMode(PDO::FETCH_NUM);
        $array=array(array());
        while ($r=$stmt->fetch())
        {
            array_push($array,$r);
        }
        return $array;
    // for ($i=0;$i<count($array);$i++)
    // {
    //     for($j=0;$j<count($array[$i]);$j++)
    //     {

    //     }
    // }
    // }
}
function getFirst()
    {
        $stmt=$this->db->prepare("Select * from users where id=9");
        $stmt->setFetchMode(PDO::FETCH_NUM);
        $stmt->execute();
       if( $r=$stmt->fetch())
       {
            return $r;
        }
    // for ($i=0;$i<count($array);$i++)
    // {
    //     for($j=0;$j<count($array[$i]);$j++)
    //     {

    //     }
    // }
    // }
}
function getUser($field,$value)
{
    switch($field)
    {
        case "mobile":
        {
              $stmt=$this->db->prepare("Select Mobile_No from users where Mobile_No = :name");
            break;
        }
        case "username":
        {
            $stmt=$this->db->prepare("Select Username from users where Username = :name");
            break;
        }
        case "email":
        {
              $stmt=$this->db->prepare("Select Email from users where Email = :name");
            break;
        }
        default: 
        {  $stmt=$this->db->prepare("Select Email from users where Email = :name");}
    }
      
        
        $stmt->setFetchMode(PDO::FETCH_NUM);
        $stmt->execute(array(":name"=>$value));
        $field{0}=strtoupper($field{0});
        if($stmt->rowCount()==1)
       {
            return $field." Not Available";
        }   
        else 
        {
            
             return "<p style='color:green;'>".$field." Available</p>";
        }
}
}