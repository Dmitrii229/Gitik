<?php
// Безопасное получение данных
$submitted = false;
$inputValue = '';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['primer'])) {
    $inputValue = trim($_GET['primer']);
    if ($inputValue !== '') {
        $submitted = true;
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Решенице</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Анимированный фон */
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg,
                #f9e0bb 0%,   /* светло-телесный */
                #f4c7a1 25%,  /* мягкий персик */
                #f0a57d 50%,  /* нежный оранжевый */
                #e68a5d 75%,  /* насыщенный оранжевый */
                #d97a52 100%);/* тёплый терракотовый */
            background-size: 400% 400%;
            animation: gradientShift 22s ease infinite;
            z-index: -1;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        body {
            font-family: 'Segoe UI', system-ui, sans-serif;
            color: #2a2a2a;
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem 1rem;
            background-color: #fafafa;
        }

        main {
            width: 100%;
            max-width: 500px;
        }

        form {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(8px);
            padding: 2.5rem;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.06),
                        inset 0 0 0 1px rgba(255, 255, 255, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.7);
            transition: transform 0.3s ease;
        }

        form:hover {
            transform: translateY(-2px) scale(1.01);
        }

        label {
            display: block;
            margin-bottom: 0.75rem;
            font-size: 1.25rem;
            font-weight: 500;
            color: #333;
            letter-spacing: 0.5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 0.85rem 1.2rem;
            font-size: 1.05rem;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            background-color: rgba(255, 255, 255, 0.8);
            transition: all 0.3s ease;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.03);
        }

        input[type="text"]:focus {
            outline: none;
            border-color: #e68a5d;
            background-color: #fff;
            box-shadow: 0 0 0 3px rgba(230, 138, 93, 0.2);
        }

        button {
            margin-top: 1.5rem;
            padding: 0.85rem 1.8rem;
            font-size: 1.1rem;
            font-weight: 600;
            background: linear-gradient(135deg, #e68a5d, #d97a52);
            color: white;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.25s ease;
            box-shadow: 0 4px 12px rgba(230, 138, 93, 0.3);
        }

        button:hover {
            background: linear-gradient(135deg, #d97a52, #cc6d4a);
            transform: translateY(-1px);
            box-shadow: 0 6px 16px rgba(230, 138, 93, 0.4);
        }

        button:active {
            transform: translateY(0) scale(0.98);
        }

        .result {
            margin-top: 1.8rem;
            padding: 1.2rem;
            background: rgba(255, 255, 255, 0.75);
            border-radius: 12px;
            border-left: 4px solid #e68a5d;
            font-size: 1.1rem;
            word-break: break-all;
            animation: fadeIn 0.6s ease;
            backdrop-filter: blur(4px);
        }

        .result h3 {
            margin-bottom: 0.5rem;
            color: #d97a52;
            font-size: 1.2rem;
        }

        .result p {
            margin: 0.3rem 0;
            color: #444;
        }

        .result small {
            display: block;
            margin-top: 0.8rem;
            color: #888;
            font-style: italic;
            font-size: 0.95rem;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 600px) {
            form {
                padding: 1.5rem;
                border-radius: 12px;
            }
            input[type="text"] {
                padding: 0.75rem 1rem;
                font-size: 1rem;
            }
            button {
                font-size: 1rem;
                padding: 0.75rem 1.5rem;
            }
            .result {
                padding: 1rem;
                font-size: 1rem;
            }
        }

        @supports not (backdrop-filter: blur(8px)) {
            form, .result {
                background: rgba(255, 255, 255, 0.95);
            }
        }
    </style>
</head>
<body>
    <main>
        <form action="" method="get">
            <label for="primer">CTRL+V PLS</label>
            <input type="text" name="primer" id="primer"
                   placeholder="Вставьте сюда..."
                   value="<?= htmlspecialchars($inputValue, ENT_QUOTES, 'UTF-8') ?>">
            <button type="submit">ДЕРЖИ РЕШЕНИЦЕ!</button>
        </form>

        <?php if ($submitted): ?>
            <div class="result">
                <h3>✅ Получено!</h3>
                <p><strong>Ваш ввод:</strong> <?= htmlspecialchars($inputValue, ENT_QUOTES, 'UTF-8') ?></p>
                <p>Длина строки: <strong><?= strlen($inputValue) ?></strong> символов</p>
                <small>...и мы всё сохранили 😊</small>
            </div>
        <?php endif; ?>
    </main>
</body>
</html>
  <?php
if(isset($_GET['primer'])&& !empty($_GET['primer'])){
    $primer = $_GET['primer'];
    $arr= explode(' ',$primer);
    var_dump($arr);
    //echo "<b>$primer</b>";
    }