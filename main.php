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
<div id="goal">
    <div id="column">
        <div id="Name">Название</div>
        <div id="Data">Дата</div>
        <div id="Action">Действие</div>
    </div>
    <?php 
    if (isset($_POST['sub'])) {
    $search = $_POST['search'];
    $mysqli = new mysqli("localhost", "root", "", "testbase");
    $result = $mysqli->query("SELECT * FROM `taskbase` WHERE `data` = '$search'");
    while($row=$result->fetch_assoc())
        echo "<div id =\"line\">",
    '<div id="LineName">'.$row["name"].'</div>
    <div id="LineData">'.$row["data"].'</div>
    <div id="LineAction">
    <div><a href="">Изменить</a></div>
    <div><a href="">Удалить</a></div>
    </div>
    </div>';
}  elseif (isset($_POST['subData'])) {
    $dataSearch = $_POST['dataSearch'];
    $mysqli = new mysqli("localhost", "root", "", "testbase");
    $result = $mysqli->query("SELECT * FROM `taskbase` WHERE `name` LIKE '%$dataSearch%'");
    while($row=$result->fetch_assoc())
        echo "<div id =\"line\">",
    '<div id="LineName">'.$row["name"].'</div>
    <div id="LineData">'.$row["data"].'</div>
    <div id="LineAction">
    <div><a href="">Изменить</a></div>
    <div><a href="">Удалить</a></div>
    </div>
    </div>';
} elseif (isset($_POST['subData'])) {
    for ($i = 0; $i < count($news); $i++) {
        echo "<div id =\"line\">";
        echo '<div id="LineName">'.$news[$i]["name"].'</div>
        <div id="LineData">'.$news[$i]["data"].'</div>
        <div id="LineAction">
        <div><a href="">Изменить</a></div>
        <div><a href="">Удалить</a></div>
        </div>
    </div>';
    }
}
else {
    for ($i = 0; $i < count($news); $i++) {
        echo "<div id =\"line\">";
        echo '<div id="LineName">'.$news[$i]["name"].'</div>
        <div id="LineData">'.$news[$i]["data"].'</div>
        <div id="LineAction">
        <div><a href="">Изменить</a></div>
        <div><a href="">Удалить</a></div>
        </div>
    </div>';
    }
}
?>