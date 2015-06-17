<?php require_once 'bootstrap.php'; ?>

<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php $carousel_length = count($carousels[$_SERVER['REQUEST_URI']]); ?>
        <?php for ($index = 0; $index < $carousel_length; $index++) : ?>
            <li data-target="#myCarousel" data-slide-to="<?= $index; ?>" <?= ($index == 0) ? 'class="active"': '' ?>></li>
        <?php endfor; ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php for ($index = 0; $index < $carousel_length; $index++) : ?>
            <div class="item <?= ($index == 0) ? ' active' : '' ?>">
                <div class="fill" style="background-image:url('<?= $carousels[$_SERVER['REQUEST_URI']][$index]['img_url'] ?>');"></div>
                <div class="carousel-caption">
                    <h2><?= $carousels[$_SERVER['REQUEST_URI']][$index]['caption'] ?></h2>
                </div>
            </div>
        <?php endfor; ?>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>
