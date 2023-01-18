<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Form</title>
</head>
<body>
    <form action="../database/connect.php" method="post">
        <p><label for="testfield">Text to Add:</label><br>
        <input type="text" id="testfield" name="testfield" size="30"></p>
        <button type="submit" name="submit" value="insert">Insert Record</button>
    </form>
</body>
</html>