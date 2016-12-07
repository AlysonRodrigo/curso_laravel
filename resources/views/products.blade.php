<h1>Meus produtos</h1>

<ul>
    @foreach($produtos as $produto)
        <li>{{$produto->name}}</li>
    @endforeach
</ul>