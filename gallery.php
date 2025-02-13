<?php include 'head.php' ?>
    <div class="preload preload-container">
        <svg class="pl" width="240" height="240" viewBox="0 0 240 240">
            <circle class="pl__ring pl__ring--a" cx="120" cy="120" r="105" fill="none" stroke="#000" stroke-width="20"
                stroke-dasharray="0 660" stroke-dashoffset="-330" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--b" cx="120" cy="120" r="35" fill="none" stroke="#000" stroke-width="20"
                stroke-dasharray="0 220" stroke-dashoffset="-110" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--c" cx="85" cy="120" r="70" fill="none" stroke="#000" stroke-width="20"
                stroke-dasharray="0 440" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--d" cx="155" cy="120" r="70" fill="none" stroke="#000" stroke-width="20"
                stroke-dasharray="0 440" stroke-linecap="round"></circle>
        </svg>
    </div>
    <?php $page = 'gallery'; include "navigations.php" ?>
    <div id="wrapper">
        <div id="pagee" class="clearfix">
                <?php include 'navigations.php' ?>
            <!-- End Main Header -->
            <main id="main">

<section class="breadcumb-section">
    <div class="tf-container">
        <div class="row">
            <div class="col-lg-12 center z-index1">
                <h1 class="title">Gallery</h1>
                <ul class="breadcumb-list flex-five">
                    <li><a href="index.php">Home</a></li>
                    <li><span>Gallery</span></li>
                </ul>
            </div>
        </div>

    </div>
</section>
<section class="gallery-page pd-main">
<div class="tf-container">
<div class="row">
    <div class="col-lg-12">
        <div class="center m0-auto w-text-heading">
            <h2 class="title-heading mb-40 fadeInUp wow" style="visibility: visible; animation-name: fadeInUp;">Gallery</h2>
        </div>
        <div class="tab-tour-list">
            <ul class="nav justify-content-center tab-list mb-37" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="new-york-tab" data-bs-toggle="tab" data-bs-target="#new-york-tab-pane" type="button" role="tab" aria-controls="new-york-tab-pane" aria-selected="true">Image Gallery</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="london-tab" data-bs-toggle="tab" data-bs-target="#london-tab-pane" type="button" role="tab" aria-controls="london-tab-pane" aria-selected="false">Video Gallery</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="new-york-tab-pane" role="tabpanel" aria-labelledby="new-york-tab" tabindex="0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="grid-gallery static-thumbnails-lightgallery">
                            <div class="item-1 common-items" data-src="./assets/images/gallery/gallery7.jpg" style="background-image: url(&quot;./assets/images/gallery/gallery7.jpg&quot;);">
                                <div class="tf-gallery">
                                    <a href="./assets/images/gallery/gallery7.jpg" class="btn-gallery flex-five" data-fancybox="gallery">
                                        <i class="icon-Group-14"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="item-2 common-items" data-src="./assets/images/gallery/gallery9.jpg" style="background-image: url(&quot;./assets/images/gallery/gallery9.jpg&quot;)";>
                                <div class="tf-gallery">
                                    <a href="./assets/images/gallery/gallery9.jpg" data-fancybox="gallery" class="btn-gallery flex-five">
                                        <i class="icon-Group-14"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="item-3 common-items" data-src="./assets/images/gallery/gallery11.jpg" style="background-image: url(&quot;./assets/images/gallery/gallery11.jpg&quot;)";>
                                <div class="tf-gallery">
                                    <a href="./assets/images/gallery/gallery11.jpg" class="btn-gallery flex-five " data-fancybox="gallery">
                                        <i class="icon-Group-14"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="item-4 common-items" data-src="./assets/images/gallery/gallery8.jpg" style="background-image: url(&quot;./assets/images/gallery/gallery8.jpg&quot;)";>
                                <div class="tf-gallery">
                                    <a href="./assets/images/gallery/gallery8.jpg" class="btn-gallery flex-five" data-fancybox="gallery">
                                        <i class="icon-Group-14"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="item-5 common-items" data-src="./assets/images/gallery/gallery10.jpg" style="background-image: url(&quot;./assets/images/gallery/gallery10.jpg&quot;)";>
                                <div class="tf-gallery">
                                    <a href="./assets/images/gallery/gallery10.jpg" class="btn-gallery flex-five" data-fancybox="gallery">
                                        <i class="icon-Group-14"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="item-6 common-items" data-src="./assets/images/gallery/gallery12.jpg" style="background-image: url(&quot;./assets/images/gallery/gallery12.jpg&quot;)";>
                                <div class="tf-gallery">
                                    <a href="./assets/images/gallery/gallery12.jpg" class="btn-gallery flex-five" data-fancybox="gallery">
                                        <i class="icon-Group-14"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="item-7 common-items" data-src="./assets/images/gallery/gallery7.jpg" style="background-image: url(&quot;./assets/images/gallery/gallery7.jpg&quot;)";>
                                <div class="tf-gallery">
                                    <a href="./assets/images/gallery/gallery7.jpg" class="btn-gallery flex-five" data-fancybox="gallery">
                                        <i class="icon-Group-14"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="item-8 common-items" data-src="./assets/images/gallery/gallery9.jpg" style="background-image: url(&quot;./assets/images/gallery/gallery9.jpg&quot;)";>
                                <div class="tf-gallery">
                                    <a href="./assets/images/gallery/gallery9.jpg" data-fancybox="gallery" class="btn-gallery flex-five">
                                        <i class="icon-Group-14"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="item-9 common-items" data-src="./assets/images/gallery/gallery11.jpg" style="background-image: url(&quot;./assets/images/gallery/gallery11.jpg&quot;)";>
                                <div class="tf-gallery">
                                    <a href="./assets/images/gallery/gallery11.jpg" class="btn-gallery flex-five " data-fancybox="gallery">
                                        <i class="icon-Group-14"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="item-10 common-items" data-src="./assets/images/gallery/gallery8.jpg" style="background-image: url(&quot;./assets/images/gallery/gallery8.jpg&quot;)";>
                                <div class="tf-gallery">
                                    <a href="./assets/images/gallery/gallery8.jpg" class="btn-gallery flex-five" data-fancybox="gallery">
                                        <i class="icon-Group-14"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                </div>
                <div class="tab-pane fade" id="london-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <div class="row">
                <div class="col-lg-12">
                <div class="grid-gallery" id="video-gallery">
                            <div class="item-1" data-src="https://www.youtube.com/watch?v=lXItSmPeYzQ">
                                <div class="tf-gallery">
                                <img src="./assets/images/gallery/gallery7.jpg" alt="">
                                    <a href="https://www.youtube.com/watch?v=lXItSmPeYzQ" class="btn-gallery flex-five" data-fancybox="gallery">
                                    <i class="fa-solid fa-play"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="item-2 common-items" data-src="https://www.youtube.com/watch?v=lXItSmPeYzQ">
                                <div class="tf-gallery">
                                    <img src="./assets/images/gallery/gallery9.jpg" alt="">
                                    <a href="https://www.youtube.com/watch?v=lXItSmPeYzQ" data-fancybox="gallery" class="btn-gallery flex-five">
                                    <i class="fa-solid fa-play"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="item-3 common-items" data-src="https://www.youtube.com/watch?v=lXItSmPeYzQ" style="background-image: url(&quot;./assets/images/gallery/gallery11.jpg&quot;)";>
                                <div class="tf-gallery">
                                    <img src="./assets/images/gallery/gallery11.jpg" alt="">
                                    <a href="https://www.youtube.com/watch?v=lXItSmPeYzQ" class="btn-gallery flex-five " data-fancybox="gallery">
                                    <i class="fa-solid fa-play"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="item-4 common-items" data-src="https://www.youtube.com/watch?v=lXItSmPeYzQ">
                                <div class="tf-gallery">
                                    <img src="./assets/images/gallery/gallery8.jpg" alt="">
                                    <a href="https://www.youtube.com/watch?v=lXItSmPeYzQ" class="btn-gallery flex-five" data-fancybox="gallery">
                                    <i class="fa-solid fa-play"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="item-5 common-items" data-src="https://www.youtube.com/watch?v=lXItSmPeYzQ">
                                <div class="tf-gallery">
                                <img src="./assets/images/gallery/gallery10.jpg" alt="">
                                    <a href="https://www.youtube.com/watch?v=lXItSmPeYzQ" class="btn-gallery flex-five" data-fancybox="gallery">
                                    <i class="fa-solid fa-play"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="item-6 common-items" data-src="https://www.youtube.com/watch?v=lXItSmPeYzQ">
                                <div class="tf-gallery">
                                <img src="./assets/images/gallery/gallery12.jpg" alt="">
                                    <a href="https://www.youtube.com/watch?v=lXItSmPeYzQ" class="btn-gallery flex-five" data-fancybox="gallery">
                                    <i class="fa-solid fa-play"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="item-7 common-items" data-src="https://www.youtube.com/watch?v=lXItSmPeYzQ">
                                <div class="tf-gallery">
                                <img src="./assets/images/gallery/gallery7.jpg" alt="">
                                    <a href="https://www.youtube.com/watch?v=lXItSmPeYzQ" class="btn-gallery flex-five" data-fancybox="gallery">
                                    <i class="fa-solid fa-play"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="item-8 common-items" data-src="https://www.youtube.com/watch?v=lXItSmPeYzQ">
                                <div class="tf-gallery">
                                    <img src="./assets/images/gallery/gallery9.jpg" alt="">
                                    <a href="https://www.youtube.com/watch?v=lXItSmPeYzQ" data-fancybox="gallery" class="btn-gallery flex-five">
                                    <i class="fa-solid fa-play"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="item-9 common-items" data-src="https://www.youtube.com/watch?v=lXItSmPeYzQ">
                                <div class="tf-gallery">
                                <img src="./assets/images/gallery/gallery11.jpg" alt="">
                                    <a href="https://www.youtube.com/watch?v=lXItSmPeYzQ" class="btn-gallery flex-five " data-fancybox="gallery">
                                    <i class="fa-solid fa-play"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="item-10 common-items" data-src="https://www.youtube.com/watch?v=lXItSmPeYzQ">
                                <div class="tf-gallery">
                                <img src="./assets/images/gallery/gallery8.jpg" alt="">
                                    <a href="https://www.youtube.com/watch?v=lXItSmPeYzQ" class="btn-gallery flex-five" data-fancybox="gallery">
                                    <i class="fa-solid fa-play"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
</main>
        <?php include 'footer.php' ?>
        </div>
    </div>
<?php include 'tail.php' ?>
   