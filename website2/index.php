<?php include('serverInfo.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Info</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <h1>Server & File Info</h1>

        <?php if ($server): ?>
            <div class="list-group">
                <?php foreach($server as $key => $value): ?>
                    <li class="list-group-item">
                        <strong><?= $key; ?>: </strong>
                        <?= $value; ?>
                    </li>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        
        <h1>Client Info</h1>
        <?php if ($client): ?>
            <div class="list-group">
                <?php foreach($client as $key => $value): ?>
                    <li class="list-group-item">
                        <strong><?= $key; ?>: </strong>
                        <?= $value; ?>
                    </li>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
    
</body>
</html>