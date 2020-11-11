/*global $*/

var money = 2000;
var spins = 0;

function checkBet(bet) {

    //return 0 if the player did not select a bet
    if (bet == undefined) {
        $("#betValidator").html("You forgot to select a bet first!");
        return 0;
    }
    //also return 0 if the player lacks the funds for the spin
    if (money < bet)
    {
        $("#betValidator").html("You can't afford that bet!");
        return 0;
    }
    $("#betValidator").html("");
    
    return 1;
    
}

//randomly pick a result. The possible outcomes are put into an array and then shuffled. After that, the value at the top is returned.
function spinReel(){
    let options = ["1", "1", "2", "3", "3"];
    options = _.shuffle(options);
    return options[0];
}

function winCheck(reel1, reel2, reel3)
{
    //see if the reels match
    if (reel1 == reel2 && reel1 == reel3)
    {
        //player won, pick the win amount
        if(reel1 == "1")
        {
            return 3;
        }
        if(reel1 == "2")
        {
            return 7;
        }
        return 2;
    }
    //the player lost
    return 0;
}

function spinSlots() {
    
    //get the bet amount
    let bet = $("input[name=bets]:checked").val();
    
    //ensure the bet is valid
    if (checkBet(bet) == 0) {
        return;
    }
    
    money -= bet;
    ++ spins;
    
    //get random results for the reels
    let leftRes=spinReel();
    let midRes=spinReel();
    let rightRes=spinReel();
    
    
    //update the reels with the results
    $("#leftReel").html(`<img src="img/sm1${leftRes}.png" alt="Left reel of the slot machine.">`);
    $("#midReel").html(`<img src="img/sm2${midRes}.png" alt="Middle reel of the slot machine.">`);
    $("#rightReel").html(`<img src="img/sm3${rightRes}.png" alt="Right reel of the slot machine.">`);
    
    //see if the player won
    let winRate = winCheck(leftRes, midRes, rightRes);
    
    //dish out the winnings, if any, and update the text
    if (winRate == 0)
    {
        $("#result").html("You lost!");
        $("#result").attr("class", "text-danger");
    }else
    {
        let winnings = Number(bet) * winRate;
        $("#result").html(`You win! You won ${winnings} Otter Coins!!`);
        $("#result").attr("class", "text-success");
        money += winnings;
    }
    $("#money").html(`You have ${money} Otter Coins!`);
    $("#spins").html(`Total spins: ${spins}`)
}
