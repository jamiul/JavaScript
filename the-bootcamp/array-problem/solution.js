console.log("CONNECTED");

// Reverse an Array
function printReverse(ara) {
    for(var i = ara.length - 1; i >= 0; i--){
        console.log(ara[i]);
    }
}
printReverse(["4","5","8","7"]);

// check uniform

function isUniform(arr) {
    var first = arr[0];
    for(var i = 1; i<arr.length; i++){
        if (arr[i] !== first){
            return false;
        }
    }
    return true;
}

// sumArray
function sumArray(arr) {
    var total = 0;
    arr.forEach(function (element) {
        total += element;
    });
    return total;
}
sumArray([3,5,9]);

// max()

function maxArray(arr) {
    var num = arr[0];
    for(var i = 1; i<arr.length; i++){
        if(arr[i] > num){
            num = arr[i];
        }
    }
    return num;
}

maxArray(["1","2","3"]);