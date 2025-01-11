<?php
if (!isset($_GET['Имя'])) {
   ?><form action="" method="GET">
        <input name="Имя">
        <input type="submit">
    </form>
    <?php
} else {
    echo $_GET['Имя'] .", приветствую тебя!";
}
?>

