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
            <div class="card w-3/4 m-4 shadow-lg">
                <div class="card-body">
                    <h2 class="card=title text-xl">{{ $res_data->title }}</h2>
                    <div class="flex">
                        @foreach ($res_data->tags as $tag)
                            <div class="badge badge-secondary">{{ $tag->name }}</div>
                        @endforeach
                    </div>
                    <div class="card-actions justify-end">
                        <a class="btn btn-primary" href="{{ $res_data->url }}" target="_blank">公開サイトへ</a>
                    </div>
                </div>
            </div>
        @endforeach
    </ul>
</body>
</html>
