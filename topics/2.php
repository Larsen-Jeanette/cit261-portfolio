<!DOCTYPE html>
<html>
  <head>
    <title>Java Script Object Creation, Properties, Methods, Instantiation</title>
  </head>
  <body>
    
    <header id='page_header'>
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/navigation.php';  ?>   
    </header>

  <main> 
    
    <h1>2. Java Script Object Creation, Properties, Methods, Instantiation</h1>

    <h2>How to make objects, assign properties and methods</h2>

      <p>JavaScript objects are containers for named values (called properties) and methods!</p>


    <h3>Making a JavaScript Variable</h3>

      <p>An example would be: var book = "Atlas"; The example below is also using javascript to define the variable and then access it, printing it here:</p>

      <p id="demo1"></p>

      <script>
      var book = "Atlas";
      document.getElementById("demo1").innerHTML = book;
      </script>



    <h3>Making a JavaScript Object</h3>

      <p>Javascript objects can have multiple properties, for example: var book = {type:"Atlas", genre:"resource", section:"D8"}</p>
      <p>The example below is using these definitions and accessing book.genre and printing it out here:</p>
      
      <p id="demo2"></p>

      <script>
      var book = {type:"Atlas", genre:"resource", section:"D8"};
      document.getElementById("demo2").innerHTML = book.genre;
      </script>




    <h3>Make an Object literal</h3>

      <p>An object literal is a comma-separated list of name-value pairs wrapped in curly braces. 
      They are used to make things tidy and avoid using globals.</p>

      <p>An example would be var book = {type:"Atlas", genre:"resource", section:"D8"};</p>




    <h3>Accesscing JavaScript Objects</h3>

      <p>Note that there are 2 different ways, using property.propertyvalue or property["propertyvalue"].</p>
      <p>Ex: book.genre or book["genre"]</p>



    <h3>Actions, or Methods, can be done on objects</h3>

      <p>These are stored inside of properties as function definitions.</p>
      <p>Take for example, D8-C is actually a function that is combining two properties together. The function is then going to return them as one.</p>
      <p>var book = {type:"Atlas", genre:"resource", section:"D8", row:"C", location:function() {return this.section + "-" + this.row;}};</p>

      <p>The JavaScript is working below:</p>

      <p id="demo3"></p>

        <script>
        var book = {type:"Atlas", genre:"resource", section:"D8", row:"C", location:function() {return this.section + "-" + this.row;}};

        document.getElementById("demo3").innerHTML =
        "An " + book.type + " is a part of the " + book["genre"] + " collection, found in " + book.location() + ".";
        </script>
        
      <p>It is important to note that the function needs to include () otherwise it won't work. Ex: location.function()</p>

  <hr>

    <h2>JavaScript Instantiation</h2>

    <p>There are 4 types of instantiation:</p>
      <ol>
        <li>Functional Instantiation</li>
        <li>Functional-shared instantiation</li>
        <li>Prototypal instantiation</li>
        <li>Pseudoclassical instantiation</li>
      </ol>

    <p>More about these coming soon...</p>

  </main>
  </body>
</html>