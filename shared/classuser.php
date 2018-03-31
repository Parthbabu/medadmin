<?php
class user_all
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
        $cnn=user_all::connect();
        $q="select * from user_mst";
        $result=$cnn->query($q);
        return $result;
        user_all::disconnect();
    }
         public function update($uemail,$uname,$umob,$upass,$ugen,$upic,$ubld,$ubdate,$utype)
    {
               $cnn=user_all::connect();
               $q="update user_mst set usr_name='". $uname ."', usr_mno='". $umob  ."', usr_pass='". $upass  ."', usr_gen='". $ugen  ."',usr_pro_pic='". $upic  ."',blood_grp='". $ubld  ."',usr_bdate='". $ubdate  ."',usr_type='". $utype  ."' where pk_usr_email_id='". $uemail ."'";
         $result=$cnn->query($q);
         echo $q;
        return $result;
        user_all::disconnect();
    }
    public function insert($uemail,$uname,$umob,$upass,$ugen,$upic,$ubld,$ubdate,$uveri,$utoken,$utype)
    {
        $cnn=user_all::connect();
        $vari=0;      
        $q="insert into  user_mst values ('".null."','".$uemail."','". $uname ."','". $umob ."','". $upass ."','". $ugen ."','". $upic ."','". $ubld ."','". $ubdate ."','". $uveri ."','". $utoken ."','". $utype ."')";
        
        $result=$cnn->query($q);
        return $result;
        user_all::disconnect();

    }
     public function deletebyid($uno)
    {
              $cnn=user_all::connect();
        $q="delete from user_mst where usr_sr_no="."'$uno'";
        $result=$cnn->query($q);
        echo $q;
        return $result;
        user_all::disconnect();
    }

}
?>