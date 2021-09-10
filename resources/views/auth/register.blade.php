<!--
=========================================================
* Soft UI Dashboard - v1.0.3
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Soft UI Dashboard by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
    <style>
        .hidden{
            display: none;
        }
    </style>
</head>

<body class="g-sidenav-show  bg-gray-100">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent mt-4">
    <div class="container">
        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="../pages/dashboards/default.html">
            Soft UI Dashboard
        </a>
        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
        </button>
        <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
            <ul class="navbar-nav navbar-nav-hover mx-auto">
                <li class="nav-item dropdown dropdown-hover mx-2">
                    <a role="button" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center " id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                        Pages
                        <img src=" ../assets/img/down-arrow-dark.svg  " alt="down-arrow" class="arrow ms-1 d-lg-block d-none">
                        <img src="../assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1 d-lg-none d-block">
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-hover mx-2">
                    <a role="button" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center " id="dropdownMenuAccount" data-bs-toggle="dropdown" aria-expanded="false">
                        Authentication
                        <img src=" ../assets/img/down-arrow-dark.svg " alt="down-arrow" class="arrow ms-1 d-lg-block d-none">
                        <img src="../assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1 d-lg-none d-block">
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-hover mx-2">
                    <a role="button" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center " id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
                        Applications
                        <img src=" ../assets/img/down-arrow-dark.svg " alt="down-arrow" class="arrow ms-1 d-lg-block d-none">
                        <img src="../assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1 d-lg-none d-block">
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-hover mx-2">
                    <a role="button" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center " id="dropdownMenuEcommerce" data-bs-toggle="dropdown" aria-expanded="false">
                        Ecommerce
                        <img src=" ../assets/img/down-arrow-dark.svg  " alt="down-arrow" class="arrow ms-1 d-lg-block d-none">
                        <img src="../assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1 d-lg-none d-block">
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-hover mx-2">
                    <a role="button" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center " id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
                        Docs
                        <img src=" ../assets/img/down-arrow-dark.svg " alt="down-arrow" class="arrow ms-1 d-lg-block d-none">
                        <img src="../assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1 d-lg-none d-block">
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav d-lg-block d-none">
                <li class="nav-item">
                    <a href="{{route('login')}}" class="btn btn-sm  bg-gradient-primary  btn-round mb-0 me-1" >Log in</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<section class="min-vh-100 mb-8">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('{{asset('/assets/img/curved-images/curved14.jpg')}}');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center mx-auto">
                    <h1 class="text-white mb-2 mt-5">Welcome!</h1>
                    <p class="text-lead text-white">Use these awesome forms to login or create new account in your project for free.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10">
            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-lg-9 col-12 mx-auto">

                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="card card-body mt-4">
                                <h6 class="mb-0">Register</h6>
                                <p class="text-sm mb-0">Create account now</p>

                                <hr class="horizontal dark my-3">

                                <div class="row">
                                    <div class="col-6">
                                        <label class="form-label">*Name</label>
                                        <div class="input-group">
                                            <input id="name" name="name" class="form-control" type="text" placeholder="Shkruani emrin" required="required" autocomplete="off" value="{{old('name')}}">
                                        </div>
                                        @error('name')
                                        <span style="color:red; ">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">*Surname</label>
                                        <div class="input-group">
                                            <input id="surname" name="surname" class="form-control" type="text" placeholder="" required="required" autocomplete="off" value="{{old('surname')}}">
                                        </div>
                                        @error('surname')
                                        <span style="color:red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label class="form-label mt-4">About</label>
                                        <div class="input-group">
                                            <textarea id="about" name="about" class="form-control" rows="5">{{old('about')}}</textarea>

                                        </div>
                                        @error('about')
                                        <span style="color:red;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <label class="form-label mt-4">*Email</label>
                                        <div class="input-group">
                                            <input id="email" name="email" class="form-control" type="email" placeholder="Shkruani emailin" value="{{old('email')}}">
                                        </div>
                                        @error('email')
                                        <span style="color:red;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label mt-4">*Username</label>
                                        <div class="input-group">
                                            <input id="industry" name="username" class="form-control" type="text" placeholder="Shkruani username" value="{{old('username')}}">
                                        </div>
                                        @error('username')
                                        <span style="color:red;">{{ $message }}</span>
                                        @enderror
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label class="form-label mt-4">*Password</label>
                                        <div class="input-group">
                                            <input id="password" name="password" class="form-control" type="password" placeholder="Shkruani fjalekalimin" value="{{old('password')}}">
                                        </div>
                                        @error('password')
                                        <span style="color:red;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label mt-4">*Password Confirmation</label>
                                        <div class="input-group">
                                            <input id="password" name="password_confirmation" class="form-control" type="password" placeholder="Ri-shkruani fjalekalimin" value="{{old('password_confirmation')}}">
                                        </div>
                                        @error('password_confirmation')
                                        <span style="color:red;">{{ $message }}</span>
                                        @enderror
                                    </div>


                                </div>
                                <div class="row cv-row">
                                    <div class="col-6">
                                        <label class="form-label mt-4">CV</label>
                                        <div class="input-group">
                                            <input id="cv" name="cv" class="form-control" type="file" placeholder="Ngarkoni CV">
                                        </div>
                                        @error('cv')
                                        <span style="color:red;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label mt-4">*Category</label>
                                        <select class="form-select" name="category_id" aria-label="Default select example">
                                            <option value = "" selected>Choose Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" {{ old('category_id') == $category->id ? 'selected' : ''}} >{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                        @if (session('category_error'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ session('category_error') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    @error('category_id')
                                    <span style="color:red;">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="row mt-2">
                                    <div class="col-6">

                                        <div class="form-group">
                                            <label class="form-label">Choose if you are a company</label>

                                            <div class="form-check form-switch ms-1">
                                                <input type="hidden" name="is_business" value="0"/>
                                                <input class="form-check-input" type="checkbox" name="is_business" {{ old('is_business') == 1 ? 'checked' : ''}} value="0"  id="businessFlexSwitchCheckDefault" onclick="notify(this)" >
                                                <label class="form-check-label" for="remoteFlexSwitchCheckDefault">Company</label>
                                            </div>
                                        </div>
                                        @error('remote')
                                        <span style="color:red;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="company-details hidden">
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="form-label mt-4">*Name</label>
                                            <div class="input-group">
                                                <input id="industry" name="business_name" class="form-control" type="text" placeholder="Shkruani emrin e biznesit" value="{{old('business_name')}}">
                                            </div>
                                            @error('business_name')
                                            <span style="color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label mt-4">Industry</label>
                                            <div class="input-group">
                                                <input id="industry" name="industry" class="form-control" type="text" placeholder="Shkruani industrine" value="{{old('industry')}}">
                                            </div>
                                            @error('industry')
                                            <span style="color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <label class="form-label mt-4">Capacity</label>
                                            <div class="input-group">
                                                <input id="capacity" name="capacity" class="form-control" type="text" placeholder="Shkruani kapacitetin" value="{{old('capacity')}}">
                                            </div>
                                            @error('capacity')
                                            <span style="color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label mt-4">Address</label>
                                            <div class="input-group">
                                                <input id="address" name="address" class="form-control" type="text" placeholder="Shkruani adresen" value="{{old('address')}}">
                                            </div>
                                            @error('address')
                                            <span style="color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="form-label mt-4">Mobile Number</label>
                                            <div class="input-group">
                                                <input id="tel" name="tel" class="form-control" type="text" placeholder="Shkruani numrin e telefonit" value="{{old('tel')}}">
                                            </div>
                                            @error('tel')
                                            <span style="color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label mt-4">Website</label>
                                            <div class="input-group">
                                                <input id="website" name="website" class="form-control" type="text" placeholder="Shkruani websiten" value="{{old('website')}}">
                                            </div>
                                            @error('website')
                                            <span style="color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                </div>





                                <div class="d-flex justify-content-end mt-4">
                                    <button type="button" name="button" class="btn btn-light m-0">Anulo</button>
                                    <button type="submit" class="btn bg-gradient-primary m-0 ms-2">Krijo shpalljen e punës</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>    </div>
        </div>
    </div>
</section>
<!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
<footer class="footer py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-4 mx-auto text-center">
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                    Company
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                    About Us
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                    Team
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                    Products
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                    Blog
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                    Pricing
                </a>
            </div>
            <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                    <span class="text-lg fab fa-dribbble"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                    <span class="text-lg fab fa-twitter"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                    <span class="text-lg fab fa-instagram"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                    <span class="text-lg fab fa-pinterest"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                    <span class="text-lg fab fa-github"></span>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-8 mx-auto text-center mt-1">
                <p class="mb-0 text-secondary">
                    Copyright © <script>
                        document.write(new Date().getFullYear())
                    </script> Soft by Creative Tim.
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
<!--   Core JS Files   -->
<script src="{{asset('/assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('/assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
<script type="text/javascript">
    const companyDetails = document.querySelector('.company-details');
    const companyButton = document.querySelector('#businessFlexSwitchCheckDefault');
    const cvRow = document.querySelector('.cv-row');
    companyButton.addEventListener('click',function(){
        if (this.checked == true){
            companyDetails.classList.remove('hidden');
            this.value = 1;//per kompani
            cvRow.classList.add('hidden');
        }
        else{
            this.value = 0;
            companyDetails.classList.add('hidden');
            cvRow.classList.remove('hidden');
        }
    });
    if (companyButton.checked){
        companyDetails.classList.remove('hidden');
        this.value = 1;//per kompani
        cvRow.classList.add('hidden');
    }
    else{
        companyDetails.classList.add('hidden');
        this.value = 0;//per kompani
        cvRow.classList.remove('hidden');
    }
</script>
</body>

</html>
