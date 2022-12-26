<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lesson 4</title>
  <link rel="stylesheet" href="./style.css">
</head>

<body class="">
  <?php
  include_once 'article.php';

  echo str_word_count($article);
  $article = wordwrap($article, 125, "<br/>", true);
  $article = '<article>' . $article . '</article>';
  $strChange1 = '<span class="change1">Lorem</span> <span class="change1"> Ipsum</span>';
  $strChange2 = '<span class="change2">lorem</span> <span class="change2"> ipsum</span>';
  $article = str_replace(['Lorem Ipsum', 'lorem ipsum'], [$strChange1, $strChange2], $article);
  echo $article;

  ?>
</body>

</html>