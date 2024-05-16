// Javascript codes

var emails = document.getElementById('email');
var texts = document.getElementById('text');
var numbers = document.getElementById('number');
var tels = document.getElementById('tel'); 
var dates = document.getElementById('date');
var submits = document.getElementById('submit');
   
function validateinput(){
  var emailvalue = emails.value.trim();
  var textvalue = texts.value.trim();
  var numbervalue = numbers.value.trim();
  var telvalue = tels.value.trim();
  var datevalue = dates.value.trim();

  if(emailvalue === "" || textvalue === "" || numbervalue === "" || telvalue === "" || datevalue === ""){
    submits.disabled = true;
  }
    else{
      submits.disabled = false;
// var forming = document.getElementById('form');

// forming.submit();

    }
  }

emails.addEventListener('input', validateinput);
texts.addEventListener('input', validateinput);
numbers.addEventListener('input', validateinput);
tels.addEventListener('input', validateinput);
dates.addEventListener('input', validateinput);
