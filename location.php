<!-- 
Author: Austin deHaan
The location page for the Greene, NY website.
-->

<?php

$pageTitle = '- Location';

include_once("assets/inc/header.inc.php");

?>

<!-- main content -->
<h1>Location <span class="pageTitle">Greene, NY</span></h1>
<hr>

<section class="introduction">
    <div class="container">
        <div class="text-div">
            <p>Greene is located in Chenango County in the Southern Tier of New York State. Some of the closest
                cities would include Binghamton to the south,
                Syracuse to the northwest, and Utica to the northeast. The town is easily accessible via several
                highways, including NY-12 and NY-206. The town also sits
                between two major interstates, I-81 to the west and I-88 to the east.</p>
        </div>
    </div>
</section>

<a href="catskills.php">
    <section class="featured">
        <h2><span class="featured-txt">Featured:</span> The Catskill Mountains</h2>
        <div class="container">
            <div class="text-div">
                <p>The Catskill Mountains are a mountain range located in southeastern New York.</p>
                <p>The Catskills offer multiple outdoor activities such as hiking, skiing, and fishing.</p>
            </div>
            <figure class="image-div">
                <img src="assets/images/catskills.jpg" alt="The Catskill Mountains">
                <figcaption>Mountains of the Catskills (Lonely Planet)</figcaption>
            </figure>
        </div>
    </section>
</a>

<section class="map">
    <h2>Map</h2>
    <figure class="image-div">
        <img src="assets/images/greene-map.png" alt="Map showing the location of Greene, NY.">
        <figcaption>Location of Greene, NY (City-Data.com)</figcaption>
    </figure>
</section>

<section class="geography">
    <h2>Geography</h2>
    <div class="container">
        <div class="text-div">
            <p>Greene sits between many rolling hills and valleys. This is common with many towns in the
                Southern Tier region of New York.</p>
            <p>The Chenango River runs through the town, providing access to boating and fishing spots.
            </p>
            <p>Greene is only about 25 minutes from the Pennsylvania border, meaning it's a great spot for
                people
                looking to explore both New York and
                parts of northern Pennsylvania, like Scranton.</p>
        </div>
        <figure class="image-div">
            <img src="assets/images/greene-birdseye.jpg" alt="Bird's eye view of Greene, NY.">
            <figcaption>The hills of Greene, NY (Wikipedia)</figcaption>
        </figure>
    </div>
</section>

<section class="weather">
    <h2>Weather</h2>
    <div class="container">
        <div class="text-div">
            <p>Based on where Greene is located, the weather can change dramatically throughout the year. All
                four seasons can be observed.</p>
            <p>Summers tend to be warm and humid (mid 80s), while winters can be cold and snowy (well below
                freezing).</p>
            <p>Fall offers beautiful views as the leaves change color, making it a popular time for outdoor
                activities.</p>
        </div>
        <figure class="image-div">
            <img src="assets/images/fall.webp" alt="Fall in the hills of the Southern Tier.">
            <figcaption>Fall in the Southern Tier (yahoo!life)</figcaption>
        </figure>
    </div>
</section>

<?php

include_once("assets/inc/footer.inc.php");

?>