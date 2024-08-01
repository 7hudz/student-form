<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Data</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Student Data</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Gender</th>
        </tr>
        <?php
        if (isset($_COOKIE['students'])) {
            $students = json_decode($_COOKIE['students'], true);
            foreach ($students as $student) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($student['id']) . "</td>";
                echo "<td>" . htmlspecialchars($student['fullname']) . "</td>";
                echo "<td>" . htmlspecialchars($student['email']) . "</td>";
                echo "<td>" . htmlspecialchars($student['address']) . "</td>";
                echo "<td>" . htmlspecialchars($student['phone']) . "</td>";
                echo "<td>" . htmlspecialchars($student['gender']) . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>
</html>
