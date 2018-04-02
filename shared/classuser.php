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
    public function insert($uno,$uemail,$uname,$umob,$upass,$ugen,$upic,$ubld,$ubdate,$uveri,$utoken,$utype)
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
    public function selectype($type)
    {
        $cnn=user_all::connect();
        $q="select * from user_mst where usr_type='". $type."'";
        $result=$cnn->query($q);
        return $q;
        user_all::disconnect();
    }
    public function updatetype($id)
    {
        $cnn=user_all::connect();
        $sql="select * from user_mst where pk_usr_email_id='$id'";
    //echo $sql;
    $res=$cnn->query($sql);
   // $row=$res->fetch_assoc();
   $type="Admin";
    if($res->num_rows==1)
    {
        $row=$res->fetch_assoc();
        if($row['usr_type']==$type)
        {
            $msg="He is already admin";
            print '
            
            "<div class="btn btn-dark btn-lg btn-block">He is already Admin</div>"
            
            ';
            header('location:../user/user_tbl.php?msg='.$msg);
            
        }
        else
        {
            $sql="update user_mst set usr_type='Admin' where pk_usr_email_id='". $id ."' ";
            $res=$cnn->query($sql);
            $msg="Make Admin Successfully";
            header('location:../user/user_tbl.php?msg='.$msg);
        }
        
    return $res;
    }
    else{
        return 'Error in making Admin';
    }
        user_all::disconnect();
    }

}
?>