<?php

return [
    'email' => [
        'title' => 'メールアドレスを変更する',
        'updated' => 'メールアドレスが変更されました。',
    ],
    'password' => [
        'title' => 'パスワードを変更する',
        'requirements' => '新しいパスワードは8文字以上である必要があります。',
        'updated' => 'パスワードが変更されました。',
    ],
    'two_factor' => [
        'button' => '2FA認証の設定',
        'disabled' => 'アカウントで2FA認証が無効になっています。ログイン時に2FAトークンを要求されなくなりました。',
        'enabled' => 'アカウントで2FA認証が有効になっています!今後ログインする際には、デバイスで生成された2FAトークンを入力する必要があります。',
        'invalid' => '指定された2FAトークンは不正です。',
        'setup' => [
            'title' => '2FA認証を有効にする',
            'help' => 'コードをスキャンできない場合、以下のコードをアプリケーションに入力してください。',
            'field' => '2FAトークンを入力',
        ],
        'disable' => [
            'title' => '2FA認証を無効にする',
            'field' => '2FAトークンを入力',
        ],
    ],
];
