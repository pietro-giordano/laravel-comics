<footer>

      <div class="footerbuy">
            <div class="container">
                  @foreach ($footer_links as $link)
                  <div>
                        <img src="{{ Vite::asset($link['src']) }}" alt="{{ $link['label'] }}">
                        <a href="{{ $link['url'] }}">{{ $link['label'] }}</a>
                  </div>
                  @endforeach
            </div>
      </div>
      
      <div class="footerlinks">
            <div class="container">
                  <div class="links">
                        @foreach ($sections as $section)
                        <div>
                              <h3>{{ $section['title'] }}</h3>
                              <ul>
                                    @foreach ($section['links'] as $link)
                                    <li>
                                          <a href="{{ $link['url'] }}">{{ $link['label'] }}</a>
                                    </li>
                                    @endforeach
                              </ul>
                        </div>
                        @endforeach
                  </div>
            </div>
      </div>
      
      <div class="footerfooter">
            <div class="container">
                  <button>
                        sign-up now!
                  </button>
                  
                  <div>
                        <h3>Follow Us</h3>
                        @foreach ($social as $a)
                              <a href="{{ $a['url'] }}">
                                    <img src="{{ Vite::asset($a['src']) }}" alt="{{ $a['label'] }}">
                              </a>
                        @endforeach
                  </div>
            </div>
      </div>
      
</footer>