<?php

require 'includes/init.php';

$conn = require 'includes/db.php';

if (isset($_GET['id'])) {

    $article = Article::getByID($conn, $_GET['id']);

} else {
    $article = null;
}
?>

<?php require 'includes/header.php'; ?>

<<<<<<< HEAD
            <?php if ($article == null): ?>
                <p>article not found.</p>
            <?php else: ?>
                <article>
                    <h2><?= htmlspecialchars($article['title']); ?></h2>
                    <p><?= htmlspecialchars($article['content']); ?></p>
                </article>

                <a href="edit-article.php?id=<?= $article['id']; ?>">Edit</a>
                <a href="delete-article.php?id=<?= $article['id']; ?>">Delete</a>
                
             <?php endif; ?>
=======
<?php if ($article) : ?>
    <article>
        <h2><?= htmlspecialchars($article->title); ?></h2>
        <p><?= htmlspecialchars($article->content); ?></p>
    </article>

<?php else: ?>
    <p>Article not found.</p>
<?php endif; ?>
>>>>>>> master

<?php require 'includes/footer.php'; ?>