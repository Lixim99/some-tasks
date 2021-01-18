<?php //FIX!!!
require_once($_SERVER['DOCUMENT_ROOT'] . '/header.php');

if (!isset($_POST['login'])) { ?>
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

    <form method="GET">
        <input type="text" name="name" value="<?php echo $_REQUEST['name']; ?>">
        <br><textarea name="text"><?php echo $_REQUEST['text']; ?></textarea>
    <br><input type="submit" value="click">
    </form>


<?php if (!isset($_GET['age'])) {?>
    <form method="GET">
        <input type="text" name="user" placeholder="name">
        <br><input type="text" name="age" placeholder="age">
        <br><textarea name="message" placeholder="message"></textarea>
        <br><input type="submit" value="click">
    </form>
    <?php
}else
    echo ' Привет, ' . strip_tags($_REQUEST['user']) . ' ' . strip_tags($_REQUEST['age']) . ' лет.</br>' .
        'Твое сообщение: ' . strip_tags($_REQUEST['message']);
?>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/footer.php');?>