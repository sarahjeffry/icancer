function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('clock').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}

var d = new Date(2018, 11, 24, 10, 33, 30);
document.getElementById("demo").innerHTML = d;

n =  new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();
document.getElementById("date").innerHTML = m + "/" + d + "/" + y;

// Select all tabs
$('.nav-tabs a').click(function(){
  $(this).tab('show');
})

// Select tab by name
$('.nav-tabs a[href="#home"]').tab('show')

// Select first tab
$('.nav-tabs a:first').tab('show')

// Select last tab
$('.nav-tabs a:last').tab('show')

// Select fourth tab (zero-based)
$('.nav-tabs li:eq(3) a').tab('show')

$('.nav-tabs a').on('shown.bs.tab', function(event){
  var x = $(event.target).text();         // active tab
  var y = $(event.relatedTarget).text();  // previous tab
});

$(document).ready(function(){
      $("#myTab a:last").tab('show'); // show last tab on page load
  });

//Print function
function printicon() {
  window.print();
}

//Save as pdf
function generatePDF() {
        // Choose the element that our invoice is rendered in.
        const element = document.getElementById("report");
        // Choose the element and save the PDF for our user.
        html2pdf()
          .from(element)
          .save();
      }
//Cancel action button
function cancel() {
    var doc = prompt("Are you sure to cancel this action?");
    if (doc != null) {
        document.getElementById("g").innerHTML =
            "Welcome to " + doc;
    }
}
