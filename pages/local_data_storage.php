<!DOCTYPE html>
<html>
    <head> 
        <meta charset="utf-8">
        <title>FrogenOgre</title>    
        <link href="http://frogenogre.com/css/styles.css" type="text/css" rel="stylesheet"/>
        
        <style>
            input[type=range] {
    /*removes default webkit styles*/
    -webkit-appearance: none;
    
    /*fix for FF unable to apply focus style bug */
    border: 1px solid white;
    
    /*required for proper track sizing in FF*/
    width: 300px;
}
input[type=range]::-webkit-slider-runnable-track {
    width: 200px;
    height: 10px;
    background: black;
    border: none;
    border-radius: 3px;
}
input[type=range]::-webkit-slider-thumb {
    -webkit-appearance: none;
    border: none;
    height: 50px;
    width: 100px;
    
    background: dodgerblue;
    margin-top: -20px;
}
input[type=range]:focus {
    outline: none;
}
input[type=range]:focus::-webkit-slider-runnable-track {
    background: black;
}

input[type=range]::-moz-range-track {
    width: 300px;
    height: 5px;
    background: #ddd;
    border: none;
    border-radius: 3px;
}
input[type=range]::-moz-range-thumb {
    border: none;
    height: 16px;
    width: 16px;
    border-radius: 50%;
    background: goldenrod;
}

/*hide the outline behind the border*/
input[type=range]:-moz-focusring{
    outline: 1px solid white;
    outline-offset: -1px;
}

input[type=range]::-ms-track {
    width: 300px;
    height: 5px;
    
    /*remove bg colour from the track, we'll use ms-fill-lower and ms-fill-upper instead */
    background: transparent;
    
    /*leave room for the larger thumb to overflow with a transparent border */
    border-color: transparent;
    border-width: 6px 0;

    /*remove default tick marks*/
    color: transparent;
}
input[type=range]::-ms-fill-lower {
    background: #777;
    border-radius: 10px;
}
input[type=range]::-ms-fill-upper {
    background: #ddd;
    border-radius: 10px;
}
input[type=range]::-ms-thumb {
    border: none;
    height: 16px;
    width: 16px;
    border-radius: 50%;
    background: goldenrod;
}
input[type=range]:focus::-ms-fill-lower {
    background: #888;
}
input[type=range]:focus::-ms-fill-upper {
    background: #ccc;
}
        </style>
        <script>
            
        
        Storage.prototype.setObj = function(key, obj) {
          return this.setItem(key, JSON.stringify(obj));
        };
        Storage.prototype.getObj = function(key) {
         return JSON.parse(this.getItem(key));
       };       
         
         var times = [];
         
            new Date(year, month, day, hours, minutes, seconds);
        
        function timePunch(){   
                                          
            var d = new Date();
            times.push(d);            
            var newPunch = "<ul>";                
                for (index = 0; index < times.length; index++) {
                    if ((index % 2) !== 1) {
                    newPunch += "<li>" + "In " + times[index] + "</li>";
                }
                else {
                    newPunch += "<li>" + "Out " + times[index] + "</li>";
                }
                }
                newPunch += "</ul>";                           
                localStorage.setObj("timePunch", newPunch);
                document.getElementById("displayTime").innerHTML = localStorage.getObj("timePunch");
            
        }             
        
        function storage()
	{
            
            document.getElementById("displayTimeAgain").innerHTML = "Stored Time: " + localStorage.getObj("timePunch");
            var old = localStorage.getObj("timePunch");
            localStorage.setObj("timepunch", old);
	}
        
        
	</script>
    </head>  
    <body>         
        <header>            
            <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>
        </header>
    <main> 
        <h1>Local Data Storage</h1>                
        
        <input type="range" min="0" max="50" value="0" step="50" onchange="timePunch()"/> 
        <br><br><br>               
       
        <div id="displayTime"></div> 
        <button onclick="storage()">Check</button>
        <div id="displayTimeAgain"></div>
        
        
        
        <footer>
                      
        </footer>
    </main>
    
        
    </body>
</html>