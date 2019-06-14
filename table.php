<?php
$rows = [1, 2, 3, 4, 5];
$cols = ["col-1", "col-2", "col-3", "col-4", "col-5"];
?>
<table border="1">
    <?php foreach ($rows as $row) { ?>
        <tr>
            <td><?= $row ?></td>
            <?php foreach ($cols as $col): ?>
                <td>
                    <?= $col ?>
                </td>
            <?php endforeach; ?>
        </tr>
    <?php } ?>
</table>
<?php
function bold($texts)
{
//    $arr = [];
//    foreach ($texts as $text) {
//        $arr[] = '<b>' . $text . '</b>';
//    }
//    return $arr;

    foreach ($texts as $i => $text) {
        $texts[$i] = '<b>' . $text . '</b>';

    }
    return $texts;
}

$vyvods = bold($cols);
foreach ($vyvods as $vyvod) {
    echo $vyvod . "<br>";
}
?>
