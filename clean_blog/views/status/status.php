<!-- Divider-->
<hr class="my-4" />
<!-- Post preview-->
<div class="post-preview">
    <!-- 後で詳細画面に飛べるようにする -->
    <a href="<?php echo $base_url; ?>/user/<?php echo $this
    ->escape($status['user_name']); ?>/status/<?php echo $this->escape($status['id']); ?>">
        <h2 class="post-title"><?php echo $this->escape($status['title']); ?></h2>
        <h3 class="post-subtitle"><?php echo $this->escape($status['subtitle']); ?></h3>
    </a>
    <p class="post-meta">
        Posted by
        <a href="/">Start Bootstrap</a>
        <?php echo $this->escape($status['created_at']); ?>
    </p>
</div>