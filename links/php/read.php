<?php

ini_set('display_errors', 'On');



header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


include_once "database.php";
include_once "link.php";


if (filter_var($_POST['link'], FILTER_VALIDATE_URL)) {


    $database = new Database();

    $db = $database->getConnection();


    $link = new Link($db);


    $link->url = $_POST['link'];


    $stmt = $link->read();


    $num = $stmt->rowCount();



        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $link_arr = [
            "id" => $row['id'],
            "url" => $row['url'],
            "short_key" =>$row['short_key']
        ];


        $short_link = 'http://' . $_SERVER['SERVER_NAME'] .'/links/r.php?r=' . $link_arr['short_key'];


        echo json_encode(array("short_link" =>$short_link));
    }
    elseif ($num == 0){

        $short_key = $link->create();


        $short_link = 'http://' . $_SERVER['SERVER_NAME'] . '/links/r.php?r=' . $short_key ;

        echo json_encode(array("short_link" => $short_link), JSON_UNESCAPED_UNICODE);

    }


}
else {
    echo json_encode(array("message" => "Not link"), JSON_UNESCAPED_UNICODE);
}

?>
