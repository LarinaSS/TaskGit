<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="styles/sit.css" rel="stylesheet">
    <script src="scripts/form.js"></script>
    <title>Планировщик задач</title>
</head>
<body>
<div id="content">
    <?php
    $page = $_GET['page'];
    if (!isset($page)) {
        require('templates/main.php');
    }  
?>
<div>
    <table></table>
</div>
</body>
</html>