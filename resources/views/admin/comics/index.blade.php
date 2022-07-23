@extends('admin.templates.base')

@section('mainContent')
    <main>
        <table class="table table-light table-striped p-3">
            <thead class="table-light">
                <tr style="font-style: italic; color: #464646">
                    <th scope="col"></th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col"></th>
                    <th scope="col">Price</th>
                    <th scope="col">Series</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">
                            <small>
                                {{ $comic->id }}
                            </small>
                        </th>
                        <td>
                            <big style="font-style: italic; color: #003f5e">
                                {{ $comic->title }}
                            </big>
                        </td>
                        <td>
                            {{ $comic->description }}
                        </td>
                        <td>
                            <img src="{{ asset($comic->thumb) }}" alt="comic_img">
                        </td>
                        <td>
                            <button type="button" class="btn btn-success">
                                <strong style="font-style: italic">
                                    {{ $comic->price }}
                                </strong>
                            </button>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <small>
                                        {{ $comic->series }}
                                    </small>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <small style="text-decoration: underline">{{ $comic->sale_date }}</small>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td>
                            <button  type="button" class="btn btn-secondary">
                                <a href="{{ route('comics.show', ['comic' => $comic]) }}" class="dropdown-item">
                                    <small style="font-style: italic; color: #ffffff">
                                        Read more
                                    </small>
                                </a>
                            </button>
                        </td>
                        <td>
                            <small style="font-style: italic">
                                {{ $comic->type }}
                            </small>
                        </td>
                        <td>
                            <p style="color: #00a9d9">
                                <span style="font-style: italic; color: #003f5e; padding: 1px">
                                    <strong>
                                        Artists:
                                    </strong>
                                </span><br>
                                {{ $comic->artists }}
                            </p>
                        </td>
                        <td>
                            <p style="color: #00a9d9">
                                <span style="font-style: italic; color: #003f5e; padding: 1px">
                                    <strong>
                                        Writers:
                                    </strong>
                                </span><br>
                                {{ $comic->writers }}
                            </p>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Customize
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li>
                                        <a href="{{ route('comics.edit', ['comic' => $comic]) }}" class="dropdown-item">
                                            <small style="font-style: italic">
                                                Edit
                                            </small>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('comics.destroy', ['comic' => $comic]) }}" class="dropdown-item delete-card">
                                            <small style="font-style: italic">
                                                Delete
                                            </small>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $comics->links() }}

        <section class="alert d-none">
            <form class="alert-spawn" data-action="{{ route('comics.destroy', ['comic' => '******']) }}" method="post">
                @csrf
                @method('DELETE')

                <strong>
                    Are you sure you want delete this card?
                </strong>
                <button type="submit" class="btn btn-primary choice-yes">
                    Yes
                </button>
                <button type="button" class="btn btn-danger choice-no">
                    No
                </button>
            </form>
        </section>
    </main>
@endsection
