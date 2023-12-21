<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アパート住民コミュニティサイト - 住所検索結果</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">アパート住民コミュニティサイト</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">ホーム</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ログイン</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">新規登録</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <h1>住所検索結果</h1>

        @if ($properties->count() > 0)
            <ul>
                @foreach ($properties as $property)
                    <li>{{ $property->Address }} - {{ $property->PropertyName }}</li>
                @endforeach
            </ul>
        @else
            <p>該当する物件はありません。</p>
        @endif
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
