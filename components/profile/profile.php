<div class="block__info">
            <div class="block__info__img">
                <img src="../assets/img/Rectangle 1.png" alt="">
            </div>
            <div class="block__info__main__img">
                <img src="../assets/img/Ellipse 1.svg" alt="">
            </div>
            <div class="block__info__main">
                <h2><?php echo $name__admin;?><h2>
                
                <p class="main__info"><?php echo $spes__admin; ?></p>
               
                <p class="main__info"><?php echo $who__admin;?></p>
                <?php
                if(isset($_SESSION['logged_user'])){
                    echo '<a href="vendor/vixod.php">Выйти</a>';
                }
                ?>
                <div class="block__info__main__contact">
                    <span id="vk" class="fa-vk"></span>
                    <span id="gt" class="fa-github"></span>
                    <span id="tw" class="fa-twitter"></span>
                    <!-- <p class="main__info">Инста</p>
                    <p class="main__info">ВК</p>
                    <p class="main__info">Телега</p> -->
                </div>
                <div class="info_blog">
                    <p class="info_o_blog"><?php echo $osebe;  ?></p>
                    <!-- <p class="info_o_blog"><br>Начал заниматься веб-разработкой в 2020 году.<br>Больше всего нравится писать код на языках<br> JavaScript, Python,  PHP<br>и подобные.<br>Так-же помимо веба, увлекаюсь написанием<br>простых программ на Python для ПК<br>Люблю изучать новое и в ближайшие дни<br>хочу изучить Vue и React, а так-же Node.js, TypeScript.<br> -->
                    <!-- </p> -->
                    <div class="block__info__button">
                        <button class="button_one">Написать мне</button>
                        <a class="button_two" href="../works.php">Мои работы</a>
                    </div>
                </div>
            </div>
        </div>