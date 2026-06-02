<?php $list = ['pencil', 'pen', 'notebook',]; 
?>
<ul>
<?php foreach ($list as $item) { ?>
    <li>Item: <?= $item ?></li>
<?php } ?>
</ul>
<?= $list ?>