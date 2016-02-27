<!DOCTYPE html>
<html>
  <head>
    <title>Local Storage API, Storing and Retrieving Simple Data, Arrays, Associative Arrays, and Objects</title>
  </head>
  <body>
  	
    <header id='page_header'>
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/navigation.php';  ?>   
    </header>

    <main> 

     <h1>4. Local Storage API, Storing and Retrieving Simple Data, Arrays, Associative Arrays, and Objects</h1>

    <div id="date"></div>
    <div id="monthList"></div>

      <script>
        //javascript object
        var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        
        // Check browser support
        if (typeof(Storage) !== "undefined") {

          // Takes JavaScript object, turns it into a JSON string. Storing it locally.
          localStorage.setItem("calendarMonths", JSON.stringify(months));
            
          // Retrieving the JSON string from the local storage and returning it as an array
          document.getElementById("date").innerHTML = localStorage.getItem("calendarMonths");

          } 
        
        else {
          document.getElementById("date").innerHTML = "Sorry, your browser does not support Web Storage...";
        }
        
        //taking stored JSON string and is parsing back into a regular string
        var Retrieve = localStorage.getItem("calendarMonths");
        var calMon = JSON.parse(Retrieve);
        
        document.getElementById("monthList").innerHTML = calMon;

      </script>
    </main>
  </body>
</html>