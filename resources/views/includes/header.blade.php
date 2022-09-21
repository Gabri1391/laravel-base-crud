@php
$links = config('header_navbar');
@endphp

<header class="container mt-3">
    <figure>
        <img src="{{ asset('img/dc-logo.png') }}" alt="DC logo">
    </figure>
    <ul>
        @foreach ($links as $link)
            <li><a class="text-secondary" href="#">{{strtoupper($link['text'])}}</a></li>
        @endforeach
    </ul>
</header>