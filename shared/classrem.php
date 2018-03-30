
<?php
class reminder
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
        $cnn=reminder::connect();
        $q="select * from reminder_tbl";
        $result=$cnn->query($q);
        return $result;
        reminder::disconnect();
    }
    public function select_all1()
    {
        $cnn=reminder::connect();
        $q="select r.*,u.*from reminder_tbl r,user_mst u where u.pk_usr_email_id=r.fk_usr_email_id ";
        
        $result=$cnn->query($q);
        return $result;
        reminder::disconnect();
        
    }
         public function update($rid,$rtitle,$rdesc,$sdate,$edate)
    {
               $cnn=reminder::connect();
               $q="update reminder_tbl set rem_title='". $rtitle ."', rem_desc='". $rdesc  ."' ,start_date='". $sdate  ."',end_date='". $edate  ."' where pk_rem_id='". $rid ."'";
         $result=$cnn->query($q);
         echo $q;
        return $result;
        reminder::disconnect();
    }
    public function insert($fkusr,$rtitle,$rdesc,$sdate,$edate)
    {
        $cnn=reminder::connect();
        $vari=0;      
        $q="insert into  reminder_tbl values ('".null."','". $fkusr ."','". $rtitle ."','". $rdesc ."','". $sdate ."','". $edate ."')";
        
        $result=$cnn->query($q);
        return $result;
        reminder::disconnect();

    }
     public function deletebyid($rid)
    {
              $cnn=reminder::connect();
        $q="delete from reminder_tbl where pk_rem_id="."'$rid'";
        $result=$cnn->query($q);
        echo $q;
        return $result;
        reminder::disconnect();
    }

}
?>
