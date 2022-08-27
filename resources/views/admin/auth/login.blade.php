@extends('admin.layout.login')
@section('title','الدخول')
@section('content')
<section class="login">

       <div class="loginForm">
         <!--
         <div class="alert alert-danger" role="alert">
           كلمة المرور غير صحيحة
         </div>
       -->
         <div class="logoSec">
           <img src="{{asset('images/logo/'.$logo[0]->photo)}}" alt="">
       </div>
           <h6>تسجيل الدخول</h6>
           <form class="form-horizontal form-simple" action="{{route('admin.login')}}" method="post"
                                  novalidate>
                                @csrf
                                <fieldset class="form-group position-relative has-icon-left mb-0">
                                    <input type="text" name="email" class="form-control form-control-lg input-lg"
                                           value="{{old('email')}}" id="email" placeholder="أدخل البريد الالكتروني ">
                                    <div class="form-control-position">
                                        <i class="ft-user"></i>
                                    </div>


                                </fieldset>
                                <fieldset class="form-group position-relative has-icon-left">
                                    <input type="password" name="password" class="form-control form-control-lg input-lg"
                                           id="user-password"
                                           placeholder="أدخل كلمة المرور">
                                    <div class="form-control-position">
                                        <i class="la la-key"></i>
                                    </div>

                                </fieldset>
                                <div class="form-group row">
                                    <div class="col-md-6 col-12 text-center text-md-left">
                                        <fieldset>
                                            <input type="checkbox" name="remember_me" id="remember-me"
                                                   class="chk-remember">
                                            <label for="remember-me">تذكر دخولي</label>
                                        </fieldset>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i>
                                    دخول
                                </button>
                            </form>
          <p class="qucAcc">لايوجد لديك حساب <a href="#">سجل الان</a></p>
       </div><!--logoForm-->
     </section>
@endsection
