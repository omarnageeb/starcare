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
            <form class="marg" method="post" action="{{route('addSolutionsPost')}}" enctype="multipart/form-data">
                 @csrf
                 <div class="mb-3">
                        <label class="form-label">{{__('messages.image')}}</label>
                        <input type="file" class="form-control" name="photo">
                </div>

                <div class="mb-3">
                        <label class="form-label">{{__('messages.icon')}}</label>
                        <input type="file" class="form-control" name="icon">
                </div>

                <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">{{__('messages.solution name for arabic')}}</label>
                        <input type="text" class="form-control" name="name_ar" aria-describedby="emailHelp">
                        @error('name_ar')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">{{__('messages.solution name for english')}}</label>
                        <input type="text" class="form-control" name="name_en" aria-describedby="emailHelp">
                        @error('name_en')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">{{__('messages.details for arabic')}}</label>
                        <textarea  class="form-control" name="details_ar"></textarea>
                        @error('details_ar')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">{{__('messages.details for english')}}</label>
                        <textarea type="text" class="form-control" name="details_en"></textarea>
                        @error('details_en')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">{{__('messages.save')}}</button>

                </form>




            <table class="table table-responsive table-bordered">
            <thead>
                <tr>
                    <th scope="col">{{__('messages.image')}}</th>
                    <th scope="col">{{__('messages.icon')}}</th>
                    <th scope="col">{{__('messages.solution name for english')}}</th>
                    <th scope="col">{{__('messages.solution name for arabic')}}</th>
                    <th scope="col">{{__('messages.details for english')}}</th>
                    <th scope="col">{{__('messages.details for arabic')}}</th>
                    <th scope="col">{{__('messages.edit')}}</th>
                    <th scope="col">{{__('messages.delete')}}</th>
                </tr>
            </thead>
            <tbody>

            @foreach($solutions as $addSolutions)
                <tr>
                    <td><img  style="width: 90px; height: 90px;" src="{{asset('images/solutions/'.$addSolutions->photo)}}"></td>
                    <td><img  style="width: 90px; height: 90px;" src="{{asset('images/solutions/'.$addSolutions->icon)}}"></td>
                    <td>{{$addSolutions -> name_en}}</td>
                    <td>{{$addSolutions -> name_ar}}</td>
                    <td>{{$addSolutions -> details_en}}</td>
                    <td>{{$addSolutions -> details_ar}}</td>

                    <td>
                          <a href="{{route('solution.edit',$addSolutions -> id)}}" class="btn btn-success"> {{__('messages.edit')}}</a>
                     </td>
                    <td>
                        <a href="{{route('solution.delete',$addSolutions -> id)}}" class="btn btn-danger"> {{__('messages.delete')}}</a>
                     </td>
                </tr>
            @endforeach



            </tbody>
        </table>


@endsection
