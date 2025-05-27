<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ログ検索</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            padding: 2rem;
            background-color: #f0f4f8;
        }

        form {
            margin-bottom: 2rem;
        }

        .log {
            background-color: #fff;
            padding: 1rem;
            margin-bottom: 1rem;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .back-link {
            display: inline-block;
            margin-top: 2rem;
        }
    </style>
</head>

<body>
    <h1>ログ検索</h1>

    {{-- 検索フォーム --}}
    <form action="{{ url('/logs/search/results') }}" method="GET">
        <label for="country">国を選択:</label>
        <select name="country_id" id="search_country">
            <option value="">-- 選択してください --</option>
            @foreach ($countries as $country)
            <option value="{{ $country->id }}" {{ request('country_id') == $country->id ? 'selected' : '' }}>
                {{ $country->name }}
            </option>
            @endforeach
        </select>
        <button type="submit">検索</button>
    </form>

    {{-- 検索結果 --}}
    @if (isset($logs))
    @if ($logs->count())
    <h2>検索結果（{{ $logs->total() }} 件）</h2>
    @foreach ($logs as $log)
    <div class="log">
        <strong>{{ $log->title }}</strong><br>
        <p>{{ Str::limit($log->impressions, 100) }}</p>
        <p>{{ $log->created_at->format('Y年m月d日 H:i') }}</p>
        <p>{{ $log->country->name }}</p>
        <a href="{{ url('/logs/' . $log->id) }}">続きを読む</a>
    </div>
    @endforeach

    {{-- ページネーション --}}
    {{ $logs->appends(request()->query())->links() }}
    @else
    <p>該当するログは見つかりませんでした。</p>
    @endif
    @endif

    <a href="{{ url('/') }}" class="back-link">← トップに戻る</a>
</body>

</html>