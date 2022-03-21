<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Articles</title>
</head>
<body>
    <h1 class="text-3xl font-bold text-blue-600">Qiita投稿記事</h1>
    <ul>
        @foreach ($decode_res as $res_data)
        <ul>
            <li>
                {{-- {!! print_r($res_data, true) !!} --}}

                {{ $res_data->title }}
            </li>
        </ul>
        @endforeach
    </ul>

</body>
</html>
