<nav class="navbar navbar-expand-lg navbar-dark bg-dark header-container">
<div class="container-fluid p-2">
    <div class="logo-img">
        <img src="<?php echo e(asset('img/avatix.png')); ?>" alt="">
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse navbar-links" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="<?php echo e(Illuminate\Support\Facades\Route::currentRouteName() == 'home' ? 'nav-link active fw-bold' : 'nav-link'); ?>" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="<?php echo e(Illuminate\Support\Facades\Route::currentRouteName() == 'history' ? 'nav-link active fw-bold' : 'nav-link'); ?>" aria-current="page" href="#">History</a>
        </li>
        <li class="nav-item">
            <a class="<?php echo e(Illuminate\Support\Facades\Route::currentRouteName() == 'purchases' ? 'nav-link active fw-bold' : 'nav-link'); ?>" aria-current="page" href="#">Purchases</a>
        </li>
        <li class="nav-item">
            <a class="<?php echo e(Illuminate\Support\Facades\Route::currentRouteName() == 'calendar' ? 'nav-link active fw-bold' : 'nav-link'); ?>" aria-current="page" href="#">Calendar</a>
        </li>
    </ul>
    <div class="profile-logo-header">
        <div class="image-profile">
            <img src="<?php echo e(asset('img/ion_person-circle-outline.png')); ?>" alt="">
        </div>
        <div class="user-name">
            <p>Nicholas</p>
        </div>
    </div>
    
</div>
</nav>
<?php /**PATH C:\WebProg\resources\views/components/navbar.blade.php ENDPATH**/ ?>