<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 3 Forms</title>
    <!-- <style type="text/css">
        label{ width: 5em; float: left;}
    </style> -->
    <link rel="stylesheet" type="text/CSS" href="../styles/style.css">
</head>
<body>
    <h1>Registration Form</h1>
    <p>Please fill in all fields and click register.</p>

    <form method="post" action="details.php">
        <h2>User Information</h2>

        <div><label>First Name:</label>
            <input type="text" name="fname"></div>
        <div><label>Last Name:</label>
            <input type="text" name="lname"></div>   
        <div><label>Email:</label>
            <input type="text" name="email"></div>
        <div><label>Phone:</label>
            <input type="text" name="phone" 
                placeholder="(555) 555-555"></div>
        </div>

        <h2>Publications</h2>
        <p>Which books would u like informarion about?</p>

        <select name ="book">
            <option>Internet and WWW How to program</option>
            <option>C++ How to Program</option>
            <option>Java How to Program</option>
            <option>Visual Basic How to Program</option>
        </select>

        <h2>Operating System</h2>
        <p>Which operating system do you use?</p>

        <p><input type="radio" name="os" value="Windows" checked>Windows
            <input type="radio" name="os" value="Mac OS X">Mac OS X
            <input type="radio" name="os" value="Linux">Linux
            <input type="radio" name="os" value="Other">Other
        </p>
        <p><input type="submit" name="submit" value="Register"></p>

    </form>
</body>
</html>