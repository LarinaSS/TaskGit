<?php
    if (isset($_POST['name']) && isset($_POST['data'])){
        $name = $_POST['name'];
        $data = $_POST['data'];
        $db_host = "localhost";
        $db_user = "root"; 
        $db_password = ""; 
        $db_base = "testbase"; 
        $db_table = "taskbase"; 
        $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);
        $mysqli->set_charset('utf8');
        $resulte = $mysqli->query("INSERT INTO $db_table VALUES ('$name','$data')");
    }
?>
<?php
    require_once "functions/functions.php"; 
    $news = getNews();
?>