@extends('layout.master')

@section('css')

    <link rel="stylesheet" href="{{ asset('css/page/member.css') }}" />

@endsection

@section('scripts')
    
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="{{ asset('js/page/member.js') }}"></script>

    
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 display-table no-padding xs-padding-ten">
                    <div class="display-table-cell-vertical-middle padding-twenty-two md-padding-seven xs-no-padding-lr">
                        <div class="form">
                          <ul class="tab-group">
                            <li class="tab active"><a href="#signup">Sign Up</a></li>
                            <li class="tab"><a href="#login">Log In</a></li>
                          </ul>
                          <div class="tab-content">
                            <div id="signup">   
                              <h1>Sign Up for Free</h1>
                              <form action="/" method="post">
                              <div class="top-row">
                                <div class="field-wrap">
                                  <label>
                                    First Name<span class="req">*</span>
                                  </label>
                                  <input type="text" required autocomplete="off" />
                                </div>
                                <div class="field-wrap">
                                  <label>
                                    Last Name<span class="req">*</span>
                                  </label>
                                  <input type="text"required autocomplete="off"/>
                                </div>
                              </div>
                              <div class="field-wrap">
                                <label>
                                  Email Address<span class="req">*</span>
                                </label>
                                <input type="email"required autocomplete="off"/>
                              </div>
                              <div class="field-wrap">
                                <label>
                                  Set A Password<span class="req">*</span>
                                </label>
                                <input type="password"required autocomplete="off"/>
                              </div>
                              <button type="submit" class="button button-block"/>Get Started</button>
                              </form>
                            </div>        
                            <div id="login">   
                              <h1>Welcome Back!</h1>          
                              <form action="/" method="post">         
                                <div class="field-wrap">
                                <label>
                                  Email Address<span class="req">*</span>
                                </label>
                                <input type="email"required autocomplete="off"/>
                              </div>         
                              <div class="field-wrap">
                                <label>
                                  Password<span class="req">*</span>
                                </label>
                                <input type="password"required autocomplete="off"/>
                              </div>          
                              <p class="forgot"><a href="#">Forgot Password?</a></p>          
                              <button class="button button-block"/>Log In</button>        
                              </form>
                            </div> 
                          </div>
                      </div>
                    </div>
                </div>

        </div>
    </div>
@endsection