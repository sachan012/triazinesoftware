<!-- Required JS -->
<script type="text/javascript" src="<?php echo base_url();?>siteassets/js/jquery.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<script type="text/javascript" src="<?php echo base_url();?>siteassets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>siteassets/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>siteassets/js/wow.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>siteassets/js/animate.js"></script>
<script type="text/javascript" src="https://cdn.goodfirms.co/assets/js/widget.min.js"></script>
<script type="text/javascript" src="https://widget.clutch.co/static/js/widget.js"></script>
 <!--owl carousel 2.3.4 link for comment box start-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<!--header scroll and wow animation script start-->
 <script type="text/javascript" src="<?php echo base_url();?>siteassets/js/jquery.backstretch.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>siteassets/js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>siteassets/js/scripts.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>siteassets/js/function.js"></script>
 <!--Form validation js -->
<script src="<?php echo base_url();?>siteassets/js/jquery.form-validator.min.js"></script>
<script>
    $.validate({modules : 'date'});
</script>
 <script>
    $(".plus").click(function() {
        $(this).toggleClass("minus");
    })
</script>
      
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
<script>
  $(document).ready(function() {   
        if($.cookie("popup_1_2") == null) {
          //setTimeout(function(){$('#myModal').modal('show')}, 10000);
          $.cookie("popup_1_2", "2");
     }
   });
</script>
 <!-- Modal Style & scripts Finish here  -->
 <script type="text/javascript">
        $(window).on("scroll", function() {
            if ($(window).scrollTop() > 50) {
                $(".header").addClass("active");
            } else {
                //remove the background property so it comes transparent again (defined in your css)
                $(".header").removeClass("active");
            }
        });

        var wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 0,
            mobile: true,
            live: true,
            callback: function(box) {
            },
            scrollContainer: null,
            resetAnimation: true,
        });
        wow.init();
    </script>
     <script>
        function openprodDevCycleStep(evt, cycleStepName) {
            var i, tabproductdevContent, tabproductdevlist;
            tabproductdevContent = document.getElementsByClassName("tabproductdevContent");
            for (i = 0; i < tabproductdevContent.length; i++) {
                tabproductdevContent[i].style.display = "none";
            }
            tabproductdevlist = document.getElementsByClassName("tabproductdevlist");
            for (i = 0; i < tabproductdevlist.length; i++) {
                tabproductdevlist[i].className = tabproductdevlist[i].className.replace(" active", "");
            }
            document.getElementById(cycleStepName).style.display = "block";
            evt.currentTarget.className += " active";
            var color = $("." + cycleStepName + "_icon").css("background-color");
            $(".aboutus_section .Union").css('background-color', color);
            $(".aboutus_section .productdev-blk div#" + cycleStepName + ":after").css('background-color', color);
        }

        // Get the element with id="defaultproductdevOpen" and click on it
        document.getElementById("defaultproductdevOpen").click();

        function openSol(evt, solName) {
            var i, tabSolContent, tabSolLinks;
            tabSolContent = document.getElementsByClassName("tabSolContent");
            for (i = 0; i < tabSolContent.length; i++) {
                tabSolContent[i].style.display = "none";
            }
            tabSolLinks = document.getElementsByClassName("tabSolLinks");
            for (i = 0; i < tabSolLinks.length; i++) {
                tabSolLinks[i].className = tabSolLinks[i].className.replace(" active", "");
            }
            document.getElementById(solName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpenSol" and click on it
        document.getElementById("defaultOpenSol").click();
    </script>
   
    <script>
        var total;
        function getRandom(){return Math.ceil(Math.random()* 20);}
        function createSum(){
            var randomNum1 = getRandom(),
              randomNum2 = getRandom();
          total =randomNum1 + randomNum2;
          $( "#question" ).text( randomNum1 + " + " + randomNum2 + "=" );
          $("#check").val('');
          checkInput();
        }

        function checkInput(){
            var input = $("#check").val(),
              slideSpeed = 200,
              hasInput = !!input,
              valid = hasInput && input == total;
            $('#message').toggle(!hasInput);
            $('button[type=submit]').prop('disabled', !valid);
            $('#success').toggle(valid);
            $('#fail').toggle(hasInput && !valid);
        }

        $(document).ready(function(){
          //create initial sum
          createSum();
          // On "reset button" click, generate new random sum
          $('button[type=reset]').click(createSum);
          // On user input, check value
          $( "#check" ).keyup(checkInput);
        });
    </script>