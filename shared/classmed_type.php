<?php
class med_type
{
    private static $conn=null;
    public static function  connect()
    {
       // self::$conn=mysqli_connect("localhost","root","","medsky");
       self::$conn=mysqli_connect('sql12.freemysqlhosting.net','sql12235011','CWflEeDvDX','sql12235011');
        return self::$conn;
    }
    public static function disconnect()
    {
        mysqli_close($conn);
        self::$conn=null;
    }
    public function select_all()
    {
        $cnn=med_type::connect();
        $q="select * from medicine_type";
        $result=$cnn->query($q);
        return $result;
        med_type::disconnect();
    }
         public function update($tid,$tname)
    {
               $cnn=med_type::connect();
               $q="update medicine_type set med_type='". $tname ."'where pk_med_id='". $tid ."'";
         $result=$cnn->query($q);
         echo $q;
        return $result;
        med_type::disconnect();
    }
    public function insert($tname)
    {
        $cnn=med_type::connect();
        $vari=0;      
        $q="insert into  medicine_type values ('".null."','". $tname ."')";
        
        $result=$cnn->query($q);
        return $result;
        med_type::disconnect();

    }
     public function deletebyid($tid)
    {
              $cnn=med_type::connect();
        $q="delete from medicine_type where pk_med_id="."'$tid'";
        $result=$cnn->query($q);
        echo $q;
        return $result;
        med_type::disconnect();
    }

}
?>