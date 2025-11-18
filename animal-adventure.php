<!-- 
Author: Austin deHaan
The page detailing Animal Adventure Park for the Greene, NY website.
-->

<?php

$pageTitle = '- Activities - Animal Adventure';

include_once("assets/inc/header.inc.php");

?>
<!-- main content -->
<a href="activities.php">
    <p class="return">Back to Activities</p>
</a>
<h1>Animal Adventure Park <span class="pageTitle">Activities</span></h1>
<hr>

<section class="introduction">
    <div class="container">
        <div class="text-div">
            <p>Just a short distance from Greene, Animal Adventure Park is home to a variety of different
                animals, both large and small.
                Located in Harpursville, NY (East of Greene), the park offers visitors the chance to see and
                interact with animals from around the world.</p>
        </div>
    </div>
</section>

<section class="animals">
    <h2>Animals</h2>
    <div class="container">
        <div class="text-div">
            <p>The main attraction at this park, as the name suggests, is the several large and exotic animals
                that the park keeps.</p>
            <p>Some of the popular animals to see include:</p>
            <ul>
                <li>Giraffes</li>
                <li>Elephants</li>
                <li>Zebras</li>
                <li>Lions</li>
            </ul>
        </div>
        <figure class="image-div">
            <img src="assets/images/animal-adventure-park.jpg" alt="Inside Animal Adventure Park">
            <figcaption>Inside Animal Adventure Park (Uncovering NY site)</figcaption>
        </figure>
    </div>
</section>

<section class="animals">
    <h2>Live Feeding</h2>
    <div class="container">
        <div class="text-div">
            <p>What really sets this park apart from others like it is the live feeding experience that allows
                visitors to feed many of
                the animals at the park.</p>
            <p>Visitors can throw food pellets over the fence for animals to pick at and for certain animals,
                like the giraffes, to eat
                directly from their hands.</p>
        </div>
        <figure class="image-div">
            <img src="assets/images/giraffe-feed.jpg" alt="Kid feeding a giraffe">
            <figcaption>Kid feeding a giraffe (ILoveNY site)</figcaption>
        </figure>
    </div>
</section>

<?php

include_once("assets/inc/footer.inc.php");

?>