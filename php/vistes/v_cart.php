<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="/../css/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="../js/comprar.js"></script>
</head>

<body>
    <a href="index.php?button=0" class="back-arrow"><i class="fas fa-arrow-left"></i></a>
    <h1>Carrito de Compras</h1>
    <?php if (!empty($products_in_cart)) : ?>
        <ul>
            <?php foreach ($products_in_cart as $product) : ?>
                <li>
                    <img src="<?php echo $product['Image']; ?>" alt="<?php echo $product['Name']; ?>">
                    <div>
                        <h3><?php echo $product['Name']; ?></h3>
                        <p>Precio: <?php echo $product['Price']; ?>€</p>
                        <p>Cantidad: <span class="quantity"><?php echo $product['quantity']; ?></span></p>
                    </div>
                </li>
            <?php endforeach; ?>
            <p> Precio total: <?php echo $total; ?> €</p>
        </ul>
        <?php $_SESSION['Preu'] = $total; ?>
        <form action="../controladors/c_cart.php" method="post">
            <input type="hidden" name="total" value="<?php echo $totalPreu; ?>">
            <input type="submit" name="buy" value="Comprar" class="comprar">
        </form>
    <?php else : ?>
        <p>El carrito está vacío.</p>
    <?php endif; ?>
</body>

</html>
