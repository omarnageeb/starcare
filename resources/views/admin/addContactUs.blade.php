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
            <form class="marg" method="post" action="{{route('ContactUsPost')}}" enctype="multipart/form-data">
                 @csrf

                     <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">{{__('messages.address')}}</label>
                        <input  class="form-control" name="address">
                        @error('address')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">{{__('messages.phone')}}</label>
                        <input class="form-control" name="phone">
                        @error('phone')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">{{__('messages.email')}}</label>
                        <input class="form-control" name="email">
                        @error('email')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">{{__('messages.save')}}</button>
                </form>




            <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{__('messages.address')}}</th>
                    <th scope="col">{{__('messages.phone')}}</th>
                    <th scope="col">{{__('messages.email')}}</th>
                    <th scope="col">{{__('messages.edit')}}</th>
                    <th scope="col">{{__('messages.delete')}}</th>

                </tr>
            </thead>
            <tbody>

            @foreach($contactUs as $addContactUs)
                <tr>
                    <th scope="row">{{$addContactUs -> id}}</th>
                    <td>{{$addContactUs -> address}}</td>
                    <td>{{$addContactUs -> phone}}</td>
                    <td>{{$addContactUs -> email}}</td>
                     <td>
                          <a href="{{route('ContactUs.edit',$addContactUs -> id)}}" class="btn btn-success"> {{__('messages.edit')}}</a>
                     </td>
                     <td>
                          <a href="{{route('ContactUs.delete',$addContactUs -> id)}}" class="btn btn-danger"> {{__('messages.delete')}}</a>
                     </td>
                </tr>
            @endforeach



            </tbody>
        </table>


@endsection
