@extends('layout')

@section('content')
    @include('partials._navbar')
@auth()

    <div class="container">
        <div class="col-4">
            <table class="table table-striped table-hover">
                <tr>
                    <td>S001</td>
                </tr>
                <tr>
                    <td>S002</td>
                </tr>
                <tr>
                    <td>S003</td>
                </tr>
            </table>
        </div>
    </div>


@endauth
@endsection
