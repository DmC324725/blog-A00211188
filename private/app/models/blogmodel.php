<?php
class BlogModel extends Model{
    function __construct() {
        parent::__construct();
        
        $this->db = new PDO("mysql:host=db", "root", "root");
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
        $res = $stmt->fetch();
        echo $res;
        return $res;
    }
    function getBlogPost($slug){
        $sql = 'SELECT * FROM blog_posts WHERE slug = ?';
        $stmt = $this->db->prepare($sql);
        $stmt->execute(array($slug));
        $res = $stmt->fetch();

        return $res[0];
    }

}                           

?>