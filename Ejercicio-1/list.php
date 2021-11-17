<?php $title = 'Lista de computadoras' ?>
<?php ob_start() ?>
<h1>Lista de computadoras</h1>
<ul>
    <?php foreach ($posts as $post): ?>
    <li>
        <a href="/read?id=<?php echo $post['id']?>">
            <?php echo $post['title']?>
        </a>
    </li>
    <?php endforeach; ?>
</ul>
<?php $content = ob_get_clean() ?>
<?php include 'base.php' ?>

