<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "Web_users";

$connection = mysqli_connect($servername, $username, $password, $database);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .container {
            height: 100vh;
            width: 100vw;
            display: flex;
            flex-direction: column;
        }

        table {
            border: 2px solid black;
            border-collapse: collapse;
        }

        th,
        tr,
        td {
            border: 2px solid black;
        }

        td {
            text-align: center;
        }

        h2 {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
        }
    </style>
</head>

<body>

    <h2>Welcome Mr. Naman</h2>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Sr.no</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM users";
                $result = mysqli_query($connection, $sql);
                $i=1;
                while($row = mysqli_fetch_assoc($result)){
                  echo "<tr>
                  <td scope ='row'>" . $i. "</td>
                  <td>" . $row['Name']. "</td>
                  <td>" . $row['Email']. "</td>
                  <td>" . $row['Phone']. "</td>
                </tr>";
                $i++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>