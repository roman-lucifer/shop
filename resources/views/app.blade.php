<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/mdb.css" rel="stylesheet">
    <link href="/css/all.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
@include('elements.menu')
<div class="container mt-5 pt-5"></div>
@yield('content')

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalQuickView">Launch
    modal</button>

<div class="modal fade" id="modalQuickView" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-5">
                        <!--Carousel Wrapper-->
                        <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails"
                             data-ride="carousel">
                            <!--Slides-->
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img class="d-block w-100"
                                         src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(23).jpg"
                                         alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100"
                                         src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(24).jpg"
                                         alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100"
                                         src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(25).jpg"
                                         alt="Third slide">
                                </div>
                            </div>
                            <!--/.Slides-->
                            <!--Controls-->
                            <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            <!--/.Controls-->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-thumb" data-slide-to="0" class="active">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(23).jpg" width="60">
                                </li>
                                <li data-target="#carousel-thumb" data-slide-to="1">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(24).jpg" width="60">
                                </li>
                                <li data-target="#carousel-thumb" data-slide-to="2">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(25).jpg" width="60">
                                </li>
                            </ol>
                        </div>
                        <!--/.Carousel Wrapper-->
                    </div>
                    <div class="col-lg-7">
                        <h2 class="h2-responsive product-name">
                            <strong>Product Name</strong>
                        </h2>
                        <h4 class="h4-responsive">
              <span class="green-text">
                <strong>$49</strong>
              </span>
                            <span class="grey-text">
                <small>
                  <s>$89</s>
                </small>
              </span>
                        </h4>

                        <!--Accordion wrapper-->
                        <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                            <!-- Accordion card -->
                            <div class="card">

                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingOne1">
                                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                                       aria-controls="collapseOne1">
                                        <h5 class="mb-0">
                                            Collapsible Group Item #1 <i class="fas fa-angle-down rotate-icon"></i>
                                        </h5>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                                     data-parent="#accordionEx">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                        squid. 3
                                        wolf moon officia aute,
                                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                    </div>
                                </div>

                            </div>
                            <!-- Accordion card -->

                            <!-- Accordion card -->
                            <div class="card">

                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingTwo2">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                                       aria-expanded="false" aria-controls="collapseTwo2">
                                        <h5 class="mb-0">
                                            Collapsible Group Item #2 <i class="fas fa-angle-down rotate-icon"></i>
                                        </h5>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
                                     data-parent="#accordionEx">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                        squid. 3
                                        wolf moon officia aute,
                                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                    </div>
                                </div>

                            </div>
                            <!-- Accordion card -->

                            <!-- Accordion card -->
                            <div class="card">

                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingThree3">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
                                       aria-expanded="false" aria-controls="collapseThree3">
                                        <h5 class="mb-0">
                                            Collapsible Group Item #3 <i class="fas fa-angle-down rotate-icon"></i>
                                        </h5>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
                                     data-parent="#accordionEx">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                        squid. 3
                                        wolf moon officia aute,
                                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                    </div>
                                </div>

                            </div>
                            <!-- Accordion card -->

                        </div>
                        <!-- Accordion wrapper -->


                        <!-- Add to Cart -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">

                                    <select class="md-form mdb-select colorful-select dropdown-primary">
                                        <option value="" disabled selected>Choose your option</option>
                                        <option value="1">White</option>
                                        <option value="2">Black</option>
                                        <option value="3">Pink</option>
                                    </select>
                                    <label>Select color</label>

                                </div>
                                <div class="col-md-6">

                                    <select class="md-form mdb-select colorful-select dropdown-primary">
                                        <option value="" disabled selected>Choose your option</option>
                                        <option value="1">XS</option>
                                        <option value="2">S</option>
                                        <option value="3">L</option>
                                    </select>
                                    <label>Select size</label>

                                </div>
                            </div>
                            <div class="text-center">

                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary">Add to cart
                                    <i class="fas fa-cart-plus ml-2" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.Add to Cart -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<footer class="page-footer font-small blue pt-4">
    <div class="container text-center text-md-left">
        <div class="row">
            <div class="col-sm-6 mt-md-0 mt-3">
                <h5 class="text-uppercase">fsdfdfdf</h5>
                <p>fdfsdfsdf</p>
            </div>
            <div class="col-sm-3 mt-md-0 mt-3">
                <h5 class="text-uppercase">links</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 1</a></li>
                </ul>
            </div>
            <div class="col-sm-3 mt-md-0 mt-3">
                <h5 class="text-uppercase">links</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 1</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright text-center py-3 text-white">© 2020 Copyright:
        <a href="https://mdbootstrap.com/education/bootstrap/"> R.I.Maleev </a>
    </div>
</footer>

<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/mdb.js"></script>
<script src="/js/popper.js"></script>

<!-- <script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/bootstrap.min.js"></script> -->
<script src="/js/script.js"></script>
</body>
</html>
