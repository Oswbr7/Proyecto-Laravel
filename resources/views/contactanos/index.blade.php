@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1> Enviar un Correo a Padre de Familia </h1>

                <form action=" {{ route ('contactanos.store') }}" method="POST" >

                    @csrf
                
                    <label for="">
                        Nombre:
                        <input type = "text" name = "name">
                    </label>
                    <br>

                    @error('name')
                        <p><strong> {{ $message }}</strong></p>
                    @enderror

                    <label for="">
                        Correo:
                        <input type = "text" name = "correo">
                    </label>
                    <br>

                    @error('correo')
                        <p><strong> {{ $message }}</strong></p>
                    @enderror
                    
                    <label for="">
                        Mensaje:
                        <br>
                        <textarea name = "mensaje" rows = "4"></textarea>
                    </label>
                    <br>

                    @error('mensaje')
                        <p><strong> {{ $message }}</strong></p>
                    @enderror

                    <button type = "submit">Enviar Mensaje</button>

                </form>

                @if (session('info'))
                    <script>
                        alert("{{ session('info') }}");
                    </script>
                @endif
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection