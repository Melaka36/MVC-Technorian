<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List</title>
</head>
<body>
    <h1>Hello I am from Employee View</h1>
    <h2>Users</h2>
    <!-- <?php
    print_r($this->users);
    ?> -->
    <?php //print_r($this->users[0][1]); 
    $i = 0;
    $j = 0;
    echo "<table id='user_details'><tr>
            <th>Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Password</th></tr>";

    for($i=0;$i<count($this->users);$i++){
        echo "<tr>
            <td>{$this->users[$i][$j]}</td>
            <td>{$this->users[$i][$j+1]}</td>
            <td>{$this->users[$i][$j+2]}</td>
            <td>{$this->users[$i][$j+3]}</td>
        </tr>";
    }
    echo "</table>"

    ?>
</body>
</html>