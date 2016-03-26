<!DOCTYPE html>
<html>
  <head>
    <title>DOM Manipulation Using createElement, appendChild, insertBefore, removeChild, etc.</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
  </head>
  <body>
  	
    <header id='page_header'>
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/navigation.php';  ?>   
    </header>

  <main> 	
    
    <h1>5. DOM Manipulation Using createElement, appendChild, insertBefore, removeChild, etc.</h1>

    <q>...The HTML DOM is a standard for how to get, change, add, or delete HTML elements.</q>

    <p>Browsers make a map, or tree of all the HTML on the web page and define them as objects</p>

    <p>Then Javascript can:</p>
      <ul>
        <li>Change the elements, attributes, CSS styles</li>
        <li>Add new elements or attributes</li>
        <li>Remove existing elements and attributes</li>
        <li>Create new HTML events</li>
        <li>React to all existing HTML events in the page</li>
      </ul>



    <h3>What are the pieces of DOM?</h3>

    <p>property: is a value that you can get or set (think, "What do I want to change?")</p>

    <p>method: an action you can do (think, "What change do I want to make?")</p>

    <p>Ex: (without the script tags so that you can see it in the text)</p>
    <p>id="demo"></p>

    <p>script</p>
    <p>document.getElementById("demo").innerHTML = "Hello World!";</p>
    <p>/script</p>

    <p>property: innerHTML -- this can be used to get or change any HTML element *it’s super useful</p>
    <p>method: getElementById -- good way is  to target a specific HTML element is to use an id that is assigned to it</p>

    <h3>How to Find What You Want to Change</h3>
      <ul>
        <li>Id</li>
        <li>tag name</li>
        <li>class</li>
        <li>CSS selectors</li>
        <li>HTML object collections</li>
      </ul>

    <h3>Put it all together</h3>

    <p>What is the strongest bone in the human body?</p>

    <button onclick="quizCard()">Quiz Me</button>

    <script>
    function quizCard() {
        var quiz1 = document.createElement("IMG");
        quiz1.setAttribute("src", "/image/femur_quiz.jpg");

        quiz1.setAttribute("alt", "Femur Card");
        document.body.appendChild(quiz1);
      
        var quiz_answer = document.createElement('p');
      quiz_answer.className = 'quiz-card'; // styled with transformation
      quiz_answer.innerHTML = 'Femur';
      
      document.body.insertBefore(quiz_answer, quiz1); 
    }
    </script>

	</main>
  </body>
</html>