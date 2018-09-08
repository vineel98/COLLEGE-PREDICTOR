
<html>
    <head>
        <style>
            #log{
                display: none;
                padding:10px;
                color:white;
                background-color:steelblue;
                width:50%;
            }
            #flip{
                border:solid;
                padding:10px;
                background-color:green;
                text-align: center;
                width:50%;
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>      
        $(document).ready(function(){
            var m=$("#flip");
            m.mouseenter(function(){
                                    $("#log").slideDown("slow");
                                   });
            m.mouseleave(function(){
                                    $("#log").slideUp("slow");
            });
});
        </script>
    </head>
    <body>
        <div id="flip">
            click for drop down
        </div>
        <div id="log">
            this is drop down 
        </div>
       
    </body>
</html>
