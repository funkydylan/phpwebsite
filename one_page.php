<?php
    include 'includes/header.php';
?>
<header>
    <nav class="uk-navbar-container uk-visible@m" uk-navbar>
        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
                <li>
                    <a href="index.html" class="uk-navbar-item uk-logo uk-margin-large-left">
                        <img src="images/home.png"
                             width="100"
                             alt="One page website"
                        >
                    </a>
                </li>
            </ul>
        </div>
        <div class="uk-navbar-center">
            <ul class="uk-navbar-nav">
                <li><a href="#foto" uk-scroll>Foto-video</a></li>
                <li><a href="#klas" uk-scroll>Klasgenoten</a></li>
                <li><a href="#BMI" uk-scroll>BMI</a></li>
            </ul>
        </div>
        <div class="uk-navbar-right uk-margin-large-right">
            <ul class="uk-navbar-nav">
                <li><a href="#Formulier" uk-scroll>Formulier</a></li>
                <li><a href="#accordion" uk-scroll>Accordion</a></li>
                <li><a href="#resolutie" uk-scroll>Schermresolutie</a></li>
            </ul>
        </div>
    </nav>

    <!-- voor mobile (smartphone) -->
    <nav class="uk-navbar-container uk-hidden@m" uk-navbar>
        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
                <li>
                    <a href="index.html" class="uk-navbar-item uk-logo uk-margin-large-left">
                        <img src="images/home.png"
                             width="100"
                             alt="One page website"
                        >
                    </a>
                </li>
            </ul>
        </div>
        <div class="uk-navbar-center">
            One page - 6 ITN
        </div>
        <div class="uk-navbar-right uk-margin-large-right">
            <button class="uk-button uk-button-default uk-hidden@m" type="button"
                    uk-icon="icon: menu; ratio: 1.2"
                    uk-toggle="target: #offcanvas-av"
            ></button>
        </div>
    </nav>
</header>
<main>
    <!-- eerste sectie -->
    <div class="uk-section uk-section-dylan1 uk-margin-medium-top" id="foto">
        <div class="uk-container">
            <div uk-slideshow="animation: push">
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 16:9">
                    <ul class="uk-slideshow-items">
                        <li>
                            <img src="images/photo.jpg" alt="" uk-cover>
                        </li>
                        <li>
                            <video src="https://yootheme.com/site/images/media/yootheme-pro.mp4" autoplay loop muted playsinline uk-cover></video>
                        </li>
                        <li>
                            <img src="images/dark.jpg" alt="" uk-cover>
                        </li>
                        <li>
                            <img src="images/light.jpg" alt="" uk-cover>
                        </li>
                        <li>
                            <iframe src="https://www.youtube-nocookie.com/embed/c2pz2mlSfXA? autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel0&amp;loop=1&amp;modestbranding=1&amp;wmode=transparent&amp;playsinline=1" width="1920" height="1080" allowfullscreen uk-cover></iframe>
                        </li>
                        <li>
                            <iframe src="https://www.youtube-nocookie.com/embed/IhQAtkXOK6o? autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel0&amp;loop=1&amp;modestbranding=1&amp;wmode=transparent&amp;playsinline=1" width="1920" height="1080" allowfullscreen uk-cover></iframe>
                        </li>
                        <li>
                            <img src="images/Beet.jfif" alt="" uk-cover>
                        </li>
                        <li>
                            <iframe src="https://www.youtube-nocookie.com/embed/wfF0zHeU3Zs? autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel0&amp;loop=1&amp;modestbranding=1&amp;wmode=transparent&amp;playsinline=1" width="1920" height="1080" allowfullscreen uk-cover></iframe>
                        </li>
                    </ul>

                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
                </div>
                <div class="uk-text-right">
                    <a href="#" uk-totop uk-scroll></a>
                </div>
                <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>
            </div>
        </div>
    </div>
    <!-- 2de sectie -->
    <div class="uk-section uk-section-dylan2 uk-margin-medium-top" id="klas">
        <div class="uk-container">
            <div class="uk-child-width-1-3@m uk-child-width-1-4@l uk-child-width-1-5@xl uk-grid-match" uk-grid>
                <div>
                    <div class="uk-card uk-card-default uk-card-small">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-border-circle" width="40" height="40" src="images/man.jpg" alt="Avatar">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">Rayan Afkir</h3>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                        <div class="uk-card-footer uk-text-center">
                            <a href="#"class="uk-button uk-button-text">Zaventem</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-small">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-border-circle" width="40" height="40" src="images/Andy.jpg" alt="Avatar">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">Andy Aliji</h3>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                        <div class="uk-card-footer uk-text-center">
                            <a href="#"class="uk-button uk-button-text">Zaventem</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-small">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-border-circle" width="40" height="40" src="images/Mo.webp" alt="Avatar">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">Mohamed Atchakhou</h3>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                        <div class="uk-card-footer uk-text-center">
                            <a href="#"class="uk-button uk-button-text">Zaventem</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-small">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-border-circle" width="40" height="40" src="images/Hassan.jpg" alt="Avatar">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">Hassan Barkellil</h3>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                        <div class="uk-card-footer uk-text-center">
                            <a href="#"class="uk-button uk-button-text">Zaventem</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-small">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-border-circle" width="40" height="40" src="images/Robert.jpg" alt="Avatar">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">Robert Callens</h3>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                        <div class="uk-card-footer uk-text-center">
                            <a href="#"class="uk-button uk-button-text">Leuven</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-small">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-border-circle" width="40" height="40" src="images/Martijn.jpg" alt="Avatar">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">Martijn Cauwenberghs</h3>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                        <div class="uk-card-footer uk-text-center">
                            <a href="#"class="uk-button uk-button-text">Erps-Kwerps</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-small">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-border-circle" width="40" height="40" src="images/Artan.webp" alt="Avatar">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">Artan Dezlili</h3>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                        <div class="uk-card-footer uk-text-center">
                            <a href="#"class="uk-button uk-button-text">Zaventem</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-small">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-border-circle" width="40" height="40" src="images/abd.jpg" alt="Avatar">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">Abd-Ar-Rahman Housni</h3>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                        <div class="uk-card-footer uk-text-center">
                            <a href="#"class="uk-button uk-button-text">Zaventem</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-small">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-border-circle" width="40" height="40" src="images/Wael.webp" alt="Avatar">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">Wael Maazouz</h3>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                        <div class="uk-card-footer uk-text-center">
                            <a href="#"class="uk-button uk-button-text">Zaventem</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-small">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-border-circle" width="40" height="40" src="images/Dylan.jpg" alt="Avatar">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">Dylan Weyns</h3>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                        <div class="uk-card-footer uk-text-center">
                            <a href="#"class="uk-button uk-button-text">Sterrebeek</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-small">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-border-circle" width="40" height="40" src="images/zak.webp" alt="Avatar">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">Zakaria Zeriouh</h3>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                        <div class="uk-card-footer uk-text-center">
                            <a href="#"class="uk-button uk-button-text">Zaventem</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-small">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-border-circle" width="40" height="40" src="images/adam.jpg" alt="Avatar">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">Adam Zerrad</h3>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                        <div class="uk-card-footer uk-text-center">
                            <a href="#"class="uk-button uk-button-text">Zaventem</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-text-right">
                <a href="#" uk-totop uk-scroll></a>
            </div>
        </div>
    </div>
    <div class="uk-section uk-section-dylan3 uk-margin-medium-top" id="BMI">
        <div class="uk-container">
            <h3> Berekenen van de body mass index (BMI) </h3>
            <form name="bmiForm" class="uk-form-horizontal uk-grid-small" uk-grid>
                <div class="uk-width-1-3@m">
                    <label class="uk-form-label" for="form-horizontal-text">Lengte (cm)</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" name="lengte" type="text" placeholder="Lengte in cm">
                    </div>

                    <label class="uk-form-label" for="form-horizontal-text">Gewicht (kg)</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" name="gewicht" type="text" placeholder="Gewicht in kg">
                    </div>
                    <div>
                        <input type="button" class="uk-button uk-button-secondary " value="Bereken de BMI" onclick="BerekenBMI()">
                    </div>

                    <label class="uk-form-label" for="form-horizontal-text">Je BMI is</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" name="bmi" type="text">
                    </div>

                    <label class="uk-form-label" for="form-horizontal-text">Betekenis</label>
                    <div class="uk-form-controls uk-form-width-large">
                        <input class="uk-input" name="betekenis" type="text">
                    </div>
                </div>
            </form>
            <div class="uk-text-right">
                <a href="#" uk-totop uk-scroll></a>
            </div>
        </div>
    </div>
    <div class="uk-section uk-section-dylan4 uk-margin-medium-top" id="Formulier">
        <div class="uk-container">
            <h3> Formulier </h3>
            <form class="uk-form-horizontal uk-margin-large " uk-grid>

                <div class="uk-margin uk-width-1-2">
                    <label class="uk-form-label" for="form-horizontal-text">Naam</label>
                    <div class="uk-form-controls">
                        <input class="uk-input " id="form-horizontal-text" type="text" placeholder="Naam">
                    </div>
                </div>
                <div class="uk-margin uk-width-1-2">
                    <label class="uk-form-label" for="form-horizontal-text">Voornaam</label>
                    <div class="uk-form-controls">
                        <input class="uk-input " id="form-horizontal-text" type="text" placeholder="Voornaam">
                    </div>
                </div>
                <div class="uk-margin uk-width-1-1">
                    <label class="uk-form-label" for="form-horizontal-text">E-mail</label>
                    <div class="uk-form-controls">
                        <input class="uk-input " id="form-horizontal-text" type="text" placeholder="E-mail">
                    </div>
                </div>
                <div class="uk-margin uk-width-1-1">
                    <label class="uk-form-label" for="form-horizontal-select">Beroep</label>
                    <div class="uk-form-controls">
                        <select class="uk-select" id="form-horizontal-select">
                            <option>Directeur</option>
                            <option>Leerlingbegeleider</option>
                            <option>vakleerkracht</option>
                        </select>
                    </div>
                    <button class="uk-button uk-button-dylan">Submit</button>
                </div>
            </form>
            <div class="uk-text-right">
                <a href="#" uk-totop uk-scroll></a>
            </div>
        </div>
    </div>
    <div class="uk-section uk-section-dylan6 uk-margin-medium-top" id="accordion">
        <div class="uk-container">
            <h3> Accordion </h3>
            <ul uk-accordion="multiple: true" uk-grid>
                <li class="uk-width-1-2@s uk-width-1-4@l">
                    <a class="uk-accordion-title" href="#foto">Foto-Video Dylan</a>
                    <div class="uk-accordion-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </li>
                <li class="uk-width-1-2@s uk-width-1-4@l">
                    <a class="uk-accordion-title" href="#klas">Klasgenoten Dylan</a>
                    <div class="uk-accordion-content">
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                    </div>
                </li>
                <li class="uk-width-1-2@s uk-width-1-4@l">
                    <a class="uk-accordion-title" href="#BMI">BMI Dylan</a>
                    <div class="uk-accordion-content">
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
                    </div>
                </li>
                <li class="uk-width-1-2@s uk-width-1-4@l">
                    <a class="uk-accordion-title" href="#Formulier">Formulier Dylan</a>
                    <div class="uk-accordion-content">
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
                    </div>
                </li>
                <li class="uk-width-1-2@s uk-width-1-4@l">
                    <a class="uk-accordion-title" href="#accordion">Accordion Dylan</a>
                    <div class="uk-accordion-content">
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
                    </div>
                </li>
                <li class="uk-width-1-2@s uk-width-1-4@l">
                    <a class="uk-accordion-title" href="#resolutie">Schermresolutie Dylan</a>
                    <div class="uk-accordion-content">
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
                    </div>
                </li>
            </ul>
            <div class="uk-text-right">
                <a href="#" uk-totop uk-scroll></a>
            </div>
        </div>
    </div>
    <div class="uk-section uk-section-dylan5 uk-margin-medium-top" id="resolutie">
        <div class="uk-container">
            <h3> Scherm resolutie </h3>
            <script>
                var screenhoogte = screen.height;
                var screenbreedte = screen.width;
                var bericht = "De scherm resolutie is" + screenbreedte + "x" + screenhoogte;
                document.write(bericht);
            </script>
            <div class="uk-text-right">
                <a href="#" uk-totop uk-scroll></a>
            </div>
        </div>
    </div>
</main>
<?php
    include 'includes/footer.php';
?>
