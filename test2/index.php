<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>test2</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="wr">
    <h2>калькулятор (js)</h2>
    <div class="comment">
        формат ввода:
        (пример:10оператор20),
        где оператор это знак операции:
        <ul>
            <li>сложение: +</li>
            <li>вычитание: -</li>
            <li>умножение: *</li>
            <li>деление: /</li>
        </ul>
    </div>
    <form action="#">
        <div class="content">
            <div>
                <input type="text" name="val" id="val">
            </div>
            <div>
                <button name="enter">enter</button>
            </div>
        </div>
    </form>
    <div id="result">здесь результат</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="main.js"></script>
</body>
</html>