<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php'); ?>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style_about.css">
    <title><?php echo $settings_r['site_title'] ?> - ABOUT</title>


    <style>
        .hr {
            margin: auto;
            width: 80%;
            margin-top: 1rem;
            margin-bottom: 1rem;
            border: 0;
            border-top: 1px solid white;
        }
    </style>

</head>

<body>

    <?php require('inc/header.php'); ?>

    <div class="about-home">
        <div class="about-us">
            <h2 class="fw-bold h-font text-center">CONTACT US</h2>
            <div class="hr"></div>
            <p class="text-center mt-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore adipisci ipsa iure, modi esse quaerat. <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius facilis est repellat dignissimos eum sit?
            </p>
        </div>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                    <h3 class="mb-3">Lorem ipsum dolor sit</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sed beatae ipsum amet accusantium vitae aperiam ducimus iste. Beatae, enim quo quibusdam doloremque magni facilis odio non incidunt quos, consectetur ratione at natus laboriosam eum, nesciunt distinctio aut sapiente sit perspiciatis. Quaerat, non?
                    </p>
                </div>
                <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-1 order-1">
                    <img src="images/about/about.jpg" class="w-100">
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="rounded p-4 text-center box">
                        <img src="images/about/hotel.svg" width="70px">
                        <h4 class="mt-3">100+ DESTINATIONS</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="rounded p-4 text-center box">
                        <img src="images/about/customers.svg" width="70px">
                        <h4 class="mt-3">200+ CUSTOMERS</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="rounded p-4 text-center box">
                        <img src="images/about/rating.svg" width="70px">
                        <h4 class="mt-3">150+ REVIEWS</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="rounded p-4 text-center box">
                        <img src="images/about/staff.svg" width="70px">
                        <h4 class="mt-3">20+ STAFFS</h4>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

        <div class="container px-4">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper mb-5">
                    <?php 
                        $about_r = selectAll('team_details');
                        $path = ABOUT_IMG_PATH;
                        while($row = mysqli_fetch_assoc($about_r)){
                            echo <<<data
                                <div class="swiper-slide text-center overflow-hidden rounded">
                                    <img src="$path$row[picture]" style="width: 75%;"">
                                    <h5 class="mt-2">$row[name]</h5>
                                </div>
                            data;
                        }
                    ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <?php require('inc/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 40,
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });
    </script>

</body>

</html>