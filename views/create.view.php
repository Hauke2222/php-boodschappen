<?php require('partials/header.php');?>

<body>

    <?php require('partials/nav.php');?>

    <form action="/action_page.php" method="get" id="nameform">
        <br>
        <label for="name">Naam:</label>
        <input type="text" id="name" name="fname">
        
        <label for="quantity">Aantal:</label>
        <input type="number" id="quantity" name="fname">
        
        <label for="price">Prijs:</label>
        <input type="number" id="price" name="fname">

    </form>

    <button type="submit" form="nameform" value="Submit">Submit</button>

</body>

</html>