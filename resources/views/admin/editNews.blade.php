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


            <form class="marg" method="post" action="{{route('news.update', $news -> id)}}" enctype="multipart/form-data">
                    <h3>edit news</h3>
                 @csrf
                 <div class="mb-3">
                        <label class="form-label">{{__('messages.image')}}</label>
                        <input type="file" class="form-control"    name="photo">
                        @error('photo')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                </div>

                     <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">{{__('messages.news date')}}</label>
                        <input type="date" class="form-control"  value="{{$news -> date}}"  name="date" aria-describedby="emailHelp">
                        @error('date')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>

                     <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">{{__('messages.news name for arabic')}}</label>
                        <input type="text" class="form-control"  name="name_ar" value="{{$news -> name_ar}}" aria-describedby="emailHelp">
                        @error('name_ar')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">{{__('messages.news name for english')}}</label>
                        <input type="text" class="form-control"  value="{{$news -> name_en}}" name="name_en" aria-describedby="emailHelp">
                        @error('name_en')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">{{__('messages.details for arabic')}}</label>
                        <input type="text" class="form-control" value="{{$news -> details_ar}}" name="details_ar">
                        @error('details_ar')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">{{__('messages.details for english')}}</label>
                        <input type="text" class="form-control" value="{{$news -> details_en}}"  name="details_en">
                        @error('details_en')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">{{__('messages.save')}}</button>

                </form>







@endsection
