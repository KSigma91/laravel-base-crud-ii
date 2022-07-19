@extends('admin.templates.base')

@section('mainContent')
    <main>
        {{-- <table>
            <thead>
                <th>
                    <tr>id</tr>
                    <tr>title</tr>
                    <tr>description</tr>
                    <tr>thumb</tr>
                    <tr>price</tr>
                    <tr>series</tr>
                    <tr>sale_date</tr>
                    <tr>type</tr>
                    <tr>artists</tr>
                    <tr>writers</tr>
                </th>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>{{ $comic->id }}</tr>
                    <tr>{{ $comic->title }}</tr>
                    <tr>{{ $comic->description }}</tr>
                    <tr>
                        <a href="{{ $comic->thumb }}">{{ $comic->thumb }}</a>
                    </tr>
                    <tr>{{ $comic->price }}</tr>
                    <tr>{{ $comic->series }}</tr>
                    <tr>{{ $comic->sale_date }}</tr>
                    <tr>{{ $comic->type }}</tr>
                    <tr>{{ $comic->artists }}</tr>
                    <tr>{{ $comic->writers }}</tr>
                @endforeach
            </tbody>
        </table> --}}
        <ul style="list-style-type: none"><big>
            @foreach ($comics as $comic)
                <li>
                    <h2>
                        {{ $comic->title }}
                    </h2>
                </li>
                <li>
                    <p>
                        {{ $comic->description }}
                    </p>
                </li>
                <li>
                    <img src="{{ asset($comic->thumb) }}" alt="comic_img">
                </li>
                <li>
                    <strong style="font-style: italic">
                        $ {{ $comic->price }}
                    </strong>
                </li>
                <li>
                    <h3>
                        {{ $comic->series }} - <small style="text-decoration: underline">{{ $comic->sale_date }}</small>
                    </h3>
                </li>
                <li>
                    <h4 style="font-style: italic">
                    </h4>
                </li>
                <li>
                    <h4>
                        {{ $comic->type }}
                    </h4>
                </li>
                <li>
                    <p>
                        <span style="font-style: italic; background: salmon; border-radius: 2px; padding: 1px">
                            <strong>
                                Artists:
                            </strong>
                        </span><br>
                        {{ $comic->artists }}
                    </p>
                </li>
                <li>
                    <p>
                        <span style="font-style: italic; background: lightskyblue; border-radius: 2px; padding: 1px">
                            <strong>
                                Writers:
                            </strong>
                        </span><br>
                        {{ $comic->writers }}
                    </p>
                </li><br>
            @endforeach
            </big></ul>
    </main>
@endsection
