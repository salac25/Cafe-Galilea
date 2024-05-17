<?php
get_header();
?><div class="container  py-3">
    <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://placehold.co/600x300" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://placehold.co/600x300" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://placehold.co/600x300" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

<!-- <div class="container my-5">
    <div class="row row-cols-md-5 row-cols-2 g-3   ">
        <div class="col ">
            <div class=" d-flex flex-column shadow  p-4 h-100   rounded text-center ">
                <i class="fa-solid fa-percent  fs-5"></i>
                Discounts
            </div>
        </div>
        <div class="col">
            <div class=" d-flex flex-column shadow p-4  h-100 rounded text-center ">
                <i class="fa-solid fa-rotate-left fs-5"></i>
                Return Policy
            </div>
        </div>
        <div class="col">
            <div class="d-flex flex-column shadow p-4 h-100 rounded text-center ">
                <i class="fa-solid fa-phone fs-5"></i>
                Support 24/7
            </div>
        </div>
        <div class="col">
            <div class="d-flex  flex-column shadow p-4  h-100 rounded text-center">
                <i class="fa-solid fa-truck fs-5"></i>
                Free Delivery
            </div>
        </div>
        <div class="col">
            <div class="d-flex  flex-column shadow p-4  h-100 rounded text-center">
                <i class="fa-solid fa-shield-halved fs-5"></i>
                Secure Payment
            </div>
        </div>

    </div>
</div> -->

<!-- Shop By Category -->
<!-- <section class="container ">
    <div class=" row-cols-sm-2 row-cols-md-3 row-cols-2 row p-3 g-4  text-center fs-6 fw-lighter">
        <div class="col">
            <div class="card">
                <img src="https://placehold.co/600x400" class="card-img-top" alt="...">
                <div class="card-body">
                 
                    <p class="card-text fs-6 fw-lighter">add text here.</p>
                    <a href="#" class="btn btn-outline-primary fs-6 ">Add to Cart 1</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="https://placehold.co/600x400" class="card-img-top" alt="...">
                <div class="card-body">
                 
                    <p class="card-text">add text here.</p>
                    <a href="#" class="btn btn-outline-primary ">Add to Cart 2</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="https://placehold.co/600x400" class="card-img-top" alt="...">
                <div class="card-body">
                 
                    <p class="card-text ">add text here.</p>
                    <a href="#" class="btn btn-outline-primary ">Add to Cart 3</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="https://placehold.co/600x400" class="card-img-top" alt="...">
                <div class="card-body">
                 
                    <p class="card-text ">add text here.</p>
                    <a href="#" class="btn btn-outline-primary">Add to Cart 4</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <img src="https://placehold.co/600x400" class="card-img-top" alt="...">
                <div class="card-body">
                 
                    <p class="card-text">add text here.</p>
                    <a href="#" class="btn btn-outline-primary">Add to Cart 5</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="https://placehold.co/600x400" class="card-img-top" alt="...">
                <div class="card-body">
                 
                    <p class="card-text ">add text here.</p>
                    <a href="#" class="btn btn-outline-primary">Add to Cart 6</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row align-items-center flex-column flex-md-row">
        <div class="col">
            <img src="/wp-content/uploads/2024/05/healthy.webp" class="img-fluid" alt="...">
        </div>
        <div class="col py-5">
            <h5 class="text-success fw-bold ">About Us</h5>
            <h1 class=" fw-bolder">We Believe In Working With Accredited Farmers</h1>
            <p class="lead ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit quo et facere, itaque aspernatur quidem officia quia voluptatibus in dolore laborum alias enim deserunt repudiandae qui tempora, vitae corporis exercitationem.</p>
            <a href="#" class="btn btn-outline-success fw-bold">Learn More</a>
        </div>
    </div>
</div>
<?php
get_footer();
?>