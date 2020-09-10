<?php require('partials/header.php');?>

<body>

    <?php require('partials/nav.php');?>

    <h1></h1>

    <table style="width:50%">
        <tr>
            <th>Product</th>
            <th>Prijs</th>
            <th>Aantal</th>
            <th>Totaal</th>
        </tr>
        <?php $totalPrice = 0 ?>
        <?php foreach($boodschappen_from_database as $boodschap) { ?>
            <?php $boodschapPrijs = 0 ?>
        <tr>
            <td><?php echo $boodschap["name"] ?></td>
            <td><?php echo $boodschap["price"] ?></td>
            <td><?php echo $boodschap["quantity"]; ?></td>
            <td><?php echo $boodschapPrijs = $boodschap["quantity"] * $boodschap["price"] ?></td>
        </tr>
            <?php $totalPrice += $boodschapPrijs ?>
        <?php } ?>
        <tr>
            <td>Totaal</td>
            <td>-</td>
            <td>-</td>
            <td><?php echo $totalPrice ?></td>
        </tr>
    </table>

</body>

</html>