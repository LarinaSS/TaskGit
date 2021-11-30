<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="styles/sit.css" rel="stylesheet">
    <script src="scripts/form.js"></script>
    <title>Планировщик</title>
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
</body>
</html>