@extends('admin.templates.base')

@section('mainContent')
    <h1>Comics {{ $comic->id }}</h1>

    <table>
        {{-- <thead>
            <tr>
                <th>Campo </th>
                <th>Valore</th>
            </tr>
        </thead> --}}
        <tbody>
            @foreach ($comic->toArray() as $key)
                <tr>
                    <td><big>{{ $key }}</big></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
