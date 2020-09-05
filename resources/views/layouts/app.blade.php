<html >
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }} ">
    <link rel="icon" href="https://cdn.imgbin.com/7/6/14/imgbin-atyrau-tengiz-field-tengizchevroil-business-petroleum-business-J8ZEVjkdAYZhk1gzwbptfYyaR.jpg">
    <title>App-Name @yield('title')</title>
</head>
<body>
    <div class ='wrapper'>
        @section('nav')
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
                <div class="container">
                <a class="navbar-brand" href="{{route('home')}}">
                        <img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQQA8TLYJTobnxgqvS4MIIKOMD5zzb9svmvhg&usqp=CAU" style ='width:80px; height:73px;' alt="Logo">
                    </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('movies')}}">{{__('lang.movies')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('services')}}">{{__('lang.services')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('partners')}}">{{__('lang.partners')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('staff')}}">{{__('lang.staff')}}</a>
                        </li>
                    </ul>
                </div>
                </div>
            </nav>
        @show

        <div class="container col-md-12" style="overflow:auto;">
            @yield('content')
        </div>

        @section('footer')
        <footer class="page-footer font-small special-color-dark pt-4">
            <div class="container-fluid text-center text-md-left">
              <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                  <h5 class="text-uppercase">{{__('lang.footer_main_text')}}</h5>
                <p>{{__('lang.footer_text')}}</p>
                </div>
                <hr class="clearfix w-100 d-md-none pb-3">
                <div class="col-md-3 mb-md-0 mb-3">
                  <h5 class="text-uppercase">{{__('lang.social')}}</h5>
                  <ul class="list-unstyled">
                    <li>
                      <a href="#!">{{__('Facebook')}}</a>
                    </li>
                    <li>
                      <a href="#!">{{__('Twitter')}}</a>
                    </li>
                    <li>
                      <a href="#!">{{__('Vk')}}</a>
                    </li>
                    <li>
                      <a href="#!">{{__('Linkedin')}}</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="footer-copyright text-center py-3">© 2020 {{__('lang.cop')}}:
                 <text>taskblog.loc</text>
            </div>
          </footer>
        @show
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
</body>
</html>
