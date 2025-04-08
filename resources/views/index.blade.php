@extends('templates.plantilla')

@section('titulo')
Lista de Impresoras
@endsection

@section('contenido')

<h1>Lista de Impresoras</h1>
@if($printers_list->isEmpty())
    <p>No hay impresoras registradas.</p>
@else
    <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
        @foreach($printers_list as $printer)
            <div style="background-color: white; border: 2px solid black; border-radius: 10px; width: 250px; text-align: center; padding: 10px; display: flex; flex-direction: column; justify-content: space-between; height: 350px;">
                <img src="{{ $printer->image }}" alt="{{ $printer->name }}" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px 10px 0 0;">
                <h2 style="margin: 10px 0; font-size: 1.2em;">{{ $printer->name }}</h2>
                
                <!-- Botón de añadir visible solo para usuarios autenticados -->
                @auth
                <a href="/add/{{ $printer->id }}" style="text-decoration: none; background-color: #4CAF50; color: white; padding: 10px 15px; border-radius: 5px; font-size: 0.9em; margin-top: 10px;">
                    Añadir
                </a>
                @endauth
            </div>
        @endforeach
    </div>
@endif
@endsection