@extends('layout')

@section('content')
    @include('partials._navbar')
@auth()

    <div
        class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
    >
@if(count($studies) == 0)
    <p>No studies found! </p>
@endif

    <div class="container border text-center">
        <div class="container-fluid">

@foreach($studies as $study)
            <!-- Content here -->

                <div class="row">
                    <div class="col">
                        <img src="/images/diamond_logo.png" alt="">
                    </div>
                    <div class="col">
                        <a href="/studies/{{$study['id']}}">{{$study['title']}}</a>
                    </div>
                    <div class="col">
                        <p>{{$study['description']}}</p>
                    </div>
                </div>
                </a>
@endforeach
            </div>
        </div>


    <div class="mt-6 p-4">
        {{$studies->links()}}
    </div>
@endauth
@endsection
