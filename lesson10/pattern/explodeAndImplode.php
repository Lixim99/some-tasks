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
