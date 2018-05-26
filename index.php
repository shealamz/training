<?php
session_start();

require __DIR__ . "/vendor/autoload.php";

// require __DIR__.'/controller/Config.php';
// require __DIR__.'/controller/Proses.php';
// require __DIR__.'/controller/Comment.php';

$proses = new \controller\Proses;
$comment = new \controller\Comment;

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">

  </head>

  <body>
  <!-- Helper -->
  <?php require 'component/helper.php' ?>

  <!-- Header -->
  <?php require 'component/header.php' ?>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <?php 
          if(isset($_GET['detail'])){
                $proses->getDetail($_GET['detail']);
                require "pages/post-detail.php";
          }elseif(isset($_GET['category'])){
                $proses->getPostcat($_GET['category']);
                require "pages/post-category.php";
          }elseif(isset($_GET['search'])){
                $proses->searchPost($_GET['search']);
                require "pages/search.php";
          }else{
                require "pages/home.php";
          }

        ?>
        <!-- Sidebar Widgets Column -->
        <?php require 'component/sidebar.php' ?>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->


    <!-- Footer -->
    <?php require 'component/footer.php' ?>

    <!-- Bootstrap core JavaScript -->
    <script src="asset/jquery/jquery.min.js"></script>
    <script src="asset/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

    