<?php

include '/functions/db.php';

$news = 'newsText';
$title = 'newsTitle';

if(!empty($_POST['newsText'])&&!empty($_POST['newsTitle']))
    {
    if (isset($_POST['newsText'])&&($_POST['newsTitle']))
        {
            $newsText = $_POST['newsText'];
            $newstitle = $_POST['newsTitle'];
            dbExec("
			INSERT INTO news (title,text)
			VALUES('$newstitle','$newsText')
				  ");
         }
    }
header('Location: /index.php');
