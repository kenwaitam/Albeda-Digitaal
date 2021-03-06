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

    <!-- Sidebar -->
    <?php echo link_tag('css/simple-sidebar.css');?>
    <!-- Bootstrap -->
    <?php echo link_tag('css/bootstrap.min.css'); ?>

     <!-- Voor image -->
    <?php echo link_tag('css/lightbox.css'); ?>

    <!-- Custom CSS -->
    <?php echo link_tag('css/custom.css'); ?>


    <script type="text/javascript" src="<?php echo base_url();?>js/modernizr-2.6.2.min.js" ></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/jquery.js" ></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js" ></script>
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
    <!-- Lightbox  -->
    <script type="text/javascript" src="<?php echo base_url();?>js/lightbox.js" ></script>
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

    <!-- Voor lightbox -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('.fancybox').fancybox();
            $("#fancybox-manual-a").click(function() {
                $.fancybox.open('1_b.jpg');
            });
        });
        // Change title type, overlay closing speed
            $(".fancybox-effects-a").fancybox({
                helpers: {
                    title : {
                        type : 'outside'
                    },
                    overlay : {
                        speedOut : 0
                    }
                }
            });
    </script>
</head>

</script>
