@extends('layout')
@section('content')

  

  <div class="container-fluid">
    <div class="row min-vh-100 align-items-stretch bg-gray">



      <div class="col-lg-8 d-flex align-items-center py-6 m-auto mt-7">

        <div class="w-75 mx-auto overflow-hidden px-md-5 px-lg-3 position-relative">


          <main class="main login-main">

            <h2 class="mb-2 font-weight-bold">Login to your account</h2>
            <p class="mb-4 h6 font-weight-normal">Need a Legitquest account? <a href="signup.html">Create an account</a></p>
            <hr class="my-lg-4 my-xl-5">
            <form class="login-form" action="#">
              <div class="mb-3 mb-xl-5 mb-lg">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
              <label class="btn btn-outline-primary active w-50">
                <input type="radio" name="options" id="option1" checked=""> Indiviual
              </label>
              <label class="btn btn-outline-primary w-50">
                <input type="radio" name="options" id="option2">Corporate
              </label>
            </div>
              </div>

              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" class="form-control" id="email" placeholder="Jhon.doe@legitquest.com">
                  </div>
                </div>

                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="email">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="8 characters or more">
                    <span class="d-block text-lg-right mt-1">
                      <small><a href="#0">Forgot password?</a></small>
                    </span>
                  </div>
                </div>

                <div class="col-sm-12 mb-2">
                  <a href="./index.html" type="submit" name="submit" class="btn btn-primary w-100">Log In</a>
                </div>

              </div>
            </form>
          </main>

    
        </div>

      </div>

    </div>
  </div>

@endsection