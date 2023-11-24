<?php
    require_once 'DB/connexion.php';
    require_once 'DB/projDB.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        include_once 'layout/topBar.php';
        $page = (isset($_GET['page'])) ? $_GET['page'] : '';
        $page .= '.php';
        $pages = scandir('view');
        if(in_array($page, $pages))
            include_once 'view/'.$page;
        else
            include_once 'error.php';
    ?>
    
</body>
</html>