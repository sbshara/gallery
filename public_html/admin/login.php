<?php

require_once('../../initialize.php');


if ($session->is_logged_in()) {
    redirect_to("index.php");
}

if (isset($_POST['submit'])) {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);


    // validate username / password
    $found_user = User::authenticate($username, $password);

    if($found_user){
        $session->login($found_user);
        redirect_to("index.php");
    } else {
        $message = "Username/Password combination incorrect.";
    }

} else {
    $username = "";
    $password = "";
}

include('../layouts/adminheader.php');
?>

            <h2>Staff Login</h2>
            <?php if(isset($message)) {echo output_message($message);} ?>

            <form action="login.php" method="post">
                <table>
                    <tr>
                        <td>Username:</td>
                        <td>
                            <input type="text" name="username" maxlength="30" value="<?php echo htmlentities($username); ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td>
                            <input type="password" name="password" maxlength="30" value="<?php echo htmlentities($password); ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Login" />
                        </td>
                    </tr>
                </table>
            </form>
<?php include('../layouts/footer.php'); ?>
