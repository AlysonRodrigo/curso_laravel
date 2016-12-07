<h1>Minhas categorias</h1>

<ul>
@foreach($categs as $categ)
<li>{{$categ->name}}</li>
@endforeach
</ul>