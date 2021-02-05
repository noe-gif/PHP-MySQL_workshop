<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <title>STEP 5</title>
    <?php include '../BackEnd/Step1.php'; ?>
    <?php include '../BackEnd/Step5.php'; ?>
</head>
<body>
    <?php
        $link = ConnectDb();
        $case1 = selectResearcher($link);

        if ($case1 == 1) { ?>
            <div class="alert alert-success" role="alert" style="width: 500px; height: 60px; text-align: center; position:absolute; top: 40%; left:35%">
                Data successfully displayed
            </div>
            <button onclick="location.href='deleteTable.php'" type="button" class="btn btn-success" style="width: 100px; height: 40px; text-align: center; position:absolute; top: 50%; left:45%">Step 6</button>
        <?php } else if ($case1 == 0) { ?>
            <div class="alert alert-danger" role="alert" style="width: 500px; height: 60px; text-align: center; position:absolute; top: 40%; left:35%">
                something wrong with the query
            </div>
            <button disabled="true" type="button" class="btn btn-danger" style="width: 100px; height: 40px; text-align: center; position:absolute; top: 50%; left:45%">Erreur</button>
        <?php } ?>
</body>
</html>
