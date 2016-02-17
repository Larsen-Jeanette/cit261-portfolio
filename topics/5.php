<!DOCTYPE html>
<html>
  <head>
    <title>CSS3 transitions</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
  </head>
  <body>
  	
    <header id='page_header'>
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/navigation.php';  ?>   
    </header>

  <main> 	
    
  	<h1>5. CSS3 transitions</h1>

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

	</main>

  </body>
</html>