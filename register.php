<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
    </head>
<body>
    <h1>Register</h1>
    <form method="POST" action="registerController.php">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>
        
        <label for="confirmPassword">Conferma password:</label>
        <input type="password" name="password2" id="password2" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>
        
        <input type="submit" value="Register">
    </form>
    <?php
        if (isset($_GET['error']) && $_GET['error'] == 2) {
            echo "<br>email already in use";
        }
        // CONFERMA PASSWORD DA IMPLEMENTARE
    ?>
</body>
</html>
