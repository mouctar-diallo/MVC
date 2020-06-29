<!doctype html>
<html lang="en">
  <head>
    <title>projet poo</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="<?=URL?>public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=URL?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=URL?>public/dataTables/media/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="<?=URL?>public/css/style.css">
  </head>
  <body>
        <?php include('navbar.php'); ?>
      <div class="container">
           <div class="row">
                <?php echo  $page_content ; ?>
           </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="<?=URL?>public/dataTables/media/js/jquery.js"></script>
    <script src="<?=URL?>public/dataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?=URL?>public/js/ajax.js"></script>
    <script src="<?=URL?>public/js/scroll.js"></script>
    <script src="<?=URL?>public/js/validation.js"></script>
  </body>
</html>