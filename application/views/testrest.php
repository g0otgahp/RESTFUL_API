<!DOCTYPE html>
<html>

<head>
    <title>Special Menu Board</title>
    <link href="<?php echo BASE_URL('')?>asset/css/styles.css" rel="stylesheet" type="text/css" />
    <!-- DataBinder -->
    <script src="<?php echo BASE_URL('')?>asset/js/helpers/util.js"></script>
</head>

<body>
    <!-- Screen One-->
    <div class="screenBackrgound" id="screenBackrgound">
        <!-- <div class="brandTag animated15s fadeIn" data-bind-appThree="tagLine"></div> -->
        <div class="brand animated2s fadeIn">
            <!-- <img data-bind-appThree="brand"></img> -->
        </div>

        <div class="borderTitle animated3s bounceInRight"></div>
        <div class="titleBackground animated3s bounceInRight"></div>
        <div class="title animated3s bounceInRight" data-bind-appThree="exiciteLine"></div>
        <!-- <div class="line line1 animated4s fadeIn" data-bind-appThree="featureLine"></div> -->
    </div>
    <!-- Screen Two-->
    <div class="screenSecond" id="screenSecond">
        <div class="mainView">
            <div class="logo animated475s fadeIn">
                <!-- <img data-bind-appThree="logo"></img> -->
            </div>
            <!-- Banner Content -->
            <div class="bannerTitle animated525s fadeIn" data-bind-appThree="FeaturedProduct"></div>
            <div class="bannerCalorie animated525s fadeIn" data-bind-appThree="FeaturedProductCalorie"></div>

            <div class="bannerDescription animated575s fadeIn">
                <span data-bind-appThree="FeaturedProductDesc1" class="bannerDescription1"></span>
               <!--  <span data-bind-appThree="FeaturedProductDesc2" class="bannerDescription2"></span>  -->
            </div>
            <!-- Banner -->
            <div class="banner animated6s fadeIn">
                <img data-bind-appThree="FeaturedProductImage" height="656">
            </div>

        </div>
        <!-- List -->
        <div class="listSlider">
            <div class="list">
                <!-- 1 -->
                <div class="listItem animated475s bounceInUp">
                    <div class="listItemImage">
                        <img data-bind-appThree="ListProduct1Image" height="128">
                    </div>
                    <div class="listItemDescription">
                        <div class="listItemTitle" data-bind-appThree="ListProduct1"></div>
                        <div class="listItemCalorie" data-bind-appThree="ListProduct1Calorie"></div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="listItem animated5s bounceInUp">
                    <div class="listItemImage">
                        <img data-bind-appThree="ListProduct2Image" height="128">
                    </div>
                    <div class="listItemDescription">
                        <div class="listItemTitle" data-bind-appThree="ListProduct2"></div>
                        <div class="listItemCalorie" data-bind-appThree="ListProduct2Calorie"></div>
                    </div>
                </div>
                <!-- 3 -->
                <div class="listItem animated525s bounceInUp">
                    <div class="listItemImage">
                        <img data-bind-appThree="ListProduct3Image" height="128">
                    </div>
                    <div class="listItemImage img3"></div>
                    <div class="listItemDescription">
                        <div class="listItemTitle" data-bind-appThree="ListProduct3"></div>
                        <div class="listItemCalorie" data-bind-appThree="ListProduct3Calorie"></div>
                    </div>
                </div>
                <!-- 4 -->
                <div class="listItem animated55s bounceInUp">
                    <div class="listItemImage">
                        <img data-bind-appThree="ListProduct4Image" height="128">
                    </div>
                    <div class="listItemImage img4"></div>
                    <div class="listItemDescription">
                        <div class="listItemTitle" data-bind-appThree="ListProduct4"></div>
                        <div class="listItemCalorie" data-bind-appThree="ListProduct4Calorie"></div>
                    </div>
                </div>
                <!-- 5 -->
                <div class="listItem animated575s bounceInUp">
                    <div class="listItemImage">
                        <img data-bind-appThree="ListProduct5Image"height="128">
                    </div>
                    <div class="listItemImage img5"></div>
                    <div class="listItemDescription">
                        <div class="listItemTitle" data-bind-appThree="ListProduct5"></div>
                        <div class="listItemCalorie" data-bind-appThree="ListProduct5Calorie"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="<?php echo BASE_URL('')?>asset/js/controller.js"></script>
</html>
