<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>PHP画面遷移</title>
    </head>
    <body>
        <h1>PHP画面遷移(POST)</h1>
        <form action="next_post.php" method="post">
            <input type="text" name="php_text" />
            <input type="submit" value="次ページへ" />
        </form>
        <h1>PHP画面遷移(GET)</h1>
        <a href="next_get.php?php_a=GET">GET</a>
    </body>
</html>