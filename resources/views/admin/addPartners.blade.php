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
            <form class="marg" method="post" action="{{route('partnerPost')}}" enctype="multipart/form-data">
                 @csrf
                    <div class="mb-3">
                            <label class="form-label">{{__('messages.image')}}</label>
                            <input type="file" class="form-control" name="photo">
                    </div>


                    <button type="submit" class="btn btn-primary">{{__('messages.save')}}</button>


                </form>




            <table class="table table-bordered">
                <thead>

                    <th scope="col">{{__('messages.image')}}</th>
                    <th>delete</th>
                </thead>
            <tbody>

            @foreach($partners as $addPartners)
                <tr>
                    <td><img  style="width: 90px; height: 90px;" src="{{asset('images/partners/'.$addPartners->photo)}}"></td>

                    <td>
                          <a href="{{route('partner.delete',$addPartners -> id)}}" class="btn btn-danger"> {{__('messages.delete')}}</a>
                     </td>
                </tr>
            @endforeach

            </tbody>
        </table>


@endsection
