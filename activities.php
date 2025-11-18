<!-- 
Author: Austin deHaan
The activities page for the Greene, NY website.
-->

<?php

$pageTitle = '- Activities';

include_once("assets/inc/header.inc.php");

?>

<!-- main content -->
<h1>Activities <span class="pageTitle">Greene, NY</span></h1>
<hr>

<section class="introduction">
    <div class="container">
        <div class="text-div">
            <p>With Greene's rural location and close proximity to Binghamton, there are plenty of indoor and
                outdoor activities to enjoy,
                including hiking, fishing, and exploring museums.</p>
        </div>
    </div>
</section>

<a href="animal-adventure.php">
    <section class="featured">
        <h2><span class="featured-txt">Featured:</span> Animal Adventure Park</h2>
        <div class="container">
            <div class="text-div">
                <p>Animal Adventure Park is a unique zoo located just a short drive east from Greene, NY. The
                    park is home to a variety of
                    animals, including giraffes, zebras, and kangaroos.</p>
            </div>
            <figure class="image-div">
                <img src="assets/images/animal-adventure.jpg" alt="Animal Adventure Park">
                <figcaption>Animal Adventure Park (Tripadvisor)</figcaption>
            </figure>
        </div>
    </section>
</a>

<section class="parks">
    <h2>Parks</h2>
    <div class="container">
        <div class="text-div">
            <p>There are several parks in and around Greene, NY. Some of the most popular include:</p>
            <ul>
                <li><b>Greene Ball Flats</b> - A small park located in the center of town, featuring a
                    playground, picnic areas,
                    and open green space.</li>
                <li><b>Chenango Valley State Park</b> - Located just a short drive south of Greene, this state
                    park offers hiking
                    trails, fishing, boating, and camping facilities.</li>
                <li><b>Oquaga Creek State Park</b> - Another close state park with hiking trails, fishing spots,
                    and picnic areas.</li>
            </ul>
        </div>
        <figure class="image-div">
            <img src="assets/images/chenango-valley-state-park.webp" alt="Fall at Chenango Valley State Park.">
            <figcaption>Fall time at Chenango Valley State Park. (Hiiking site)</figcaption>
        </figure>
    </div>
</section>

<section class="museums">
    <h2>Museums</h2>
    <div class="container">
        <div class="text-div">
            <p>Greene and the multiple towns surrounding it are home to several museums that showcase the area's
                history and culture.
                Some notable museums include:</p>
            <ul>
                <li><b>Greene Museum</b> - A local museum dedicated to showcasing the history and culture of
                    Greene and the surrounding area.</li>
                <li><b>Norwich Classic Car Museum</b> - Like looking at old vehicles? This museum showcases
                    classic cars and other pieces of
                    automotive history.</li>
            </ul>
        </div>
        <figure class="image-div">
            <img src="assets/images/classic-car-museum.jpg" alt="Classic Car Museum located in Norwich, NY.">
            <figcaption>Many old-fashioned cars at the Norwich Classic Car Museum. (Uncovering NY site)
            </figcaption>
        </figure>
    </div>
</section>


<?php

include_once("assets/inc/footer.inc.php");

?>