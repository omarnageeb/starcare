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
            <form class="marg" method="post" action="{{route('aboutClient.update', $aboutClient -> id)}}" enctype="multipart/form-data">
                 @csrf
                    <div class="mb-3">
                        <label class="form-label">{{__('messages.image')}}</label>
                        <input type="file" class="form-control" name="photo">
                         @error('photo')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">{{__('messages.title for arabic')}}</label>
                        <input type="text" class="form-control" value="{{$aboutClient -> title_ar}}" name="title_ar">
                        @error('title_ar')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">{{__('messages.title for english')}}</label>
                        <input type="text" class="form-control" value="{{$aboutClient -> title_en}}" name="title_en">
                        @error('title_en')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">{{__('messages.description for arabic')}}</label>
                        <textarea class="form-control" value="{{$aboutClient -> details_ar}}" name="details_ar"></textarea>
                        @error('details_ar')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">{{__('messages.description for english')}}</label>
                        <textarea class="form-control" value="{{$aboutClient -> details_en}}" name="details_en"></textarea>
                        @error('details_en')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">{{__('messages.save')}}</button>


                </form>







@endsection
