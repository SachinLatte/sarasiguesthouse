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
                        <div class="center m0-auto w-text-heading mb-40">
                            <span class="sub-title-heading text-main mb-15 fadeInUp wow" style="visibility: visible; animation-name: fadeInUp;">Explore the
                                Guhagar</span>
                            <h2 class="title-heading fadeInUp wow" style="visibility: visible; animation-name: fadeInUp;"><span class="font-yes">Sarsi Guest House</span> is surrounded by lots of sightseeings.</h2>
                        </div>
                    </div>
                </div>
                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <div class="tab-tour-list">
                                <ul class="nav justify-content-center tab-list mb-37" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="new-york-tab" data-bs-toggle="tab" data-bs-target="#new-york-tab-pane" type="button" role="tab" aria-controls="new-york-tab-pane" aria-selected="true">Image Gallery</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="london-tab" data-bs-toggle="tab" data-bs-target="#london-tab-pane" type="button" role="tab" aria-controls="london-tab-pane" aria-selected="false">Video Gallery</button>
                                    </li>
                                </ul>
                                <div class="tab-content mt-85" id="myTabContent">
                                    <div class="tab-pane fade show active" id="new-york-tab-pane" role="tabpanel" aria-labelledby="new-york-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="grid-gallery static-thumbnails-lightgallery">
                                                <div class="item-1 common-items" data-src="./assets/images/gallery/image-gallery/img1.webp" style="background-image: url(&quot;./assets/images/gallery/image-gallery/img1.webp&quot;);">
                                                    <div class="tf-gallery">
                                                        <a href="./assets/images/gallery/image-gallery/img1.webp" class="btn-gallery flex-five" data-fancybox="gallery">
                                                            <i class="icon-Group-14"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item-2 common-items" data-src="./assets/images/gallery/image-gallery/img2.webp" style="background-image: url(&quot;./assets/images/gallery/image-gallery/img2.webp&quot;)";>
                                                    <div class="tf-gallery">
                                                        <a href="./assets/images/gallery/image-gallery/img2.webp" data-fancybox="gallery" class="btn-gallery flex-five">
                                                            <i class="icon-Group-14"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item-3 common-items" data-src="./assets/images/gallery/image-gallery/img3.webp" style="background-image: url(&quot;./assets/images/gallery/image-gallery/img3.webp&quot;)";>
                                                    <div class="tf-gallery">
                                                        <a href="./assets/images/gallery/image-gallery/img3.webp" class="btn-gallery flex-five " data-fancybox="gallery">
                                                            <i class="icon-Group-14"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item-4 common-items" data-src="./assets/images/gallery/image-gallery/img4.webp" style="background-image: url(&quot;./assets/images/gallery/image-gallery/img4.webp&quot;)";>
                                                    <div class="tf-gallery">
                                                        <a href="./assets/images/gallery/image-gallery/img4.webp" class="btn-gallery flex-five" data-fancybox="gallery">
                                                            <i class="icon-Group-14"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item-5 common-items" data-src="./assets/images/gallery/image-gallery/img5.webp" style="background-image: url(&quot;./assets/images/gallery/image-gallery/img5.webp&quot;)";>
                                                    <div class="tf-gallery">
                                                        <a href="./assets/images/gallery/image-gallery/img5.webp" class="btn-gallery flex-five" data-fancybox="gallery">
                                                            <i class="icon-Group-14"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item-6 common-items" data-src="./assets/images/gallery/image-gallery/img6.webp" style="background-image: url(&quot;./assets/images/gallery/image-gallery/img6.webp&quot;)";>
                                                    <div class="tf-gallery">
                                                        <a href="./assets/images/gallery/image-gallery/img6.webp" class="btn-gallery flex-five" data-fancybox="gallery">
                                                            <i class="icon-Group-14"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item-7 common-items" data-src="./assets/images/gallery/image-gallery/img7.webp" style="background-image: url(&quot;./assets/images/gallery/image-gallery/img7.webp&quot;)";>
                                                    <div class="tf-gallery">
                                                        <a href="./assets/images/gallery/image-gallery/img7.webp" class="btn-gallery flex-five" data-fancybox="gallery">
                                                            <i class="icon-Group-14"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item-8 common-items" data-src="./assets/images/gallery/image-gallery/img8.webp" style="background-image: url(&quot;./assets/images/gallery/image-gallery/img8.webp&quot;)";>
                                                    <div class="tf-gallery">
                                                        <a href="./assets/images/gallery/image-gallery/img8.webp" data-fancybox="gallery" class="btn-gallery flex-five">
                                                            <i class="icon-Group-14"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item-9 common-items" data-src="./assets/images/gallery/image-gallery/img9.webp" style="background-image: url(&quot;./assets/images/gallery/image-gallery/img9.webp&quot;)";>
                                                    <div class="tf-gallery">
                                                        <a href="./assets/images/gallery/image-gallery/img9.webp" class="btn-gallery flex-five " data-fancybox="gallery">
                                                            <i class="icon-Group-14"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item-10 common-items" data-src="./assets/images/gallery/image-gallery/img10.webp" style="background-image: url(&quot;./assets/images/gallery/image-gallery/img10.webp&quot;)";>
                                                    <div class="tf-gallery">
                                                        <a href="./assets/images/gallery/image-gallery/img10.webp" class="btn-gallery flex-five" data-fancybox="gallery">
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
                                                <div class="item-1" data-src="https://www.youtube.com/watch?v=1LDgLfovNiE">
                                                    <div class="tf-gallery">
                                                    <img src="./assets/images/gallery/video-gallery/img1.webp" alt="">
                                                        <a href="https://www.youtube.com/watch?v=1LDgLfovNiE" class="btn-gallery flex-five" data-fancybox="gallery">
                                                        <i class="fa-solid fa-play"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item-2 common-items" data-src="https://www.youtube.com/watch?v=1LDgLfovNiE">
                                                    <div class="tf-gallery">
                                                        <img src="./assets/images/gallery/video-gallery/img2.webp" alt="">
                                                        <a href="https://www.youtube.com/watch?v=1LDgLfovNiE" data-fancybox="gallery" class="btn-gallery flex-five">
                                                        <i class="fa-solid fa-play"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item-3 common-items" data-src="https://www.youtube.com/watch?v=1LDgLfovNiE" style="background-image: url(&quot;./assets/images/gallery/gallery11.jpg&quot;)";>
                                                    <div class="tf-gallery">
                                                        <img src="./assets/images/gallery/video-gallery/img3.webp" alt="">
                                                        <a href="https://www.youtube.com/watch?v=1LDgLfovNiE" class="btn-gallery flex-five " data-fancybox="gallery">
                                                        <i class="fa-solid fa-play"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item-4 common-items" data-src="https://www.youtube.com/watch?v=1LDgLfovNiE">
                                                    <div class="tf-gallery">
                                                        <img src="./assets/images/gallery/video-gallery/img4.webp" alt="">
                                                        <a href="https://www.youtube.com/watch?v=1LDgLfovNiE" class="btn-gallery flex-five" data-fancybox="gallery">
                                                        <i class="fa-solid fa-play"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item-5 common-items" data-src="https://www.youtube.com/watch?v=1LDgLfovNiE">
                                                    <div class="tf-gallery">
                                                    <img src="./assets/images/gallery/video-gallery/img5.webp" alt="">
                                                        <a href="https://www.youtube.com/watch?v=1LDgLfovNiE" class="btn-gallery flex-five" data-fancybox="gallery">
                                                        <i class="fa-solid fa-play"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item-6 common-items" data-src="https://www.youtube.com/watch?v=1LDgLfovNiE">
                                                    <div class="tf-gallery">
                                                    <img src="./assets/images/gallery/video-gallery/img6.webp" alt="">
                                                        <a href="https://www.youtube.com/watch?v=1LDgLfovNiE" class="btn-gallery flex-five" data-fancybox="gallery">
                                                        <i class="fa-solid fa-play"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item-7 common-items" data-src="https://www.youtube.com/watch?v=1LDgLfovNiE">
                                                    <div class="tf-gallery">
                                                    <img src="./assets/images/gallery/video-gallery/img7.webp" alt="">
                                                        <a href="https://www.youtube.com/watch?v=1LDgLfovNiE" class="btn-gallery flex-five" data-fancybox="gallery">
                                                        <i class="fa-solid fa-play"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item-8 common-items" data-src="https://www.youtube.com/watch?v=1LDgLfovNiE">
                                                    <div class="tf-gallery">
                                                        <img src="./assets/images/gallery/video-gallery/img8.webp" alt="">
                                                        <a href="https://www.youtube.com/watch?v=1LDgLfovNiE" data-fancybox="gallery" class="btn-gallery flex-five">
                                                        <i class="fa-solid fa-play"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item-9 common-items" data-src="https://www.youtube.com/watch?v=1LDgLfovNiE">
                                                    <div class="tf-gallery">
                                                    <img src="./assets/images/gallery/video-gallery/img9.webp" alt="">
                                                        <a href="https://www.youtube.com/watch?v=1LDgLfovNiE" class="btn-gallery flex-five " data-fancybox="gallery">
                                                        <i class="fa-solid fa-play"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item-10 common-items" data-src="https://www.youtube.com/watch?v=1LDgLfovNiE">
                                                    <div class="tf-gallery">
                                                    <img src="./assets/images/gallery/video-gallery/img10.webp" alt="">
                                                        <a href="https://www.youtube.com/watch?v=1LDgLfovNiE" class="btn-gallery flex-five" data-fancybox="gallery">
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
   