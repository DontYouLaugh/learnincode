<?php include 'listings.php';
$item_id = $_GET['item_id'];
if ( ! isset($item_id))
{
    header('Location: /dynamic');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $listings[$item_id]['name'] ?></title>

    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <a class="back" href="/dynamic">Back to dynamic listings.</a>

    <div class="item">
        <img src="<?= $listings[$item_id]['img_path'] ?>" alt="<?= $listings[$item_id]['img_alt'] ?>">
        <h3><?= $listings[$item_id]['name'] ?></h3>
        <h4>Item-ID: <?= $item_id ?></h4>
        <p><?= $listings[$item_id]['description'] ?></p>
    </div>
</body>
</html>
