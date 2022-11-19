<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        header {
            text-align: center;
            background-color: grey;
            padding: 30px;
        }

    </style>
</head>
<body>

<header>

    <h1>

        <?= "{$greeting[$randomNumber]} {$celestialObject[$randomNumber2]}" ?>

    </h1>

    <ul>

        <?php foreach ($names as $name) : ?>

         <li><?= $name; ?></li>

        <?php endforeach; ?>

    </ul>


    <ul>

        <?php foreach ($person as $feature => $value) : ?>

            <li><strong><?= $feature ?></strong> <?= $value; ?></li>

        <?php endforeach; ?>

    </ul>

</header>

</body>
</html>
