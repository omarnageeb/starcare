@extends('admin.layout.admin')

@section('title','لوحة التحكم')
@section('content')



                <div class="container">
                @if(Session::has('successAdd'))
                <div class="alert alert-primary" role="alert">
                    {{__('messages.comfirmed add offer')}}
                </div>
                @endif
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
            <form class="marg" method="post" action="{{route('solution.update', $solutions -> id)}}" enctype="multipart/form-data">
                 @csrf
                 <div class="mb-3">
                        <label class="form-label">{{__('messages.image')}}</label>
                        <input type="file" class="form-control" name="photo">
                        @error('photo')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                </div>

                <div class="mb-3">
                        <label class="form-label">{{__('messages.icon')}}</label>
                        <input type="file" class="form-control" name="icon">
                         @error('icon')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                </div>

                <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">{{__('messages.solution name for arabic')}}</label>
                        <input type="text" class="form-control" value="{{$solutions -> name_ar}}"  name="name_ar" aria-describedby="emailHelp">
                        @error('name_ar')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">{{__('messages.solution name for english')}}</label>
                        <input type="text" class="form-control" value="{{$solutions -> name_en}}" name="name_en" aria-describedby="emailHelp">
                        @error('name_en')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">{{__('messages.details for arabic')}}</label>
                        <textarea  class="form-control" value="{{$solutions -> details_ar}}" name="details_ar"></textarea>
                        @error('details_ar')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">{{__('messages.details for english')}}</label>
                        <textarea type="text" class="form-control" value="{{$solutions -> details_en}}" name="details_en"></textarea>
                        @error('details_en')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">{{__('messages.save')}}</button>

                </form>



@endsection
