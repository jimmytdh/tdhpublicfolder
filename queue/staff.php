<title>Staff</title>
<form method="post">
    <label>Window #:</label>
    <select name="window">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
    </select>
    <br />
    <button type="submit">Next Patient</button>
</form>
<table class="staff" border="1">
    <thead>
        <tr>
            <th>Window #</th>
            <th>Patient Name</th>
            <th>Number</th>
        </tr>
    </thead>
    <tbody>
    <?php if($_POST): ?>
    <?php
        include('conn.php');
        $row = array();
        $number = 0;
        $window = $_POST['window'];
        $q = "Select * from list order by id asc limit 1";
        $r = $conn->query($q);
        if($r->num_rows > 0)
        {
            $row = $r->fetch_row();
            $number = str_pad($row[0],4,'0', STR_PAD_LEFT);
            $id = $row[0];
            $conn->query("update list set window='$window', status=1 where id=$id");
        }else{
            $number = 'N/A';
            $row[1] = 'N/A';
        }
    ?>
    <tr>
        <td><?php echo $window; ?></td>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $number; ?></td>
    </tr>
    <?php endif; ?>
    </tbody>
</table>