<!DOCTYPE html>
<html>
  <head>
    <title>JSON Parse, Stringify</title>
  </head>
  <body>
  	
    <header id='page_header'>
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/navigation.php';  ?>   
    </header>

    <main> 
      
      <h1>3. JSON Parse, Stringify</h1>

  </main>

     	<p>JSON is JavaScript Object Notation, and it is basically an easy way to store and share data that is easier than XML.</p>

      <p>***Don't store items that are sensitive with JSON!</p>


      <h2>Compare examples of JSON to XML</h2>

       <p>JSON</p>
         <p>{"employees":[
            <p>{"firstName":"John", "lastName":"Doe"},</p>
            <p>{"firstName":"Anna", "lastName":"Smith"},</p>
            <p>{"firstName":"Peter", "lastName":"Jones"}</p>
          <p>]}</p>

      <p>XML</p>
        <p>(defines an object with 3 items)</p>

        <img src="/media/xml-example.png" alt="xml example"></a>

  <hr>

    <h2>What are JSON Stringfy and Parse?? What do they do?</h2>

    <q>JSON.stringify turns a Javascript object into JSON text and stores that JSON text in a string. JSON.parse turns a string of JSON text into a Javascript object. JSON.parse() is for "parsing" something that was received as JSON. JSON.stringify() is to create a JSON string out of an object/array.</q>

     <h3>JSON Parse - Travel Planner Example</h3>
     <p>In this example, there is an array of travel information defined. JSON Parse is turning it into 
     and object and then we are calling specific portions of it.</p>

      <p id="vacation-planner"></p>
        
      <script>
        
        var vacation = '{"trip":[' +
        '{"city":"New Orleans", "state":"Louisiana", "month":"4", "day":"9","travel":"car","hours":"16" },' +
        '{"city":"Seattle", "state":"Washington", "month":"5", "day":"30","travel":"plane","hours":"6.5" },' +
        '{"city":"Wilmington", "state":"North Carolina", "month":"7", "day":"18","travel":"car","hours":"4" }]}';

        vacay = JSON.parse(vacation);
        document.getElementById("vacation-planner").innerHTML = "You're traveling to " +
        vacay.trip[1].city + ", " + vacay.trip[1].state + "on " + vacay.trip[1].month + "-" + vacay.trip[1].day + " by " + vacay.trip[1].travel + " -- taking " + vacay.trip[1].hours + " hours." ;
        
      </script>
    </main>

  </body>
</html>