<?php
class specialist
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
        $cnn=specialist::connect();
        $q="select * from doc_specialist";
        $result=$cnn->query($q);
        return $result;
        specialist::disconnect();
    }
    public function select_all1($id)
    {
        $cnn=specialist::connect();
        $q="select s.*,d.* from doctor_mst d,doc_specialist s where s.pk.spec_id=d.fk_spec_id AND s.pk.spec_id='".$id."'";
        $result=$cnn->query($q);
        return $result;
        specialist::disconnect();
      
    }
         public function update($sid,$sname)
    {
               $cnn=specialist::connect();
               $q="update doc_specialist set spec_name='". $sname ."'where pk_spec_id='". $sid ."'";
         $result=$cnn->query($q);
         echo $q;
        return $result;
        specialist::disconnect();
    }
    public function insert($sname)
    {
        $cnn=specialist::connect();
        $vari=0;      
        $q="insert into  doc_specialist values ('".null."','". $sname ."')";
        
        $result=$cnn->query($q);
        return $result;
        specialist::disconnect();

    }
     public function deletebyid($sid)
    {
              $cnn=specialist::connect();
        $q="delete from doc_specialist where pk_spec_id="."'$sid'";
        $result=$cnn->query($q);
        echo $q;
        return $result;
        specialist::disconnect();
    }

}
?>