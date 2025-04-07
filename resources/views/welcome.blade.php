@extends('templates.plantilla')

@section('titulo')
 Impress3D
@endsection

@section('contenido')
<div style="position: relative; font-family: Arial, sans-serif;">
    <!-- Botones de Login y Register -->
    <div style="position: absolute; top: 20px; right: 20px;">
        <a href="/login" style="text-decoration: none; background-color: #4CAF50; color: white; padding: 10px 15px; border-radius: 5px; font-size: 0.9em; margin-right: 10px;">Login</a>
        <a href="/register" style="text-decoration: none; background-color: #2196F3; color: white; padding: 10px 15px; border-radius: 5px; font-size: 0.9em;">Register</a>
    </div>

    <!-- Contenido principal -->
    <div style="text-align: center; padding: 20px;">
        <h1 style="color: #4CAF50; font-size: 3em;">Impress3D</h1>
        <p style="font-size: 1.2em; color: #555;">
            Gestiona tus impresoras 3D de manera eficiente y sencilla. 
            Controla tus proyectos, usuarios y recursos desde un solo lugar.
        </p>
        <div style="margin-top: 30px;">
            <a href="/printers" style="text-decoration: none; background-color: #4CAF50; color: white; padding: 10px 20px; border-radius: 5px; font-size: 1em;">Gestionar Impresoras</a>
            <a href="/users" style="text-decoration: none; background-color: #2196F3; color: white; padding: 10px 20px; border-radius: 5px; font-size: 1em; margin-left: 10px;">Gestionar Usuarios</a>
        </div>
        <div style="margin-top: 50px;" class="container">
            <h2 style="color: #4CAF50; font-size: 2em;">¿Qué es Impress3D?</h2>
            <img src="https://cdn.thingiverse.com/assets/d2/b2/fd/ad/80/large_display_DSCF8391.JPG" alt="Impresora 3D" style="width: 300px; height: auto;">
        </div>
    </div>
</div>
@endsection