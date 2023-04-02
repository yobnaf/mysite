<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Мой сайт-визитка</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="flex-container">
            <header>
                <?php include "logo.inc.php"; ?>
                <?php include "menu.inc.php"; ?>
            </header>
            
            <main>
                <h1><?php echo $p; ?></h1>

                <div class="data">
                    <div class="working">
                        <?php echo '<img src="img/Work_In_Beanbag.png" alt="Рабочая обстановка">'; ?>
                    </div>

                    <div class="info">
                        <p>Меня зовут <?php echo $name, ' ', $surname, '<br>'; echo 'Город', ' ', $city; ?></p>
                        
                        <p>Мне <?php echo $age;?> лет</p>

                        <p>Я научился создавать переменные в PHP</p>
                        <p>Изучил синтаксис PHP, простые операции с переменными</p>
                        <p>Использовал операции инкремент и декремент, а также логические операторы и операторы сравнения</p>
                    </div>
                </div>

                <div class="knowledge">
                    <?php include "knowledge.inc.php"; ?>
                    <?php echo $res; ?> <br><br>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $a = 10;
                        $b = 20;
                        $c = $a + $b;
                        echo "Сумма ", $a, " и ", $b, " равна ", $c;
                    ?><br>                

                </div>
                
                <div class="footer">
                    <?php include "footer.inc.php"; ?>
                </div>
            </main>

            <footer>
                <h2>Thanks for watching!</h2>
            </footer>

        </div>
    </body>
</html>