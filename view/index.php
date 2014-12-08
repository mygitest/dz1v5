<html>
<head>
    <title>Новости</title>
</head>
<body>
<p style="font-size: 25pt"><a href ="../addnews.php"><em>Добавить новость</em></a></p>
<hr>
    <?php foreach ($news as $article): ?>
    <article>
        <a href ="../showSinglN.php?id=<?=$article['id'];?>"><h1><?=$article['title'];?></h1> </a>
        <div><?=$article['text'];?></div>
        <a href ="../editNews.php?id=<?=$article['id'];?>">отредактировать новость</a></p>
    </article>
    <hr>
    <?php endforeach; ?>

</body>
</html>
