<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>

<?php if (isset($component)) { $__componentOriginal08d9d46900ea68d5dc06d8728734a2fd47ca153c = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Navbar::class, []); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal08d9d46900ea68d5dc06d8728734a2fd47ca153c)): ?>
<?php $component = $__componentOriginal08d9d46900ea68d5dc06d8728734a2fd47ca153c; ?>
<?php unset($__componentOriginal08d9d46900ea68d5dc06d8728734a2fd47ca153c); ?>
<?php endif; ?>
<body class="body-template">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active custom-size-carousel">
                <img src="<?php echo e(asset('img/Blackpink.png')); ?>" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item custom-size-carousel">
                <img src="<?php echo e(asset('img/Gopay.png')); ?>" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item custom-size-carousel">
                <img src="<?php echo e(asset('img/Seventeen.png')); ?>" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item custom-size-carousel">
                <img src="<?php echo e(asset('img/Coldplay.png')); ?>" class="d-block w-100" alt="...">
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="categories-box">
        <nav class="nav nav-pills nav-justified navbar-categories">
            <a class="<?php echo e(Illuminate\Support\Facades\Route::currentRouteName() == 'home' ? 'nav-link active active-box' : 'nav-link'); ?>" aria-current="page" href="#">All</a>
            <a class="<?php echo e(Illuminate\Support\Facades\Route::currentRouteName() == 'kpop' ? 'nav-link active active-box' : 'nav-link'); ?>" href="#">Kpop</a>
            <a class="<?php echo e(Illuminate\Support\Facades\Route::currentRouteName() == 'festMusic' ? 'nav-link active active-box' : 'nav-link'); ?>" href="#">Festival Music</a>
            <a class="<?php echo e(Illuminate\Support\Facades\Route::currentRouteName() == 'solo' ? 'nav-link active active-box' : 'nav-link'); ?>" href="#">Solo</a>
            <a class="<?php echo e(Illuminate\Support\Facades\Route::currentRouteName() == 'meet' ? 'nav-link active active-box' : 'nav-link'); ?>" href="#">Meet&Greet</a>
            <a class="<?php echo e(Illuminate\Support\Facades\Route::currentRouteName() == 'pop' ? 'nav-link active active-box' : 'nav-link'); ?>" href="#">Pop</a>
        </nav>
    </div>
    <div class="container">
        <div class="row row-cols-4">
          <div class="col custom-col1">
            <div class="calendar">
                <div class="month"><a href="#" class="nav"><i class="fas fa-angle-left"></i></a><div>June <span class="year">2023</span></div><a href="#" class="nav"><i class="fas fa-angle-right"></i></a></div>
                <div class="days">
                  <span>Mon</span>
                  <span>Tue</span>
                  <span>Wed</span>
                  <span>Thu</span>
                  <span>Fri</span>
                  <span>Sat</span>
                  <span>Sun</span>
                </div>
                <div class="dates">
                    <button class="button-calendar">
                      <time>1</time>
                    </button>
                    <button class="button-calendar">
                      <time>2</time>
                    </button>
                    <button class="button-calendar">
                      <time>3</time>
                    </button>
                    <button class="button-calendar">
                      <time>4</time>
                    </button>
                    <button class="button-calendar">
                      <time>5</time>
                    </button>
                    <button class="button-calendar">
                      <time>6</time>
                    </button>
                    <button class="button-calendar">
                      <time>7</time>
                    </button>
                    <button class="button-calendar">
                      <time>8</time>
                    </button>
                    <button class="button-calendar">
                      <time>9</time>
                    </button>
                    <button class="button-calendar">
                      <time>10</time>
                    </button>
                    <button class="button-calendar">
                      <time>11</time>
                    </button>
                    <button class="button-calendar">
                      <time>12</time>
                    </button>
                    <button class="button-calendar">
                      <time>13</time>
                    </button>
                    <button class="button-calendar">
                      <time>14</time>
                    </button>
                    <button class="button-calendar">
                      <time>15</time>
                    </button>
                    <button class="button-calendar">
                      <time>16</time>
                    </button>
                    <button class="button-calendar">
                      <time>17</time>
                    </button>
                    <button class="today">
                      <time>18</time>
                    </button>
                    <button class="button-calendar">
                      <time>19</time>
                    </button>
                    <button class="button-calendar">
                      <time>20</time>
                    </button>
                    <button class="button-calendar">
                      <time>21</time>
                    </button>
                    <button class="button-calendar">
                      <time>22</time>
                    </button>
                    <button class="button-calendar">
                      <time>23</time>
                    </button>
                    <button class="button-calendar">
                      <time>24</time>
                    </button>
                    <button class="button-calendar">
                      <time>25</time>
                    </button>
                    <button class="button-calendar">
                      <time>26</time>
                    </button>
                    <button class="button-calendar">
                      <time>27</time>
                    </button>
                    <button class="button-calendar">
                      <time>28</time>
                    </button>
                    <button class="button-calendar">
                      <time>29</time>
                    </button>
                    <button class="button-calendar">
                      <time>30</time>
                    </button>
                    <button class="button-calendar">
                      <time>31</time>
                    </button>
                </div>
              </div>
          </div>
          <div class="col custom-col2">
            <nav class="navbar navbar-light bg-light search-box">
                <div class="container-fluid container-box">
                  <form class="d-flex container-box">
                    <div class="icon-search">
                        <img src="<?php echo e(asset('img/icon-search.png')); ?>" alt="">
                    </div>
                    <input class="form-control me-2 ps-9" type="search" placeholder="Search" aria-label="Search">
                  </form>
                </div>
              </nav>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
                <?php echo $__env->yieldContent('categories'); ?>
          </div>
          
          <div class="col custom-col3">
            <div class="box-filter">
                <h3>Filter</h3>
                <a href="">Reset</a>
                <div class="filter-section">
                    <div class="price-range">
                        <h5>Price Range</h5>
                        <div class="range-line">
                            
                            <div class="price-range-slider">

                                <p class="range-value">
                                  <input type="text" id="amount" readonly>
                                </p>
                                <div id="slider-range" class="range-bar"></div>

                              </div>
                        </div>
                        <p>Rp. 250.000</p>
                    </div>

                </div>
            </div>
          </div>
        </div>
      </div>

</body>

<?php if (isset($component)) { $__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Footer::class, []); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf)): ?>
<?php $component = $__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf; ?>
<?php unset($__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\WebProg\resources\views/home.blade.php ENDPATH**/ ?>