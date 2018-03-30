<?php
class degree_all
{
    private static $conn=null;
    public static function  connect()
    {
        self::$conn=mysqli_connect("localhost","root","","medsky");
        return self::$conn;
    }
    public static function disconnect()
    {
        mysqli_close($conn);
        self::$conn=null;
    }
    public function select_all()
    {
        $cnn=degree_all::connect();
        $q="select * from doc_degree";
        $result=$cnn->query($q);
        return $result;
        degree_all::disconnect();
    }
         public function update($did,$dname)
    {
               $cnn=degree_all::connect();
               $q="update doc_degree set deg_name='". $dname ."'where pk_deg_id='". $did ."'";
         $result=$cnn->query($q);
         echo $q;
        return $result;
        degree_all::disconnect();
    }
    public function insert($dname)
    {
        $cnn=degree_all::connect();
        $vari=0;      
        $q="insert into  doc_degree values ('".null."','". $dname ."')";
        
        $result=$cnn->query($q);
        return $result;
        degree_all::disconnect();

    }
     public function deletebyid($did)
    {
              $cnn=degree_all::connect();
        $q="delete from doc_degree where pk_deg_id="."'$did'";
        $result=$cnn->query($q);
        echo $q;
        return $result;
        degree_all::disconnect();
    }

}
?>