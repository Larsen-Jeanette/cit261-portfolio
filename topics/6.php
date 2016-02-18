<!DOCTYPE html>
<html>
  <head>
    <title>CSS3 animations. transitions, and transformaionts</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
  </head>
  <body>
  	
    <header id='page_header'>
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/navigation.php';  ?>   
    </header>

  <main> 
    
    <h1>CSS3 transitions</h1>

    <div class="boxGray"></div>

  <hr>

      <p>Shoot the bird by hovering over it.</p>
      <div class="box2">
      </div>

  <hr>

      <div class="box"></div>

  <hr>

    <h2>What are transitions?</h2>

      <p>They are an effect that can change defined property. Instead of normal, instant, behavior they happen over a specified amount of time.</p>
      <p>These properties are as follows:</p>

      <ul>
        <li>transition-property</li>
        <li>transition-duration (only required)</li>
        <li>transition-timing-function</li>
        <li>transition-delay (optional)</li>
      </ul>

    <h3>Transition-property</h3>

      <p>Sets what property will be applied to: all, none, or list</p>

      <p>Transition-property: height;</p>

    <h3>Transition-duration</h3>

      <p>List of time, in seconds or milliseconds, to say how long the transition will take. (default is 0, and negative act like 0).</p>

      <p>Example: transition-duration: 1s;</p>

    <h3>Transition-timing-function</h3>

      <p>Specifies how fast/slow something changes of the duration. Can use list of predefined terms or set a custom function.</p>

      <p>Predefined: ease, linear, ease-in, ease-out, or ease-in-out <a href="http://www.w3schools.com/cssref/tryit.asp?filename=trycss3_transition-timing-function2">http://www.w3schools.com/cssref/tryit.asp?filename=trycss3_transition-timing-function2</a></p>

      <p>Bezier curve specifies the 3 different parts of the curve.</p>

      <p>Example curve: transition-timing-function: cubic-bezier (0.6, 0.1, 0.15, 0.8);</p>

    <h3>Transition-delay</h3>

      <p>This one is optional, and can set how long the transition is delayed from starting. Can be negative, 0 or more. If negative, will start when triggered but it will look like it's already through the process a certain amount.</p>

      <p>Example: transition-delay: 3s;</p>

    <h3>Shorthand</h3>

      <p>Combine all 4 together, however only the duration is required.</p>

      <p>Example: transition: background-color 2s linear 3s;</p>


    <h2>What is Animatable?</h2>

      <p><a href="https://www.w3.org/TR/css3-transitions/#animatable-properties-">https://www.w3.org/TR/css3-transitions/#animatable-properties-</a></p>


    <h2>Browser support?</h2>

      <p><a href="http://caniuse.com/#feat=css-transitions">http://caniuse.com/#feat=css-transitions</a></p>


    <h2>Resources</h2>

      <p><a href="http://www.css3maker.com/css3-transition.html">http://www.css3maker.com/css3-transition.html</a></p>

      <p><a href="http://www.css3.info/preview/css3-transitions/">http://www.css3.info/preview/css3-transitions/</a></p>    
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