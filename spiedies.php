<!-- 
Author: Austin deHaan
The page detailing Spiedies for the Greene, NY website.
-->
<?php

$pageTitle = '- Food - Spiedies';

include_once("assets/inc/header.inc.php");

?>

<!-- main content -->
<a href="food.php">
    <p class="return">Back to Restaurants & Food</p>
</a>
<h1>Spiedies <span class="pageTitle">Food</span></h1>
<hr>

<section class="introduction">
    <div class="container">
        <div class="text-div">
            <p>A Binghamton, and really the Southern Tier, staple. Spiedies are small pieces of marinated meat,
                typically chicken or pork, that
                are usually served on skewers or on a roll.</p>
            <p>The marinade is similar to that of italian dressing you would normally find on salads.</p>
        </div>
    </div>
</section>

<section class="festival">
    <h2>Spiedie Fest</h2>
    <div class="container">
        <div class="text-div">
            <p>Due to the significance of spedies throughout the greater Binghamton area, the Spiedie Fest is
                held annually to celebrate this local food.</p>
            <p>The festival usually is held in August, as features local food venders, hot air balloons, and
                live music.</p>
            <ul>
                <li><i>(Last Year country singer Shaboozy performed, most known for his song 'A Bar Song')</i>
                </li>
            </ul>
            <p>Visitors from all over the state, and even some from Pennsylvania, come up to enjoy the live
                music and food.</p>
        </div>
        <figure class="image-div">
            <img src="assets/images/spiedie-fest-balloons.webp" alt="Hot Air Balloons at Spiedie Fest">
            <figcaption>Hot air balloons at Spiedie Fest (PressConnects)</figcaption>
        </figure>
    </div>
</section>

<?php

include_once("assets/inc/footer.inc.php");

?>