<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>ComputerRangs</title>
    <link rel="stylesheet" href="/../css/desplegable.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>

    </style>
</head>

<body>

    <div id="menuBtn" onclick="openNav()">&#9776; </div>

    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="javascript:void(0)" onclick="allProducts()">Todos los juegos</a>
        <a href="javascript:void(0)" onclick="filterProducts('1')">Juegos de armas</a>
        <a href="javascript:void(0)" onclick="filterProducts('2')">Juegos de deporte</a>
        <a href="javascript:void(0)" onclick="filterProducts('3')">Juegos de Mario</a>
        <div class="welcome">
            <?php if (isset($_SESSION['username'])) { ?>
                <p>Bienvenido, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
            <?php } ?>
        </div>
    </div>




    <script src="../js/filterProducts.js">
        // function openNav() {
        //     document.getElementById("mySidebar").style.width = "250px";
        // }

        // function closeNav() {
        //     document.getElementById("mySidebar").style.width = "0";
        // }
        
    </script>

</body>

</html>