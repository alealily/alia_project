@extends('layout\list')

@section('title', 'Ini adalah judul pada meta')
@section('content')

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Product</th>
        </tr>
    </thead>

    <tbody>
        @foreach($data as $post)
        <tr>
            <td>{{ $post["id"] }}</td>
            <td>{{ $post["product"] }}</td>
            <!-- Data Lainnya -->
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
