<!DOCTYPE html>
<html>
  <head>
    <title>CSS3 animations</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
  </head>
  <body>
  	
    <header id='page_header'>
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/navigation.php';  ?>   
    </header>

  <main> 
    
  	<h1>6. CSS3 animations</h1>

<h1 class="titleEnter">Application Title</h1>
<p>Refresh the page to see it enter again -- will be adding JavaScript later on.</p>

<hr>

<h3>CSS Animations</h3>

<ul>
  <li>An animation lets an element gradually change from one style to another.</li>
  <li>You can change as many CSS properties you want, as many times you want.</li>
  <li>To use CSS3 animation, you must first specify some keyframes for the animation.</li>
  <li>Keyframes hold what styles the element will have at certain times.</li>
  <li>Many Webkit based browsers still use the -webkit-prefixed version of both animations, keyframes, and transitions</li>
  <li>You NEED to specify duration because the default is 0 and so no effect will take place</li>
</ul>

/* The element to apply the animation to */
div {
    width: 100px;
    height: 100px;
    background-color: red;
    animation-name: example;
    animation-duration: 4s;
}

@keyframes example {
  from {background-color: red;}
  to {background-color: yellow;}
}

/* (from = 0% / start and to = 100% / complete) 
Can also use %, ex: */
@keyframes example {
  0%   {background-color: red;}
  25%  {background-color: yellow;}
  50%  {background-color: blue;}
  100% {background-color: green;}
}

/* Can change position at the same time, ex: */
@keyframes example {
  0%   {background-color: red; left:0px; top:0px;}
  25%  {background-color: yellow; left:200px; top:0px;}
  50%  {background-color: blue; left:200px; top:200px;}
  75%  {background-color: green; left:0px; top:200px;}
  100% {background-color: red; left:0px; top:0px;}
}

You can also add a delay, ex: animation-delay: 2s;
Or a number of times something will happen, exs: animation-iteration-count: 3;  or infinite;
Flip things around, ex: animation-direction: reverse; or alternate;
Use the speed curve (bezier curve) as used before in transitions: ease; linear; ease-in; ease-out; ease-in-out; or cubic-bezier(n,n,n,n);

 Shorthand
div {
    animation-name: example; /*used from @keyframe*/
    animation-duration: 5s;
    animation-timing-function: linear;
    animation-delay: 2s;
    animation-iteration-count: infinite;
    animation-direction: alternate;
}

into this instead:

div {
    animation: example 5s linear 2s infinite alternate;
}

<!--   <hr>

  	<h2>1-25-16 / Tisha</h2>
  		<div class="element"></div> -->

  </main>
  </body>
</html>