<?php

  $test_cats    = [ "spices" =>
                      [
                        "thyme"                     => [1, '2013-04-12']
                      , "paprika"                   => [1, '2013-04-12']
                      , "crushed black pepper"      => [1, '2013-04-12']
                      , "cinnamon"                  => [1, '2013-04-12']
                      , "fennel seeds"              => [1, '2013-04-12']
                      , "chili powder"              => [1, '2013-04-12']
                      , "cactus dust"               => [1, '2013-04-12']
                      , "brown sugar"               => [1, '2013-04-12']
                      ]

                  , "veggies" =>
                      [
                        "iceberg lettuce"           => [1, '2013-04-12']
                      , "paprika"                   => [1, '2013-04-12']
                      , "crushed black pepper"      => [1, '2013-04-12']
                      , "cinnamon"                  => [1, '2013-04-12']
                      , "fennel seeds"              => [1, '2013-04-12']
                      , "chili powder"              => [1, '2013-04-12']
                      , "cactus dust"               => [1, '2013-04-12']
                      , "brown sugar"               => [1, '2013-04-12']
                      ]

                  , "frozen stuff" =>
                      [
                        "bluebell butter crunch"    => [1, '2013-04-12']
                      , "chicken breast"            => [1, '2013-04-12']
                      , "crushed black pepper"      => [1, '2013-04-12']
                      , "cinnamon"                  => [0, '2013-04-12']
                      , "fennel seeds"              => [1, '2013-04-12']
                      , "chili powder"              => [1, '2013-04-12']
                      , "cactus dust"               => [0, '2013-04-12']
                      , "brown sugar"               => [1, '2013-04-12']
                      ]

                  , "meats n' such" =>
                      [
                        "italian sausage"           => [1, '2013-04-12']
                      , "bratwurst"                 => [0, '2013-04-12']
                      , "rotissary chicken"         => [0, '2013-04-12']
                      , "tender loin"               => [0, '2013-04-12']
                      , "t-bone steak"              => [3, '2013-04-12']
                      , "ground beef"               => [2, '2013-04-12']
                      , "chuckroast"                => [0, '2013-04-12']
                      , "porkbutts"                 => [1, '2013-04-12']
                      ]
                  ];

  $currentYear = date('Y');

  function copyrightYear($startYear = '') {

    global $currentYear;

    if ($startYear === '') {
      $startYear = $currentYear;
    }

    if ($startYear >= $currentYear) {
      echo $currentYear;
    } else {
      echo $startYear . '&ndash;' . $currentYear;
    }

  }


?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"> <!--<![endif]-->
  <head lang="en-US">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>What's in the Fridge?</title>

    <meta name="description" content="A simple app to keep track of what you have available in the kitchen.">
    <meta name="viewport" content="width=device-width">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="css/main.css">

    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
  </head>


  <body>
    <!--[if lt IE 7]>
      <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <div id="app-wrapper" class="">

      <h1 class="app-title">What's in the Fridge?</h1>

      <div id="view-swap">
        <button class="simple-button active">Ingredients</button>
        <span>|</span>
        <button class="simple-button">Recipes</button>
      </div><!-- #view-swap -->


      <div id="app-contents" class="">

        <section class="content-view active view-ingredients">

        <?php foreach ($test_cats as $cat => $ingredients) :
        ?><div class="ingredient-card card-data">
            <div class="card-inner">

              <input class="simple card-title ingredient-category" type="text" value="<?php echo $cat; ?>">

              <table class="ingredient-list">
                <thead>
                  <th>Type</th>
                  <th>Qty</th>
                  <th></th>
                  <th></th>
                  <th>Bought</th>
                </thead>

                <tbody>

                  <?php foreach ($ingredients as $spice => $info) :
                  ?><tr class="ingredient-row">
                    <td><input class="simple item-name" type="text" value="<?php echo $spice; ?>"></td>
                    <td><input class="simple item-qty" type="text" value="<?php echo $info[0]; ?>"></td>
                    <td><button class="decrement">-</button></td>
                    <td><button class="increment">+</button></td>
                    <td><input class="simple item-bought" type="date" value="<?php echo $info[1]; ?>"></td>
                  </tr>
                  <?php endforeach; ?>

                </tbody>
              </table><!-- .ingredient-list -->
            </div>
          </div><!-- .ingredient-card -->
          <?php endforeach; ?>

        </section><!-- .view-ingredients -->


        <section class="content-view view-recipes">

          Recipes

        </section><!-- .view-ingredients -->

      </div><!-- #app-contents -->

    </div><!-- #app-wrapper -->


    <footer class="copyright">
      &copy; <?php copyrightYear('2013'); ?> What's in the Fridge? &mdash; All rights reserved. &mdash;
      <a href="http://giggleboxstudios.net/" target="_blank">GiggleboxStudios</a>
      <span>|</span>
      <a href="https://github.com/GiggleboxStudios/WiTF/LICENSE.md" target="_blank">License</a>
    </footer>


    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ember.js/1.0.0-rc.3/ember.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/handlebars.js/1.0.0-rc.3/handlebars.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/garlic.js/1.2.0/garlic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/parsley.js/1.1.10/parsley.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/showdown/0.3.1/showdown.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.nanoscroller/0.7.2/jquery.nanoscroller.min.js"></script>

    <script src="js/libs/list.min.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>
