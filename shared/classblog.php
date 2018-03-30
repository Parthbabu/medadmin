
<?php
class blog
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
        $cnn=blog::connect();
        $q="select * from blog_tbl";
        $result=$cnn->query($q);
        return $result;
        blog::disconnect();
    }
    public function select_all1()
    {
        $cnn=blog::connect();
        $q="select d.*,b.*,s.* from blog_tbl b,doctor_mst d,doc_specialist s where s.pk_spec_id=b.fk_spec_id AND b.fk_doc_email_id=d.pk_doc_email_id";
        
        $result=$cnn->query($q);
        return $result;
        blog::disconnect();
        
    }
         public function update($bid,$btitle,$bdesc,$bdate)
    {
               $cnn=blog::connect();
               $q="update blog_tbl set blog_title='". $btitle ."', blog_desc='". $bdesc  ."' ,blog_date='". $bdate  ."' where blog_id='". $bid ."'";
         $result=$cnn->query($q);
         echo $q;
        return $result;
        blog::disconnect();
    }
    public function insert($btitle,$bdesc,$fkdoc,$bdate,$fkspec)
    {
        $cnn=blog::connect();
        $vari=0;      
        $q="insert into  blog_tbl values ('".null."','". $btitle ."','". $bdesc ."','". $fkdoc ."','". $bdate ."','". $fkspec ."')";
        
        $result=$cnn->query($q);
        return $result;
        blog::disconnect();

    }
     public function deletebyid($bid)
    {
              $cnn=blog::connect();
        $q="delete from blog_tbl where blog_id="."'$bid'";
        $result=$cnn->query($q);
        echo $q;
        return $result;
        blog::disconnect();
    }

}
?>
