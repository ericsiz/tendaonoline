<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>ComputerRangs</title>
    <link rel="stylesheet" href="/../css/productes.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <a href="index.php?button=0" class="back-arrow"><i class="fas fa-arrow-left"></i></a>
    <div id="anunci">
        <h3>Videojuegos a la Venda</h3>
    </div>
    <div id="productes">
        <?php foreach ($productes as $row) { ?>
            <div id="producte" data-type="<?php echo $row['Type']; ?>" onclick="showProduct(this)">
                <div id="product-name" class="product-name">
                    <h3><?php echo $row['Name']; ?></h3>
                </div>
                <img src="<?php echo $row['Image']; ?>" alt="<?php echo $row['Name']; ?>">
                <div id="plus">
                    <p class="name"><?php echo $row['Name']; ?>
                    <p class='description'><?php echo $row['Description']; ?></p>
                    <p class='price'>Precio: <?php echo $row['Price']; ?>€</p>
                    <?php if (isset($_SESSION['username'])) : ?>
                        <button class="add-to-cart-btn" onclick="addToCart(<?php echo $row['ID']; ?>)">Añadir al carrito</button>
                    <?php else : ?>
                        <p>Inicia sessión para añadir productos al carro de compras</p>
                    <?php endif; ?>
                </div>
            </div>
        <?php } ?>
    </div>
    <script src="../js/filterProduct.js"></script>
</body>

</html>