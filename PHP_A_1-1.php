<?php
// 【PHP_A_1-1】 以下フォームからデータを受け取り、「XX さんは XX 歳です」と表示してください。また、年齢が 120 歳以上ならエラーを表示してください。


?>

<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>フォームの練習</title>
    <!-- MDB -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
        rel="stylesheet"
    />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
<div class="card w-50 d-flex align-items-center justify-content-center m-auto mt-5 p-5" style="border-radius: 50px;">
    <form class="w-50" method="post">
        <h1 class="h4 mb-3 fw-normal text-center">チェックフォーム</h1>
        <label for="inputUserName" class="visually-hidden">ユーザー名</label>
        <input type="text" id="inputUserName" name="UserName" class="form-control my-5" placeholder="ユーザー名" required autofocus>
        <label for="inputAge" class="visually-hidden">年齢</label>
        <input type="number" id="inputAge" name="Age" class="form-control my-5" placeholder="年齢" required>
        <button class="w-100 btn btn-lg btn-outline-primary" type="submit">実行する</button>
    </form>
</div>
<!-- 以下に結果を出力 -->
<div class="d-flex align-items-center justify-content-center">
    <p class="fs-3 p-5"><?php
    if ($_POST["Age"] >= 120){
        echo "エラー：年齢が１２０以上です。";
    }
    else {
        echo "{$_POST["UserName"]}さんは{$_POST["Age"]}歳です";
    }
    
    ?></p>
</div>

</body>
</html>