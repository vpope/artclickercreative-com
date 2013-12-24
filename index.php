<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.13.0/build/cssreset/cssreset-min.css" />
        <link href="global.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="wrapper">
            <div class="body-wrapper">
                <div class="sub-nav">
                    <?php include "includes/logo.php"; ?>
                </div>


                <div class="container">
                    <?php include "includes/navigation.php"; ?>
                    <div class="four-pictures">
                        <div class="storyboard image-item">
                            <a href="storyboard-ill.php"><img src="images/storyboard.jpg" /></a>
                            <div class="image-hover">
                                <div class="image-hover-inner">
                                    Storyboard Illustrations
                                </div>
                            </div>
                        </div>
                        <div class="commercial image-item">
                            <a href="commercial-ill.php"><img src="images/commercial.jpg" /></a>
                            <div class="image-hover">
                                <div class="image-hover-inner">
                                    Commercial Illustrations
                                </div>
                            </div>
                        </div>
                        <div class="editorial image-item">
                            <a href="editorial-ill.php"><img src="images/Editorial.jpg" /></a>
                            <div class="image-hover">
                                <div class="image-hover-inner">
                                    Editorial Illustrations
                                </div>
                            </div>
                        </div>
                        <div class="conceptual image-item">
                            <a href="conceptual-ill.php"><img src="images/conceptual.jpg" /></a>
                            <div class="image-hover">
                                <div class="image-hover-inner">
                                    Conceptual Illustrations
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <?php include "includes/footer.php"; ?>
        </div>
        <?php include "includes/javascript.php"; ?>
    </body>
</html>
