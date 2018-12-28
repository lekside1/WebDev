<?php
// Header
    $page_title = "Faruq's Chalet Form";
    include('header.php');
?>

<!-- MAIN PAGE-->
    <form id="mainForm" action="search.php" method="POST">
        <!-- Renter(s) info -->
        <fieldset class="field_set1">
            <legend id="red" class="size">Renter(s) Information</legend>
            <label class="lightred">How many people will come to this chalet?</label>
            <label><input type="number" name="people" /></label>
            <br /><br />
            <label class="lightred">Smoker?</label>
            <input type="radio" name="smoker" value="Yes" />Yes
            <input type="radio" name="smoker" value="No" />No
            <br /><br />
            <label class="lightred">Any pets?</label><br />
            <input type="checkbox" name="animal" value="cat" />Cat(s)<br />
            <input type="checkbox" name="animal" value="dog" />Dog(s)<br />
            <input type="checkbox" name="animal" value="other" />Other
            <label class="lightred">Specify:</label>
            <input type="text" name="specify" size="20"><br />
            <input type="checkbox" name="animal" value="nopets" />No Pets
        </fieldset>
        <br />
        <!-- What are you looking for -->
        <fieldset class="field_set2">
            <legend id="blue" class="size">What are you looking for?</legend>
            <ul>
                <li><label class="lightblue">Number of Bathrooms/Bedrooms</label><br />
                    <input type="checkbox" name="rooms" value="half" /> &frac12;
                    <input type="checkbox" name="rooms" value="onethird" /> &frac13;
                    <input type="checkbox" name="rooms" value="onefourth" /> &frac14;
                    <input type="checkbox" name="rooms" value="twofifth" id="bath" /> &frac25;
                    <br /><br />
                </li>
                <li><label class="lightblue">Do you have prefered locations?</label><br />
                    <input type="checkbox" name="location" value="mont-tremblant" />Mont Tremblant
                    <input type="checkbox" name="location" value="laurentides" />Laurentides
                    <input type="checkbox" name="location" value="magog" />Magog
                    <input type="checkbox" name="location" value="gatineau" />Gatineau
                    <input type="checkbox" name="location" value="quebec-city" id="qc" />Quebec City
                    <input type="checkbox" name="location" value="dont-care" />Don't care
                    <br /><br />
                </li>
                <li><label class="lightblue">Price Range/Weekend<br />
                        <select name="price">
                            <option value="$500">&lt;&dollar;500</option>
                            <option value="$1000">&gt;&dollar;500</option>
                            <option value="$2000">&gt;&dollar;1000</option>
                            <option value="no-limit">No Limit</option>
                        </select>
                    </label>
                    <br /><br />
                </li>
                <li><label class="lightblue">Would be nice to have</label><br />
                    <input type="checkbox" name="preference" value="fire-place" />Fire place
                    <input type="checkbox" name="preference" value="laundromat" />Laundromat in building
                    <input type="checkbox" name="preference" value="dishwasher" />Dishwasher
                    <input type="checkbox" name="preference" value="bbq" />BBQ
                    <input type="checkbox" name="preference" value="parking" />Output Parking
                    <input type="checkbox" name="preference" value="balcony" />Balcony
                    <br /><br />
                </li>
            </ul>
        </fieldset>

        <!-- Expert suggestion mode, hidden at first, will be showned it checked type matches-->
        <fieldset id="field_set3">
            <legend id="blue_color" class="size">Expert Suggestion</legend>
            <ul>
                <li class="bold"> It is very difficult to find a cottage with this size at Quebec City</li>
            </ul>
        </fieldset>
        <p class="bold">Let's see what we can find...</p>
        
        <input type="button" value="Search" id="search" />
        <input type="reset" value="Start Over" id="startOver" />
    </form>

<!-- Javascript -->
 <script src="Exercise4.js"></script> 

<?php
// Footer
    include('footer.php');
?>
