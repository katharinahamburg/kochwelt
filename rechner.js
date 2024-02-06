function lasagne(){
    let arrayOnePor = ['125', '75', '0.25', '0.125', '7.5', '10', '0.25', '0.25', '0.5', '0.25'];
    newAmount(arrayOnePor);
} 

function bolognese(){
    let arrayOnePor = ['0.25', '50', '50', '125', '125', '125', '0.25', '0.25'];
    newAmount(arrayOnePor);
} 

function salat(){
    let arrayOnePor = ['0.25', '0.5', '125', '0.5', '50', '0.25', '0.25', '31.25'];
    newAmount(arrayOnePor);
} 


function knoedel(){
    let arrayOnePor = ['50', '7.5', '0.25', '0.25', '20', '25', '12.5'];
    newAmount(arrayOnePor);
} 


function newAmount(newPortion){
    let portion = +document.getElementById("getAmount").value;

    if (portion <1) {
        alert("Bitte mindestens 1 eingeben.")
    }
    else {
        for(i=0; i<newPortion.length ; i++){
            let result = portion * newPortion[i];
            document.getElementById(`z${i}`).innerHTML = result;
        }

}
}
