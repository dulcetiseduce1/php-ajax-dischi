<?php

require "../db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dischi</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <header>
  </header>

  <main>
    <div class="container py-5">
      <div class="row row-cols-5 g-3">

        <?php foreach($dischi as $album) { ?>
          <div class="col">
            <div class="p-3 text-center cards-container">
              <div>
                <img src="<?php echo $album["poster"] ?>" alt="<?php echo $album["title"] ?>" class="img-card">
              </div>
              <h5 class="py-2 text-center"><?php echo $album["title"] ?></h5>
              <h6><?php echo $album["author"] ?></h6>
              <h6><?php echo $album["year"] ?></h6>
            </div>
          </div>
        <?php } ?>

      </div>
    </div>
  </main>
</body>
</html>