<?php require('partials/header.php');?>

<body>

    <?php require('partials/nav.php');?>

    <form action="add_grocery" method="POST">
        <br>
        <label for="name">Product:</label>
        <input type="text" id="name" name="name">
        
        <label for="number">Aantal:</label>
        <input type="number" id="number" name="number">
        
        <label for="price">Prijs:</label>
        <input type="number" id="price" name="price">

        <button type="submit" form="nameform" value="Submit">Submit</button>

    </form>
    <br>


</body>

</html>