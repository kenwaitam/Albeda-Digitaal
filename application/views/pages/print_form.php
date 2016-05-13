<script src="<?php echo base_url("js/jquery.PrintArea.js")?>" type="text/JavaScript" language="javascript"></script>
<div class="container-fluid">
    <div class="col-sm-1"></div>
    <div id="telaatbrief" class="col-sm-11 telaat-brief">
            <div class="col-sm-12 row">
                <div class="col-sm-12">
                    <h2 class="">Te laat Brief</h2>
                </div>
            </div>
            <div class="col-sm-12 row">
                <div class="col-sm-3">
                    <label>Naam:</label>
                </div>
                <div class="col-sm-9">
                    <span><?php echo $this->firstname." ".$this->insertion." ".$this->lastname; ?></span>
                </div>
            </div>
            <div class="col-sm-12 row">
                <div class="col-sm-3">
                    <label>Studentnummer:</label>
                </div>
                <div class="col-sm-9">
                    <span><?php echo $this->studentnumber; ?></span>
                </div>
            </div>
            <div class="col-sm-12 row">
                <div class="col-sm-3">
                    <label>Mentor:</label>
                </div>
                <div class="col-sm-9">
                    <span><?php echo $this->mentor; ?></span>
                </div>
            </div>
            <div class="col-sm-12 row">
                <div class="col-sm-3">
                    <label>Reden:</label>
                </div>
                <div class="col-sm-9">
                    <span><?php echo $this->reason; ?></span>
                </div>
            </div>
    </div>
</div>
<script>
    var mode = 'iframe'; // popup
    var close = mode == "popup";
    var options = { mode : mode, popClose : close};
    $( "#telaatbrief" ).printArea( options );
//    window.location.replace("http://stackoverflow.com");
</script>

