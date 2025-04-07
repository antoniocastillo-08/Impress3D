@extends('templates.plantilla')

@section('titulo')
Lista de Impresoras
@endsection

@section('contenido')
<h1>Lista de Impresoras</h1>
@if($printers_list->isEmpty())
    <p>No hay impresoras registradas.</p>
@else
    <ul>
        @foreach($printers_list as $printer)
            <li>{{ $printer->name }}</li>
        @endforeach
    </ul>
@endif
@endsection