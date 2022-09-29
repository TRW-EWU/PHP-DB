<?php

// This is a test for git
// Another entry
// Change #2
//
// Changes on TestBranch in GIT

//
// Change #3
//

// Change on home computer
//


require 'includes/database.php';

$conn = getDB();

$sql = "SELECT *
        FROM article
        ORDER BY published_at;";

$results = mysqli_query($conn, $sql);

if ( $result === false) {
    echo mysqli_error($conn);
} else {
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
}
?>

<?php require 'includes/header.php'; ?>

<a href="new-article.php">New article</a>

            <?php if (empty($articles)): ?>
                <p>No articles found.</p>
            <?php else: ?>
                <ul>
                    <?php foreach ($articles as $article): ?>
                        <li>
                            <article>
                                <h2>
                                    <a href="article.php?id=<?= $article['id'] ?>" >
                                        <?= htmlspecialchars($article['title']); ?>
                                    </a>
                                </h2>
                                <p><?= htmlspecialchars($article['content']); ?></p>
                            </article>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

<?php require 'includes/footer.php'; ?>
