@extends('layout')

@section('content')
    @include('partials._navbar')
@auth()


    <div class="container">
        <div class="col-4">
            <table class="table table-striped table-hover">
                @foreach($sites as $site)
                <tr>
                    <td>
                        <a href="#">{{$site['site_name']}}</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>


@endauth
@endsection
