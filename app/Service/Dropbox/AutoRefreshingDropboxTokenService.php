<?php
// app/Service/Dropbox/AutoRefreshingDropboxTokenService.php

namespace App\Service\Dropbox;

use Spatie\Dropbox\TokenProvider;

// TokenProviderインターフェースを実装するAutoRefreshingDropboxTokenServiceクラスです。
class AutoRefreshingDropboxTokenService implements TokenProvider
{
    // コンストラクタです。Dropbox APIのキー、シークレット、リフレッシュトークンをプライベート変数として保持します。
    public function __construct(
        private readonly string $key,
        private readonly string $secret,
        private readonly string $refreshToken,
    ) {}

    // アクセストークンを取得するためのメソッドです。
    public function getToken(): string
    {
        // HTTPクライアントを生成します。
        $client = new \GuzzleHttp\Client();
        // DropboxのAPIにアクセスしてトークンを更新するリクエストを送信します。
        $res = $client->request("POST", "https://{$this->key}:{$this->secret}@api.dropbox.com/oauth2/token", [
            'form_params' => [
                'grant_type'    => 'refresh_token', // リフレッシュトークンを使って新しいアクセストークンを要求することを指定します。
                'refresh_token' => $this->refreshToken, // 実際のリフレッシュトークンの値を指定します。
            ]
        ]);
        // リクエストが成功したかどうかのステータスコードをチェックします。
        if ($res->getStatusCode() == 200) {
            // 成功した場合、新しいアクセストークンを返します。
            return json_decode($res->getBody(), true)['access_token'];
        } else {
            // 失敗した場合、エラーを投げます
            throw new \RuntimeException($res->getBody());
        }
    }
}
