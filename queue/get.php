<?php
    include('conn.php');

    $q = "Select * from list where status=1 order by id asc limit 1";
    $r = $conn->query($q);
    if($r->num_rows > 0)
    {
        $row = $r->fetch_row();
        $row[4] = str_pad($row[0],4,'0', STR_PAD_LEFT);
        $id = $row[0];
        $conn->query("delete from list where id=$id");
        echo json_encode($row);
    }else{
        echo json_encode(array());
    }
?>