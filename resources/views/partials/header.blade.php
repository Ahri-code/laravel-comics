<header>
    <div class="bg-primary">
        <div class="container">
            <div class="row d-flex justify-content-end">
                <div class="col-2 d-flex justify-content-between">
                    <a href="#" class="text-light"><small>Lorem</small></a>
                    <a href="#" class="text-light"><small>Lorem</small></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container p-3">
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center">
                <img class="logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Laravel Logo">
            </div>
            <div class="col-8 d-flex justify-content-between align-items-center">
            @foreach ($links as $link)
                <a href="{{ $link['href'] }}">{{ $link['text'] }}</a>
            @endforeach
            </div>
            <div class="col d-flex justify-content-end align-items-center">
                <p class="m-0">Search</p>
            </div>
        </div>
    </div>
</header>