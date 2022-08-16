{{--The below code gets replaced by the following line using the 'blade' format--}}
{{--<h1><?php echo $heading; ?></h1>--}}
<h1>{{$heading}}</h1>


{{--you can use the @php and @endphp; tags to create a section of php withing your file, which can be referenced outside of said section --}}
@php
$test = 1;
@endphp

@if(count($listings) == 0)
    <p>No listings found! </p>
@endif

@foreach($listings as $listing)
<h2>
    <a href="/listings/{{$listing['id']}}">{{$listing['title']}} </a>
</h2>
<p>
    {{$listing['description']}}
</p>
@endforeach
