<header>
      <div class="container">
            <div class="logo">
                  <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc-logo">
            </div>

            <ul>
                  @foreach ($header_links as $link)
                  <li>
                        <a href="{{ $link['url'] }}" class="@if($link['active']) active @endif">
                              {{ $link['label'] }}
                        </a>
                  </li>
                  @endforeach
            </ul>
      </div>
</header>