<?php
    require_once('conn.php');

    $dest = $_POST['destination'];
    $prio = $_POST['priority'];

    $q = "INSERT INTO tbl_list (id,num,priority,destination,level) VALUES('','','".$prio."','".$dest."','')";
    $conn->query($q);
    $last_id = $conn->insert_id;
    $conn->query("UPDATE tbl_list set num=$last_id where id=$last_id");
    echo json_encode($last_id);

