<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logs</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>

<body>
    <div class="title">
        <p>タイトル</p>
        <p>{{ $log->title }}</p>
    </div>
    <div class="country">
        <p>国</p>
        <p>{{ $log->country_id }}</p>
    </div>
    <div class="start_date">
        <p>出発日</p>
        <p>{{ $log->start_date }}</p>
    </div>
    <div class="end_date">
        <p>帰国日</p>
        <p>{{ $log->end_date }}</p>
    </div>
    <div class="food">
        <p>食事</p>
        <p>{{ $log->food }}</p>
        <p>食事画像</p>
        <p>{{ $image->food }}</p>
    </div>
    <div class="hotel">
        <p>ホテル</p>
        <p>{{ $log->hotel }}</p>
        <p>ホテル画像</p>
        <p>{{ $image->hotel }}</p>
    </div>
    <div class="money">
        <p>旅行費用</p>
        <p>{{ $log->money }}</p>
    </div>
    <div class="impressions">
        <p>感想</p>
        <p>{{ $log->impressions }}</p>
        <p>感想画像</p>
        <p>{{ $image->impressions }}</p>
    </div>
    <div class="footer">
        <a href="/">戻る</a>
    </div>
</body>

</html>