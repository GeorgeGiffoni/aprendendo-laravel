<h1>Loop Foreach arrays associativos</h1>

@foreach ( $produtos as $p)
    <p>{{ $p['id'] }} : {{ $p['nome'] }}</p>
@endforeach