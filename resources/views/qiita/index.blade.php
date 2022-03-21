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
    <div class="container mx-auto bg-base-200">
        <h1 class="text-4xl font-bold text-blue-600 text-center">Qiita記事</h1>
        @foreach ($decode_res as $res_data)
            <div class="card m-4 w-3/4 bg-base-100 mx-auto shadow-lg">
                <div class="card-body">
                    <h2 class="card=title text-xl">{{ $res_data->title }}</h2>
                    <div class="flex">
                        @foreach ($res_data->tags as $tag)
                            <div class="badge badge-secondary m-1">{{ $tag->name }}</div>
                        @endforeach
                    </div>
                    <div class="card-actions justify-end">
                        <a class="btn btn-primary" href="{{ $res_data->url }}" target="_blank">公開サイトへ</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
