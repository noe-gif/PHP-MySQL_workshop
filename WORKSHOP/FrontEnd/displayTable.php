<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>STEP 3</title>
    <?php include '../BackEnd/Step1.php'; ?>
    <?php include '../BackEnd/Step3.php'; ?>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $link = ConnectDb();
        $name = 'tablestep2';
        $case1 = AddContentTable($link, 'dddddd', 'motdepasselol', $name);
        $case2 = ShowContentTable($link, $name);

        //checking the return of AddContentTable function 
        if ($case1) { ?>
            <div class="alert alert-success" role="alert" style="top: 12%;">
                data successfully added
            </div>
        <?php } else { ?>
            <div class="alert alert-danger" role="alert" style="top: 12%;">
                something wrong with the query
            </div>
        <?php }

        //checking the return of ShowContentTable function
        if ($case2) { ?>
                <div class="alert alert-success" role="alert">
                    ”<?php echo $name; ?>” successfully displayed
                </div>
                <button onclick="location.href='bindAndHash.php'" type="button" class="btn btn-success">Step 4</button>
        <?php } else { ?>
                <div class="alert alert-danger" role="alert">
                    Something wrong when displaying (check query)
                </div>
                <button disabled="true" type="button" class="btn btn-danger">Erreur</button>
        <?php } ?>
</body>
</html>
