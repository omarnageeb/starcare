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
            <form class="marg" method="post" action="{{route('aboutUsPost')}}" enctype="multipart/form-data">
                 @csrf
                    <div class="mb-3">
                            <label class="form-label">{{__('messages.image')}}</label>
                            <input type="file" class="form-control" name="photo">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">{{__('messages.title for arabic')}}</label>
                        <input type="text" class="form-control" name="title_ar">
                        @error('title_ar')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">{{__('messages.title for english')}}</label>
                        <input type="text" class="form-control" name="title_en">
                        @error('title_en')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">{{__('messages.description for arabic')}}</label>
                        <textarea class="form-control" name="description_ar"></textarea>
                        @error('description_ar')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">{{__('messages.description for english')}}</label>
                        <textarea class="form-control" name="description_en"></textarea>
                        @error('description_en')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">{{__('messages.save')}}</button>


                </form>




            <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">{{__('messages.image')}}</th>
                    <th scope="col">{{__('messages.title for english')}}</th>
                    <th scope="col">{{__('messages.title for arabic')}}</th>
                    <th scope="col">{{__('messages.description for english')}}</th>
                    <th scope="col">{{__('messages.description for arabic')}}</th>
                    <th scope="col">{{__('messages.delete')}}</th>
                    <th scope="col">{{__('messages.edit')}}</th>

                </tr>
            </thead>
            <tbody>

            @foreach($aboutUs as $addAboutUs)
                <tr>
                    <td><img  style="width: 90px; height: 90px;" src="{{asset('images/AboutUs/'.$addAboutUs->photo)}}"></td>
                    <td>{{$addAboutUs -> title_en}}</td>
                    <td>{{$addAboutUs -> title_ar}}</td>
                    <td>{{$addAboutUs -> description_en}}</td>
                    <td>{{$addAboutUs -> description_ar}}</td>


                     <td>
                        <a href="{{route('aboutUs.edit',$addAboutUs -> id)}}" class="btn btn-success"> {{__('messages.edit')}}</a>
                     </td>
                     <td>
                          <a href="{{route('aboutUs.delete',$addAboutUs -> id)}}" class="btn btn-danger"> {{__('messages.delete')}}</a>
                     </td>
                </tr>
            @endforeach



            </tbody>
        </table>


@endsection
