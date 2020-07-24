<?php require('partials/header.php');?>

<body>

    <?php require('partials/nav.php');?>

    <form action="/action_page.php" method="get" id="nameform">
        <label for="fname">First name:</label>
        <input type="text" id="fname" name="fname"><br><br>
        <label for="lname">Last name:</label>
        <input type="text" id="lname" name="lname">
    </form>

    <p>The button below is outside the form element, but still part of the form.</p>

    <button type="submit" form="nameform" value="Submit">Submit</button>

</body>

</html>