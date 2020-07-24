<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styles.css">

</head>

<body>

    <ul>
        <li><a class="active" href="">Home</a></li>
        <li><a href="">News</a></li>
    </ul>

    <h1></h1>

    <table style="width:50%">
        <tr>
            <th>Product</th>
            <th>Prijs</th>
            <th>Aantal</th>
            <th>Totaal</th>
        </tr>
        <?php $totalPrice = 0 ?>
        <?php foreach($boodschappen as $key => $boodschap) { ?>
            <?php $boodschapPrijs = 0 ?>
        <tr>
            <td><?php echo $boodschap["name"] ?></td>
            <td><?php echo $boodschap["price"] ?></td>
            <td><input type="number" value="<?php echo $boodschap["quantity"]; ?>"></td>
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