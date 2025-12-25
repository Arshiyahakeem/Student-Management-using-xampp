<?php
include "db.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Add Student</h2>

    <form method="post">
        <label>Name</label>
        <input type="text" name="name" required>

        <label>Roll No</label>
        <input type="number" name="roll" required>

        <label>Department</label>
        <input type="text" name="dept" required>

        <label>Semester</label>
        <input type="number" name="sem" required>

        <button type="submit" name="submit">Add Student</button>
    </form>

    <a href="view.php">View Students</a>
</div>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $dept = $_POST['dept'];
    $sem = $_POST['sem'];

    $sql = "INSERT INTO student (name, roll, department, semester)
            VALUES ('$name', '$roll', '$dept', '$sem')";

    mysqli_query($conn, $sql);

    echo "<script>alert('Student Added Successfully');</script>";
}
?>

</body>
</html>
