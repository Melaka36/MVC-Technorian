<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        #viewList{
            text-decoration: none;
            background-color: burlywood;
            color: black;
            padding: 12px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <center>
        <h1>Registration Form</h1>
    </center>

    <form method="post" action="Registration">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" id="first_name" required><br>
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" id="last_name" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>
        <center>
            <input type="Submit" name="submit" id="submit"></center>
    </form>

    <a href="employees" id="viewList"> View List</a>
</body>

</html>