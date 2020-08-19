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
        $res = $stmt->fetch();
        return $res;
    }
    function updateBlogPost($slug,$title,$content){
        //slug, title, content, email, time
        echo "<script type='text/javascript'>console.log('Inside Update Statement');</script>";
        $sql = "UPDATE blog_posts SET post_name = '$title' , post_content = '$content' WHERE slug = '$slug'";
        //$sql = 'UPDATE blog_posts SET post_name = ? , post_content = ? WHERE slug = ?';
        $stmt = $this->db->prepare($sql);
        echo "<script type='text/javascript'>console.log('Prepared');</script>";
        $stmt->execute();
        echo "<script type='text/javascript'>console.log('Executed');</script>";
        //$res = $stmt->fetch();
        //return $res;
    }


}                           

?>