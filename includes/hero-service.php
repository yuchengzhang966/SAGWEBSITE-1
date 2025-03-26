<?php
// Hero Section Template for Service Pages (Primary Blue variant)
?>
<div class="hero-section bg-primary text-white py-5 mb-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <span class="badge bg-accent text-white mb-3"><?php echo $resourceType; ?></span>
                <h1 class="display-4 fw-bold mb-3"><?php echo $title; ?></h1>
                <p class="lead mb-4 text-white opacity-90"><?php echo $subtitle; ?></p>
                <div class="d-flex justify-content-center align-items-center small text-white-50">
                    <?php if ($difficulty): ?>
                    <div class="me-3">
                        <i class="bi bi-signal me-1"></i> <?php echo $difficulty; ?>
                    </div>
                    <?php endif; ?>
                    <?php if ($duration): ?>
                    <div>
                        <i class="bi bi-clock me-1"></i> <?php echo $duration; ?> hours
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div> 