<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Student Form</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h2>Student Form</h2>
    <form action="process.php" method="POST">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" required><br><br>

        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br><br>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required><br><br>
        <div class="radiogender">
            
                <label for="gender">Gender:</label>
            
            <div class="radio12">
                <input type="radio" id="male" name="gender" value="Male" required>
                <label for="male">Male</label>
            </div>
            <div class="radio12">
                <input type="radio" id="female" name="gender" value="Female" required>
                <label for="female">Female</label><br><br>
            </div>
        </div>
        <button type="submit">Submit</button>
    </form>
</body>

</html>