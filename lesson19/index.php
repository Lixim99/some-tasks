<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>

<?php echo '<h1>Работа с checkbox</h1>' ?>

    <form action="" method="GET">
        <p><input type="checkbox" name="exit" value="1">Выйти</p>
        <input type="submit">
    </form>
<?php
    echo isset($_REQUEST['exit'])?'hello':'bye';
?>
    <form action="" method="GET" style="padding-top: 20px;">
        <p><input type="checkbox" name="lang[]" value="php"> php</p>
        <p><input type="checkbox" name="lang[]" value="html"> html</p>
        <p><input type="checkbox" name="lang[]" value="css"> css</p>
        <p><input type="checkbox" name="lang[]" value="js"> js</p>
        <input type="submit">
    </form>
<?php
    echo isset($_REQUEST['lang'])? implode(' ', $_REQUEST['lang']) : ' nothing';
?>

<?php echo '<h1>Работа с radio переключателями</h1>' ?>

    <form action="" method="GET">
        <p>Are you know php</p>
        <p><input type="radio" name="php" value="1" checked="checked">Yes</p>
        <p><input type="radio" name="php" value="0">No</p>
        <input type="submit">
    </form>
<?php
    echo $_REQUEST['php']? ' yes': ' no';
?>

    <form action="" method="GET">
        <p>Возраст</p>
        <p><input type="radio" name="age" value="20" checked="checked">менее 20 лет</p>
        <p><input type="radio" name="age" value="25">20-25</p>
        <p><input type="radio" name="age" value="30">26-30</p>
        <p><input type="radio" name="age" value="35">более 30</p>
        <input type="submit">
    </form>
<?php
    echo $_REQUEST['age'];
?>

<?php echo '<h1>Select и multi-select</h1>' ?>

    <form action="" method="GET">
        <select name="newAge" >
            <option value="20">менее 20 лет</option>
            <option value="25">20-25</option>
            <option value="30">26-30</option>
            <option value="35">более 30</option>
        </select>
        <input type="submit">
    </form>

<?php
    echo $_REQUEST['newAge'];
?>

    <form action="" method="GET">
        <select name="newAgeMult[]" multiple>
            <option value="php">php</option>
            <option value="html">html</option>
            <option value="css">css</option>
            <option value="js">js</option>
        </select>
        <input type="submit">
    </form>

<?php
    echo isset($_REQUEST['newAgeMult'])? implode(' ', $_REQUEST['newAgeMult']) : ' nothing';
?>

<?php echo '<h1>Задачи</h1>'; ?>

<?php
    function textInp ($type, $name, $value){
        if (isset($_REQUEST[$name])) $value = $_REQUEST[$name];
        return "<input type = $type name = $name value = $value>";
    }
    echo textInp('checkbox', 'age', '34');
?>


<?php
    function checkdoxInp ($name, $value){
        if (isset($_REQUEST[$name])) $value = $_REQUEST[$name];
        return "<input type = 'hidden' name = $name value = '0'>" .
            "<p><input type = 'checkbox' name = $name value = $value>$name</p>";
    }
    echo checkdoxInp('loc', '1');
?>


<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>