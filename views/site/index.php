<?php
use yii\helpers\Url;
?>

<section id="fh5co-hero" class="js-fullheight" style="background-image: url(/images/hero_bg.jpg);" data-next="yes">
    <div class="fh5co-overlay"></div>
    <div class="container">
        <div class="fh5co-intro js-fullheight">
            <div class="fh5co-intro-text">
                <!-- 
                        INFO:
                        Change the class to 'fh5co-right-position' or 'fh5co-center-position' to change the layout position
                        Example:
                        <div class="fh5co-right-position">
                -->
                <div class="fh5co-left-position">
                    <h2 class="animate-box">Обучение созданию сайтов в Ташкенте</h2>
                    <!-- <p class="animate-box">
                            <a href="https://vimeo.com/channels/staffpicks/93951774" class="btn btn-outline popup-vimeo btn-video"><i class="icon-play2"></i> Watch video</a>
                            <a href="http://freehtml5.co" target="_blank" class="btn btn-primary">Visit FREEHTML5.co</a>
                    </p> -->
                </div>
            </div>
        </div>
    </div>
    <div class="fh5co-learn-more animate-box">
        <a href="#" class="scroll-btn">
            <span class="text">Подробнее</span>
            <span class="arrow"><i class="icon-chevron-down"></i></span>
        </a>
    </div>
</section>
<!-- END #fh5co-hero -->


<section id="fh5co-projects">
    <div class="container">
        <div class="row row-bottom-padded-md">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h2 class="fh5co-lead animate-box">Наши курсы</h2>
                <p class="fh5co-sub-lead animate-box">В наше время все более популярными , а также довольно прибыльными становятся профессии связанные с веб-индустрией, но к сожалению, не так много мест, где можно было бы качественно, в короткие сроки, а главное простым и доступным языком изучить интересное Вам направление.</p>
            </div>
        </div>
        <div class="row">
            <?php if(isset($courses)):?>
                <?php foreach ($courses as $course):?>
                    <div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
                        <img src="/images/<?= $course->image?>" class="img-responsive mb-20">
                        <div class="fh5co-text">
                            <h2><?= $course->title?></h2>
                            <p><?= $course->description?></p>
                            <a href="<?= Url::toRoute(['courses'])?>">Подробнее <i class="glyphicon glyphicon-chevron-right"></i></a>
                        </div>
                    </div>
                <?php endforeach;?>
            <?php endif;?>
        </div>
    </div>
</section>
<!-- END #fh5co-projects -->

<section id="fh5co-features">
    <div class="container">
        <div class="row text-center row-bottom-padded-md">
            <div class="col-md-8 col-md-offset-2">
                <figure class="fh5co-devices animate-box"><img src="/images/img_devices.png" class="img-responsive"></figure>
                <h2 class="fh5co-lead animate-box" id="ourCourses">Чему мы обучаем:</h2>
                <p class="fh5co-sub-lead animate-box">Каждый из курсов по созданию сайтов разделен на 3 части: это теоретическая часть, в которой Вы получите все теоретические навыки, практическая часть, основанная на реальных примерах, а также интерактивные домашние задания, которые вы будете выполнять для закрепленния пройденного материала.</p>
                <hr>
            </div>
        </div>
        <div class="row">
            <?php if(isset($programming)):?>
                <?php foreach ($programming as $programm):?>
                    <div class="col-md-4 col-sm-6 col-xs-12 animate-box">
                        <div class="fh5co-feature">
                            <img src="/images/icons/<?= $programm->image?>" class="text-center mb-20">
                            <h3><?= strtoupper($programm->title)?></h3>
                            <p><?= $programm->description?></p>
                        </div>
                    </div>
                <?php endforeach;?>
            <?php endif;?>
        </div>
    </div>
</section>	

<!-- END #fh5co-features -->


<section id="fh5co-features-2">
    <div class="container">
        <div class="col-md-6 col-md-push-6">
            <figure class="fh5co-feature-image animate-box">
                <img src="/images/macbook.png" width="1300">
            </figure>
        </div>
        <div class="col-md-6 col-md-pull-6">
                <!-- <span class="fh5co-label animate-box">Наши преимущества</span> -->
            <h2 class="fh5co-lead animate-box" id="advantages">Наши преимущества</h2>
            
            <?php if(isset($advantages)):?>
                <?php foreach ($advantages as $advantage):?>
                    <div class="fh5co-feature">
                        <div class="fh5co-icon animate-box"><i class="icon-check2"></i></div>
                        <div class="fh5co-text animate-box">
                            <h3><?= $advantage->title?></h3>
                            <p><?= $advantage->description?></p>
                        </div>
                    </div>
                <?php endforeach;?>
            <?php endif;?>
        </div>
    </div>
</section>
<!-- END #fh5co-features-2 -->

<section id="fh5co-testimonials">
    <div class="container">
        <div class="row row-bottom-padded-sm">
            <div class="col-md-6 col-md-offset-3 text-center">
                <div class="fh5co-label animate-box"><!-- Отзывы --></div>
                <h2 class="fh5co-lead animate-box" id="reviews">Отзывы учеников</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center animate-box">
                <div class="flexslider">
                    <ul class="slides">
                        
                        <?php if(isset($reviews)):?>
                            <?php foreach ($reviews as $review):?>
                                <li>
                                    <blockquote>
                                        <p>&ldquo;<?= $review->description?>&rdquo;</p>
                                        <p><cite>&mdash; <?= $review->author?>.</cite></p>
                                    </blockquote>
                                </li>
                            <?php endforeach;?>
                        <?php endif;?>
                    </ul>
                </div>
                <div class="flexslider-controls">
                    <ol class="flex-control-nav">
                        <li class="animate-box"><img src="/images/person3.jpg"></li>
                        <li class="animate-box"><img src="/images/person2.jpg"></li>
                        <li class="animate-box"><img src="/images/person3.jpg"></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END #fh5co-testimonials -->