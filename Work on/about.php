<!DOCTYPE html>
<html lang="en">
    <!-- inlcude Head for page -->
    <?php include 'includes/head.php';?>
<body>
    <?php 
    include 'includes/navbar.php'; // includes the navbar

    ?>

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img/herof.png"></div>

    <div class="container-fluid tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-12 tm-text-primary">
                About Dundee District
            </h2>
        </div>
        <div class="row tm-mb-74 tm-row-1640">            
            <div class="col-lg-5 col-md-6 col-12 mb-3">
                <img src="img/about.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="col-lg-7 col-md-6 col-12">
                <div class="tm-about-img-text">
                    <p class="mb-4">
                        description here
                    </p>
                </div>                
            </div>
        </div>
        <div class="row tm-mb-50">
            <div class="col-md-6 col-12">
                <div class="tm-about-2-col">
                    <h2 class="tm-text-primary mb-4">
                        Left side of 2-Column content
                    </h2>
                    <p class="mb-4">
                        description here
                    </p>
                    <p>
                        description here
                    </p>
                </div>                
            </div> 
            <div class="col-md-6 col-12">
                <div class="tm-about-2-col">
                    <h2 class="tm-text-primary mb-4">
                        Right-side Title goes here
                    </h2>
                    <p class="mb-4">
                        description here
                    </p>
                    <p>
                        description here
                    </p>
                </div>                
            </div>     
        </div> <!-- row -->
        <div class="row tm-mb-50">
            <div class="col-md-4 col-12">
                <div class="tm-about-3-col">
                    <div class="tm-about-icon-container mb-5">
                        <i class="fas fa-desktop fa-3x tm-text-primary"></i>
                    </div>                
                    <h2 class="tm-text-primary mb-4">Three-column title one</h2>
                    <p class="mb-4">description here</p>
                    <p>description here</p>
                </div>                
            </div>
            <div class="col-md-4 col-12">
                <div class="tm-about-3-col">
                    <div class="tm-about-icon-container mb-5">
                        <i class="fas fa-mobile-alt fa-3x tm-text-primary"></i>
                    </div>                
                    <h2 class="tm-text-primary mb-4">Title two of three-column</h2>
                    <p class="tm-mb-50">description here</p>                
                    <div class="text-center">
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>                
            </div>
            <div class="col-md-4 col-12">
                <div class="tm-about-3-col">
                    <div class="tm-about-icon-container mb-5">
                        <i class="fas fa-photo-video fa-3x tm-text-primary"></i>
                    </div>                
                    <h2 class="tm-text-primary mb-4">Third Title goes here</h2>
                    <p class="mb-4">description here </p>
                    <p>description here</p>
                </div>                
            </div>
        </div>
    </div> <!-- container-fluid, tm-container-content -->

    <?php 
    include 'includes/footer.php'; // includes the footer 
    include 'includes/load.php'; // includes the load animation
    ?>
</body>
</html>