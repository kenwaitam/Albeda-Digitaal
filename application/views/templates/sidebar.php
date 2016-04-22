<!-- Top Navigation -->
<img class="menuButton" src="<?php echo base_url("img/openmenu.png")?>" width="30px" height="30px">
<div id="wrapper">
    <div id="sidebar-wrapper">
        <img class="closeButton" src="<?php echo base_url("img/closebtn_white.png")?>" width="30px" height="30px">
        <ul class="sidebar-nav sidebar_items">
            <li class="sidebar-brand" id="home">
                <a href="#">Albeda Digitaal</a>
            </li>
            <li id="deelnemers"><a href="#">Deelnemers</a></li>
            <li id="fotos"><a href="#">Foto's</a></li>
            <li id="videos"><a href="#">Videos</a></li>
			<?php if (isset($_SESSION['username'])){
            echo '<li id="documenten"><a href="#">Documenten</a></li>';
			}?>
            <li id="contact"><a href="#">Contact</a></li>
            <?php if (isset($_SESSION['username'])){
                echo '<li id="admin"><a href="'.base_url().'pages/admin">Admin paneel</a></li>';
            }?>
            <li><a href="#">Printen</a></li>
			<?php if (!isset($_SESSION['username'])){
				$login_path = site_url('login/index');
				echo '<li id="contact"><a href="'.$login_path.'">Login</a></li>';
			}
			else{
				$logout_path = site_url('login/logout');
				echo '<li id="contact"><a href="'.$logout_path.'">Logout</a></li>';
			}?>
            <li id="projectpagina"><a href="<?php echo base_url();?>">Project overzicht</a></li>
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

<!-- Jquery scrolldown animations one pager -->
<script type="text/javascript">
    //    Animations scroll to div with jquery
    $(document).ready(function(){
        $('#home').click(function(){
            $('html, body').animate({
                scrollTop: $(".home").offset().top
            }, 1500);
            return false;
        });

        $('#deelnemers').click(function(){
            $('html, body').animate({
                scrollTop: $(".deelnemers").offset().top
            }, 1500);
            return false;
        });

        $('#fotos').click(function(){
            $('html, body').animate({
                scrollTop: $(".fotos").offset().top
            }, 1500);
            return false;
        });

        $('#videos').click(function(){
            $('html, body').animate({
                scrollTop: $(".videos").offset().top
            }, 1500);
            return false;
        });

        $('#documenten').click(function(){
            $('html, body').animate({
                scrollTop: $(".documenten").offset().top
            }, 1500);
            return false;
        });

        $('#contact').click(function(){
            $('html, body').animate({
                scrollTop: $(".contact").offset().top
            }, 1500);
            return false;
        });
    });
    //      End animations
</script>
