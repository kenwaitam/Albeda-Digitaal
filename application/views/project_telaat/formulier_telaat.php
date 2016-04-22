<div class="container-fluid container-telaatFormulier">
       <h2 class="col-sm-offset-1">Te laat Formulier</h2>
       <?php echo form_open('', 'class="form-horizontal telaat-formulier"'); ?>
            <?php if(!empty($this->error_message)){
                echo '<div class="col-sm-offset-1 col-sm-12">
                            <p class="error-message-custom">'.$this->error_message.'</p>
                      </div>';
            }?>
                <div class="form-group">
                    <label class="control-label col-sm-offset-1 col-sm-1" for="usr">Voornaam:</label>
                    <div class="col-sm-3">
                        <?php echo form_input_req('firstname',''.$this->firstname.'','class="form-control col-sm-offset-1 input-sm"'); ?>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="control-label col-sm-offset-1 col-sm-1" for="usr">Tussenvoegsel:</label>
                    <div class="col-sm-3">
                        <?php echo form_input('insertion',''.$this->insertion.'','class="form-control col-sm-offset-1 input-sm"'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-offset-1 col-sm-1" for="usr">Achternaam:</label>
                    <div class="col-sm-3">
                        <?php echo form_input_req('lastname',''.$this->lastname.'','class="form-control col-sm-offset-1 input-sm"'); ?>
                    </div>
                </div>
            <div class="form-group">
                <label class="control-label col-sm-offset-1 col-sm-1" for="usr">Leerlingnummer:</label>
                <div class="col-sm-3">
                    <?php echo form_input_req('studentnumber',''.$this->sudentnumber.'','class="form-control col-sm-offset-1 input-sm"'); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-offset-1 col-sm-1" for="usr">Mentor:</label>
                <div class="col-sm-3">
                     <?php echo form_input_req('mentor',''.$this->mentor.'','class="form-control col-sm-offset-1 input-sm"'); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-offset-1 col-sm-1" for="comment">Reden:</label>
                <div class="col-sm-3">
                 <?php echo form_textarea('reason',''.$this->reason.'','class="form-control col-sm-offset-1  input-sm"'); ?>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-10">
                    <?php echo form_submit('submit', 'Print', 'class="btn btn-lg btn-primary"'); ?>
                
                </div>
            </div>
    <?php echo form_close(); ?>
</div>
<script src="js/custom.js"></script>
