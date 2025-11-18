<!-- 
Author: Austin deHaan
The main page for the Greene, NY website. 
-->

<?php

$pageTitle = '- Home';

include_once("assets/inc/header.inc.php");

?>

<!-- main content -->
<h1>Greene, NY <span class="pageTitle">Home</span></h1>
<hr>

<section class="introduction">
    <h2>Introduction</h2>
    <div class="container">
        <div class="text-div">
            <p><b>Greene, New York</b> is a very small town located in the Southern Tier region of the state,
                with the closest city being Binghamton.</p>
            <p>Even though the town is small, the area surrounding Greene is full of interesting history and fun
                activities.</p>
        </div>
        <figure class="image-div">
            <img src="assets/images/greene_main.jpg" alt="Town square in Greene, NY.">
            <figcaption>Downtown Greene, NY. (Wikipedia)</figcaption>
        </figure>
    </div>
</section>

<section class="why-greene">
    <h2>Why Greene?</h2>
    <div class="container">
        <div class="text-div">
            <p>Unlike the atmosphere of larger cities, Greene offers a unique charm and a strong community vibe.
            </p>
            <p>If you feel overwhelmed by the noise and traffic of the city, coming to Greene can provide an
                outdoor escape with beautiful
                views and fun recreational activities.</p>
            <p>The restaurants and food are completely different from what you'd get elsewhere, providing a
                unique
                experience.</p>
        </div>
        <figure class="image-div">
            <img src="assets/images/greene-image-2.jpg" alt="Memorial park in Greene, NY.">
            <figcaption>Memorial Park in Greene, NY. (Last Seven Days site)</figcaption>
        </figure>
    </div>
</section>

<?php

include_once("assets/inc/footer.inc.php");

?>