<!-- Divider-->
<hr class="my-4" />
<!-- Post preview-->
<div class="post-preview">
    <?php if (!is_null($_token) && strlen($_token) > 0): ?>
        <h2 class="post-title"><?php echo $this->escape($status['title']); ?></h2>
        <?php echo $this->escape($status['subtitle']); ?>
    <?php endif; ?>
    <h2 class="post-title"><?php echo $this->escape($status['body']); ?></h2>
    <?php $file_path = $this->escape($status['file_path']); ?>
    <?php $file_path = substr($file_path, 6); ?>
    <img src="<?php echo $this->escape($file_path); ?>" alt="">
    <p class="post-meta">
        <?php echo $this->escape($status['created_at']); ?>
    </p>
</div>