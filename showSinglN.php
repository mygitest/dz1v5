<?php
header('Content-type: text/html; charset=UTF-8');
include '/functions/db.php';
$id = $_GET['id'];
$res = DBQuery("SELECT * FROM news WHERE id = $id");
?>
<html>
<head>
    <title></title>
</head>
<body>
<?php foreach ($res as $article): ?>
    <article>
        <h1><?=$article['title'];?></h1>
        <div><?=$article['text'];?></div>
    </article>
<?php endforeach; ?>
</body>
</html>