<header>
    <nav class="navbar navbar-expand-lg"
    style="background: #0282f9">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav gap-3">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}"
                    style="color: #ffffff">
                        <big>
                            Home
                        </big>
                    </a>
                </li>
                <li class="nav-item dropdown m-auto">
                    <div class="btn-group">
                        <a href="{{ route('comics.index') }}" type="button" class="btn"
                        style="color: #ffffff">
                            <big>
                                Comics
                            </big>
                        </a>
                        <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"
                        style="color: #ffffff">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{ route('comics.create') }}"
                                style="color: #464646">
                                    <strong>
                                        Add Comic
                                    </strong>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
