<!-- ユーザ一覧を表示するビューファイル -->
<?php $this->setLayoutVar('title', 'ユーザ一覧') ?>

<div id="statuses">
    <?php foreach ($users as $user): ?>
    <a href="<?php echo $base_url; ?>/user/<?php echo $this->escape($user['user_name']);
        ?>">
            <?php echo $this->escape($user['user_name']); ?>
        </a>
        <br>
    <?php endforeach; ?>
</div>