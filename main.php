<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP-WebPage </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.php' ?>         
               <?php include 'menu.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="img/php.jpeg">'; ?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут: 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город:', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    года </p>
                    <p> Я научился создавать переменные </p>
                    <p> Изучил простые операции с ними </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.php'; ?> <br>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br><br>
                                       
                    <?php
                        $a = 5;
                        $b = 10;
                        $c = $a + $b;
                        echo $c;
                    ?>   <br><br>               
                     <?php
                        echo $d;
                    ?> <br><br>
                    <?php
                        $a = 3;
                        $b = 333;
                        $c = $a * $b;
                        echo $c;
                    ?>   <br><br>
                    <?php
	                    $a = 2;
	                    if ($a == 2) {
		                    echo 'Верно';
	                    } else {
		                    echo 'Неверно';
	                    }
                    ?>

            </div>

            <div class="article">
                <p class="text">
                PHP - Скриптовый язык общего назначения, интенсивно применяемый для разработки веб-приложений. 
                В настоящее время поддерживается подавляющим большинством хостинг-провайдеров и 
                является одним из лидеров среди языков, применяющихся для создания динамических веб-сайтов.
                </p>
            </div>
        </div>

            <?php include 'footer.php' ?>

    </div>


</body>
</html>
