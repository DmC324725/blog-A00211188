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
    function returnAuthor($mail){
        
        $sql = 'SELECT * FROM author WHERE email = ?';
        $stmt = $this->db->prepare($sql);
        $stmt->execute(array($mail));
        $res = $stmt->fetch();
        return $res;

    }
    function createAuthor($vals){
        
        //Email, name, passwordhash
        $sql = 'INSERT INTO author VALUES(?,?,?)';
        $stmt = $this->db->prepare($sql);
        $ress = $stmt->execute($vals);
        
    }

    function getLatestBlogs(){
        $sql = 'SELECT * FROM blog_posts ORDER BY publish_date DESC LIMIT 5';
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $res = $stmt->fetchAll();
        return $res;
    }
    function updateBlogPost($slug,$title,$content){
        //slug, title, content, email, time
        
        $sql = 'UPDATE blog_posts SET post_name = ? , post_content = ? WHERE slug = ?';
        //$sql = 'UPDATE blog_posts SET post_name = ? , post_content = ? WHERE slug = ?';
        $stmt = $this->db->prepare($sql);
        $stmt->execute(array($title,$content,$slug));
        
    }


}                           

?>