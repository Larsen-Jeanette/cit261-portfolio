
var jason = {
  "age" : "24",
  "hometown" : "Missoula, MT",
  "gender" : "male"
};


document.write('Jason is ' jason.age); // Output: Jason is 24
document.write('Jason is a ' jason.gender); // Output: Jason is a male

var family = [{
    "name" : "Jason",
    "age" : "24",
    "gender" : "male"
},
{
    "name" : "Kyle",
    "age" : "21",
    "gender" : "male"
}];


document.write(family[1].name); // Output: Kyle
document.write(family[0].age); // Output: 24

<p>NOTE: This is beneficial if it will be necessary to loop through stored information, as it lends itself to a for loop with an automatically incrementing value.</p>