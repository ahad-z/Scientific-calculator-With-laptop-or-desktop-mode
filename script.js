 var output = document.getElementById('output-value');
var oldHistory = document.getElementById('history-value');


function setValue(e) {
    if (oldHistory.innerHTML.split('').length < 16) {
        
        if (oldHistory.innerHTML == '0') {
            
            oldHistory.innerHTML = '';
        }
        oldHistory.innerHTML += e;
    }

}



function Clear() {

    oldHistory.innerHTML = "0";

    output.innerHTML = "";
}

function back() {

    var val = oldHistory.innerHTML;

    var result = val.substr(0, val.length - 1)

    oldHistory.innerHTML = result;
}

function percent() {

    var par = oldHistory.innerHTML;

    var percnetage = par / 100;

    output.innerHTML = percnetage;

}

function process() {
    var s = oldHistory.innerHTML;
    var sum = eval(s);
    output.innerHTML = sum;
}

function calculate(get) {


    switch (get) {

        case 1:

            var Abs = oldHistory.innerHTML;

            var Absolute = Math.abs(Abs);

            output.innerHTML = Absolute;

            break;

        case 2:

            var Ran = oldHistory.innerHTML;

            var Random = Math.round(Ran);

            output.innerHTML = Random;

            break;

        case 3:

            var sin = oldHistory.innerHTML;

            var Sin = Math.sin(conDegree(sin));

            output.innerHTML = Sin;

            break;

        case 4:

            var cos = oldHistory.innerHTML;

            var Cos = Math.cos(conDegree(cos));

            output.innerHTML = Cos;

            break;

        case 5:

            var tan = oldHistory.innerHTML;

            var Tan = Math.tan(conDegree(tan));

            output.innerHTML = Tan;

            break;

        case 6:

            var log = oldHistory.innerHTML;

            var Log = Math.log(log);

            output.innerHTML = Log;

            break;

        case 7:

            var floor = oldHistory.innerHTML;

            var Floor = Math.floor(floor);

            output.innerHTML = Floor;

            break;
        case 8:

            var ceil = oldHistory.innerHTML;

            var Ceil = Math.ceil(floor);

            output.innerHTML = Ceil;

            break;

        case 9:

            var sqr = oldHistory.innerHTML;

            var SQRT = Math.sqrt(sqr);

            output.innerHTML = SQRT;

            break;

        case 10:

            var random = oldHistory.innerHTML;

            var Random = Math.random(Random);

            output.innerHTML = Random;

            break;

            // case 11: // alert(Math . max(getvalue.value, prompt('Enter a number', '0')) + 'Is Greter The number'); // break; // case 12: // alert(Math . min(getvalue.value, prompt('Enter a number', '0')) + 'Is less The number'); // break;
        case 13:

            var e = oldHistory.innerHTML;

            var E = Math.pow(e, Math.E);

            output.innerHTML = E;

            break;

        case 14:

            var pi = oldHistory.innerHTML;

            var PI = Math.PI * (pi);

            output.innerHTML = PI;

            break;

    }

    function conDegree(x) {

        return x * 22 / 7 / 180;

    }

}