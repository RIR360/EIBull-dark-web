<?php

set_include_path("./views/")

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/styles/bootstrap.min.css">
    <link rel="stylesheet" href="./public/styles/fontawesome.all.min.css">
    <link rel="stylesheet" href="./public/styles/style.css">
    <link rel="stylesheet" href="./public/styles/animation.css">
    <link rel="stylesheet" href="./public/styles/slick.css">
    <title>EIBULL</title>
</head>

<body>

    <section class="dashboard d-flex flex-column">
        <!-- navbar -->
        <?php include("header.php") ?>
        <main class="col d-flex overflow-auto">
            <!-- sidebar -->
            <?php 
            $active_button = "#sidebar-dashboard";
            include("sidebar.php") ?>
            <!-- body -->
            <section id="main-body" class="col p-3 overflow-auto">

                <!-- breadcrumb -->
                <?php
                $current_page = "Home";
                include("breadcrumb.php") ?>

                <h2 class="fw-bold text-dark border-bottom mb-3">Welcome to EIBull!</h2>

                <div class="d-flex flex-column flex-md-row gap-3 justify-content-between mb-4">
                    <div class="col card border-0 bg-white p-3 text-center">
                        <h3 class="fw-bold display-5 text-primary">543</h3>
                        <div class="mb-3">
                            <i class="fa fa-bug"></i>
                            Threats Found
                        </div>
                        <div>
                            <button class="btn btn-sm btn-primary rounded-pill px-4">Read More</button>
                        </div>
                    </div>
                    <div class="col card border-0 bg-white p-3 text-center">
                        <h3 class="fw-bold display-5 text-primary">11.5 M</h3>
                        <div class="mb-3">
                            <i class="fa fa-bomb"></i>
                            Data Breach
                        </div>
                        <div>
                            <button class="btn btn-sm btn-primary rounded-pill px-4">Read More</button>
                        </div>
                    </div>
                    <div class="col card border-0 bg-white p-3 text-center">
                        <h3 class="fw-bold display-5 text-primary">400</h3>
                        <div class="mb-3">
                            <i class="fa fa-skull"></i>
                            Malware
                        </div>
                        <div>
                            <button class="btn btn-sm btn-primary rounded-pill px-4">Read More</button>
                        </div>
                    </div>
                    <div class="col card border-0 bg-white p-3 text-center">
                        <h3 class="fw-bold display-5 text-primary">35</h3>
                        <div class="mb-3">
                            <i class="fa fa-dollar"></i>
                            Ransomeware
                        </div>
                        <div>
                            <button class="btn btn-sm btn-primary rounded-pill px-4">Read More</button>
                        </div>
                    </div>
                </div>

                <h4 class="fw-bold text-dark border-bottom mb-3">Graph</h4>

                <div class="mb-4 d-flex gap-5 align-items-end px-3 pt-3 border-bottom border-2 border-primary"
                    style="height: 200px;">
                    <div class="col bg-success rounded" style="height: 100%;"></div>
                    <div class="col bg-warning rounded" style="height: 90%;"></div>
                    <div class="col bg-danger rounded" style="height: 10%;"></div>
                    <div class="col bg-info rounded" style="height: 30%;"></div>
                    <div class="col bg-primary rounded" style="height: 50%;"></div>
                    <div class="col bg-success rounded" style="height: 90%;"></div>
                    <div class="col bg-danger rounded" style="height: 10%;"></div>
                    <div class="col bg-warning rounded" style="height: 30%;"></div>
                </div>

                <h4 class="fw-bold text-dark border-bottom mb-3">More Information</h4>
                <div class="d-flex flex-column flex-lg-row gap-4">
                    <p>
                        <span class="fs-3">Lorem</span> ipsum dolor sit, amet consectetur adipisicing elit. Et amet
                        labore delectus laboriosam,
                        tenetur ullam veniam eaque, rerum provident accusamus est voluptate quasi accusantium dolorem
                        illum sunt cupiditate quisquam id?
                    </p>
                    <p>
                        <span class="fs-3">Lorem</span> ipsum dolor sit, amet consectetur adipisicing elit. Et amet
                        labore delectus laboriosam,
                        tenetur ullam veniam eaque, rerum provident accusamus est voluptate quasi accusantium dolorem
                        illum sunt cupiditate quisquam id?
                    </p>
                    <p>
                        <span class="fs-3">Lorem</span> ipsum dolor sit, amet consectetur adipisicing elit. Et amet
                        labore delectus laboriosam,
                        tenetur ullam veniam eaque, rerum provident accusamus est voluptate quasi accusantium dolorem
                        illum sunt cupiditate quisquam id?
                    </p>
                </div>
            </section>
        </main>
        <!-- footer -->
        <?php include("footer.php") ?>
    </section>

    <script src="./public/scripts/jquery.js"></script>
    <script src="./public/scripts/fontawesome.all.min.js"></script>
    <script src="./public/scripts/bootstrap.bundle.min.js"></script>
    <script src="./public/scripts/script.js"></script>
    <script src="./public/scripts/slick.js"></script>
</body>

</html>