<?php

/** @var yii\web\View $this */

$this->title = 'О нас';
?>
<br>
<h1 class="d-flex justify-content-center " style="font-family: 'Arial Black'">Экслюзивные книги:</h1>
<br>
<div class="container w-75">

            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="images/01.jpg " class="d-block" alt="..." style="border-radius: 45px">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Даниель Дефо - Робинзон Крузо</h5>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="images/2.jpg" class="d-block" alt="..." style="border-radius: 45px">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Валентин Катаев - Цветик самоцветик</h5>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/3.jpg" class="d-block" alt="..." style="border-radius: 45px">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Михаил Пегов - Леонардо Да Винчи.</h5>

                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>
