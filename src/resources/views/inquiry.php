<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>問い合わせ</title>
    <?php include('sidebar_css.php'); ?>
    <style>
        h1 {
        margin:0;
        padding:0;
        border:0;
        outline:0;
        font-size:100%;
        vertical-align:baseline;
        background:transparent;
        margin-bottom: 30px;
        font-size: 100%;
        color: #222;
        }
        .content_wrapper {
        transition: margin-left .3s ease-in-out;
        margin-left: 275px;
        }
        input[type="text"],
            textarea {
                margin-bottom: 20px;
                padding: 10px;
                font-size: 86%;
                border: 1px solid #ddd;
                border-radius: 3px;
                background: #fff;
        }

        input[type="text"] {
            width: 200px;
        }
        textarea {
            width: 50%;
            max-width: 50%;
            height: 70px;
        }
        input[type="submit"] {
            appearance: none;
            -webkit-appearance: none;
            padding: 10px 20px;
            color: #fff;
            font-size: 86%;
            line-height: 1.0em;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            background-color: #37a1e5;
        }
        input[type=submit]:hover,
        button:hover {
            background-color: #1E48B1;
        }
        button {
            -webkit-appearance: none;
            padding: 10px 20px;
            color: #fff;
            font-size: 86%;
            line-height: 1.0em;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            background-color: #1E48B1;
        }
    </style>
</head>
<body>
    <?php include('sidebar.php'); ?>
    <div class="content_wrapper">
    <h1>趣味への問い合わせ</h1>
    <form method="post" action="post" class="">
        <p>件名</p>
        <input type="text" class="" minlength="10" maxlength="50" required>
        <p>ニックネーム：</p>
        <p>メールアドレス：</p>
        <p>問い合わせ内容</p>
        <textarea id="message" name="message" minlength="10" maxlength="50" required></textarea>
    </form>
    <form action="">
        <button class="inquiry" type="submit">問い合わせる</button>
    </form>
    </div>
</body>
</html>