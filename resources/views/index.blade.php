<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>みんなの旅ログ</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <style>
        h1 {
            text-align: center;
            font-family: 'Poppins', sans-serif;
            font-size: 70px;
            font-weight: 300;
            /* 細めのフォント */
            color: #ff99cc;
            /* 柔らかいピンク */
            text-transform: capitalize;
            letter-spacing: 2px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
            /* 影で柔らかい印象 */
        }

        .main-container {
            margin: 0;
            padding: 0;
            background-size: cover;
            background-position: center;
            animation: backgroundSlide 60s infinite;
            padding-top: 100px;
            /* 画像を下に押し下げる */
            padding-bottom: 50px;
            /* 画像を下にさらに余裕を持たせる */
        }

        .main-container h1,
        .main-container .search,
        .main-container .continent-card {
            color: white;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        /* もしフォームやボタンが背景に埋もれないようにしたい場合 */
        .search form {
            background-color: rgba(0, 0, 0, 0.5);
            /* 半透明な黒 */
            padding: 10px;
            border-radius: 8px;
        }

        @keyframes backgroundSlide {
            0% {
                background-image: url('https://www.dropbox.com/scl/fi/qhrdtq43cpkw3flw1u14y/1267.jpg?rlkey=mxrjr4yar7i4u1k1iu1rpdlbk&st=ozxqq4e9&raw=1');
            }

            10% {
                background-image: url('https://www.dropbox.com/scl/fi/8ranzq6tzscr8slzptd4z/1268.jpg?rlkey=ogtttt2j5123mjsslvu1gtm65&st=4jk9a8js&raw=1');
            }

            20% {
                background-image: url('https://www.dropbox.com/scl/fi/9fd7sl8xuc3aibb2hhqzq/1269.jpg?rlkey=nwhzmj91yeq2lr0788m2yoc72&st=g3q7tylz&raw=1');
            }

            30% {
                background-image: url('https://www.dropbox.com/scl/fi/p70asdafmlvub3egwi2nj/1274.jpg?rlkey=2fa85zy2wq5oe6jygkqgj2rtf&st=ipsgyu9v&raw=1');
            }

            40% {
                background-image: url('https://www.dropbox.com/scl/fi/u9xihue0l1isbw8txgnau/area_asia_wh_01.jpg?rlkey=ecctjjuwyrc3t45zjw67dsheo&st=58a7sdzg&raw=1');
            }

            50% {
                background-image: url('https://www.dropbox.com/scl/fi/7uj8bia2f1n5algqxc2c0/area_middleeastafrica_02.jpg?rlkey=z0goj0zpwqxivyxjupcaa004m&st=zbedbl9p&raw=1');
            }

            60% {
                background-image: url('https://www.dropbox.com/scl/fi/1ojl6a4eqlkyers5iga1p/asia_joshitabi_sin_1.jpg?rlkey=b9uu4q1ucgmqd1w785j3fv6l0&st=0klms9q5&raw=1');
            }

            70% {
                background-image: url('https://www.dropbox.com/scl/fi/lunjybgqdhis0e72yz1w8/Asia.jpg?rlkey=g9iovnda64l381zl2ypy67ov6&st=h6unnvc2&raw=1');
            }

            80% {
                background-image: url('https://www.dropbox.com/scl/fi/0228vsqv3j1shnq3gvqwe/images.jpg?rlkey=tpiypo03segxy95rr05r7htwu&st=aetyy782&raw=1');
            }

            90% {
                background-image: url('https://www.dropbox.com/scl/fi/wsql24d31p8uaeg6r6cpc/wysiwyg_57c13aec774bb7dae288.jpg?rlkey=tlorayde5hs24kklwxkxhgfi5&st=46iqhw3l&raw=1');
            }

            100% {
                background-image: url('https://www.dropbox.com/scl/fi/7ovnf18iqzn9o6y0e5mu4/uyuni_img_mv_pic01.jpg?rlkey=ken4djnk9nxryekzsmurethan&st=5hz7aaw6&raw=1');
            }
        }

        /* 画像を横並びにするための親要素 */
        .continent-card-container {
            display: flex;
            /* 横並びにする */
            gap: 1rem;
            /* 画像の間隔 */
            justify-content: space-around;
            /* 画像が均等に並ぶように */
            flex-wrap: wrap;
            /* 画面サイズが小さくなった場合、折り返しを有効にする */
            margin-bottom: 2rem;
            /* 各画像間の下の余白 */
        }

        .continent-card {
            text-align: center;
            /* 画像の下にテキストを中央に配置 */
        }

        .continent-card img {
            width: 150px;
            /* 画像の幅 */
            height: 120px;
            /* 画像の高さ */
            object-fit: cover;
            /* 画像が領域内に収まるようにする */
            border-radius: 8px;
            /* 画像の角を丸める */
            transition: transform 0.3s ease;
            /* ホバー時にスムーズに拡大 */
        }

        .continent-card img:hover {
            transform: scale(1.1);
            /* ホバー時に拡大する */
        }

        /* フォームの全体デザイン */
        form {
            background-color: #ffffff;
            /* 背景色 */
            padding: 2rem;
            /* 内側の余白 */
            border-radius: 8px;
            /* 角を丸く */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* シャドウで立体感を */
            max-width: 800px;
            /* 最大幅を設定して見やすく */
            margin: 3rem auto;
            /* 上下の余白を追加し、中央揃え */
        }

        /* タイトルのスタイル */
        .title p {
            font-size: 1.2rem;
            /* フォントサイズ */
            font-weight: bold;
            /* 太字 */
            margin-bottom: 0.5rem;
            /* 下に少し余白 */
        }

        .title input {
            width: 100%;
            /* 幅を100%に */
            padding: 0.8rem;
            /* 内側の余白 */
            margin-bottom: 1rem;
            /* 下の余白 */
            border: 1px solid #ccc;
            /* 枠線 */
            border-radius: 8px;
            /* 角を丸く */
            font-size: 1rem;
            /* フォントサイズ */
            transition: border-color 0.3s ease-in-out;
            /* フォーカス時に枠線の色が変わる */
        }

        .title input:focus {
            border-color: #4CAF50;
            /* フォーカス時の枠線色 */
            outline: none;
            /* フォーカス時に枠線が表示されない */
        }

        /* ラベルのスタイル */
        label {
            font-size: 1rem;
            color: #333;
            margin-bottom: 0.5rem;
            /* 下に少し余白 */
            display: block;
            /* ラベルをブロック要素にして改行 */
        }

        /* 国を選択するセレクトボックス */
        select {
            width: 100%;
            /* 幅を100%に */
            padding: 0.8rem;
            /* 内側の余白 */
            margin-bottom: 1rem;
            /* 下の余白 */
            border: 1px solid #ccc;
            /* 枠線 */
            border-radius: 8px;
            /* 角を丸く */
            font-size: 1rem;
            /* フォントサイズ */
            transition: border-color 0.3s ease-in-out;
            /* フォーカス時に枠線の色が変わる */
        }

        select:focus {
            border-color: #4CAF50;
            /* フォーカス時の枠線色 */
            outline: none;
            /* フォーカス時に枠線が表示されない */
        }

        /* ボタンのデザイン */
        input[type="submit"] {
            background-color: #4CAF50;
            /* ボタンの背景色 */
            color: white;
            /* 文字色 */
            padding: 1rem 2rem;
            /* 内側の余白 */
            border: none;
            /* 枠線をなし */
            border-radius: 8px;
            /* 角を丸く */
            font-size: 1.2rem;
            /* フォントサイズ */
            cursor: pointer;
            /* マウスカーソルをポインタに */
            transition: background-color 0.3s ease;
            /* 背景色の変化 */
        }

        input[type="submit"]:hover {
            background-color: #45a049;
            /* ホバー時の背景色 */
        }

        /* テキストエリアのデザイン */
        textarea {
            width: 100%;
            /* 幅を100%に */
            padding: 1rem;
            /* 内側の余白 */
            margin-bottom: 1rem;
            /* 下の余白 */
            border: 1px solid #ccc;
            /* 枠線 */
            border-radius: 8px;
            /* 角を丸く */
            font-size: 1rem;
            /* フォントサイズ */
            resize: vertical;
            /* 縦方向のリサイズを許可 */
        }

        textarea:focus {
            border-color: #4CAF50;
            /* フォーカス時の枠線色 */
            outline: none;
            /* フォーカス時に枠線が表示されない */
        }

        /* ファイル選択のスタイル */
        input[type="file"] {
            margin-bottom: 1rem;
            /* 下に少し余白 */
        }

        /* 画像プレビュー用のスタイル */
        .image-preview {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .image-preview img {
            max-width: 100px;
            /* 画像の最大幅 */
            max-height: 100px;
            /* 画像の最大高さ */
            object-fit: cover;
            /* 画像が領域に収まるように */
            border-radius: 8px;
            /* 画像の角を丸く */
        }

        form {
            width: 100vw;
            /* 横幅いっぱいに広げる */
            margin: 2rem 0;
            /* 上下の余白 */
            padding: 2rem;
            /* 内側の余白 */
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .continents {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .continent {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .continent {
            background-color: #f0f0f0;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .continent:hover {
            background-color: #d9fdd3;
        }

        input[type="radio"] {
            accent-color: #4CAF50;
            /* モダンブラウザでは色も指定可能 */
        }

        .continents {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .continent {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        form {
            background-color: #f5f5f5;
            /* または #e0e0e0 / #d8d8d8 */
            color: #222;
            /* テキストは濃いグレーでコントラスト確保 */
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 2rem auto;
        }
    </style>

</head>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<body>
    <div class="main-container">
        <h1>みんなの旅ログ</h1>
        <div class="search">
            <form action="/logs/search/results" method="GET">
                <label for="country">過去の投稿を検索：</label>
                <select name="country_id" id="search_country">
                    <option value="">-- 国を選択 --</option>
                    @foreach ($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
                <input type="submit" value="検索" />
            </form>
        </div>
    </div>
    </div>
    <div class="continent-card-container">
        @foreach($continents as $continent)
        <div class="continent-card">
            <P>{{ $continent->name }}の投稿</P>
            <a href="/logs/continent/{{ $continent->id }}"><img src="{{ $continent->image_url }}" alt="{{ $continent->name }}画像"></a>
        </div>
        @endforeach
    </div>
    <div class="post-form-wrapper">
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
                    <input type="radio" name="continent_id" value="{{ $continent->id }}" id="{{ $continent->id }}" />
                    <label for="{{ $continent->id }}">{{ $continent->name }}</label>
                </div>
                @endforeach
            </div>
            <div class="country">
                <p>国を選択</p>
                <select name="log[country_id]" id="country">
                    <option value="">国名を選択してください</option>
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
    </div>
</body>

<script>
    window.onload = function() {
        $('input[name = "continent_id"][value = 1]').prop('checked', true).trigger('change');
    };
    $('input[name="continent_id"]').change(function() {
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