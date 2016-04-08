<!-- Top Navigation -->
<div id="wrapper">
    <div id="sidebar-wrapper">
        <img class="closeButton" src="<?php echo base_url("img/closebtn_white.png")?>" width="30px" height="30px">
        <ul class="sidebar-nav sidebar_items">
            <li class="sidebar-brand">
                <a href="#">Start Bootstrap</a>
            </li>
            <li>
                <a href="#">Dashboard</a>
            </li>
            <li>
                <a href="#">Shortcuts</a>
            </li>
            <li>
                <a href="#">Overview</a>
            </li>
            <li>
                <a href="#">Events</a>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#">Services</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
            <img class="menuButton" src="<?php echo base_url("img/openmenu.png")?>" width="30px" height="30px">
    </div>
</div>
<!-- End div wrapper -->

<a href="#menu-toggle" class="btn btn-default" id="menu-toggle" style="float:right; margin-top:670px;">Toggle Menu</a>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e){
        e.preventDefault();
        $(".menubutton").click(function(){
           $("#wrapper").addClass("toggled");
        });
    });
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>