
<div class="container">
    <h3>Projectpagina</h3>
    <div class="row">
        <div class="col-lg-3 project1">
            <h4>Te laat systeem</h4>
            <img src="<?php echo base_url("img/nfcimg.jpg")?>" height="200" width="230">
            <p></p>
            <p>Er moet een systeem komen waarmee te laat briefjes sneller en makkelijker worden gemaakt.</p>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-3 project2">
            <h4>Sample Project</h4>
            <img src="<?php echo base_url("img/placeholder_project.png")?>" height="200" width="230">
            <p></p>
            <p>Sample project to fill up the page</p>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-3 project3">
            <h4>Sample Project</h4>
            <img src="<?php echo base_url("img/placeholder_project.png")?>" height="200" width="230">
            <p></p>
            <p>Sample project to fill up the page</p>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
       $('.project1').click(function(){
           $(location).attr('href', '../');
       });
    });
</script>