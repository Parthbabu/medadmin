
<?php
class like
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
        $cnn=like::connect();
        $q="select * from likes_tbl";
        $result=$cnn->query($q);
        return $result;
        like::disconnect();
    }
    public function select_all1()
    {
        $cnn=like::connect();
        $q="select l.*,b.*,u.* from blog_tbl b,likes_tbl l,user_mst u where u.pk_usr_email_id=l.fk_usr_email_id AND b.blog_id=l.fk_blog_id";
        
        $result=$cnn->query($q);
        return $result;
        like::disconnect();
        
    }
         /*public function update($likeid,)
    {
               $cnn=blog::connect();
               $q="update blog_tbl set blog_title='". $btitle ."', blog_desc='". $bdesc  ."' ,blog_date='". $bdate  ."' where blog_id='". $bid ."'";
         $result=$cnn->query($q);
         echo $q;
        return $result;
        blog::disconnect();
    }*/
   /* public function insert($fk_blog_id,$fk_usr_id,$likes)
    {
        $cnn=blog::connect();
        $vari=0;      
        $q="insert into  blog_tbl values ('".null."','". $btitle ."','". $bdesc ."','". $fkdoc ."','". $bdate ."','". $fkspec ."')";
        
        $result=$cnn->query($q);
        return $result;
        blog::disconnect();

    }*/
    /* public function deletebyid($lid)
    {
              $cnn=like::connect();
        $q="delete from likes_tbl where like_id="."'$lid'";
        $result=$cnn->query($q);
        echo $q;
        return $result;
        like::disconnect();
    }*/

}
?>
