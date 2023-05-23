<h1>投票</h1>
<?php

$topic=$pdo->query("select * from `topics` where `id`='{$_GET['id']}'")->fetch(PDO::FETCH_ASSOC);

$options=$pdo->query("select * from `options` where `subject_id`='{$_GET['id']}'")->fetch(PDO::FETCH_ASSOC);

?>

<h2><?=$topic['subject'];?></h2>
<ul>
<?php
foreach($options as $idx =>$opt){
?>
<li>
<input type="radio" name="desc" value="<?="{$opt['id']}"?>" id="">
<span><?=$idx+1?></span>
<span><?=$opt['description'];?></span>
</li>
<?php
}
?>
</ul>

<div>
    <input type="hidden" name="subject_id" value="<?=$_GET['id'];?>">
    <input type="submit" value="投票">
    <input type="button" value="取消">
</div>

