<?php include 'listings.php'; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DYNAMIC</title>

    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <div class="container">
        <?php foreach ($listings as $id => $listing): ?>
            <div class="listing">
                <?php if($listing['link_type'] === 'full'): ?>
                    <a href="item.php?item_id=<?= $id ?>">
                        <div class="content">
                            <img src="<?= $listing['img_path'] ?>" alt="<?= $listing['img_alt'] ?>">
                            <h3><?= $listing['name'] ?></h3>
                            <h4>Item-ID: <?= $id ?></h4>
                            <p><?= $listing['preview'] ?></p>
                        </div>
                    </a>
                <?php elseif($listing['link_type'] === 'paragraph'): ?>
                    <div class="content">
                        <img src="<?= $listing['img_path'] ?>" alt="<?= $listing['img_alt'] ?>">
                        <h3><?= $listing['name'] ?></h3>
                        <h4>Item-ID: <?= $id ?></h4>
                        <a href="item.php?item_id=<?= $id ?>">
                            <p><?= $listing['preview'] ?></p>
                        </a>
                    </div>
                <?php else: ?>
                    <div class="content">
                        <img src="<?= $listing['img_path'] ?>" alt="<?= $listing['img_alt'] ?>">
                        <h3><?= $listing['name'] ?></h3>
                        <h4>Item-ID: <?= $id ?></h4>
                        <p><?= $listing['preview'] ?></p>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>

