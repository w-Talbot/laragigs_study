@extends('layout')

@section('content')
    @include('partials._navbar')

    <div
        class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
    >
@if(count($studies) == 0)
    <p>No studies found! </p>
@endif

@foreach($studies as $study)
    <x-listing-card :study="$study" />

@endforeach

</div>

    <div class="mt-6 p-4">
        {{$studies->links()}}
    </div>
@endsection
