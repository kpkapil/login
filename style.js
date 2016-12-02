var $TABLE = $('#table');
var $BTN = $('#login-btn');
var $EXPORT = $('#login');
var $BTN = $('#back-btn');
var $EXPORT = $('#back');


// A few jQuery helpers for exporting only
jQuery.fn.pop = [].pop;
jQuery.fn.shift = [].shift;

$BTN.click(function () {
  var $rows = $TABLE.find('tr:not(:hidden)');
  var headers = [];
  var data = [];
  
  
 
  
  // Output the result
  $EXPORT.text(JSON.stringify(data));
});