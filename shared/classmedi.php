<?php
class medicine_all
{
    private static $conn=null;
    public static function  connect()
    {
        //self::$conn=mysqli_connect("localhost","root","","medsky");
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
        $cnn=medicine_all::connect();
        $q="select * from medicine_mst";
        $result=$cnn->query($q);
        return $result;
        medicine_all::disconnect();
    }
         public function update($mid,$mname,$cname,$muse,$mtype)
    {
               $cnn=medicine_all::connect();
               $q="update medicine_mst set med_name='". $mname ."', com_name='". $cname  ."', med_use='". $muse  ."', med_type='". $mtype  ."' where pk_med_id='". $mid ."'";
         $result=$cnn->query($q);
         echo $q;
        return $result;
        medicine_all::disconnect();
    }
    public function insert($mname,$cname,$muse,$mtype)
    {
        $cnn=medicine_all::connect();
        $vari=0;      
        $q="insert into  medicine_mst values ('".null."','". $mname ."','". $cname ."','". $muse ."','". $mtype ."')";
        
        $result=$cnn->query($q);
        return $result;
        medicine_all::disconnect();

    }
     public function deletebyid($mid)
    {
              $cnn=medicine_all::connect();
        $q="delete from medicine_mst where pk_med_id="."'$mid'";
        $result=$cnn->query($q);
        echo $q;
        return $result;
        medicine_all::disconnect();
    }

}
?>