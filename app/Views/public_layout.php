<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?= $this->include("bootstrap") ?>
</head>
<body>
    <?= $this->include("navbar") ?>
    <?= $this->renderSection('content') ?>
</body>
</html>
