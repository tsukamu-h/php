<table>
    <tbody>
        <tr>
            <th>ユーザ名</th>
            <td>
                <input type="text" name="user_name" value="<?php echo $this->escape($user_name); ?>" />
            </td>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td>
                <input type="text" name="mail_address" value="<?php echo $this->escape($mail_address); ?>" />
            </td>
        </tr>
        <tr>
            <th>パスワード</th>
            <td>
                <input type="password" name="password" value="<?php echo $this->escape($password); ?>" />
            </td>
        </tr>
    </tbody>
</table>