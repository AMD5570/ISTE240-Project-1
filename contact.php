<!-- 
Author: Austin deHaan
The contact page for the Greene, NY website.
-->

<?php

$pageTitle = '- Contact';

include_once("assets/inc/header.inc.php");

?>

<!-- main content -->
<h1>Greene, NY <span class="pageTitle">Contact</span></h1>
<h2>Please tell us about your visit! :</h2>

<hr>
<!-- the feedback form -->
<form method="GET" action="#" name="feedbackForm">

    <label for="people">How many people did you travel with? :</label>
    <input type="number" step="1" id="people" name="people" min="0">

    <label for="dateVisited">When did you visit? :</label>
    <input type="date" id="dateVisited" name="dateVisited">

    <!-- fieldset for radio buttons -->
    <fieldset>
        <legend>Favorite Place</legend>

        <div>
            <input type="radio" id="parks" name="favoritePlace" value="parks" checked>
            <label for="parks">One of the Parks</label>
        </div>

        <div>
            <input type="radio" id="town" name="favoritePlace" value="townSquare">
            <label for="town">Town Square</label>
        </div>

        <div>
            <input type="radio" id="restaurants" name="favoritePlace" value="restaurants">
            <label for="restaurants">Restaurants</label>
        </div>

        <div>
            <input type="radio" id="museum" name="favoritePlace" value="museum">
            <label for="museum">Museums</label>
        </div>
    </fieldset>

    <!-- thoughts -->
    <label for="thoughts">Any other thoughts? :</label>
    <input type="text" id="thoughts" name="thoughts">

    <!-- draggable range input, 0 - 10 -->
    <label for="rating">What's your <i>overall</i> rating of this town? :</label>
    <div class="rangeContainer">
        <p>0</p><input type="range" id="rating" name="rating" min="0" max="10">
        <p>10</p>
    </div>

    <!--  submit the info -->
    <input type="submit" value="Submit Feedback" id="submitButton">

</form>

<?php

include_once("assets/inc/footer.inc.php");

?>