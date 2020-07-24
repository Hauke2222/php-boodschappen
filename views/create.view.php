<!DOCTYPE html>
<html>

<head>
    <title>Page Title</title>
</head>

<body>

    <ul>
        <li><a class="active" href="">Home</a></li>
        <li><a href="">News</a></li>
    </ul>

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