
@extends('layouts.navbar')



@section('title','Lista')

@section('navbar')
    @parent
@endsection
@section('content')
<h1> @yield('h1', 'Titulo default')</h1>
    <div
        class="table-responsive"
    >
        <table
            class="table table-light"
        >
            <thead>
                <tr>
                    @yield('thead')
                </tr>
            </thead>
            <tbody>
                @yield('tbody')
            </tbody>
        </table>
    </div>

@endsection
