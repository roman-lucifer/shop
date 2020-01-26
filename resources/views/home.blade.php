@extends('app')

@section('content')
  <div class="container mt-5 pt-5">
  </div>

  <div class="container">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://picsum.photos/1200/400?random=1" class="d-block w-100" alt="fsdf">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://picsum.photos/1200/400?random=2" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://picsum.photos/1200/400?random=3" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <div class="container mt-5">
    <div class="h3">TOP Products</div>
    <div class="row">
      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-5">
        <div class="card shadow">
          <img class="card-img-top" src="https://picsum.photos/420/300?random=2">
          <div class="card-img-overlay">Product with img</div>
          <div class="card-body">
            <h4 class="card-title">Product 1</h4>
            <p class="card-text">Some text about this product and his properties</p>
            <button class="btn btn-cyan btn-sm">Pay</button>
            <button class="btn btn-blue btn-sm">Add To Cart</button>
          </div>
          <div class="card-footer text-muted">fsdfsdf</div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-5">
        <div class="card shadow">
          <img class="card-img-top" src="https://picsum.photos/420/300?random=3">
          <div class="card-img-overlay">Product with img</div>
          <div class="card-body">
            <h4 class="card-title">Product 1</h4>
            <p class="card-text">Some text about this product and his properties</p>
            <button class="btn btn-cyan btn-sm">Pay</button>
            <button class="btn btn-blue btn-sm">Add To Cart</button>
          </div>
          <div class="card-footer text-muted">fsdfsdf</div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-5">
        <div class="card shadow">
          <img class="card-img-top" src="https://picsum.photos/420/300?random=4">
          <div class="card-img-overlay">Product with img</div>
          <div class="card-body">
            <h4 class="card-title">Product 1</h4>
            <p class="card-text">Some text about this product and his properties</p>
            <button class="btn btn-cyan btn-sm">Pay</button>
            <button class="btn btn-blue btn-sm">Add To Cart</button>
          </div>
          <div class="card-footer text-muted">fsdfsdf</div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-5">
        <div class="card shadow">
          <img class="card-img-top" src="https://picsum.photos/420/300?random=5">
          <div class="card-img-overlay">Product with img</div>
          <div class="card-body">
            <h4 class="card-title">Product 1</h4>
            <p class="card-text">Some text about this product and his properties</p>
            <button class="btn btn-cyan btn-sm">Pay</button>
            <button class="btn btn-blue btn-sm">Add To Cart</button>
          </div>
          <div class="card-footer text-muted">fsdfsdf</div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-5">
        <div class="card shadow">
          <img class="card-img-top" src="https://picsum.photos/420/300?random=6">
          <div class="card-img-overlay">Product with img</div>
          <div class="card-body">
            <h4 class="card-title">Product 1</h4>
            <p class="card-text">Some text about this product and his properties</p>
            <button class="btn btn-cyan btn-sm">Pay</button>
            <button class="btn btn-blue btn-sm">Add To Cart</button>
          </div>
          <div class="card-footer text-muted">fsdfsdf</div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-5">
        <div class="card shadow">
          <img class="card-img-top" src="https://picsum.photos/420/300?random=7">
          <div class="card-img-overlay">Product with img</div>
          <div class="card-body">
            <h4 class="card-title">Product 1</h4>
            <p class="card-text">Some text about this product and his properties</p>
            <button class="btn btn-cyan btn-sm">Pay</button>
            <button class="btn btn-blue btn-sm">Add To Cart</button>
          </div>
          <div class="card-footer text-muted">fsdfsdf</div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-5">
        <div class="card shadow">
          <img class="card-img-top" src="https://picsum.photos/420/300?random=8">
          <div class="card-img-overlay">Product with img</div>
          <div class="card-body">
            <h4 class="card-title">Product 1</h4>
            <p class="card-text">Some text about this product and his properties</p>
            <button class="btn btn-cyan btn-sm">Pay</button>
            <button class="btn btn-blue btn-sm">Add To Cart</button>
          </div>
          <div class="card-footer text-muted">fsdfsdf</div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-5">
        <div class="card shadow">
          <img class="card-img-top" src="https://picsum.photos/420/300?random=9">
          <div class="card-img-overlay">Product with img</div>
          <div class="card-body">
            <h4 class="card-title">Product 1</h4>
            <p class="card-text">Some text about this product and his properties</p>
            <button class="btn btn-cyan btn-sm">Pay</button>
            <button class="btn btn-blue btn-sm">Add To Cart</button>
          </div>
          <div class="card-footer text-muted">fsdfsdf</div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-5">
        <div class="card shadow">
          <img class="card-img-top" src="https://picsum.photos/420/300?random=10">
          <div class="card-img-overlay">Product with img</div>
          <div class="card-body">
            <h4 class="card-title">Product 1</h4>
            <p class="card-text">Some text about this product and his properties</p>
            <button class="btn btn-cyan btn-sm">Pay</button>
            <button class="btn btn-blue btn-sm">Add To Cart</button>
          </div>
          <div class="card-footer text-muted">fsdfsdf</div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-5">
        <div class="card shadow">
          <img class="card-img-top" src="https://picsum.photos/420/300?random=11">
          <div class="card-img-overlay">Product with img</div>
          <div class="card-body">
            <h4 class="card-title">Product 1</h4>
            <p class="card-text">Some text about this product and his properties</p>
            <button class="btn btn-cyan btn-sm">Pay</button>
            <button class="btn btn-blue btn-sm">Add To Cart</button>
          </div>
          <div class="card-footer text-muted">fsdfsdf</div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-5">
        <div class="card shadow">
          <img class="card-img-top" src="https://picsum.photos/420/300?random=12">
          <div class="card-img-overlay">Product with img</div>
          <div class="card-body">
            <h4 class="card-title">Product 1</h4>
            <p class="card-text">Some text about this product and his properties</p>
            <button class="btn btn-cyan btn-sm">Pay</button>
            <button class="btn btn-blue btn-sm">Add To Cart</button>
          </div>
          <div class="card-footer text-muted">fsdfsdf</div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-5">
        <div class="card shadow">
          <img class="card-img-top" src="https://picsum.photos/420/300?random=12">
          <div class="card-img-overlay">Product with img</div>
          <div class="card-body">
            <h4 class="card-title">Product 1</h4>
            <p class="card-text">Some text about this product and his properties</p>
            <button class="btn btn-cyan btn-sm">Pay</button>
            <button class="btn btn-blue btn-sm">Add To Cart</button>
          </div>
          <div class="card-footer text-muted">fsdfsdf</div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="jumbotron p-0">
      <div class="view overlay rounded-top">
        <img class="img-fluid" src="https://picsum.photos/1200/300?random=2">
        <a href="#">
          <div class="mask rgba-white-slight"></div>
        </a>

      </div>
      <div class="card-body text-center mb-3">
        <p class="card-text py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi consequatur delectus enim eum facilis, itaque laborum nostrum similique veritatis voluptate. Beatae cumque enim, est harum ipsum laboriosam quaerat quod vero?</p>
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

@endsection