<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="backdrop"></div>
            <img src="<?php echo esc_url( get_theme_file_uri() . '/assets/images/hero-1.jpg' ) ?>"
                 class="d-block w-100 img-fluid" alt="...">
        </div>
        <div class="carousel-item">
            <div class="backdrop"></div>
            <img src="<?php echo esc_url( get_theme_file_uri() . '/assets/images/hero-2.jpg' ) ?>"
                 class="d-block w-100 img-fluid" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>