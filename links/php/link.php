<?php
class Link {


    private $conn;
    private $table_name = "links";


    public $id;
    public $url;
    public $short_key;


    public function __construct($db){
        $this->conn = $db;
    }


    function read() {
    $this->url=htmlspecialchars(strip_tags($this->url));

        $query = "SELECT * FROM `$this->table_name` WHERE `url`= '$this->url'";


        $stmt = $this->conn->prepare($query);


        $stmt->execute();

        return $stmt;
    }


    function create() {

        $letters='QWERTYUIOPASDFGHJKLZXCVBNM1234567890';
        $count=strlen($letters);
        $intval=time();
        $result='';
        for($i=0;$i<4;$i++) {
                $last=$intval%$count;
                $intval=($intval-$last)/$count;
                $result.=$letters[$last];
        }



        $this->url=htmlspecialchars(strip_tags($this->url));
        $this->short_key=htmlspecialchars(strip_tags($result.$intval));


        $query = "INSERT INTO
        `$this->table_name` (`id`,`url`,`short_key`) VALUES (null, :long_url, :short_key)";


        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":long_url", $this->url);
        $stmt->bindParam(":short_key", $this->short_key);


        if ($stmt->execute()) {
        
        return htmlspecialchars_decode($this->short_key);
        }

        return false;
    }
}
?>
