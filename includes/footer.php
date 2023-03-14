<footer class="uk-section-dylan uk-light uk-margin-medium-top">
    <div class="uk-container">
        <div class="uk-child-width-1-3@m uk-margin-small-top uk-margin-small-bottom" uk-grid>
            <div>
                <p class="uk-text-small uk-text-dylan">
                    &copy;
                    <script>
                        var datum = new Date();
                        jaartal = datum.getFullYear();
                        document.write(jaartal);
                    </script>
                    &bull; Dylan Weyns </p>
            </div>
            <div>
                <p class="uk-text-uppercase"> Sitemap </p>
                <div class="uk-column-1-2">
                    <p><a href="one_page.php" uk-scroll>One page</a></p>
                    <p><a href="shoutbox.php" uk-scroll>Shoutbox</a></p>
                    <p><a href="#" uk-scroll>Item</a></p>
                    <p><a href="#" uk-scroll> Item </a></p>
                    <p><a href="#" uk-scroll> Item</a></p>
                    <p><a href="#" uk-scroll> Item</a></p>
                </div>
            </div>
            <div>
                <div> <a href="" class="uk-icon-button uk-margin-small-right" uk-icon="mail"></a> z7687@zavo.be</div>
                <div> <a href="" class="uk-icon-button uk-margin-small-right" uk-icon="receiver"></a> +32 468 30 04 62</div>
                <div>
                    <a href="" class="uk-icon-button uk-margin-small-right" uk-icon="facebook"></a>
                    <a href="" class="uk-icon-button uk-margin-small-right" uk-icon="twitter"></a>
                    <a href="" class="uk-icon-button uk-margin-small-right" uk-icon="linkedin"></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- off-canvas menu voor kleine schermen -->
<div id="offcanvas-nav" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar">
        <div>
            <a href="index.html" class="uk-navbar-item uk-logo uk-margin-small-left">
                <img src="images/home.png"
                     width="100"
                     alt="One page website"
                >
            </a>
        </div>

        <div class="uk-margin-small-top uk-margin-medium-bottom uk-text-center">
            One page - 6 ITN
        </div>
        <ul class="uk-nav uk-nav-default">
            <li class="uk-nav-header">Eerste gedeelte</li>
            <li><a href="one_page.php" uk-scroll><span class="uk-margin-small-right" uk-icon="icon:  table"></span>One page</a></li>
            <li><a href="shoutbox.php" uk-scroll><span class="uk-margin-small-right" uk-icon="icon:  thumbnails"></span>Shoutbox</a></li>
            <li class="uk-nav-divider"></li>
            <li><a href="#" uk-scroll><span class="uk-margin-small-right" uk-icon="icon:  trash"></span>Item</a></li>

            <li class="uk-nav-header">Tweede gedeelte</li>
            <li><a href="#" uk-scroll><span class="uk-margin-small-right" uk-icon="icon:  table"></span>Item</a></li>
            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon:  thumbnails"></span>Item</a></li>
            <li class="uk-nav-divider"></li>
            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon:  trash"></span>Item</a></li>
        </ul>
    </div>
</div>
</body>
</html>