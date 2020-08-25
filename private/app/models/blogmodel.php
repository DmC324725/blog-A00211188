<?php
class BlogModel extends Model{
    function __construct() {
        parent::__construct();
        $this->db = new PDO("mysql:host=db;dbname=database", "root", "root");
    }

    function DbVersion() {
        $sql = 'SELECT VERSION()';
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $res = $stmt->fetch();

        return $res[0];
    }

    function getBlogList() {
        $sql = 'SELECT * FROM blog_posts';
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $res = $stmt->fetchAll();
        return $res;
    }
    function getBlogPost($slug){
        $sql = 'SELECT * FROM blog_posts WHERE slug = ?';
        $stmt = $this->db->prepare($sql);
        $stmt->execute(array($slug));
        $res = $stmt->fetch();
        return $res;
    }

    function insertBlogPost($postVals){
        //slug, title, content, email, time
        $sql = 'INSERT INTO blog_posts VALUES(?,?,?,?,now())';
        $stmt = $this->db->prepare($sql);
        $stmt->execute($postVals);
        
    }
    function createAuthor($vals){
        echo "<script type='text/javascript'>console.log('$vals[0],$vals[1],$vals[2]');</script>";
        try{
        //Email, name, passwordhash
        $sql = 'INSERT INTO author VALUES(?,?,?)';
        $stmt = $this->db->prepare($sql);
        $stmt->execute($vals);
        }catch(Exception $e){
            $mse = $e->getMessage();
            echo "<script type='text/javascript'>console.log('$mse');</script>";
        }

    }
    function updateBlogPost($slug,$title,$content){
        //slug, title, content, email, time
        
        $sql = "UPDATE blog_posts SET post_name = '$title' , post_content = '$content' WHERE slug = '$slug'";
        //$sql = 'UPDATE blog_posts SET post_name = ? , post_content = ? WHERE slug = ?';
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        
    }


}                           

?>