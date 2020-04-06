


<html>
<body>
<div style="position: fixed; top: 30%; left: 40%;
">
    <form action="" method="POST">
        <label>Username:
            <input type="text" name="username" placeholder="Enter your username" required>
        </label>
        <br>
        <label>Password:
            <input type="password" name="password" placeholder="Enter your password" required>
        </label>
        <br>
        <input type="submit" value="Submit">
            <a href="newAccount.html"><input type="button" onclick value="Create Account"></a>
        
    </form>

</div>

<?php

//start first
session_start();

if ( ! empty( $_POST ) ) 
{
    if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) 
   {
        $con = new mysqli('localhost', 'root', '', 'cps630');
        $stmt = $con->prepare("SELECT * FROM userlogin WHERE Username = ? ");
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_object();
        $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
    		
        // Verify user password and set $_SESSION password_hash("password", PASSWORD_DEFAULT)
        //$user->Password
    	if ( password_verify( $_POST['password'], $hash ) ) 
                {
            $_SESSION['user_id'] = $user->Username;
            header("Location: http://localhost:8080/home.php");
        }
        else{
            echo "Invalid Password";

        }
    }
}
?>

</body>
</html> 