<footer>

      <div class="footerbuy">
            <div class="container">
                  @foreach ($footer_links as $link)
                  <div>
                        <img :src="getImagePath(`../assets/img/${link.src}`)" alt="link.label">
                        <a href="link.url">{{ $link['label'] }}</a>
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
                                          <a href="link.url">{{ $link['label'] }}</a>
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
                        
                        @endforeach
                        <a href="a.label">
                              <img src="getImagePath(`../assets/img/${a.src}`)" alt="a.label">
                        </a>
                  </div>
            </div>
      </div>
      
</footer>