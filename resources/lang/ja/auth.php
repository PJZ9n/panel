<?php

return [
    'sign_in' => 'サインイン',
    'go_to_login' => 'ログインへ',
    'failed' => '指定された情報に一致するアカウントが見つかりませんでした。',

    'forgot_password' => [
        'label' => 'パスワードを忘れましたか?',
        'label_help' => 'アカウントのメールアドレスを入力して、パスワードを再設定する手順を受け取ってください。',
        'button' => 'アカウントを復元',
    ],

    'reset_password' => [
        'button' => '初期化してサインイン',
    ],

    'two_factor' => [
        'label' => '2FAトークン',
        'label_help' => 'このアカウントでログインするには、2FA認証が必要です。デバイスによって生成された2FAトークンを入力してください。',
        'checkpoint_failed' => '2FAトークンが無効です。',
    ],

    'throttle' => 'ログイン試行が多すぎます。:seconds秒後に再試行してください。',
    'password_requirements' => 'パスワードは8文字以上にする必要があり、他のサイトで使用していない必要があります。',
    '2fa_must_be_enabled' => '管理者は、コントロールパネルを使用するために、アカウントで2FA認証を有効にする必要があります。',
];