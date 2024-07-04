@extends('layouts.navbar')
@section('title','Create Piloto')

@section('navbar')
    @parent
@endsection

@section('body')
<div
    class="table-responsive"
>
    <table
        class="table table-primary"
    >
        <thead>
            <tr>
                @section('thead')
                @show
            </tr>
        </thead>
        <tbody>
        </tr>
            @section('tbody')
            @show
        </tr>
        </tbody>
    </table>
</div>
    @show
