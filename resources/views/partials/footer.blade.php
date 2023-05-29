<footer>
    <div class="footer-top overflow-hidden">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex">
                <ul class="text-light p-0">
                    <li><h4 class="my-3 text-uppercase">Dc comics</h4></li>
                    @foreach ($dcComics as $item)
                        <li class="text-capitalize"><a>{{ $item }}</a></li>
                    @endforeach
                </ul>
                <ul class="text-light p-0">
                    <li><h4 class="my-3 text-uppercase">Shop</h4></li>
                    @foreach ($shop as $item)
                        <li class="text-capitalize"><a>{{ $item }}</a></li>
                    @endforeach
                </ul>
                <ul class="text-light p-0">
                    <li><h4 class="my-3 text-uppercase">Dc</h4></li>
                    @foreach ($dc as $item)
                        <li class="text-capitalize"><a>{{ $item }}</a></li>
                    @endforeach
                </ul>
                <ul class="text-light p-0">
                    <li><h4 class="my-3 text-uppercase">Sites</h4></li>
                    @foreach ($sites as $item)
                        <li class="text-capitalize"><a>{{ $item }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="box-image">
                <img src="img/dc-logo-bg.png" alt="">
            </div>
        </div>
    </div>
    <div class="footer-bottom py-4">
        <div class="container d-flex justify-content-between align-items-center">
            <button>Sign-up now!</button>
            <div class="d-flex align-items-center">
                <p class="m-0 text-primary text-uppercase fw-bold mx-2">Follow us</p>
                <div class="d-flex">
                    @foreach ($socials as $social)
                        <img class="ms-3" src="/img/{{ $social->path }}" alt="{{ $social->alt }}">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</footer>
