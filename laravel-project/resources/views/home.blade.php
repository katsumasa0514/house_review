<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アパート住民コミュニティサイト</title>
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
        <h1>アパート住民コミュニティサイトへようこそ！</h1>
        <p>このサイトでは、アパートの住民同士がコミュニケーションを取り合うことができます。</p>

        <div class="card mt-4">
            <div class="card-header">住所検索</div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="address">住所を入力してください:</label>
                        <input type="text" name="address" id="address" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">検索</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>