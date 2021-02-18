<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8" />

<script type="text/javascript" src="https://code.jquery.com/jquery.js"></script>

              <script>

               (function($){ 
                $.fn.rotate = function(options){
                var defaults = {
                duration: 1,
                delay: 0,
                iteration_count: 1,
                direction: "normal",
                timing_function: "linear"
            };
                   if (options === undefined){options = defaults;}
                   if (options.duration === undefined) {options.duration = defaults.duration;}
                   if (options.delay === undefined) {options.delay = defaults.delay;}
                   if (options.iteration_count === undefined) {options.iteration_count = defaults.iteration_count;}
                   if (options.direction === undefined) {options.direction = defaults.direction;}
                   if (options.timing_function === undefined) {options.timing_function = defaults.timing_function;}
 
 
             animation = "animation"+Math.floor((Math.random() * 1000000000000000) + 1);
 
                 this.find(".style-rotate").remove();
 
 //Normal
 this.append("<style class='style-rotate'>@keyframes " + animation + " {from {transform: rotate(0deg);} to {transform: rotate(360deg);}}</style>");
 this.css("animation-name", ""+animation+"");
 this.css("animation-duration", ""+options.duration+"s");
 this.css("animation-delay", ""+options.delay+"s");
 this.css("animation-iteration-count", ""+options.iteration_count+"");
 this.css("animation-direction", ""+options.direction+"");
 this.css("animation-timing-function", ""+options.timing_function+"");
 //webkit: Chrome, Safari, Opera 
 this.append("<style class='style-rotate'>@-webkit-keyframes " + animation + " {from {-webkit-transform: rotate(0deg);} to {-webkit-transform: rotate(360deg);}}</style>");
 this.css("-webkit-animation-name", ""+animation+"");
 this.css("-webkit-animation-duration", ""+options.duration+"s");
 this.css("-webkit-animation-delay", ""+options.delay+"s");
 this.css("-webkit-animation-iteration-count", ""+options.iteration_count+"");
 this.css("-webkit-animation-direction", ""+options.direction+"");
 this.css("-webkit-animation-timing-function", ""+options.timing_function+"");
 //moz: firefox 
 this.append("<style class='style-rotate'>@-moz-keyframes " + animation + " {from {-moz-transform: rotate(0deg);} to {-moz-transform: rotate(360deg);}}</style>");
 this.css("-moz-animation-name", ""+animation+"");
 this.css("-moz-animation-duration", ""+options.duration+"s");
 this.css("-moz-animation-duration", ""+options.delay+"s");
 this.css("-moz-animation-iteration-count", ""+options.iteration_count+"");
 this.css("-moz-animation-direction", ""+options.direction+"");
 this.css("-moz-animation-timing-function", ""+options.timing_function+"");
 };
})(jQuery);

 $(function(){
  
  $("#btn").on("click", function(){
   $("#box-4").rotate({duration: 1, delay: 0, direction: "alternate", iteration_count: 4, timing_function: "ease-in-out"});
  });
 });
</script>

<style>
 
 
 #box-4{
  width: 150px;
  height: 150px;
  background-color: yellow;
 }
</style>

</head>
<body>
<center>
<button id="btn">Rotar!!</button>
<div id="box-4"></div>
</center>
<center>
            <div class="links">
                    <a href="{{ route('inicio') }}">Inició</a>
                </div>
                </center>
</body>
</html>