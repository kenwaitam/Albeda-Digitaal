<!-- Top Navigation -->
<img class="menuButton" src="<?php echo base_url("img/openmenu.png")?>" width="30px" height="30px">
<div id="wrapper">
    <div id="sidebar-wrapper">
        <img class="closeButton" src="<?php echo base_url("img/closebtn_white.png")?>" width="30px" height="30px">
        <ul class="sidebar-nav sidebar_items">
            <li class="sidebar-brand" id="home">
                <a href="admin">Projectoverzicht</a>
            </li>
            <li id="fotos"><a href="project_aanmaken">Project aanmaken</a></li>
            <li id="fotos"><a href="project_bewerken">Project bewerken</a></li>
            <li id="fotos"><a href="teLaatOverzicht">Te laat overzicht</a></li>
        </ul>
    </div>
</div>
<!-- End div wrapper -->


<!-- Menu Toggle Script -->
<script>
    $(".closeButton").click(function(){
        $("#sidebar-wrapper").css("width","0px");
    });
    $(".menuButton").click(function(){
        $("#sidebar-wrapper").css("width","250px");
    });
</script>



