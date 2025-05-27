<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logs</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 2rem;
            color: #333;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background: #ffffff;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .section {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 2rem;
            border-bottom: 1px solid #e0e0e0;
            padding-bottom: 1.5rem;
        }

        .section:last-child {
            border-bottom: none;
        }

        .section-text {
            flex: 1;
            padding-right: 1rem;
            min-width: 250px;
        }

        .section-text h2 {
            font-size: 1rem;
            font-weight: bold;
            color: #555;
            margin-bottom: 0.3rem;
        }

        .section-text p {
            font-size: 1rem;
            margin: 0;
        }

        .section-image {
            flex: 1;
            min-width: 250px;
            text-align: center;
        }

        .section-image img {
            width: 300px;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-top: 0.5rem;
        }

        .buttons {
            text-align: center;
            margin-top: 2rem;
        }

        .buttons a {
            display: inline-block;
            margin: 0 1rem;
            background-color: #3498db;
            color: white;
            padding: 0.6rem 1.2rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .buttons a:hover {
            background-color: #2980b9;
        }

        @media (max-width: 768px) {
            .section {
                flex-direction: column;
            }

            .section-text,
            .section-image {
                padding: 0;
            }

            .section-image img {
                width: 100%;
                height: auto;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="section">
            <div class="section-text">
                <h2>タイトル</h2>
                <p>{{ $log->title }}</p>
            </div>
        </div>

        <div class="section">
            <div class="section-text">
                <h2>国</h2>
                <p>{{ $log->country->name }}</p>
            </div>
        </div>

        <div class="section">
            <div class="section-text">
                <h2>出発日</h2>
                <p>{{ $log->start_date }}</p>
                <h2>帰国日</h2>
                <p>{{ $log->end_date }}</p>
            </div>
        </div>

        <div class="section">
            <div class="section-text">
                <h2>観光地</h2>
                <p>{{ $log->tourist_spot }}</p>
            </div>
            <div class="section-image">
                <img src="{{ $log->tourist_spot_photo }}" alt="観光地画像">
            </div>
        </div>

        <div class="section">
            <div class="section-text">
                <h2>食事</h2>
                <p>{{ $log->food }}</p>
            </div>
            <div class="section-image">
                <img src="{{ $log->food_photo }}" alt="食事画像">
            </div>
        </div>

        <div class="section">
            <div class="section-text">
                <h2>ホテル</h2>
                <p>{{ $log->hotel }}</p>
            </div>
            <div class="section-image">
                <img src="{{ $log->hotel_photo }}" alt="ホテル画像">
            </div>
        </div>

        <div class="section">
            <div class="section-text">
                <h2>旅行費用</h2>
                <p>{{ $log->money }}</p>
            </div>
        </div>

        <div class="section">
            <div class="section-text">
                <h2>感想</h2>
                <p>{{ $log->impressions }}</p>
            </div>
            <div class="section-image">
                <img src="{{ $log->impressions_photo }}" alt="感想画像">
            </div>
        </div>

        <div class="buttons">
            <a href="/logs/{{ $log->id }}/edit">編集を行う</a>
            <a href="/logs/continent/{{ $log->continent_id }}">大陸別一覧へ戻る</a>
            <a href="/">TOPへ戻る</a>
        </div>
    </div>
</body>

</html>