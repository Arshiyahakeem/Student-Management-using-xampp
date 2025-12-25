<?php
include "db.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Students</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Student List</h2>

    <div class="table-box">
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Roll</th>
            <th>Department</th>
            <th>Semester</th>
            <th>Action</th>
        </tr>

        <?php
        $result = mysqli_query($conn, "SELECT * FROM student");

        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['name']; ?></td>
            <td><?= $row['roll']; ?></td>
            <td><?= $row['department']; ?></td>
            <td><?= $row['semester']; ?></td>
            <td>
                <a href="delete.php?id=<?= $row['id']; ?>"
                   onclick="return confirm('Are you sure?')">
                   Delete
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>
    </div>

    <a href="add.php">Add New Student</a>
</div>

</body>
</html>
