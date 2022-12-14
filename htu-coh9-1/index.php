<?php 

$lessons=array(
       array(
      "title"=> "php Demo",
      'description'=> 'Demo about the basics of the php language and its sytax',
      'link' => './demo/' ),

       array("title"=> "php Forms",
       'description'=> 'How to handle forms in php.',
       'link'=>'./php_forms/')

);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php class </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body class="container my-5">
    <h1 class="text-center">Php basics class</h1>
   <hr class="mb-5">

<div class="row">
 
 <?php foreach ($lessons as $lesson) : ?>

  <div class="card-wrapper col-3">
   <div class="card" style="width: 100%;">
    <div class="card-body">
      <h5 class="card-title"><?php echo $lesson['title'] ?></h5>
      <p class="card-text"><?=  $lesson['description'] ?></p>
      <a href="<?= $lesson['link'] ?>" class="card-link">go to this lesson</a>
      </div>
    </div>
 </div>
  <?php  endforeach; ?>

</div>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
