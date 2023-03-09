<header>
      <div class="container">
            <div class="logo">
                  <img src="../assets/img/dc-logo.png" alt="dc-logo">
            </div>

            <ul>
                  @foreach ($header_links as $link)
                  <li>
                        <a>
                              {{ $link->label }}
                        </a>
                  </li>
                  @endforeach
            </ul>
      </div>
</header>