<?php 

include 'db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>
<body>

    <main>
        <?php foreach ($dischi as $disco) { ?>
            <div class="disco">
                <img src="<?php echo $disco['copertina'] ?>">
                <h2><?php echo $disco['canzone'] ?></h2>
                <h3><?php echo $disco['artista'] ?></h3>
            </div>
        <?php } ?>
    </main>

</body>
</html>