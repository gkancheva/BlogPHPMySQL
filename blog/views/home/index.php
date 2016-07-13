<?php $this->title = 'Welcome to My Blog'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<aside>
    <h2>Recent Posts</h2>
    <?php foreach ($this->postsSideBar as $post) { ?>
        <a href="<?=APP_ROOT?>/home/view/<?=$post['id']?>"><?= htmlentities($post['title']); ?></a>
    <?php } ?>
</aside>
<main>
    <?php foreach ($this->posts as $post) { ?>
        <h1><?= htmlentities($post['title']) ?></h1>
        <p>
            <i>Posted on</i>
            <?=htmlentities($post['date'])?>
            <i>by</i>
            <?=htmlentities($post['full_name'])?>
        </p>
        <p><?= $post['content'] ?></p>
    <?php } ?>
</main>