/* Javascript version of multtable.php */

function MultiParams(params) {
  this.min-multiplicand;
  this.max-multiplicand;
  this.min-multiplier;
  this.max-multiplier;
  }
  
var testVal = new MultiParams(
      {min-multiplicand: 2,
       max-multiplicand: 2,
       min-multiplier: 3,
       max-multiplier: 3
      );
  
var chkValid = function(val, str) {
    if (!(val)) {
        return ('Missing parameter ' + str);
    }
    else {
      if (checker(val) < 0 {
        return(str + ' not a number');
      }
    }
    return(0);
};

var chkParams = function(minVal,maxVal,str) {
  if ((maxVal - minVal) < 0)
  {
    return ('Minimum ' + str + ' larger than maximum.');
  }
  return(0);
};

var generateHeader = function(id,minVal,val) {
  var tblHeader = document.createElement('thead');
  var row = document.createElement('tr');

  // First bland cell
  var tblHead = document.createElement('th');
  tblHead.innerHTML = '';
  row.appendChild(tblHead);
 
  // Define header elements
  for (var i = minVal; i < minVal + val; i++)
  {
    var tblHeadElem = document.createElement('th');
    tblHeadElem.innerHTML = i;
    row.appendChild(tblHeadElem);
  }
  tblHeader.appendChild(row);
  id.appendChild(tblHeader);
};


var generateBody = function(id,valParams,val) {

  var tblBody = document.createElement('tbody');

  // creating all cells
  for (var i = valParams.min-multiplier; i < valParams.min-multiplier + val ; i++) {
    // creates a table row
    var row = document.createElement('tr');
    // create first element in row
    var cell1 = document.createElement('td');
    cell1.innerHTML = i;
    for (var j = valParams.min-multiplicand; j < valParams.min-multiplicand + val) {
      var cell1 = document.createElement('td');
      cell1.innerHTML = i * j;
      row.appendChild(cell1);
    }
    // add the row to the end of the table body
    tblBody.appendChild(row);
  }
  // add table body to table
  id.appendChild(tblBody);
};


var generateTable = function() {
/* Generate a table around testVal variable  */
/* Reference: */
/* https://developer.mozilla.org/en-US/docs/Traversing_an_HTML_table_with_JavaScript_and_DOM_Interfaces */

  //Caluculate multiplicand and multiplier
  var multiplicand = testVal.max-multiplicand - testVal.min-multiplicand + 2;
  var multiplier = testVal.max-multiplier - testVal.min-multiplier + 2;

  // creates a <table> element and a <tbody> element
  var elementId = document.getElementById('putTableHere');
  var tbl = document.createElement('table');
 
  // generate table header
  generateHeader(tbl,testVal.min-multiplicand,multiplicand);
  
  // generate table body
  generateBody(tbl,testVal,multiplier);
  
   // appends <table> into <body>
  elementId.appendChild(tbl);
};


buildTable = function() {
  var result = chkValid(tstVal.min-multiplicand,'min-multiplicand');
  if ( result !== 0) {
    console.log(result);
  }
  else if {
    var result = chkValid(tstVal.max-multiplicand,'max-multiplicand');
    if ( result !== 0) {
      console.log(result);
    }
  }
  else if {
    var result = chkValid(tstVal.min-multiplier,'min-multiplier');
    if ( result !== 0) {
      console.log(result);
    }
  }
  else if {
    var result = chkValid(tstVal.max-multiplier,'max-multiplier');
    if ( result !== 0) {
      console.log(result);
    }
  }
  else if {
    var result = chkParams(tstVal.min-multiplicand,tstVal.max-multiplicand,'multiplicand');
    if ( result !== 0) {
      console.log(result);
    }
  }
  else if {
    var result = chkParams(tstVal.min-multiplier,tstVal.max-multiplier,'multiplier');
    if ( result !== 0) {
      console.log(result);
    }
  }
  else {
    generateTable();
  }
};


window.onload = function() {
  console.log('Start script');
  buildTable();
}