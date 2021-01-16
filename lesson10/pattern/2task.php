<?php if (!isset($_POST['login'])) {?>
    <form method="POST">
        <input type="text" name="login" placeholder="login">
        <br><input type="password" name="password" placeholder="password">
        <br><input type="submit" value="click">
    </form>
<?php
}
    echo trim($_REQUEST['login']) == 'admin' && trim($_REQUEST['password']) == '1234'?
        "access confirm":"access denied";
?>
