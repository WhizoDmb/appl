@extends('layouts.table')
@section('titulo','Lista de Pilotos')
@section('h1','Pilotos Activos')



@section('thead')
@if(request('message') === 'success')
    @include('components.alerts.alert-default',[
        'class'=>'primary',
        'header'=>'Piloto eliminado con exito!',
        'content'=>'El proceso de elimado del piloto ocurrió con exito.'
    ])
@endif
    <th class="text-center">Nombre </th>
    <th class="text-center">Apellido Paterno</th>
    <th class="text-center">Apellido Materno</th>
    <th class="text-center">CURP </th>
    <th class="text-center">RFC</th>
    <th class="text-center">Nacionalidad</th>
    <th class="text-center" colspan="2">Acciones</th>
@endsection



@section('tbody')
    @foreach ($pilotos as $piloto)
        <tr>
            <td>
                <p class="text-center">
                    {{ $piloto -> Nombre; }}
                </p>
            </td>
            <td>
                <p class="text-center">
                    {{ $piloto -> Apaterno; }}
                </p>
            </td>
            <td>
                <p class="text-center">
                    {{ $piloto -> Amaterno; }}
                </p>
            </td>
            <td>
                <p class="text-center">
                    {{ $piloto -> CURP; }}
                </p>
            </td>
            <td>
                <p class="text-center">
                    {{ $piloto -> RFC; }}
                </p>
            </td>
            <td>
                <p>
                    {{ $piloto -> Nacionalidad; }}
                </p>
            </td>
            <td>
                <a href="{{ route('pilotos.updateForm', ['id' => $piloto -> id]) }}" class="btn btn-primary">Editar</a>
            </td>
            <td>
                <form action="{{  route('pilotos.delete', ['id' => $piloto -> id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    @include('components.form.input-submit',[
                        'name'=> 'Eliminar',
                        'class'=>'danger'
                        ])

                </form>
            </td>
        </tr>
    @endforeach
@endsection
