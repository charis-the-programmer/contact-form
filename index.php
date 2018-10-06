<!DOCTYPE html>
<head>
<title>Contact us</title>
</head>
<body>

<form action="code.php" method="POST">
    <h4>Contact Us:</h4>
    <label for="name">Name: </label>
    <input id="name" name="name" type="text" placeholder="Name" required>
    <br>
    <br>

    <label for="email">Email: </label>
    <input id="email" name="email" type="email" placeholder="example@example.com" required>
    <br>
    <br>

    <label for="whom">To Whom: </label>
    <select name="whom" id="whom">
        <option value="wonka@gmail.com">Willy Wonka</option>
        <option value="winnie@gmail.com">Winnie The Pooh</option>
        <option value="sharklasers1000@gmail.com">Charis The Programmer</option>
    </select>
    <br>
    <br>

    <label for="subject">Subject: </label>
    <input id="subject" name="subject" type="text" placeholder="Subject">
    <br>
    <br>

    <label for="comment">Message: </label>
    <textarea id="comment" name="comment" placeholder="Message here..." rows="10" col="10"></textarea>
    <br>
    <br>

    <input id="submit" type="submit" value="Submit">
</form>

</body>
</html>