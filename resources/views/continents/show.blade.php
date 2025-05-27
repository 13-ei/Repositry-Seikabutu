<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $continent->name }}の投稿一覧</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            padding: 2rem;
            background-color: #f8fafc;
        }

        .post {
            background-color: white;
            border: 1px solid #e2e8f0;
            padding: 1rem;
            margin-bottom: 1rem;
            border-radius: 8px;
        }

        .post-title {
            font-size: 1.25rem;
            font-weight: bold;
        }

        .post-content {
            margin-top: 0.5rem;
        }

        .post-date {
            color: gray;
            font-size: 0.875rem;
            margin-top: 0.5rem;
        }

        .post-name {
            color: gray;
            font-size: 0.875rem;
            margin-top: 0.5rem;
        }

        .back-link {
            margin-top: 2rem;
            display: inline-block;
            color: blue;
        }
    </style>
</head>

<body>
    <h1>{{ $continent->name }}の投稿一覧</h1>
    @if($logs->count())
    @foreach($logs as $log)
    <div class="post">
        <div class="post-title">{{ $log->title }}</div>
        <div class="post-content">{{ Str::limit($log->impressions, 100) }}</div>
        <div class="post-date">{{ $log->created_at->format('Y年m月d日 H:i') }}</div>
        <div class="post-name">{{ $log->country->name }}</div>
        <a href="{{ url('/logs/' . $log->id) }}">続きを読む</a>
    </div>
    @endforeach

    {{-- ページネーション --}}
    <div>
        {{ $logs->links() }}
    </div>
    @else
    <p>まだこの大陸には投稿がありません。</p>
    @endif

    <a href="{{ url('/') }}" class="back-link">← TOPページへ戻る</a>
</body>

</html>