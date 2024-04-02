<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript Syntax</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
        }
        h1 {
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        .syntax-example {
            background-color: #f4f4f4;
            padding: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
    <button><a href="javasc.php">previous</a></button>
    <button><a href="js2.php">Next</a></button>
        <h1>JavaScript Syntax</h1>
        
        <h2>Basic Syntax</h2>
        <p>JavaScript syntax is the set of rules that defines how JavaScript programs are constructed.</p>
        <p>Here are some basic syntax rules:</p>
        <ul>
            <li>JavaScript statements are separated by semicolons (;).</li>
            <li>JavaScript is case-sensitive.</li>
            <li>Comments can be single-line (//) or multi-line (/* */).</li>
        </ul>

        <h2>Variables</h2>
        <p>In JavaScript, variables are containers for storing data values.</p>
        <div class="syntax-example">
            <p><strong>Example:</strong></p>
            <pre>
                <code>
// Declare a variable
var x;

// Assign a value to the variable
x = 5;

// Declare and initialize a variable
var y = 10;
                </code>
            </pre>
        </div>

        <h2>Conditional Statements</h2>
        <p>Conditional statements are used to perform different actions based on different conditions.</p>
        <div class="syntax-example">
            <p><strong>Example:</strong></p>
            <pre>
                <code>
var age = 18;

if (age &gt;= 18) {
    console.log("You are an adult.");
} else {
    console.log("You are a minor.");
}
                </code>
            </pre>
        </div>

        <h2>Functions</h2>
        <p>Functions are blocks of code designed to perform a particular task.</p>
        <div class="syntax-example">
            <p><strong>Example:</strong></p>
            <pre>
                <code>
function greet(name) {
    return "Hello, " + name + "!";
}

var greeting = greet("John");
console.log(greeting);
                </code>
            </pre>
        </div>

        <h2>Loops</h2>
        <p>Loops are used to repeatedly execute a block of code.</p>
        <div class="syntax-example">
            <p><strong>Example:</strong></p>
            <pre>
                <code>
for (var i = 0; i &lt; 5; i++) {
    console.log("Count: " + i);
}
                </code>
            </pre>
        </div>

        <h2>Objects</h2>
        <p>Objects are containers for named values called properties and methods.</p>
        <div class="syntax-example">
            <p><strong>Example:</strong></p>
            <pre>
                <code>
var person = {
    firstName: "John",
    lastName: "Doe",
    age: 30,
    fullName: function() {
        return this.firstName + " " + this.lastName;
    }
};

console.log(person.fullName());
                </code>
            </pre>
        </div>
        
    </div>
</body>
</html>