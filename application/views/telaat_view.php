<div class="container">
    <h2>Telaat</h2>
   <?php
   $attributes = array('class' => 'form-horizontal');
   echo form_open('telaat', $attributes);?>
        <div class="form-group">
            <label class="control-label col-sm-2" for="usr">Voornaam:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="voornaam" id="usr" placeholder="Voornaam">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="usr">Achternaam:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="achternaam" id="usr" placeholder="Achternaam">
            </div>
        </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="usr">Leerlingnummer:</label>
        <div class="col-sm-10">
            <input class="form-control" name="leerling" id="usr" placeholder="Leerling nummer" onkeypress="return isNumberKey(event)">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="usr">Mentor:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="mentor" id="usr" pattern="[0-9]" placeholder="Mentor">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="comment">Reden:</label>
        <div class="col-sm-10">
        <textarea class="form-control" rows="5" id="comment" name="comments"></textarea>
    </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Print</button>
        </div>
    </div>

<?php $string = "</div></div>";

echo form_fieldset_close($string);?>
<script src="js/custom.js"></script>
