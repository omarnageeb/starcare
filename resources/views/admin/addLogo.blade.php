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
            <form class="marg" method="post" action="{{route('logoPost')}}" enctype="multipart/form-data">
                 @csrf
                    <div class="mb-3">
                            <label class="form-label">{{__('messages.logo')}}</label>
                            <input type="file" class="form-control" name="photo">
                    </div>


                    <button type="submit" class="btn btn-primary">{{__('messages.save')}}</button>


                </form>




            <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">{{__('messages.image')}}</th>
                    <th scope="col">{{__('messages.delete')}}</th>
                </tr>
            </thead>
            <tbody>

            @foreach($logo as $addlogo)
                <tr>
                    <td><img  style="width: 90px; height: 90px;" src="{{asset('images/logo/'.$addlogo->photo)}}"></td>

                     <td>
                          <a href="{{route('logo.delete',$addlogo -> id)}}" class="btn btn-danger"> {{__('messages.delete')}}</a>
                     </td>
                </tr>
            @endforeach



            </tbody>
        </table>


@endsection
