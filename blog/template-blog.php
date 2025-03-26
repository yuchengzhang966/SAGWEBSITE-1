<!-- Blog Hero Section - Light Blue Variant -->
<div class="hero-section bg-light-blue py-5 mb-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <span class="badge bg-primary text-white mb-3"><?php echo $postType; ?></span>
                <h1 class="display-4 fw-bold mb-3"><?php echo $title; ?></h1>
                <p class="lead mb-4 text-secondary"><?php echo $subtitle; ?></p>
                <div class="d-flex justify-content-center align-items-center small text-muted">
                    <div class="me-3">
                        <i class="far fa-calendar-alt me-1"></i> Last Updated: <?php echo $lastUpdated; ?>
                    </div>
                    <div class="me-3">
                        <i class="far fa-clock me-1"></i> Reading Time: <?php echo $readingTime; ?>
                    </div>
                    <div>
                        <i class="fas fa-tag me-1"></i> Category: <?php echo $category; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 