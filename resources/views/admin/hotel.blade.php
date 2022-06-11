<h1>{{ $pageName }}</h1>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>image</th>
            <th>typeroom</th>
            <th>number</th>
            <th>area</th>
            <th>price</th>
        </tr>
    </thead>
    <tbody>
        @foreach($hotels as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->name}}</td>
            <td>{{$row->image}}</td>
            <td>{{$row->typeroom}}</td>
             <td> {{$row->number}}</td>
              <td>{{$row->area}}</td>
                <td>{{$row->price}}</td>
        </tr>
        @endforeach
    </tbody>
</table>