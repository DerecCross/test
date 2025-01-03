<?php
echo "<b>Lesson 1</b>";

$str1 = 'text1';
$str2 = 'text2';
$str3 = 'text3';
?>
    <p><?= $str1 ?></p>
    <p><?= $str2 ?></p>
    <p><?= $str3 ?></p>

<?php
echo "<b>Lesson 2</b>";

$arr = [1, 2, 3, 4, 5];
?>

    <p><?= $arr[0] ?></p>
    <p><?= $arr[1] ?></p>
    <p><?= $arr[2] ?></p>
    <p><?= $arr[3] ?></p>
    <p><?= $arr[4] ?></p>

<?php
echo "<b>Lesson 3</b>";

$show = false;
?>
<?php if ($show) { ?>
    <div>
        <p>text+</p>
        <p>text+</p>
        <p>text+</p>
    </div>
<?php } else { ?>
    <div>
        <p>text-</p>
        <p>text-</p>
        <p>text-</p>
    </div>
<?php } ?>

<?php $text = 2 ?>
<?php if ($text == 1) { ?>
    <div>
        <p>text1</p>
        <p>text1</p>
        <p>text1</p>
    </div>
<?php } elseif ($text == 2) { ?>
    <div>
        <p>text2</p>
        <p>text2</p>
        <p>text2</p>
    </div>
<?php } else { ?>
    <div>
        <p>text-</p>
        <p>text-</p>
        <p>text-</p>
    </div>
<?php } ?>

<?php
echo "<b>Lesson 4</b>";
$arr2 = [1, 2, 3, 4, 5];

foreach ($arr2 as $elem) {
    echo '<p>' . $elem . '</p>';
}
?>
