<?php $this->setLayoutVar('title', 'パスワード変更') ?>

<h2>パスワード変更</h2>

<form action="<?php echo $base_url; ?>/status/passupdatecomp" method="post">
    <input type="hidden" name="_token" value="<?php echo $this->escape($_token); ?>" />
    <input type="hidden" name="user" value="<?php echo $this->escape($user); ?>" />

    <?php if (isset($errors) && count($errors) > 0): ?>
    <?php echo $this->render('errors', array('errors' => $errors)); ?>
    <?php endif; ?>

    <table>
    <tbody>
        <tr>
            <th>パスワード</th>
            <td>
                <input type="password" name="password" />
            </td>
        </tr>
        <tr>
            <th>パスワード再入力</th>
            <td>
                <input type="password" name="password_rewrite" />
            </td>
        </tr>
    </tbody>
</table>

    <p>
        <input type="submit" value="変更" />
    </p>
</form>