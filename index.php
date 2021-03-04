<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/style.css">
    <title>Projet2</title>
</head>

<body>
    <header>
        <?php
        require "menu.php";
        ?>
        <div id="menuBurger">
            <nav class="menu_bas">
                <p id="croix">X</p>
                <ul class="bas">
                    <li><a href="#detail">EN DÉTAIL</a></li>
                    <li><a href="#activites">ACTIVITÉS</a></li>
                    <li><a href="#offres">OFFRES</a></li>
                    <li><a href="#cadeaux">CADEAUX</a></li>
                    <li><a href="#seminaires">SÉMINAIRES</a></li>
                </ul>

            </nav>

        </div>
        <div id="slider">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="asset/img/hotel11.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="asset/img/hotel22.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="asset/img/hotel33.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="logo3"><img id="hotel" src="asset/img/logo.png" /></div>
                    <a id="burger" href="#"><img src="asset/img/menu.png" alt=""></a>

                </div>

            </div>
        </div>
    </header>
    <section>
        <!-- <div class="clear"></div> -->
    </section>
    <section id="deux">
        <div id="wrap">
            <p class="savoir">➹  En savoir plus</p>
            <!-- <div class="clear"></div> -->
        </div>
    </section>
    <section id="trois">
        <div id="wrap2">
            <div class="wrap2">
                <div id="card1">
                    <div class="card" style="width: 30rem; float:left; margin-top:50px; margin-left:6%;">
                        <img src="asset/img/ch1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Suite Wakatipu</h5>
                            <p class="card-text">Magnifique suite face au lac Wakatipu .</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Chambre double</li>
                            <li class="list-group-item">Terrasse extérieure</li>
                            <li class="list-group-item">Salon privé</li>
                        </ul>
                        <div class="card-body">
                           
                            <iframe width="280" height="158" src="https://www.youtube.com/embed/iZ2asWz8HDQ"
                             frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                              allowfullscreen style="display:block ; margin: 25px auto "></iframe>

                        </div>
                    </div>
                    <div id="card2">
                        <div class="card" style="width: 30rem;float:right ; margin-top:50px; margin-right:6%;">
                            <img src="asset/img/ch2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Suite de Tasmanie</h5>
                                <p class="card-text">Devant l'Okari Lagoon.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Jusqu'à 6 personnes</li>
                                <li class="list-group-item">Ensoleillement</li>
                                <li class="list-group-item">Salon privé</li>
                            </ul>
                            <div class="card-body">
                            <iframe width="280" height="157" src="https://www.youtube.com/embed/EdKDIph5IaM" frameborder="0"
                             allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                              allowfullscreen style="display:block ; margin: 25px auto "></iframe>

                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div id="card3">
                        <div class="card" style="width: 30rem; float:left; margin-top:50px ; margin-bottom:50px;  margin-left:6%;">
                            <img src="asset/img/ch3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Suite Wakatipu</h5>
                                <p class="card-text">Magnifique suite face au lac Wakatipu .</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Chambre double</li>
                                <li class="list-group-item">Terrasse extérieure</li>
                                <li class="list-group-item">Salon privé</li>
                            </ul>
                            <div class="card-body">
                            <iframe width="280" height="158" src="https://www.youtube.com/embed/iZ2asWz8HDQ" frameborder="0"
                             allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                              allowfullscreen style="display:block ; margin: 25px auto "></iframe>

                            </div>
                        </div>
                        <div id="card4">
                            <div class="card" style="width: 30rem;float:right; margin-top:50px;margin-bottom:50px; margin-right:6%;">
                                <img src="asset/img/ch4.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Suite de Tasmanie</h5>
                                    <p class="card-text">Devant l'Okari Lagoon.</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Jusqu'à 6 personnes</li>
                                    <li class="list-group-item">Ensoleillement</li>
                                    <li class="list-group-item">Salon privé</li>
                                </ul>
                                <div class="card-body">
                                <iframe width="280" height="158" src="https://www.youtube.com/embed/EdKDIph5IaM" frameborder="0"
                                 allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                  allowfullscreen style="display:block ; margin: 25px auto "></iframe>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="clear"></div>

                </div>
            </div>
            <?php
            require 'bouton_top.php';
            ?>
            <div class="clear"></div>
        </div>
    </section>
   
   <?php
    include ('footer.html');
    ?>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="asset/main.js"></script>
</body>

</html>