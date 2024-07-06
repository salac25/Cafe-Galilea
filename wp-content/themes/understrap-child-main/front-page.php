<?php
get_header();
?><div class="container  py-3">
    <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/wp-content/uploads/2024/06/Home-Banner.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/wp-content/uploads/2024/06/Home-Banner02.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/wp-content/uploads/2024/06/Home-Banner03-768x322-1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/wp-content/uploads/2024/06/Home-Banner04.png" class="d-block w-100" alt="...">
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

<div class="container my-5 text-primary">
    <div class="row row-cols-md-5 row-cols-2 g-3 d-flex flex-row   ">
        <div class="col ">
            <div class=" d-flex flex-column shadow  p-4 h-100   rounded text-center">
                <i class="fa-solid fa-percent fs-5 mb-2"></i>
                Discounts
            </div>
        </div>
        <div class="col">
            <div class=" d-flex flex-column shadow p-4 h-100 rounded text-center ">
                <i class="fa-solid fa-rotate-left fs-5 mb-2"></i>
                Return Policy
            </div>
        </div>
        <div class="col">
            <div class="d-flex flex-column shadow p-4 h-100 rounded text-center ">
                <i class="fa-solid fa-phone fs-5 mb-2"></i>
                Support 24/7
            </div>
        </div>
        <div class="col">
            <div class="d-flex  flex-column shadow p-4  h-100 rounded text-center">
                <i class="fa-solid fa-truck fs-5 pb-2"></i>
                Free Delivery
            </div>
        </div>
        <div class="col">
            <div class="d-flex  flex-column shadow p-4  h-100 rounded text-center">
                <i class="fa-solid fa-shield-halved fs-5 mb-2"></i>
                Secure Payment
            </div>
        </div>

    </div>
</div>


<!-- Main Menu -->
<section class="container">
    <div class="d-flex justify-content-center align-items-center flex-column">
        <h2 class="text-center">Menu</h2>
        <p class="w-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, ea!</p>
    </div>

    <div class="py-5">
        <?php echo do_shortcode('[products columns=4 limit=8]') ?>
    </div>

</section>
<!---about us section ---->
<div class="container my-3">
    <div class="row align-items-center flex-column flex-md-row gx-5">
        <div class="col">
            <img src="/wp-content/uploads/2024/06/crew-cg.webp" class="img-fluid" alt="...">
        </div>
        <div class="col py-5">
            <h2 class="text-primary fw-bold ">About Us</h2>

            <p>Simple and classy -these are two words that accurately
                describe Café Galilea in its current state. But back in April 2015,
                when it first opened under the supervision of Jesus P. Perez,
                it was a humble cafe that catered to the hotel guests of Galilee Wonderland.</p>

            ​

            <p> If there is one thing that hadn't changed since its relocation and reopening on April 4,
                2016 though, that would be our dedication to providing top-notch hospitality paired with
                the finest aroma of our premium coffee beans and our delectable dining options to every
                customer who steps foot inside the café. Offering a unique dining experience with a heart
                and passion reflective of our sole purpose of bringing the best customer service to the café scene.
                it remains to be one of the most affordable, accessible, and appetizing cafés in the Bulacan area.</p>

            <p>Tel: 0925 716 3323 | Email: cafegalilea@yahoo.com</p>
            <a href="#" class="btn btn-outline-primary fw-bold">Learn More</a>
        </div>
    </div>
</div>

<!------------------------------ achievement section --------------------------------->
<div class="container">
    <div class=" row d-flex flex-row justify-content-around bg-secondary
     row-cols-sm-2 row-cols-md-2 row-cols-lg-4 row-cols-2 gap-0 p-2 ">
        <div class="col">
            <div class="d-flex align-items-center  justify-content-center gap-3">
                <i class="fa-solid fa-users text-primary fa-3x"></i>
                <div>
                    <h2 class="text-primary m-0">1800+</h2>
                    <small class=" text-primary">Satisfied Clients</small>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="d-flex align-items-center  justify-content-center  gap-3">
                <i class="fa-solid fa-hands-holding text-primary fa-3x"></i>
                <div>
                    <h2 class=" text-primary m-0 ">127+</h2>
                    <small class=" text-primary"> Active Products</small>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="d-flex align-items-center  justify-content-center  gap-3">
                <i class="fa-solid fa-leaf text-primary fa-3x"></i>
                <div>
                    <h2 class=" text-primary m-0 ">20+</h2>
                    <small class=" text-primary">Food Categories</small>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="d-flex align-items-center  justify-content-center gap-4">
                <i class="fa-solid fa-award text-primary fa-4x"></i>
                <div>
                    <h2 class="text-primary m-0">1800+</h2>
                    <small class=" text-primary">Award Winning</small>
                </div>
            </div>
        </div>
    </div>
</div>
<!-------------------------- Review Section --------------------->
<div class="container my-5  bg-secondary">
    <?php echo do_shortcode('[trustindex no-registration=google]'); ?>
</div>
<?php
get_footer();
?>