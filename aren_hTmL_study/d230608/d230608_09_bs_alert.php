<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

    </style>
</head>

<body>
    <div class="container">
        <h2>
            Alerts
        </h2>

        <?php
        $message = '555';
        ?>

        <?php
        if (!empty($message)) :
        ?>

            <div class="alert alert-success alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Success!</strong> 
                <?php echo $message?>
            </div>

        <?php
        endif;
        ?>
    </div>


    <div class="alert alert-success">
        <strong>Success!</strong> Indicates a successful or positive action.
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>