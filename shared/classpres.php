<?php
class prescription_all
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
        $cnn=prescription_all::connect();
        $q="select * from prescription_mst";
        $result=$cnn->query($q);
        return $result;
        prescription_all::disconnect();
    }
    public function select_all1()
    {
        $cnn=prescription_all::connect();
        $q="select d.*,p.*,u.* from prescription_mst p,doctor_mst d,user_mst u where pk_doc_email_id=fk_doc_email_id AND fk_usr_email_id=pk_usr_email_id";
        $result=$cnn->query($q);
        return $result;
        prescription_all::disconnect();
        
    }
         public function update($ppid,$pmed,$pmor,$pnoon,$pnight,$pins,$pday,$pdate)
    {
               $cnn=prescription_all::connect();
               $q="update prescription_mst set col_medids='". $pmed ."', pres_morning='". $pmor  ."',pres_noon='". $pnoon  ."',pres_night='". $pnight  ."',pres_instr='". $pins  ."',pres_day='". $pday  ."', pres_date='". $pdate  ."' where pk_pres_id='". $ppid ."'";
         $result=$cnn->query($q);
         echo $q;
        return $result;
        prescription_all::disconnect();
    }
    public function insert($fkuid,$fkdid,$pmed,$pmor,$pnoon,$pnight,$pins,$pday,$pdate)
    {
        $cnn=prescription_all::connect();
        $vari=0;      
        $q="insert into  prescription_mst values ('".null."','". $fkuid ."','". $fkdid ."','". $pmed ."','". $pmor ."','". $pnoon ."','". $pnight ."','". $pins ."','". $pday ."','". $pdate ."')";
        
        $result=$cnn->query($q);
        return $result;
        prescription_all::disconnect();

    }
     public function deletebyid($ppid)
    {
              $cnn=prescription_all::connect();
        $q="delete from prescription_mst where pk_pres_id="."'$ppid'";
        $result=$cnn->query($q);
        echo $q;
        return $result;
        prescription_all::disconnect();
    }

}
?>