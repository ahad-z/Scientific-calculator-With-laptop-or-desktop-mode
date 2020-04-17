<!DOCTYPE html>
<html>
    <head>
        <title>Simple Calculator!</title>
        <meta charset="UTF-8">
        <meta name="description" content="Free Web tutorials">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <meta name="author" content="John Doe">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div id="container">
            <div id="calculator">
                <div id="result">
                    <div id="history">
                        <p id="history-value">0</p>
                    </div>
                    <div id="output">
                        <p id="output-value"></p>
                    </div>
                </div>
                <div id="keyboard">
                    <button class="operator" id="clear" onclick="Clear()">AC</button>
                    <button class="operator" id="backspace" onclick="back() ">DEL</button>
                    <button class="operator" onclick="percent()" id="%">%</button>
                    <button class="operator" onclick="setValue('/')" id="/">&#247;</button>
                    <input type="button" value="7" name="btn" class="number" onclick="setValue('7')">
                    <input type="button" value="8" name="btn" class="number" onclick="setValue('8')">
                    <input type="button" value="9" name="btn" class="number" onclick="setValue('9')">
                    <button class="operator" onclick="setValue('*')" id="*">&times;</button>
                    <input type="button" value="4" name="btn" class="number" onclick="setValue('4')">
                    <input type="button" value="5" name="btn" class="number" onclick="setValue('5')">
                    <input type="button" value="6" name="btn" class="number" onclick="setValue('6')">
                    <button class="operator" onclick="setValue('-')" id="-">-</button>
                    <input type="button" value="1" name="btn" class="number" onclick="setValue('1')">
                    <input type="button" value="2" name="btn" class="number" onclick="setValue('2')">
                    <input type="button" value="3" name="btn" class="number" onclick="setValue('3')">
                    <button class="operator" id="+" onclick="setValue('+')">+</button>
                    <input type="button" class="number" value="Abs" onclick="calculate(1)">
                    <input type="button" value="0" name="btn" class="number" onclick="setValue('0')">
                    <input type="button" class="number" value="R" onclick="calculate(2)">
                    <button class="operator" onclick="process()" id="=">=</button>
                    <input type="button" class="number" value="Sign" onclick="calculate(3)">
                    <input type="button" class="number" value="Cos" onclick="calculate(4)">
                    <input type="button" class="number" value="Tan" onclick="calculate(5)">
                    <input type="button" class="number" value="Log" onclick="calculate(6)">
                    <input type="button" class="number" value="Floor" onclick="calculate(7)">
                    <input type="button" class="number" value="Ceil" onclick="calculate(8)">
                    <input type="button" class="number" value="Sqrt" onclick="calculate(9)">
                    <input type="button" class="number" value="Ra" onclick="calculate(10)">
                    <input type="button" class="number" value="Max" onclick="calculate(11)">
                    <input type="button" class="number" value="min" onclick="calculate(12)">
                    <input type="button" class="number" value="E" onclick="calculate(13)">
                    <input type="button" class="number" value="pi" onclick="calculate(14)">
                    <button class="operator" style="margin-left: 120px; margin-top: -20px;" onclick="setValue(',')" id=",">,</button>
                    <button class="operator" style="margin-left: 170px; margin-top: -65px;" onclick="setValue('.')" id=".">.</button>
                </div>
            </div>
        </div>
    </body>
    <script src="./script.js"></script>
</html>
