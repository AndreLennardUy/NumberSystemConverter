<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Number System Converter</title>
</head>
<style>
    #title{
        text-align: center;
        margin-top: 50px;
    }

    #numSys{
        max-width: 500px;
        margin: auto;
    }
</style>
<body class="container">
    <div class="container" id="title">
        <h1>Number System Converter</h1>
    </div>
    <br/>
    <div class="row">
        <div class="col" id="numSys">
            <label for="fromSystem">From System:</label>
            <select class="form-select" id="fromSystem">
                <option value="dec">Decimal</option>
                <option value="bin">Binary</option>
                <option value="oct">Octal</option>
                <option value="hex">Hexadecimal</option>
            </select>
        <br/>  
            <label for="toSystem">To System:</label>
            <select class="form-select" id="toSystem">
                <option value="dec">Decimal</option>
                <option value="bin">Binary</option>
                <option value="oct">Octal</option>
                <option value="hex">Hexadecimal</option>
            </select>
            <br/>
        </div>
        <div class="row" id="Value">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="numberInput" placeholder="Enter a number" pattern="^[0-9A-Fa-f]*$">
                <label for="floatingInput">Enter a Number:</label>
            </div>
            <button type="button" class="btn btn-primary"  onclick="convert()">Convert</button>
        </div>
        
        <p id="result"></p>
    </div>  
    
    
    <script>
        /// Function that convert the inputted value into the specific Number system
        function convert() {
            /// get all element from html element ID
            const numberInput = document.getElementById("numberInput").value;
            const fromSystem = document.getElementById("fromSystem").value;
            const toSystem = document.getElementById("toSystem").value;
            
            /// here store the result which will be reused for the showing of final result
            let result;
            
            // parse the inputed string into int and into the number system based on the 
            // selected option
            switch (fromSystem) {
                case "dec":
                    result = parseInt(numberInput, 10);
                    break;
                case "bin":
                    result = parseInt(numberInput, 2);
                    break;
                case "oct":
                    result = parseInt(numberInput, 8);
                    break;
                case "hex":
                    result = parseInt(numberInput, 16);
                    break;
                default:
                    result = "Invalid input";
                    break;
            }
            
            // this switch case convert the given input into the specified number system with the function
            // toString(numberSystemInt) where numberSystemInt is depending on which the user choose 
            switch (toSystem) {
                case "dec":
                    result = result.toString(10);
                    break;
                case "bin":
                    result = result.toString(2);
                    break;
                case "oct":
                    result = result.toString(8);
                    break;
                case "hex":
                    result = result.toString(16).toUpperCase();
                    break;
                default:
                    result = "Invalid output system";
                    break;
            }
            
            // print the Result
            document.getElementById("result").textContent = `Converted value: ${result}`;
        }
    </script>
</body>
</html>
