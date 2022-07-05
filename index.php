<?php
require 'vendor/database.php';
require 'components/settings/setting.php';

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/style_profile.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
</head>
<body>
    <div class="container">
        <!-- ХЕДЕР -->

        <?php

        include 'components/header/header.php'
?>
        <!-- ИСТОРИИ -->
        <div class="block_storizs">
            <div class="block_storiz">
                <p class="name_storiz">Отдых на природе</p>
                <p class="date_storiz">28.09.2022</p>
            </div>
            <div class="block_storiz">
                <p class="name_storiz">Отдых на природе</p>
                <p class="date_storiz">28.09.2022</p>
            </div>
            <div class="block_storiz">
                <p class="name_storiz">Отдых на природе</p>
                <p class="date_storiz">28.09.2022</p>
            </div>
            <div class="block_storiz">
                <p class="name_storiz">Отдых на природе</p>
                <p class="date_storiz">28.09.2022</p>
            </div>
        </div>
        <!-- СОЗДАТЬ ЗАПИСЬ -->
        <div class="create_task">
            <div class="input">
                <form action="vendor/create_task.php" method="POST">

                    <input type="text" placeholder="Что у вас нового?" name="text">
                    <div class="task_but">
                        <button class="senm" name="send" >Отправить</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- ПОСТЫ -->
        <!-- <div class="posts"> -->
            <div class="posts">
        <?php
        include 'components/post/post.php'

?>
            <!-- <div class="post">
                <div class="post__img">
                    <img src="../assets/img/Rectangle 5.jpg" alt="">
                </div>
                <div class="post_name">
                    <h2>Как писать код правильно?</h2>
                </div>
                <div class="post_text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum volutpat orci turpis urna.
Et vestibulum, posuere tortor lacinia sit. Sagittis porttitor orci auctor in at tincidunt arcu egestas. Fusce arcu sodales lacinia eu auctor nunc nam id. Diam sit sed volutpat massa. Egestas ornare vel volutpat.</p>
                </div>
                <div class="post_data">
                    <p>21.09.2022</p>
                    <p class="m_l_t">Создание сайта</p>
                    <a href="" class="read">Читать</a>
                    <div class="krug"></div>
                </div>
            </div>
            <div class="post">
                <div class="post__img">
                    <img src="../assets/img/Rectangle 5.jpg" alt="">
                </div>
                <div class="post_name">
                    <h2>Как писать код правильно?</h2>
                </div>
                <div class="post_text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum volutpat orci turpis urna.
Et vestibulum, posuere tortor lacinia sit. Sagittis porttitor orci auctor in at tincidunt arcu egestas. Fusce arcu sodales lacinia eu auctor nunc nam id. Diam sit sed volutpat massa. Egestas ornare vel volutpat.</p>
                </div>
                <div class="post_data">
                    <p>21.09.2022</p>
                    <p class="m_l_t">Создание сайта</p>
                    <a href="" class="read">Читать</a>
                    <div class="krug"></div>
                </div>
            </div>
            <div class="post">
                <div class="post__img">
                    <img src="../assets/img/Rectangle 5.jpg" alt="">
                </div>
                <div class="post_name">
                    <h2>Как писать код правильно?</h2>
                </div>
                <div class="post_text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum volutpat orci turpis urna.
Et vestibulum, posuere tortor lacinia sit. Sagittis porttitor orci auctor in at tincidunt arcu egestas. Fusce arcu sodales lacinia eu auctor nunc nam id. Diam sit sed volutpat massa. Egestas ornare vel volutpat.</p>
                </div>
                <div class="post_data">
                    <p>21.09.2022</p>
                    <p class="m_l_t">Создание сайта</p>
                    <a href="" class="read">Читать</a>
                    <div class="krug"></div>
                </div>
            </div> -->
        <!-- </div> -->
</div>
            <!-- ПРОФИЛЬ -->
    <?php
    include 'components/profile/profile.php'
    ?>
    </div>
    <script src="assets/js/script.js"></script>
</body>
</html>