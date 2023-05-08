<?php

require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Toys.php';
require_once __DIR__ . '/models/Food.php';

$dog= new Category('Cane','fa-solid fa-dog');
$cat= new Category('Gatto','fa-solid fa-cat');



$collare = new Product('Collare', 15, $dog, 'https://picsum.photos/200/300');
$croccantini = new Food('Croccantini', 15, $cat,'https://picsum.photos/200/300','Salmone','Gourmet');
$pallaDiGomma = new Toys('Pallina di Gomma', 5, $dog,'https://picsum.photos/200/300', 'Gomma');



$list = [
    $collare,
    $croccantini,
    $pallaDiGomma
];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="d-flex">
        <?php foreach($list as $product) { ?>
        <div class="card" style="width: 18rem;">
        <img src="<?php echo $product->image; ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $product->name; ?></h5>
            <i class="<?php echo $product->category->icon; ?>"></i>
            <div> Prezzo: <?php echo $product->price; ?>$</div>
            <div><?php echo get_class($product) ?></div>
        </div>
        </div>
        <?php } ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>