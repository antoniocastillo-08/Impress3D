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
            <li>
                <h2>{{ $printer->name }}</h2>
                <img src="{{ $printer->image }}" alt="{{ $printer->name }}" style="width: 200px; height: auto; border-radius: 10px;">
                <p>{{ $printer->description }}</p>
            </li>
        @endforeach
    </ul>
@endif
@endsection