<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/progetti">Gestione progetti</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/progetti">Home</a>
                </li>
            </ul>
            <span class="navbar-text">
                <form action="/logout" method="POST">
                    @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </span>
        </div>
    </div>
</nav>