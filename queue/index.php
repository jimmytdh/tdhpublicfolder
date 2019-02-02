<html>
<head>
    <title>Main</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div class="main">
    <div class="side">
        <table>
            <tr>
                <td>Window</td>
                <td>Number</td>
            </tr>
            <?php for($i=1; $i<11; $i++) :?>
            <tr>
                <td><?php echo $i; ?></td>
                <td class="window_<?php echo $i; ?>"></td>
            </tr>
            <?php endfor; ?>
        </table>
    </div>
    <div class="content">
        Now Serving...<br />
        <h1 class="list_number">0000</h1><br />
        <font class="list_window">----</font>
    </div>
</div>

</body>
<script src="jquery.js" type="text/javascript"></script>
<script src="script.js" type="text/javascript"></script>
</html>