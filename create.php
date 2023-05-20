<!DOCTYPE html>
<html>
<head>
    <title>Create New Record</title>
</head>
<body>
    <h1>Create New Record</h1>
    <form action="insert.php" method="POST">
        <label>Name:</label>
        <input type="text" name="name" required><br>

        <label>Email:</label>
        <input type="email" name="email" required><br>

        <label>Age:</label>
        <input type="number" name="age" required><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>