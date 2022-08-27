@extends('admin.layout.admin')

@section('title','لوحة التحكم')
@section('content')

                @if(Session::has('successAdd'))
                <div class="alert alert-primary" role="alert">
                    {{__('messages.comfirmed add news')}}
                </div>
                @endif

                <div class="container">

<!--
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
                @endif


                @if(Session::has('error'))
                <div class="alert alert-danger">
                   {{Session::get('error')}}
                </div>
                @endif

-->
            <form class="marg" method="post" action="{{route('ContactUs.update', $contactUs -> id)}}"  enctype="multipart/form-data">
                 @csrf

                     <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">{{__('messages.address')}}</label>
                        <input  class="form-control" value="{{$contactUs -> address}}" name="address">
                        @error('address')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">{{__('messages.phone')}}</label>
                        <input class="form-control" value="{{$contactUs -> phone}}" name="phone">
                        @error('phone')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">{{__('messages.email')}}</label>
                        <input class="form-control" value="{{$contactUs -> email}}" name="email">
                        @error('email')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">{{__('messages.save')}}</button>
                </form>






@endsection
