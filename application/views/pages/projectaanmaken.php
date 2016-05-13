<script>

function addRow()
{
    var row2 = "<br><input type='text' name='deelnemer2' class='form-control' id='deelnemer2' placeholder='Naam deelnemer'>";
    $(".deelnemer1").append(row2);
}
</script>


<?php echo validation_errors(); ?>

<?php echo form_open('pages/projectaanmaken'); ?>

<div class="container">
    <h3>Project aanmaken</h3>
    <div class="col-lg-4">
        <form role="form">
            <div class="form-group">
                <label for="projectname">Projectnaam:</label>
                <input type="text" name="projectnaam" class="form-control" id="projectnaam" placeholder="Projectnaam">
            </div>
            <div class="form-group">
                <label for="">Projectbeschrijving:</label>
                <textarea name="projectbeschrijving" class="form-control" rows="4" cols="50" placeholder="Beschrijving van het project"></textarea>
            </div>
            <div class="form-group deelnemer1">
                <label for="">Deelnemer toevoegen:</label>
                <input type="text" name="deelnemer1" class="form-control" id="deelnemer1" placeholder="Naam deelnemer">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
    <div class="col-lg-1 plus_icon">
        <img onclick="addRow()" id="plus_img" src="<?php echo base_url("img/plus_icon.ico")?>" height="50" width="50">
    </div>
</div>

