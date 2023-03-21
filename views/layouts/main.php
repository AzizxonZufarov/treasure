<?php

/* @var $this \yii\/web\View */
/* @var $content string */
use app\assets\PublicAsset;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

use yii\helpers\Url;


PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<nav class="navbar main-menu navbar-default">
    <div class="container">
        <div class="menu-content">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="public/images/logo.jpg" alt=""></a>
            </div>


            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav text-uppercase">
                    <li><a data-toggle="dropdown" class="dropdown-toggle" href="<?= Url::toRoute(['site/index'])?>">Home</a>
                        
                    </li>
                </ul>
                <div class="i_con">
                    <ul class="nav navbar-nav text-uppercase">
                        <?php if(Yii::$app->user->isGuest):?>
                            <li><a href="<?= Url::toRoute(['auth/login'])?>">Login</a></li>
                            <li><a href="<?= Url::toRoute(['auth/signup'])?>">Register</a></li>
                        <?php else: ?>
                            <?= Html::beginForm(['/auth/logout'], 'post')
                            . Html::submitButton(
                                'Logout (' . Yii::$app->user->identity->name . ')',
                                ['class' => 'btn btn-link logout', 'style'=>"padding-top:10px;"]
                            )
                            . Html::endForm() ?>
                        <?php endif;?>
                    </ul>
                </div>

            </div>
            <!-- /.navbar-collapse -->
        </div>
    </div>
    <!-- /.container-fluid -->
</nav>

<?= $content?>
<!--footer start-->


<footer class="footer-widget-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <aside class="footer-widget">
                    <div class="about-img"><img src="/public/images/logo2.png" alt=""></div>
                    <div class="about-content">Блог (англ. blog, от web log — интернет-журнал событий, интернет-дневник, онлайн-дневник) — веб-сайт, основное содержимое которого — регулярно добавляемые пользователем записи, содержащие текст, изображения или мультимедиа. 
                    </div>
                    <div class="address">
                        Telegram : @AzizxonZufarov
                        Email : bionorica2015@mail.ru OR orangelemoncoder@gmail.com
                        Website : www.testcoder.uz
                        Adresse : 47, Uygur proezd street, Uchtepa district, Tashkent, Uzbekistan
                    </div>
                </aside>
            </div>

            <div class="col-md-4">
                <aside class="footer-widget">
                    <h3 class="widget-title text-uppercase">Отзывы</h3>

                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!--Indicator-->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="single-review">
                                    <div class="review-text">
                                        <p>Очень интересный блог</p>
                                    </div>
                                    <div class="author-id">
                                        <img src="/public/images/author.png" alt="">

                                        <div class="author-text">
                                            <h4>София</h4>

                                            <h4>CEO, ReadyTheme</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-review">
                                    <div class="review-text">
                                        <p>Такого блога не видела</p>
                                    </div>
                                    <div class="author-id">
                                        <img src="/public/images/author.png" alt="">

                                        <div class="author-text">
                                            <h4>Анна</h4>

                                            <h4>CEO Technoshop</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-review">
                                    <div class="review-text">
                                        <p>Хочется больше новостей от разрабов</p>
                                    </div>
                                    <div class="author-id">
                                        <img src="/public/images/author.png" alt="">

                                        <div class="author-text">
                                            <h4>Диля</h4>

                                            <h4>CEO, CremShop</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </aside>
            </div>
            <div class="col-md-4">
                <aside class="footer-widget">
                    <h3 class="widget-title text-uppercase">Пользователский блог</h3>


                    <div class="custom-post">
                        <div>
                            <a href="#"><img src="/public/images/footer-img.png" alt=""></a>
                        </div>
                        <div>
                            <a href="#" class="text-uppercase">Нет места лучше дома</a>
                            <span class="p-date">2022</span>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <div class="footer-copy">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">&copy; 2022 <a href="#">Treasure PRO, </a> Built with <i
                            class="fa fa-heart"></i> by <a href="#">Zufarov A</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
