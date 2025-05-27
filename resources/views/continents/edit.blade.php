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

        .content_title,
        .content_food,
        .content_hotel,
        .content_money,
        .content_impressions {
            background-color: #f9f9f9;
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .content_title p,
        .content_food p,
        .content_hotel p,
        .content_money p,
        .content_impressions p {
            font-weight: bold;
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
        }

        input[type="text"],
        input[type="date"],
        textarea,
        select {
            width: 100%;
            padding: 0.8rem;
            border-radius: 8px;
            border: 1px solid #ddd;
            margin-bottom: 1rem;
            font-size: 1rem;
        }

        input[type="file"] {
            margin-bottom: 1rem;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: white;
            padding: 0.8rem 1.5rem;
            border-radius: 8px;
            border: none;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
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
            .container {
                padding: 1.5rem;
            }

            .content_title,
            .content_food,
            .content_hotel,
            .content_money,
            .content_impressions {
                padding: 1rem;
            }

            input[type="text"],
            input[type="date"],
            textarea,
            select {
                font-size: 0.95rem;
            }

            input[type="submit"] {
                padding: 0.6rem 1.2rem;
            }
        }
    </style>
</head>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<body>
    <div class="container">
        <h1 class="title">編集画面</h1>
        <form action="/logs/{{ $log->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- タイトル -->
            <div class="content_title">
                <p>タイトル</p>
                <input type="text" name="log[title]" value="{{ $log->title }}">
            </div>

            <!-- 大陸選択 -->
            <p>大陸を選択</p>
            <div class="continents">
                @foreach($continents as $continent)
                <div class="continent">
                    <input type="radio" name="continent_id" value="{{ $continent->id }}" id="{{ $continent->id }}" />
                    <label for="{{ $continent->id }}">{{ $continent->name }}</label>
                </div>
                @endforeach
            </div>

            <!-- 国選択 -->
            <div class="content_country">
                <p>国を選択</p>
                <select name="log[country_id]" id="country">
                    <option value=""></option>
                </select>
            </div>

            <!-- 出発日、帰国日 -->
            <div class="content_start_date">
                <p>出発日</p>
                <input type="date" name="log[start_date]" value="{{ $log->start_date }}">
            </div>
            <div class="content_end_date">
                <p>帰国日</p>
                <input type="date" name="log[end_date]" value="{{ $log->end_date }}">
            </div>

            <!-- 観光地 -->
            <div class="content_food">
                <p>観光地</p>
                <input type="text" name="log[tourist_spot]" value="{{ $log->tourist_spot }}">
                <p>観光地画像</p>
                <input type="file" name="tourist_spot_photo">
            </div>

            <!-- 食事 -->
            <div class="content_food">
                <p>食事</p>
                <input type="text" name="log[food]" value="{{ $log->food }}">
                <p>食事画像</p>
                <input type="file" name="food_photo">
            </div>

            <!-- ホテル -->
            <div class="content_hotel">
                <p>ホテル</p>
                <input type="text" name="log[hotel]" value="{{ $log->hotel }}">
                <p>ホテル画像</p>
                <input type="file" name="hotel_photo">
            </div>

            <!-- 旅行費用 -->
            <div class="content_money">
                <p>旅行費用</p>
                <input type="text" name="log[money]" value="{{ $log->money }}">
            </div>

            <!-- 感想 -->
            <div class="content_impressions">
                <p>感想</p>
                <textarea name="log[impressions]" placeholder="自由記載">{{ $log->impressions }}</textarea>
                <p>感想画像</p>
                <input type="file" name="impressions_photo">
            </div>

            <div class="buttons">
                <input type="submit" value="保存">
            </div>
        </form>
    </div>
</body>

<script>
    $('input[name="continent_id"]').change(function() {
        var continent_id = $(this).val()
        console.log('大陸名が変更されました' + continent_id)

        //特定の大陸の国の情報を取得
        $.ajax({
            url: `/countries/continent/${continent_id}`
        }).done(function(data) {
            console.log(data)
            //国を選ぶフォームの中身の変更
            $('#country').empty()
            $('#country').append('<option>国名を選択してください</option>')
            $.each(data, function(index, country) {
                $('#country').append($('<option>', {
                    value: country.id,
                    text: country.name
                }))
            })
        })
    });
</script>

</html>