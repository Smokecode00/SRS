<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the user_type is set
    if (isset($_POST["user_type"])) {
        $userType = $_POST["user_type"];

        // Redirect based on user_type
        if ($userType == "admin") {
            header("Location: admin_form.php");
            exit();
        } elseif ($userType == "user") {
            header("Location: user_form.php");
            exit();
        } else {
            echo "Invalid user type";
        }
    } else {
        echo "User type not set";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Select User Type</title>
</head>

<body>

    <form action="" method="post">
        <label for="user_type">Select User Type:</label>
        <select name="user_type" id="user_type">
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select>
        <br>
        <input type="submit" value="Submit">
    </form>

</body>

</html>