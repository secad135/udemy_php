<?php

$db_host = "localhost";
$db_name = "cms";
$db_user = "cms_www";
$db_pass = "63XvYpkQ9o6IZP29";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
}

$sql = "SELECT *
        FROM article
        ORDER BY published_at;";

$results = mysqli_query($conn, $sql);

if ($results === false) {
    echo mysqli_error($conn);
} else {
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>My blog</title>
    <meta charset="utf-8">
</head>
<body>

    <header>
        <h1>My blog</h1>
    </header>

    <main>
        <?php if (empty($articles)): ?>
            <p>No articles found.</p>
        <?php else: ?>

            <ul>
                <?php foreach ($articles as $article): ?>
                    <li>
                        <article>
                            <!-- لینک به مقصد اندیس آیتم مورد نظر خواهد بود که با اسم آی دی در متن آدرس ادغام خواهد شد و به اس کیو ال در صفحه تک مطلب می رود و در آنجا مقدار تک آیتم مورد نظر با گت به اس کیو ال داده می شود -->
                            <h2><a href="article.php?id=<?= $article['id']; ?>"><?= $article['title']; ?></a></h2>
                            <p><?= $article['content']; ?></p>
                        </article>
                    </li>
                <?php endforeach; ?>
            </ul>

        <?php endif; ?>
    </main>
</body>
</html>
