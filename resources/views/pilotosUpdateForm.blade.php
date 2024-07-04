@extends('layouts.navbar')

<style>

</style>

@section('title','Create Piloto')

@section('navbar')
    @parent
@endsection
@section('content')
    <h1 class="mt-3">Crear Piloto</h1>
    <form action="{{ route('pilotos.update',['id' => $piloto -> id]) }}" method="POST">
        @csrf
        @method('PUT')
    @include('components.form.input-text', [
        'label' => 'Nombre',
        'name' => 'nombre',
        'text' => 'Ingresa el nombre del piloto',
        'value'=>$piloto -> Nombre
        ])
        @include('components.form.input-text', [
        'label' => 'Apellido Paterno',
        'name' => 'Apaterno',
        'text' => 'Ingresa el Apellido paterno del piloto',
        'value'=>$piloto -> Apaterno
        ])
        @include('components.form.input-text', [
        'label' => 'Apellido Materno',
        'name' => 'Amaterno',
        'text' => 'Ingresa el Apellido materno del piloto',
        'value'=>$piloto -> Amaterno
        ])
        @include('components.form.input-text', [
        'label' => 'CURP',
        'name' => 'CURP',
        'text' => 'Ingresa la CURP del piloto',
        'value'=>$piloto -> CURP
        ])
        @include('components.form.input-text', [
        'label' => 'RFC',
        'name' => 'RFC',
        'text' => 'Ingresa el RFC del piloto',
        'value'=>$piloto -> RFC
        ])

        @include('components.form.input-text', [
        'label' => 'Nacionalidad',
        'name' => 'nacionalidad',
        'text' => 'Ingresa la nacionalidad del piloto',
        'value'=>$piloto -> Nacionalidad
        ])
    @include('components.form.input-submit',[
        'name'=> 'Editar piloto'])
    </form>

@endsection

