<!-- 
Author: Austin deHaan
The page detailing The Catskill Mountains for the Greene, NY website.
-->

<?php

$pageTitle = '- Location - Catskills';

include_once("assets/inc/header.inc.php");

?>

<!-- main content -->
<a href="location.php">
    <p class="return">Back to Location</p>
</a>
<h1>The Catskill Mountains <span class="pageTitle">Location</span></h1>
<hr>

<section class="introduction">
    <div class="container">
        <div class="text-div">
            <p>The Catskill Mountains are a mountain range located in southeastern New York, known for their
                stunning natural beauty and
                outdoor activity opportunities.</p>
            <p>They are a popular destination for hiking, skiing, fishing, and camping, which attracts people
                from
                all over the state.</p>
        </div>
    </div>
</section>

<section class="mountains">
    <h2>Mountains</h2>
    <div class="container">
        <div class="text-div">
            <p>The Catskill Mountains are home to several popular mountains, including:</p>
            <ul>
                <li><b>Slide Mountain</b> - the highest mountain in the Catskills</li>
                <li><b>Hunter Mountain</b> - known for its many ski resorts</li>
                <li><b>Overlook Mountain</b> - famous for its hiking trails and breathtaking views once you
                    reach the top</li>
            </ul>
            <p>While some trails on these mountains are easy for beginners, others are more challenging and
                require a couple hours to
                a whole day to complete.
            </p>
        </div>
        <figure class="image-div">
            <img src="assets/images/overlook-mtn.jpg" alt="View at the top of Overlook Mountain">
            <figcaption>View at the top of Overlook Mountain (taken by Austin deHaan)</figcaption>
        </figure>
    </div>
</section>

<?php

include_once("assets/inc/footer.inc.php");

?>