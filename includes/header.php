<!DOCTYPE html>
<html lang="nl">
            <head>
                <meta charset="UTF-8">
                <meta name="author" content="Dylan Weyns">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>phpwebsite</title>
                <link rel="stylesheet" href="css/uikit/css/uikit.min.css"/>
                <script src="css/uikit/js/uikit.min.js"></script>
                <script src="css/uikit/js/uikit-icons.min.js"></script>
                <link href="css/styles.css" rel="stylesheet" type="text/css">

                <script>
                    function BerekenBMI(){

                        var gewicht = document.bmiForm.gewicht.value
                        var lengte = document.bmiForm.lengte.value

                        if (gewicht > 0 && lengte > 0){
                            var BMI = Math.round(gewicht/(lengte/100*lengte/100)*100)/100
                            document.bmiForm.bmi.value = BMI
                            if(BMI < 18.5){
                                document.bmiForm.betekenis.value = "Je bent vrij licht voor je lichaamslengte"
                            }
                            if(BMI > 18.5 && BMI < 25){
                                document.bmiForm.betekenis.value = "Je BMI is normaal"
                            }
                            if(BMI > 25){
                                document.bmiForm.betekenis.value = "Je hebt overgewicht"
                            }
                        }
                        else {
                            alert("Vul je lichaamslengte en/of je lichaamsgewicht correct in")
                        }
                    }
                </script>
            </head>
            <body>
            <header>
                <nav class="uk-navbar-container uk-visible@m" uk-navbar>
                    <div class="uk-navbar-left">
                        <ul class="uk-navbar-nav">
                            <li>
                                <a href="index.php" class="uk-navbar-item uk-logo uk-margin-large-left">
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
                            <li><a href="one_page.php" uk-scroll>One Page</a></li>
                            <li><a href="shoutbox.php" uk-scroll>Shoutbox</a></li>
                            <li><a href="#" uk-scroll>Item</a></li>
                        </ul>
                    </div>
                    <div class="uk-navbar-right uk-margin-large-right">
                        <ul class="uk-navbar-nav">
                            <li><a href="#" uk-scroll>Item</a></li>
                            <li><a href="#" uk-scroll>Item</a></li>
                            <li><a href="#" uk-scroll>Item</a></li>
                        </ul>
                    </div>
                </nav>

                <!-- voor mobile (smartphone) -->
                <nav class="uk-navbar-container uk-hidden@m" uk-navbar>
                    <div class="uk-navbar-left">
                        <ul class="uk-navbar-nav">
                            <li>
                                <a href="index.php" class="uk-navbar-item uk-logo uk-margin-large-left">
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
                                uk-toggle="target: #offcanvas-nav"
            ></button>
        </div>
    </nav>
</header>