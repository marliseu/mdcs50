<?php include_once 'header.php'; ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?= $website_settings['page_title'] ?>
                    <small><?= $website_settings['subheading'] ?></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Four Column Portfolio</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Rows -->
	        <?php
	            $portfolio = [
		            [
			            'container_class' => 'col-md-3 img-portfolio',
			            'img_class' => 'img-responsive img-hover',
			            'portfolio_link' => 'portfolio-item.php',
			            'img_link' => 'http://lorempixel.com/g/750/450',
		            ],
		            [
			            'container_class' => 'col-md-3 img-portfolio',
			            'img_class' => 'img-responsive img-hover',
			            'portfolio_link' => 'portfolio-item.php',
			            'img_link' => 'http://lorempixel.com/g/750/450',
		            ],
		            [
			            'container_class' => 'col-md-3 img-portfolio',
			            'img_class' => 'img-responsive img-hover',
			            'portfolio_link' => 'portfolio-item.php',
			            'img_link' => 'http://lorempixel.com/g/750/450',
		            ],
		            [
			            'container_class' => 'col-md-3 img-portfolio',
			            'img_class' => 'img-responsive img-hover',
			            'portfolio_link' => 'portfolio-item.php',
			            'img_link' => 'http://lorempixel.com/g/750/450',
		            ],
	            ];
                for ($i = 0; $i < 3; $i++) {
                    echo "<div class=\"row\">";
                    foreach ( $portfolio as $portfolio_item ) {
                        ?>
                        <div class="<?= $portfolio_item['container_class']; ?>">
                            <a href="<?= $portfolio_item['img_link']; ?>">
                                <img class="<?= $portfolio_item['img_class']; ?>" src="<?= $portfolio_item['img_link']; ?>" alt="">
                            </a>
                        </div>
                        <?php
                    }
                    echo "</div>";
                }
            ?>
        <!-- /.row -->
        </div>

    <div class="container">
        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p><?= sprintf($website_settings['copyright'], date('Y')); ?></p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
