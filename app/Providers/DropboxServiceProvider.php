<?php

namespace App\Providers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\Filesystem;
use Illuminate\Support\ServiceProvider;
use Spatie\Dropbox\Client as DropboxClient;
use Spatie\FlysystemDropbox\DropboxAdapter;
use App\Service\Dropbox\AutoRefreshingDropboxTokenService;

class DropboxServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Storageファサードのextendメソッドを使用して、'dropbox'という名前のカスタムドライバを定義します。
        Storage::extend('dropbox', function (Application $app, array $config) {
            // 設定→AutoRefreshingDropboxTokenService→DropboxClient→DropboxAdapterとリレーしてDropboxAdapterをインスタンス化します
            $tokenProvider = new AutoRefreshingDropboxTokenService(
                $config['app_key'],
                $config['app_secret'],
                $config['refresh_token']
            );
            $client = new \Spatie\Dropbox\Client($tokenProvider);
            $adapter = new \Spatie\FlysystemDropbox\DropboxAdapter($client);
            // DropboxAdapterを使って、新しいFilesystemAdapterを作成して返します。
            // これによりLaravelのファイルシステム機能でDropboxを使用できるようになります。
            return new FilesystemAdapter(
                new Filesystem($adapter, $config),
                $adapter,
                $config
            );
        });
    }
}
