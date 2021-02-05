<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>STEP 2</title>
    <?php include '../BackEnd/Step1.php'; ?>
    <?php include '../BackEnd/Step2.php'; ?>
</head>
<body>
    <?php 
        $link = ConnectDb();
        $name = "tablestep2";
        if (CreateTableStep2($link, $name) == 1) { ?>
                <div class="alert alert-success" role="alert">
                    ”<?php echo $name; ?>” successfully created
                </div>
                <button onclick="location.href='displayTable.php'" type="button" class="btn btn-success">Step 3</button>
        <?php } else { ?>
                <div class="alert alert-danger" role="alert">
                    Something wrong when creating ”<?php echo $name; ?>”. (query)
                </div>
                <button disabled="true" type="button" class="btn btn-danger">Erreur</button>
        <?php }
    ?>
</body>
</html>