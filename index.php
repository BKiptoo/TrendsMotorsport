<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TrendMotor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="boot.css">
</head>

<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand " id="brand">
                <span><i class="bi bi-car-front-fill"></i></span>
                Trends Motorsport
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end align-center" id="navmenu">
                <ul class="navbar-nav ms-auto ">
                    <li>
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about-us" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="#ModelExamples" class="nav-link">Models</a>
                    </li>
                    <li class="nav-item">
                        <a href="#Questions" class="nav-link">Questions</a>
                    </li>
                    <li class="nav-item">
                        <a href="#Contact" class="nav-link">Contact</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!--header section-->
    <header>
        <div class="masthead">
        </div>

        <section class="bg-secondary text-light p-3 p-md-5" id="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="mb-3">About TrendMotors</h2>
                        <p>
                            TrendMotors is not just another car company; we are a passionate team of automotive enthusiasts
                            dedicated to redefining your driving experience. With a rich heritage spanning decades, we have
                            consistently delivered top-quality vehicles that blend innovation, style, and performance.
                        </p>
                        <p>
                            Our commitment to excellence extends beyond our vehicles. At TrendMotors, we prioritize customer
                            satisfaction, safety, and environmental responsibility. We continuously strive to lead the industry
                            in eco-friendly technologies and practices.
                        </p>
                        <p>
                            Join us on a journey to explore the latest advancements in automotive technology and design.
                            Experience the thrill of driving with TrendMotors, where every journey is an adventure waiting to be
                            discovered.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <!-- Insert an image of TrendMotors here -->
                        <img src="nw-img/car1.jpg" alt="TrendMotors" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <!--Boxes-->
        <?php include './partials/connect.php'; ?>

        <section class="p-3 p-md-5" id="ModelExamples">
            <div class="container">
                <h3 class="text-center mb-4">Which is your dream car?</h3>
                <div class="row">

                    <?php
                    // Assuming you have established the database connection already
                    $sql = "SELECT * FROM `trendsmotorsport`";
                    $result = mysqli_query($conn, $sql);

                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $car_id = $row['car_id'];
                            $carImage = $row['car_image'];
                            $carModel = $row['car_name'];
                            $car_desc = $row['car_desc'];

                            echo '<div class="col-md-3 col-sm-6 mb-5">
                                    <div class="card card-img">
                                        <img src="' . $carImage . '" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">' . $carModel . '</h5>
                                            <p class="card-text">' . substr($car_desc, 0, 50) . '.....</p>
                                            <a href="partials/trends.php?trends_id=' . $car_id . '" class="btn btn-primary">Learn more</a>
                                        </div>
                                    </div>
                                </div>';
                        }
                    } else {
                        echo '<div class="col-12 text-center"><p>No car models found.</p></div>';
                    }
                    ?>
                </div>
            </div>
        </section>

        <br>

        <!--QUESTION ACCORDION-->

        <section id="Questions" class="p-3 p-md-5">
            <div class="container">
                <h2 class="text-center mb-4">Frequently Asked Questions</h2>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <!-- Item one -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                Where exactly are you located?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora quam,
                                aliquid veniam fugiat soluta, ipsa vel suscipit quae, itaque id quidem dolorem quas doloribus.
                                Magnam eius qui dolorum corrupti ut ad magni quis debitis? Doloribus, alias porro. Excepturi
                                voluptas dolore quidem nostrum velit pariatur quis, ab assumenda blanditiis accusamus molestias.
                            </div>
                        </div>
                    </div>
                    <!-- Item Two -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                What do I need to know?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora quam,
                                aliquid veniam fugiat soluta, ipsa vel suscipit quae, itaque id quidem dolorem quas doloribus.
                                Magnam eius qui dolorum corrupti ut ad magni quis debitis? Doloribus, alias porro. Excepturi
                                voluptas dolore quidem nostrum velit pariatur quis, ab assumenda blanditiis accusamus molestias.
                            </div>
                        </div>
                    </div>
                    <!-- Item Three -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                What are the requirements to do a successful transaction?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque odio sit
                                unde, quidem expedita quis excepturi molestiae fuga suscipit, a pariatur. Rerum quia nulla
                                officiis sit alias illo perspiciatis repellendus fuga pariatur quasi libero optio odit dolorum
                                nostrum, atque soluta vitae voluptates asperiores dolores dolorem tempora beatae nobis, voluptatum
                                fugiat.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Contact-->
        <section id="Contact">
            <div class="container-lg justify-content-center w-100">
                <div class="text-center">
                    <h2>Get in Touch</h2>
                </div>
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter your email address">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="John doe">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">What is your Question about?</label>
                        <select class="form-select" id="subject">
                            <option value="Type">Manual or Auto</option>
                            <option value="Year of manufacture">manufacture query</option>
                            <option value="Other query">Other query</option>
                        </select>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="query" class="form-control" rows="3"></textarea>
                        <label for="Query">Your query...</label>
                    </div>
                    <button type="submit" class="btn btn-primary mb-5">Submit</button>
                </form>
            </div>
        </section>

        <!--offcanvas-->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar" aria-labelledby="sidebar-label">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title " id="sidebar-label"> More choices </h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="close"></button>
            </div>
            <div class="offcanvas-body">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis voluptates sint officiis sed est enim?
                    Alias dolore veritatis itaque quaerat! Necessitatibus ullam ex nulla sunt eius doloremque reiciendis, error
                    quis?</p>
            </div>
        </div>

        <!--footer-->
        <footer class="p-3 p-md-5 bg-dark text-light text-center position-relative">
            <div class="container">
                <p class="lead">Copyright &copy; 2023 Trends Motorsport</p>
                <p>We Deliver at your Door Step</p>
                <a href="#" class="position-absolute bottom-0 end-0 p-5">
                    <i class="bi bi-arrow-up-circle h1"></i>
                </a>
            </div>
        </footer>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
