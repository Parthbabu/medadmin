<?php
class doctor_all
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
        $cnn=doctor_all::connect();
        $q="select * from doctor_mst";
        $result=$cnn->query($q);
        return $result;
        doctor_all::disconnect();
    }
    public function select_all1()
    {
        $cnn=doctor_all::connect();
        $q="select d.*,s.*,de.* from doctor_mst d,doc_specialist s,doc_degree de where s.pk_spec_id=d.fk_spec_id AND de.pk_deg_id=d.fk_deg_id";
        $result=$cnn->query($q);
        return $result;
        doctor_all::disconnect();
    }
         public function update($demail,$dpass,$dlic,$dname,$dadd,$dgen,$dmob)
    {
        $cnn=doctor_all::connect();
         $q="update doctor_mst set doc_pass='". $dpass ."', doc_lic_no='". $dlic  ."', doc_name='". $dname  ."',doc_add='". $dadd  ."',doc_gen='". $dgen  ."',doc_mno='". $dmob  ."' where pk_doc_email_id='". $demail ."'";
         $result=$cnn->query($q);
      //   echo $q;
        return $result;
        //doctor_all::disconnect();
    }
    public function insert($demail,$dpass,$dlic,$dname,$dspe,$ddeg,$dpic,$dadd,$dgen,$dmob,$dveri,$dtoken)
    {
        $cnn=doctor_all::connect();
       // $vari=0;      
        $q="insert into  doctor_mst values ('".$demail."','". $dpass ."','". $dlic ."','". $dname ."','". $dspe ."','". $ddeg ."','". $dpic ."','". $dadd ."','". $dgen ."','". $dmob ."','". $dveri ."','". $dtoken ."')";
        echo $q;
        $result=$cnn->query($q);
        return $result;
        //doctor_all::disconnect();
    }
     public function deletebyid($dno)
    {
              $cnn=doctor_all::connect();
        $q="delete from doctor_mst where doc_sr_no="."'$dno'";
        $result=$cnn->query($q);
        echo $q;
        return $result;
        doctor_all::disconnect();
    }

}
?>