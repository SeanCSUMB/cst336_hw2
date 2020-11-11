<!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset="utf-8">
        <title>Sean Wilson's Slot Machine Simulator</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono&display=swap" rel="stylesheet">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js"></script>
        <script src="js/scripts.js"></script>
        
        
        <script>
        /*global $*/
            $(document).ready(function(){
                
                
                $("#leverpull").on("click", function(){
                    
                    spinSlots();
                    
                });
                
            })
        </script>
    </head>
    <body class="text-center">
        
        <h1>Sean Wilson's Slot Machine!</h1>
        
        <header>Welcome to my slot machine! Select a bet, and then click on the machine's lever to spin. Payouts will be displayed below the machine. If you run out of money, reload the page!</header><hr>
        
        <div id="betbuttons"><input type="radio" name="bets" id="50" value="50"> <label for="50">50 Otter Coins</label>
        <input type="radio" name="bets" id="100" value="100"> <label for="100">100 Otter Coins</label>
        <input type="radio" name="bets" id="250" value="250"> <label for="250">250 Otter Coins</label>
        <input type="radio" name="bets" id="500" value="500"> <label for="500">500 Otter Coins</label></div>
        <br><span id="betValidator"></span>
        <div id="machineContainer">
        <img src="img/sml.png" alt="The left part of the slot machine.">
        <span id="leftReel"><img src="img/sm11.png" alt="Left reel of the slot machine."></span>
        <span id="midReel"><img src="img/sm22.png" alt="Middle reel of the slot machine."></span>
        <span id="rightReel"><img src="img/sm33.png" alt="Right reel of the slot machine."></span>
        <img src="img/smr.png" alt="The lever on the slot machine." class="lever" id="leverpull"></div>
        <div id="result"></div><br>
        <div id="money">You have 2000 Otter Coins!</div><br><div id="spins">Total spins: 0</div>
        
        
        <footer>
            <hr>CST336 Internet Programming. Copyright Sean Wilson &copy;2020. Slot machine graphics also by Sean Wilson.<br>
            <a href="http://www.csumb.edu"><img src="img/csumb.png" alt ="The CSUMB Logo" width="200"></a>
        </footer>
        
        
    </body>
</html>