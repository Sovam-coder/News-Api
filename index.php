<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Sovam News Channel</title>
  </head>
  <body>
  <?php
        $url='http://newsapi.org/v2/top-headlines?sources=google-news-in&apiKey=d702491025274dcfb46aca37f6db3056';
        $response= file_get_contents($url);
        $NewsData= json_decode($response);




?>
<div class="jumbotron">
<h1>Sovam News Channel</h1>

</div>
<div class='container-fluid'>
<?php
  foreach($NewsData->articles as $pa)
  {
?>
<div class='row'>
    <div class='col-md-3'>
    <img src="<?php echo $pa->urlToImage  ?>" alt="" width="100%">
    </div>
    <div class='col-md-9'>
    <h2>Title:  <?php echo $pa->title    ?> </h2>
    <h5>Description: <?php echo $pa->description  ?></h5>
    <p>Content: <?php echo $pa->content ?></p>
    <h6>Author: <?php echo $pa->author ?></h6>
    <h6>Published:<?php echo  $pa->publishedAt ?></h6>
    <hr>
    </div>
    
</div>

<?php
  }
  ?>
  <hr>
</div>

    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>









