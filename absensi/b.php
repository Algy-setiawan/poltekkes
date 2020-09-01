<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Judul Halaman Saya</title>
    <style>
      

     #slidercontainer { 
      position: relative; 
      overflow: hidden; 
      background: #000 
     }

     #slidercontainer { 
      width: 768px;
      height: 341px; 
     }

     #css3slider img { 
      width: 768px;
      height: 341px; 
      float: left;
     }

     #css3slider { 
      position: absolute; 
      width:3900px;  
      -webkit-animation-name:slider;
      -webkit-animation-duration:20s;
      -webkit-animation-timing-function: ease-in-out;
      -webkit-animation-iteration-count:infinite;
      -moz-animation-name:slider;
      -moz-animation-duration:20s;
      -moz-animation-timing-function: ease-in-out;
      -moz-animation-iteration-count:infinite;
      -o-animation-name:slider;
      -o-animation-duration:20s;
      -o-animation-timing-function: ease-in-out;
      -o-animation-iteration-count:infinite;
      animation-name:slider;
      animation-duration:20s;
      animation-timing-function: ease-in-out;
      animation-iteration-count:infinite;
    }

    @-webkit-keyframes slider {     
      0% { left: 0; opacity: 0; }     
      2% { opacity: 1; }     
      20% { left: 0; opacity: 1; }     
      21% { opacity: 0; }     
      24% { opacity: 0; }     
      25% { left: -768px; opacity: 1; }       
      45% { left: -768px; opacity: 1; }     
      46% { opacity: 0; }     
      48% { opacity: 0; }     
      50% { left: -1536px; opacity: 1; }     
      70% { left: -1536px; opacity: 1; }     
      72% { opacity: 0; }     
      74% { opacity: 0; }    
      75% { left: -2304px; opacity: 1; }   	
      95% { left: -2304px; opacity: 1; }   	
      97%  { left: -2304px; opacity: 0;}   	
      100% { left: 0; opacity: 0; }
    } 

    @-moz-keyframes slider {     
      0% { left: 0; opacity: 0; }     
      2% { opacity: 1; }     
      20% { left: 0; opacity: 1; }     
      21% { opacity: 0; }     
      24% { opacity: 0; }     
      25% { left: -768px; opacity: 1; }       
      45% { left: -768px; opacity: 1; }     
      46% { opacity: 0; }     
      48% { opacity: 0; }     
      50% { left: -1536px; opacity: 1; }     
      70% { left: -1536px; opacity: 1; }     
      72% { opacity: 0; }     
      74% { opacity: 0; }    
      75% { left: -2304px; opacity: 1; }   	
      95% { left: -2304px; opacity: 1; }   	
      97%  { left: -2304px; opacity: 0;}   	
      100% { left: 0; opacity: 0; }
    } 

    @-o-keyframes slider {     
      0% { left: 0; opacity: 0; }     
      2% { opacity: 1; }     
      20% { left: 0; opacity: 1; }     
      21% { opacity: 0; }     
      24% { opacity: 0; }     
      25% { left: -768px; opacity: 1; }     
      45% { left: -768px; opacity: 1; }     
      46% { opacity: 0; }     
      48% { opacity: 0; }     
      50% { left: -1536px; opacity: 1; }     
      70% { left: -1536px; opacity: 1; }     
      72% { opacity: 0; }     
      74% { opacity: 0; }    
      75% { left: -2304px; opacity: 1; }   	
      95% { left: -2304px; opacity: 1; }   	
      97%  { left: -2304px; opacity: 0; }   	
      100% { left: 0; opacity: 0; }
    } 

    @keyframes slider {     
      0% { left: 0; opacity: 0; }     
      2% { opacity: 1; }     
      20% { left: 0; opacity: 1; }     
      21% { opacity: 0; }     
      24% { opacity: 0; }     
      25% { left: -768px; opacity: 1; }     
      45% { left: -768px; opacity: 1; }     
      46% { opacity: 0; }     
      48% { opacity: 0; }     
      50% { left: -1536px; opacity: 1; }     
      70% { left: -1536px; opacity: 1; }     
      72% { opacity: 0; }     
      74% { opacity: 0; }    
      75% { left: -2304px; opacity: 1; }   	
      95% { left: -2304px; opacity: 1; }   	
      97%  { left: -2304px; opacity: 0; }   	
      100% { left: 0; opacity: 0; }
    }

    #css3slider:hover { 
      -webkit-animation-play-state:paused; 
      -moz-animation-play-state:paused; 
      -o-animation-play-state:paused; 
      animation-play-state:paused; }
    }

    #css3slider img { 
      float: right; 
    }

    #slidercontainer:after { 
      content: ""; 
      font-size: 150px; 
      position: absolute; 
      z-index: 12; 
      color: rgba(255,255,255, 0); 
      left: 300px; top: 80px; 
      -webkit-transition: 1s all ease-in-out; 
      -ms-transition: 1s all ease-in-out; 
      -moz-transition: 1s all ease-in-out; 
      -o-transition: 1s all ease-in-out; 
      transition: 1s all ease-in-out; 
    }

    #slidercontainer:hover:after { 
      color: rgba(255,255,255, 0.6);  
    }
     </style>
  </head>
<body>
 <div id=slidercontainer>
  <div id=css3slider>
    <img src="images/angka-01.jpg" alt="Square-tailed kitae">
	<img src="images/angka-02.jpg" alt="Square-tailed kitaae">
	<img src="images/angka-03.jpg" alt="Square-taileds kite">
	<img src="images/angka-04.jpg" alt="Square-tailed dkite">
	<img src="images/angka-02.jpg" alt="Square-taileaad kitaae">
	<img src="images/angka-05.jpg" alt="Square-tailedaa kite">
	
  </div>
 </div>
</body>
</html>