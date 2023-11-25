<?php
$name = "Билл Гейтс";
$img = "https://1sn.ru/storage/posts/oEysEqkdy4jumuaen5PYMxB596q9zUtR3gh8vRcp.jpg";
$phone = 89490493933;

$skills = [
    ["name" => "Adobe Photoshop2", "value" => 50],
    ["name" => "Photography", "value" => 45],
    ["name" => "Illustrator", "value" => 30],
    ["name" => "Media", "value" => 40]
];

$work_experience = [
    ["exp" => "#1 Front End Developer", "period" => "Jan 2015", "text" => "В своём стремлении повысить качество жизни, они забывают, что выбранный нами инновационный путь влечет за собой процесс внедрения и модернизации новых предложений. Приятно, граждане, наблюдать, как действия представителей оппозиции подвергнуты целой серии независимых исследований. Как принято считать, предприниматели в сети интернет преданы социально-демократической анафеме. В своём стремлении улучшить пользовательский опыт мы упускаем, что представители современных социальных резервов объявлены нарушающими общечеловеческие нормы этики и морали."],
    ["exp" => "#2 Web Developer / something.com", "period" => "Mar 2012 - Dec 2014", "text" => "Не следует, однако, забывать, что граница обучения кадров создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса первоочередных требований. Однозначно, некоторые особенности внутренней политики ограничены исключительно образом мышления! Лишь стремящиеся вытеснить традиционное производство, нанотехнологии лишь добавляют фракционных разногласий и ассоциативно распределены по отраслям."],
    ["exp" => "#3 Graphic Designer / designsomething.com", "period" => "Jun 2010 - Mar 2012", "text" => "А также явные признаки победы институционализации заблокированы в рамках своих собственных рациональных ограничений. Каждый из нас понимает очевидную вещь: экономическая повестка сегодняшнего дня не оставляет шанса для модели развития! С другой стороны, начало повседневной работы по формированию позиции создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса соответствующих условий активизации."]
];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Мое резюме</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html, body, h1, h2, h3, h4, h5, h6 {
            font-family: 'Jost', sans-serif;
        }
    </style>
</head>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

    <!-- The Grid -->
    <div class="w3-row-padding">

        <!-- Left Column -->
        <div class="w3-third">

            <div class="w3-white w3-text-grey w3-card-4">
                <div class="w3-display-container">
                    <img src="<?= $img; ?>" style="width:100%" alt="Avatar">
                    <div class="w3-display-bottomleft w3-container w3-text-black">
                        <h2><?= $name ?></h2>
                    </div>
                </div>
                <div class="w3-container">
                    <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Профессия</p>
                    <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Город, страна</p>
                    <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>E-mail</p>
                    <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>Телефон</p>
                    <hr>

                    <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b>
                    </p>

                    <?php foreach ($skills as $key => $skill): ?>
                        <p><?= $skill["name"] ?>
                            <?php if ($key == 0): ?>
                                Это первый скилл
                            <?php endif; ?>
                        </p>
                        <div class="w3-light-grey w3-round-xlarge w3-small">
                            <div class="w3-container w3-center w3-round-xlarge w3-teal"
                                 style="width:<?= $skill["value"] ?>%"><?= $skill["value"] ?>%
                            </div>
                        </div>
                    <?php endforeach; ?>


                    <br>

                    <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b>
                    </p>
                    <p>Английский</p>
                    <div class="w3-light-grey w3-round-xlarge">
                        <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
                    </div>
                    <p>Испанский</p>
                    <div class="w3-light-grey w3-round-xlarge">
                        <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
                    </div>
                    <p>Немецкий</p>
                    <div class="w3-light-grey w3-round-xlarge">
                        <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
                    </div>
                    <br>
                </div>
            </div>
            <br>

            <!-- End Left Column -->
        </div>

        <!-- Right Column -->
        <div class="w3-twothird">

            <div class="w3-container w3-card w3-white w3-margin-bottom">
                <h2 class="w3-text-grey w3-padding-16"><i
                            class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
                <?php foreach ($work_experience as $key => $w_expo): ?>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b><?= $w_expo["exp"] ?></b></h5>
                        <h6 class="w3-text-teal"><i
                                    class="fa fa-calendar fa-fw w3-margin-right"></i><?= $w_expo["period"] ?>
                            <?php if ($key == 0): ?>
                                - <span class="w3-tag w3-teal w3-round">Current</span><?php endif; ?></h6>
                        <p><?= $w_expo["text"] ?></p>
                        <hr>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="w3-container w3-card w3-white">
                <h2 class="w3-text-grey w3-padding-16"><i
                            class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
                <div class="w3-container">
                    <h5 class="w3-opacity"><b>gb.ru</b></h5>
                    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
                    <p>Web Development! All I need to know in one place</p>
                    <hr>
                </div>
                <div class="w3-container">
                    <h5 class="w3-opacity"><b>London Business School</b></h5>
                    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
                    <p>Master Degree</p>
                    <hr>
                </div>
                <div class="w3-container">
                    <h5 class="w3-opacity"><b>School of Coding</b></h5>
                    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
                    <p>Bachelor Degree</p><br>
                </div>
            </div>

            <!-- End Right Column -->
        </div>

        <!-- End Grid -->
    </div>

    <!-- End Page Container -->
</div>

<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find me on social media.</p>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <!-- End footer -->
</footer>

</body>
</html>
