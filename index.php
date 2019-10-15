<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bookmark</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header>
        <div>
            <h1>Bookmark</h1>
        </div>
        <nav class="nav">
            <ul>
                <li class="btn"><a href="index.php">登録ページ</a></li>
                <li class="btn"><a href="select.php">一覧ページ</a></li>
            </ul>
        </nav>
    </header>

    <form action="insert.php" method="POST">
        <div class="form_area">
            <label for="name">書籍名</label><br>
            <input type="text" name="name" autofocus><br>
            <label for="url">書籍のURL</label><br>
            <input type="url" name="url" autofocus><br>
            <label for="comment">感想コメント</label><br>
            <textarea name="comment"></textarea>

        </div>

        <div class="hyouka">
            <input id="hoshi1" type="radio" name="hoshi" value="5" />
            <label for="hoshi1">★</label>
            <input id="hoshi2" type="radio" name="hoshi" value="4" />
            <label for="hoshi2">★</label>
            <input id="hoshi3" type="radio" name="hoshi" value="3" />
            <label for="hoshi3">★</label>
            <input id="hoshi4" type="radio" name="hoshi" value="2" />
            <label for="hoshi4">★</label>
            <input id="hoshi5" type="radio" name="hoshi" value="1" />
            <label for="hoshi5">★</label>
        </div>


        <div class="submit">
            <button type="submit" class="button">登録</button>
        </div>
    </form>


</body>

</html>