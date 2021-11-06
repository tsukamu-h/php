<!-- 入力フォーム -->
<div class="form-floating">
    <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" name="user_name" value="<?php echo $this->escape($user_name); ?>" />
    <label for="name">ユーザ名</label>
</div>

<?php if (isset($mail_address)): ?>
    <div class="form-floating">
        <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" name="mail_address" value="<?php echo $this->escape($mail_address); ?>" />
        <label for="name">メールアドレス</label>
    </div>
<?php endif; ?>

<div class="form-floating">
    <input class="form-control" id="password" type="password" placeholder="Enter your email..." data-sb-validations="required,email" name="password" value="<?php echo $this->escape($password); ?>"/>
    <label for="email">パスワード</label>
</div>