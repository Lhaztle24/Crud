<!DOCTYPE html>
<html>
<head>
    <title>View Records</title>
</head>
<body>
    <h1>View Records</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
        </tr>
        <?php
        require_once 'config.php';

        $query = "SELECT * FROM users";
        $result = $mysqli->query($query);

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "</tr>";
        }

        $result->free();
        $mysqli->close();
        ?>
    </table>
</body>
</html>