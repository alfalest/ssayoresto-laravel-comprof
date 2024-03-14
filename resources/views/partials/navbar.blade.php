<nav class="bg-black p-2 text-white fw-bold bg-opacity-50 rounded-bottom-3 navbar navbar-expand-md nav-light fixed-top" style="font-family: 'Poppins', sans-serif; backdrop-filter: blur(5px);">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="assets/img/resto.jpg" class="img-fluid" style="width: 50px; height: 50px;" alt="">
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="mx-auto navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item text-white mx-4">
                    <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link text-white" href="#services">Layanan</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link text-white" href="#about">Tentang</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link text-white" href="#menu">Menu</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link text-white" href="#download">Download</a>
                </li>
            </ul>
            <form class="d-flex py-3">
                <button class="btn btn-dark" type="submit">Lihat Menu</button>
            </form>
        </div>
    </div>
</nav>



<script>
    // Memilih tombol burger
    const navbarToggler = document.querySelector('.navbar-toggler');

    // Menambahkan event listener untuk menangani klik tombol burger
    navbarToggler.addEventListener('click', function () {
        // Mendapatkan elemen yang menjadi target toggle
        const target = document.querySelector(this.getAttribute('data-bs-target'));

        // Mengubah status collapse
        target.classList.toggle('show');

        // Menghilangkan focus dari tombol burger
        this.blur();
    });
</script>

<style>
    .navbar-toggler:focus {
        outline: none !important; /* Menghilangkan outline */
        border: none !important; /* Menghilangkan border */
    }
</style>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Memilih elemen navbar collapse
        const navbarCollapse = document.querySelector('.navbar-collapse');

        // Memilih elemen tombol burger
        const navbarToggler = document.querySelector('.navbar-toggler');

        // Menambahkan event listener untuk menangani klik di luar menu
        document.addEventListener('click', function(event) {
            // Memeriksa apakah yang diklik bukan bagian dari navbarCollapse atau navbarToggler
            const isClickInsideNavbar = navbarCollapse.contains(event.target);
            const isClickInsideToggler = navbarToggler.contains(event.target);

            // Jika tidak, maka tutup menu
            if (!isClickInsideNavbar && !isClickInsideToggler) {
                navbarCollapse.classList.remove('show');
                navbarToggler.setAttribute('aria-expanded', 'false');
            }
        });

        // Menambahkan event listener untuk menangani klik tombol burger
        navbarToggler.addEventListener('click', function () {
            // Mendapatkan elemen yang menjadi target toggle
            const target = document.querySelector(this.getAttribute('data-bs-target'));

            // Mengubah status collapse
            target.classList.toggle('show');

            // Memeriksa apakah target collapse ditampilkan atau tidak
            const isExpanded = target.classList.contains('show');
            navbarToggler.setAttribute('aria-expanded', isExpanded ? 'true' : 'false');
        });
    });
</script>




