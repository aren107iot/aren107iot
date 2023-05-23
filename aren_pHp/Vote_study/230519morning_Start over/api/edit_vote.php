<?php
include_once "../db.php";

$sql="  update  `topics` 
        set     `subject`='{$_POST['subject_id']}',
                `open_time`='{$_POST['subject_id']}',
                `close_time`='{$_POST['subject_id']}',
                `type`='{$_POST['subject_id']}'

        where   `id`='{$_POST['subject_id']}'";

$pdo->exec($sql);





?>