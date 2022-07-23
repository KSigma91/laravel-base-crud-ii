@extends('admin.templates.base')

@section('mainContent')
    <div class="container">
        <h3 class="mt-4">
            <big>
                Comic - {{ $comic->id }}
            </big>
        </h3>

        <table class="table">
            <tbody>
                @foreach ($comic->toArray() as $key)
                    <tr>
                        <td>
                            {{ $key }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ url()->previous('front.templates.index') }}" class="btn btn-primary">Back</a>
    </div>
@endsection
