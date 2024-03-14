<div class="container-fluid bg-black pb-5" id="menu"
    style="background-image: url('assets/img/dw.svg'); background-repeat:no-repeat; background-attachment:fixed;">
    <div class="row">
        <div class="col-12">
            <h2 style="font-family: 'Poppins', sans-serif;" class="text-center text-white mt-5 display-1 mb-5">Makanan
                Enak yang kita jual nih</h2>
        </div>
        <div class="col-12">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card text-bg-dark">
                            <div class="dark-overlay">
                                <img src="/assets/img/banner.png" class="card-img" alt="...">
                            </div>
                            <div class="card-img-overlay">
                                <div class="fixed-bottom d-flex justify-content-between p-2">
                                    <div class="d-flex flex-column ">
                                        <h5 class="card-title">Ayam ayam</h5>
                                        <p class="card-text">wah gilaseh gays</p>
                                    </div>
                                    <div> <button type="button" class="rounded-5 btn btn-danger"
                                            style="background-color: #C72926">Read More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card text-bg-dark">
                            <div class="dark-overlay">
                                <img src="/assets/img/banner.png" class="card-img" alt="...">
                            </div>
                            <div class="card-img-overlay">
                                <div class="fixed-bottom d-flex justify-content-between p-2">
                                    <div class="d-flex flex-column ">
                                        <h5 class="card-title">Ayam ayam</h5>
                                        <p class="card-text">wah gilaseh gays</p>
                                    </div>
                                    <div> <button type="button" class="rounded-5 btn btn-danger"
                                            style="background-color: #C72926">Read More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card text-bg-dark">
                            <div class="dark-overlay">
                                <img src="/assets/img/banner.png" class="card-img" alt="...">
                            </div>
                            <div class="card-img-overlay">
                                <div class="fixed-bottom d-flex justify-content-between p-2">
                                    <div class="d-flex flex-column ">
                                        <h5 class="card-title">Ayam ayam</h5>
                                        <p class="card-text">wah gilaseh gays</p>
                                    </div>
                                    <div> <button type="button" class="rounded-5 btn btn-danger"
                                            style="background-color: #C72926">Read More</button>
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


<script>
    var swiper = new Swiper(".mySwiper", {
        // slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            // Saat lebar layar kurang dari atau sama dengan 576px
            576: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            // Saat lebar layar kurang dari atau sama dengan 768px
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            // Saat lebar layar kurang dari atau sama dengan 992px
            992: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            // Saat lebar layar lebih dari 992px
            1200: {
                slidesPerView: 3,
                spaceBetween: 40,
            }
        }
    });
</script>

<style>
    .dark-overlay {
        position: relative;
        width: 100%;
    }

    .dark-overlay::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.80));
        /* Gradasi transparan */
    }
</style>
