<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/eibull/public/styles/bootstrap.min.css">
    <link rel="stylesheet" href="/eibull/public/styles/fontawesome.all.min.css">
    <link rel="stylesheet" href="/eibull/public/styles/style.css">
    <link rel="stylesheet" href="/eibull/public/styles/animation.css">
    <link rel="stylesheet" href="/eibull/public/styles/slick.css">
    <title><?php echo $title; ?> | EIBULL</title>
</head>

<body>

    <section class="dashboard d-flex flex-column">
        <!-- navbar -->
        <?php include("header.php") ?>
        <main class="col d-flex overflow-auto">
            <!-- sidebar -->
            <?php 
            $active_button = "#sidebar-$page";
            include("sidebar.php") ?>
            <!-- body -->
            <section id="main-body" class="col p-3 overflow-auto">
                <?php echo $content; ?>
            </section>
        </main>
        <!-- footer -->
        <?php include("footer.php") ?>
    </section>

    <script>
        let active_button = document.querySelector("<?php echo $active_button ?>")
        if (active_button) {
            active_button.classList.add("active");
        }
    </script>

    <script src="/eibull/public/scripts/jquery.js"></script>
    <script src="/eibull/public/scripts/fontawesome.all.min.js"></script>
    <script src="/eibull/public/scripts/bootstrap.bundle.min.js"></script>
    <script src="/eibull/public/scripts/script.js"></script>
    <script src="/eibull/public/scripts/slick.js"></script>
</body>

</html>