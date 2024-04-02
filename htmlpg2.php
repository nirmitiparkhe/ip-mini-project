<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>htmlcourse</title>
<link rel="stylesheet" href="stylec2.css">
<style>
    body, h1, h2, p, img, iframe {
margin: 0;

padding: 0;
}
/* Apply a background color and some spacing to the body */
body {
background-color: #a2a8d3;
font-family: "Lucida Grande", Verdana, Helvetica, Arial, sans-serif;
line-height: 1.6;
}
.whole {
max-width: 800px;
margin: 20px auto;
background-color: #e4f1fe;
padding: 20px;
border-radius: 8px;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.c1 h2 {
text-align: center;
margin-top: 20px;
font-family: cursive;
}
/* Center the headings and change the font */
.c3 h2
{
text-align: center;
font-family: cursive;
margin-top: 20px;
}
.c4 h2{
text-align: center;
font-family: cursive;
margin-top: 20px;
}
.c2 h2 {
text-align: center;
font-family: cursive;
margin-top: 20px;
}
</style>
</head>
<body>
<div class ="whole">
<div class = "c1">
<button><a href="course.php">Previous</a></button> 
<button><a href="htmlpg3.php">Next</a></button>
<h2>HTML ELEMENTS</h2>
<p>
The HTML element is everything from the start tag to the end tag.
HTML elements can be nested (this means that elements can contain other elements).
All HTML documents consist of nested HTML elements.
HTML elements with no content are called empty elements.
The break tag defines a line break, and is an empty element without a closing tag
</p>
</div>
<div class ="c2">
<p>
HTML tags are not case sensitive.
The HTML standard does not require lowercase tags, but W3C recommends lowercase in
HTML, and demands lowercase for stricter document types like XHTML.
</p></div>
<div class="c3">
<h2>HTML Page Structure-</h2>
<p>
The basic structure of an HTML page is shown below. It contains the essential
building-block elements (i.e. doctype declaration, HTML, head, title, and body elements) upon
which all web pages are created.
An HTML document can be created using an HTML text editor. Save the text file using the
“.html” or “.htm” extension. Once saved as an HTML document, the file can be opened as a
webpage in the browser.
</p>
</div>
<div class = "c4">
<h2>HTML Attributes</h2>
<p>
HTML Attribute facilitates the meta-information related to the HTML Elements. It is always
defined with the start tag and usually specified name/value pairs like name=”value”. Every name

has some value that must be written within quotes. The use of Single or Double Quotes is
always suggested while defining the Attributes, especially, when the value of an attribute itself
contains double quotes, then it is need to use the single quotes.<br>
<h3>HTML alt Attribute</h3>
This is an alt Attribute that is used to show or display something if the primary attribute i.e.,
the <img> tag, fails to display the value assigned to it. This can also be used to describe the
image to a developer who is actually sitting at the coding end.<br>
<h3>HTML width and height Attribute</h3>
width and height Attribute is used to adjust the width and height of an image(in pixels).<br>
<h3>HTML id Attribute</h3>
The id attribute is used to provide a unique identification of an element. Situations may
arise when we need to access a particular element that may have a similar name as the others.
In that case, we provide different IDs to various elements so that they can be uniquely
accessed. The properties extending the use of id are generally used in CSS, which we will be
learning later.<br>
<h3>HTML title Attribute</h3>
The title attribute is used to explain an element by hovering the mouse over it. The
behavior differs with various elements but generally, the value is displayed while loading or
hovering the mouse pointer over it.<br>
<h3>HTML href Attribute</h3>
The href attribute is used to specify a link to any address. This attribute is used along with
the <a> tag. The link put inside the href attribute gets linked to the text displayed inside the<a>
tag.<br>
<h3>HTML lang attribute</h3>
The language is declared with the lang attribute. Declaring a language can be important for
accessibility applications and search engines.<br>
</p>
</div>
</div>
<button><a href="course.html">Previous</a></button><button><a
href="course3.html">Next</a></button>
</body>
</html>