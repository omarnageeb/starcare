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
            <form class="marg" method="post" action="{{route('addnewsPost')}}" enctype="multipart/form-data">
                 @csrf
                 <div class="mb-3">
                        <label class="form-label">{{__('messages.image')}}</label>
                        <input type="file" class="form-control" name="photo">
                        @error('photo')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                </div>

                     <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">{{__('messages.news date')}}</label>
                        <input type="date" class="form-control" name="date" aria-describedby="emailHelp">
                        @error('date')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">{{__('messages.news name for arabic')}}</label>
                        <input type="text" class="form-control" name="name_ar" aria-describedby="emailHelp">
                        @error('name_ar')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">{{__('messages.news name for english')}}</label>
                        <input type="text" class="form-control" name="name_en" aria-describedby="emailHelp">
                        @error('name_en')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">{{__('messages.details for arabic')}}</label>
                        <input type="text" class="form-control" name="details_ar">
                        @error('details_ar')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">{{__('messages.details for english')}}</label>
                        <input type="text" class="form-control" name="details_en">
                        @error('details_en')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">{{__('messages.save')}}</button>

                </form>




            <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">{{__('messages.image')}}</th>
                    <th scope="col">{{__('messages.news name for english')}}</th>
                    <th scope="col">{{__('messages.news name for arabic')}}</th>
                    <th scope="col">{{__('messages.news details for english')}}</th>
                    <th scope="col">{{__('messages.news details for arabic')}}</th>
                    <th scope="col">{{__('messages.news date')}}</th>
                    <th scope="col">{{__('messages.delete')}}</th>
                    <th scope="col">{{__('messages.edit')}}</th>
                </tr>
            </thead>
            <tbody>

            @foreach($news as $addNews)
                <tr>
                    <td><img  style="width: 90px; height: 90px;" src="{{asset('images/news/'.$addNews->photo)}}"></td>
                    <td>{{$addNews -> name_en}}</td>
                    <td>{{$addNews -> name_ar}}</td>
                    <td>{{$addNews -> details_en}}</td>
                    <td>{{$addNews -> details_ar}}</td>
                    <td>{{$addNews -> date}}</td>
                     <td>
                        <a href="{{route('news.edit',$addNews -> id)}}" class="btn btn-success"> {{__('messages.edit')}}</a>
                     </td>
                     <td>
                        <a href="{{route('news.delete',$addNews -> id)}}" class="btn btn-danger"> {{__('messages.delete')}}</a>
                     </td>
                </tr>
            @endforeach



            </tbody>
        </table>


@endsection
