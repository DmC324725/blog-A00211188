<?php
class BlogModel extends Model{
    function __construct() {
        parent::__construct();
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

        return $res;
    }
    function getBlog($slug){
        $sql = 'SELECT * FROM blog_posts WHERE slug = ?';
        $stmt = $this->db->prepare($sql);
        $stmt->execute(array($slug));
        $res = $stmt->fetch();

        return $res[0];
    }

}                           

?>