<?php 
require ('header.php');
?>
<!-- main banner -->
<section id="home">
    <div class="bgimage bgimagePhotos"></div>
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hero-text">
            <h2 class="hero_title">Photos</h2>
            <p class="hero_desc">Huțanu Andrei</p>
        </div>
        </div>
    </div>
</section>

<br>
<section id="photos">
    <h1 class="text-center">Photos</h1>
    <br>
    <div class="collage">
        <div id="carouselPhotos" class="carousel slide carousel-fade carouselPhotos">
            <div class="carousel-inner">
                <?php
                    $i=1;
                    $dir = 'images/photos_to_display/carouselBlackWhite/';
                    $file_display = array('jpg', 'jpeg', 'png', 'gif');
                    if ( file_exists( $dir ) == false ) {
                        echo 'Directory \'', $dir, '\' not found!';
                    } else {
                        $dir_contents = scandir( $dir );
                        $i=1;
                        foreach ( $dir_contents as $file ) {
                            if($file != '.' && $file != '..') {
                                if($i==1) {
                                    echo '<div class="carousel-item active">';
                                    $i++;
                                } else {
                                    echo '<div class="carousel-item">';
                                }
                                echo '<img class="d-block w-100" src="', $dir, '/', $file, '" alt="', $file, '"/>';
                                echo '</div>';
                            }
                        }
                    }
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselPhotos" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselPhotos" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <div class="card-body">
                <h4 class="carousel-title">The World in Black and White</h4>
                <p class="carousel-text">
                </p>
            </div>
        </div>
        <?php
            $i=1;
            $dir = 'images/photos_to_display/collage/';
            $file_display = array('jpg', 'jpeg', 'png', 'gif');
            if ( file_exists( $dir ) == false ) {
                echo 'Directory \'', $dir, '\' not found!';
            } else {
                $dir_contents = scandir( $dir );
                foreach ( $dir_contents as $file ) {
                    $classes = 'imgCollage';
                    if($i%2==0) $classes = $classes . ' imgRight';
                    if($file != '.' && $file != '..') {
                        echo '<img class="', $classes, '" src="', $dir, '/', $file, '" alt="', $file, '"/>';
                    }
                    if($i%2==0) echo '<br>';
                    $i++;
                }
            }
        ?>
    </div>

</section>

<?php
require ('footer.php');
?>