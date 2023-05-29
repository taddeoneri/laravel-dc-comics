<header class="bg-light text-uppercase">
    <div class="container bg-light d-flex justify-content-between align-items-center py-3">
        <div>
            <img src="/img/dc-logo.png" alt="Logo">
        </div>
        <ul class="d-flex m-0">
            @foreach ($navbar as $nav)
                <li class="ms-4"><a href="">{{ $nav['text'] }}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="jumbo overflow-hidden">
        <img class="img-fluid" src="/img/jumbotron.jpg" alt="Jumbotron">
    </div>
</header>
