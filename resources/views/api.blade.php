<h1>data list</h1>

<ul>
    @foreach ($data as $item)
    <li>{{$item['title']}}</li>
    @endforeach
</ul>
