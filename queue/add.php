<title>Add Number</title>
<table>
    <form method="post">
    <tr>
        <td>Name:</td>
        <td><input type="text" name="name" autofocus autocomplete="off" required /> </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <button type="submit" class="btn">Get Number!</button>
        </td>
    </tr>
    </form>
</table>
<script src="jquery.js" type="text/javascript"></script>
<?php if($_POST): ?>
<?php
    include('conn.php');
    $name = $_POST['name'];
    $q = "insert into list (name) VALUES ('$name')";
    $conn->query($q);
    $tmp = str_pad($conn->insert_id,'4','0',STR_PAD_LEFT);
?>
<script>
    alert('Your number is: '+ "<?php echo $tmp;?>");
</script>
<?php endif; ?>
