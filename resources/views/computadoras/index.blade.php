@forelse($computadoras as $computadora)
    Computadora: <strong>{{ $computadora->marca }}
    {{ $computadora->modelo }}</strong>
    <br>
    Descripción: <strong>{{ $computadora->descripcion }}</strong>
    {{ $computadora->tipo }}
    {{ $computadora->precioDeVenta }}
    <br><br>
@empty
    <h3>No hay datos en la base de datos</h3>
@endforelse