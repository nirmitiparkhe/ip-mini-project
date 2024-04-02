<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced JavaScript</title>
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
    <button><a href="js1.php">Previous</a></button>
        <h1>Advanced JavaScript</h1>
        
        <h2>Arrays</h2>
        <p>Arrays are special variables that can hold more than one value at a time.</p>
        <div class="syntax-example">
            <p><strong>Example:</strong></p>
            <pre>
                <code>
var fruits = ["Apple", "Banana", "Orange"];
console.log(fruits[0]); // Outputs: Apple
console.log(fruits.length); // Outputs: 3
                </code>
            </pre>
        </div>

        <h2>Prototypes</h2>
        <p>JavaScript is a prototype-based language, meaning objects can inherit properties and methods from other objects.</p>
        <div class="syntax-example">
            <p><strong>Example:</strong></p>
            <pre>
                <code>
// Constructor function
function Person(firstName, lastName) {
    this.firstName = firstName;
    this.lastName = lastName;
}

// Adding a method to the prototype
Person.prototype.fullName = function() {
    return this.firstName + " " + this.lastName;
};

// Creating an object
var person1 = new Person("John", "Doe");
console.log(person1.fullName()); // Outputs: John Doe
                </code>
            </pre>
        </div>

        <h2>ES6 Features</h2>
        <p>ES6 (ECMAScript 2015) introduced several new features to JavaScript.</p>
        <div class="syntax-example">
            <p><strong>Example:</strong></p>
            <pre>
                <code>
// Arrow functions
const add = (a, b) => a + b;

// Template literals
const name = "John";
console.log(Hello, ${name}!);

// Destructuring assignment
const [x, y] = [1, 2];
console.log(x); // Outputs: 1

// Spread syntax
const arr1 = [1, 2, 3];
const arr2 = [...arr1, 4, 5];
console.log(arr2); // Outputs: [1, 2, 3, 4, 5]
                </code>
            </pre>
        </div>

        <h2>Asynchronous JavaScript</h2>
        <p>Asynchronous JavaScript allows code to run without blocking other code.</p>
        <div class="syntax-example">
            <p><strong>Example:</strong></p>
            <pre>
                <code>
// Using setTimeout
console.log("Start");
setTimeout(() => {
    console.log("Inside setTimeout");
}, 2000);
console.log("End");
// Outputs: Start, End, Inside setTimeout
                </code>
            </pre>
        </div>

        <h2>DOM Manipulation</h2>
        <p>The Document Object Model (DOM) allows JavaScript to manipulate the HTML document.</p>
        <div class="syntax-example">
            <p><strong>Example:</strong></p>
            <pre>
                <code>
// Changing text content
document.getElementById("demo").innerHTML = "Hello, World!";

// Adding a new element
var para = document.createElement("p");
var node = document.createTextNode("This is new.");
para.appendChild(node);

var element = document.getElementById("div1");
element.appendChild(para);
                </code>
            </pre>
        </div>
        
    </div>
</body>
</html>