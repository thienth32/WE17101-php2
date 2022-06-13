<table border="1">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Total Product</th>
    </thead>
    <tbody>
        @foreach ($categories as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{ count($item->products) }}</td>
            </tr>
        @endforeach
    </tbody>
</table>