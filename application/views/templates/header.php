<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AlbedaDigitaal Portfolio</title>
    <!-- Circle menu -->
    <?php echo link_tag('css/component2.css'); ?>
    <?php echo link_tag('css/normalize.css'); ?>
    <?php echo link_tag('css/demo.css'); ?>

    <!-- Bootstrap -->
    <?php echo link_tag('css/bootstrap.min.css'); ?>

    <!-- Custom CSS -->
    <?php echo link_tag('css/custom.css'); ?>


    <script type="text/javascript" src="<?php echo base_url();?>js/modernizr-2.6.2.min.js" ></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/jquery.js" ></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js" ></script>

    <script>
        $(document).ready(function()
        {
            $('.menuButton').click(function () {
                $('.menu').animate({'left': '0px'}, 400);
            });
            $(".closeButton").click(function () {
                $(".menu").animate({"left": "-200px"}, 400);
            });
        });

    </script>
    <script type="text/javascript">
        /* When the user clicks on the button,
         toggle between hiding and showing the dropdown content */
        function drop_menu() {
            document.getElementById("dropdown").classList.toggle("show");
        }

        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {

                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-7243260-2']);
        _gaq.push(['_trackPageview']);
        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
</head>
<body>
<div class="firstpage">
<!-- Top Navigation -->
<img class="menuButton" src="../../img/openmenu.png" width="30px" height="30px">

<div class="menu">
    <img class="closeButton" src="../../img/closebtn_white.png" width="30px" height="30px">
    <div class="dropmenu">
        <p class="dropmenu_items"><a href="#">Albeda Digitaal</a></p>
        <ul>
            <li class="dropmenu_items"><a href="#">Printen</a></li>
        </ul>
    </div>
</div>
<!-- End top navigation -->

