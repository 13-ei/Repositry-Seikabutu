<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>みんなの旅ログ</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
        h1 {
            text-align: center;
            font-size: 50px;
            font-family: '游明朝', 'Yu Mincho', YuMincho, 'Hiragino Mincho Pro', serif;

        }
    </style>

</head>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<body>
    <h1>みんなの旅ログ</h1>
    <div class="search">
        <form action="" method="post">
            <input type="text" name="search_name" placeholder="国名" />
            <input type="submit" name="submit" value="検索" />
        </form>
    </div>
    <form action="/logs" method="POST" enctype="multipart/form-data">
        <!-- サーバー側に送信する入力項目を扱うForm領域を準備 -->
        @csrf
        <!-- LaravelのBladeでは、Formタグの内側に@csrfというBladeディレクティブを定義するだけで、HTML変換する際に自動的に必要なHTMLタグを生成してくれます。 -->
        <!-- ファイルアップロードがあるときは 必ず enctype="multipart/form-data" をつける必要がある。 -->
        <div class="title">
            <p>タイトル</p>
            <input type="text" name="log[title]" placeholder="タイトルを入力" value="{{ old('log.title') }}" />
            <!-- $request['log']を利用すると、logをキーにもつリクエストパラメーターを取得することができる。
            $requestのキーは、HTMLのFormタグ内で定義した各入力項目のname属性と一致する。 -->
            <p class="title__error" style="color:red">{{ $errors->first('log.title') }}</p>
        </div>
        <p>大陸を選択</p>
        <div class='continents'>
            @foreach($continents as $continent)
            <div class="continent">
                <input type="radio" name="continent" value="{{ $continent->id }}" id="{{ $continent->id }}" />
                <label for="{{ $continent->id }}">{{ $continent->name }}</label>
            </div>
            @endforeach
        </div>
        <div class="country">
            <p>国を選択</p>
            <select name="log[country_id]" id="country">
                <option value=""></option>
            </select>
        </div>
        <div class="start_date">
            <p>出発日</p>
            <input type="date" name="log[start_date]" value="{{ old('log.start_date') }}" />
            <p class="start_date__error" style="color:red">{{ $errors->first('log.start_date') }}</p>
        </div>
        <div class="end_date">
            <p>帰国日</p>
            <input type="date" name="log[end_date]" value="{{ old('log.end_date') }}" />
            <p class="end_date__error" style="color:red">{{ $errors->first('log.end_date') }}</p>
        </div>
        <div class="tourist_spot">
            <p>観光地</p>
            <input type="text" name="log[tourist_spot]" placeholder="観光地名を入力" value="{{ old('log.tourist_spot') }}" />
            <p class="tourist_spot__error" style="color:red">{{ $errors->first('log.tourist_spot') }}</p>
            <input type="file" name="tourist_spot_photo">
            <p class="tourist_spot_photo__error" style="color:red">{{ $errors->first('image.tourist_spot_photo') }}</p>
        </div>
        <div class="food">
            <p>食事</p>
            <input type="text" name="log[food]" placeholder="食べたものを入力" value="{{ old('log.food') }}" />
            <p class="food__error" style="color:red">{{ $errors->first('log.food') }}</p>
            <input type="file" name="food_photo">
            <p class="food_photo__error" style="color:red">{{ $errors->first('image.food_photo') }}</p>
        </div>
        <div class="hotel">
            <p>ホテル</p>
            <input type="text" name="log[hotel]" placeholder="ホテル名を入力" value="{{ old('log.hotel') }}" />
            <p class="hotel__error" style="color:red">{{ $errors->first('log.hotel') }}</p>
            <input type="file" name="hotel_photo">
            <p class="hotel_photo__error" style="color:red">{{ $errors->first('image.hotel_photo') }}</p>
        </div>
        <div class="money">
            <p>旅行費用</p>
            <input type="text" name="log[money]" placeholder="旅行費用を入力" value="{{ old('log.money') }}" />
            <p class="money__error" style="color:red">{{ $errors->first('log.money') }}</p>
        </div>
        <div class="impressions">
            <p>感想</p>
            <textarea
                name="log[impressions]"
                placeholder="自由記載"
                value="{{ old('log.impressions') }}"></textarea>
            <p class="impressions__error" style="color:red">{{ $errors->first('log.impressions') }}</p>
            <input type="file" name="impressions_photo">
            <p class="impressions_photo__error" style="color:red">{{ $errors->first('image.impressions_photo') }}</p>
        </div>
        <input type="submit" value="投稿" />
    </form>
</body>

<script>
    $('input[name="continent"]').change(function() {
        var continent_id = $(this).val()
        console.log('大陸名が変更されました' + continent_id)

        //特定の大陸の国の情報を取得
        $.ajax({
            url: `countries/continent/${continent_id}`
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