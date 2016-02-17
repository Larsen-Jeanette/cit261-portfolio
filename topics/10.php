<!DOCTYPE html>
<html>
  <head>
    <title>Manipulating CSS Class Properties Using JavaScript</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
  </head>
  <body>
  	   
    <header id='page_header'>
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/navigation.php';  ?>   
    </header>

  <main> 
    
  	<h1>10. Manipulating CSS Class Properties Using JavaScript</h1>

<h1>Style Directly</h1> 

<a href="http://codepen.io/jnetlar4/pen/JGeGOX">Codepen example</a>

<p class="title">Add style</p> 
  
<p id="fact">JavaScript can change the style of an HTML element.</p>

<script type="text/javascript">
  var myElement = document.querySelector("#fact");
  myElement.style.backgroundColor = "yellow";

  var myElements = document.querySelectorAll(".light");
   
  for (var i = 0; i < myElements.length; i++) {
      myElements[i].style.backgroundColor = "#C8C8C8";
  }

  var myElements = document.querySelectorAll(".title");
   
  for (var i = 0; i < myElements.length; i++) {
      myElements[i].style.fontWeight = "bold";
  }

  // // var theDropDown = document.querySelector("#dropDown");
  // // theDropDown.classList.add("disableMenu");

  var theDropDown = document.querySelector("#dropDown");
  theDropDown.classList.remove("disableMenu");
</script>
 
  <table>
  <tr>
    <td>John</td>
    <td>Smith</td> 
    <td>36</td>
  </tr>
  <tr class="light">
    <td>Evelyn</td>
    <td>Richards</td> 
    <td>80</td>
  </tr>    
  <tr>
    <td>Joseph</td>
    <td>Jacobson</td> 
    <td>94</td>
  </tr> 
  <tr class="light">
    <td>Mary</td>
    <td>Andews</td> 
    <td>14</td>
  </tr>     
</table>

<p class="title">Remove style with CSS and JavaScript</p>
<!-- <ul id="dropDown"> -->
<ul class="disableMenu" id="dropDown">
    <li>One</li>
    <li>Two</li>
    <li>Three</li>
    <li>Four</li>
    <li>Five</li>
    <li>Six</li>
</ul>

<hr>    

<h2>Setting CSS Styles using JavaScript</h2>

<p>You can use JavaScript to directly set a style on an element, and you can also use JavaScript to add or remove class values on elements which will alter which style rules get applied.</p>

<h3>Why would you want to use JavaScript?</h3>

<ul>
  <li>You want items to change in style as people do things, not just when they load.</li>
  <li>While CSS does offer pseudo selectors (ex: hover), they are not numerous and limited.</li>
</ul>

<h3>Two ways to style with JS</h3>

<ul>
  <li>Set a CSS property directly on the element</li>
  <li>Remove or add class values, which can add or take away style rules</li>
<ul>

<!-- <h3>Style Directly</h3>

You can select only one by using a class or id and targeting it
You can select all assigned to a class and write a for loop to change it
*Pay attention to how things are written in CSS and JavaScript. Ex. font-weight in CSS is fontWeight in JavaScript. They also may need px or em to make it work.

Add or Remove Classes

Can use classList API (see resources for more info)
Use add or remove
Useful with CSS that is already set
Example Code

http://codepen.io/jnetlar4/pen/JGeGOX

Resources

https://www.kirupa.com/html5/setting_css_styles_using_javascript.htm

https://developer.mozilla.org/en-US/docs/Web/API/Document -->
  
  </main>
  </body>
</html>