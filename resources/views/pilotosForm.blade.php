@extends('layouts.navbar')



@section('title','Create Piloto')

@section('navbar')
    @parent
@endsection
@section('body')
<h1 class="mt-3">Crear Piloto</h1>
@include('components.form.input-text', ['label' => 'Nombre', 'name' => 'nombre', 'text' => 'Ingresa el nombre del piloto'])
@include('components.form.input-text', ['label' => 'Apellido Paterno', 'name' => 'Apaterno', 'text' => 'Ingresa el Apellido paterno del piloto'])
@include('components.form.input-text', ['label' => 'Apellido Materno', 'name' => 'Amaterno', 'text' => 'Ingresa el Apellido materno del piloto'])
@include('components.form.input-text', ['label' => 'CURP', 'name' => 'CURP', 'text' => 'Ingresa el CURP del piloto'])
@include('components.form.input-text', ['label' => 'RFC', 'name' => 'RFC', 'text' => 'Ingresa el RFC del piloto'])
@include('components.form.input-text', ['label' => 'Nacionalidad', 'name' => 'nacionalidad', 'text' => 'Ingresa la nacionalidad del piloto'])
@include('components.form.input-submit',['name'=> 'Crear piloto'])

@endsection

