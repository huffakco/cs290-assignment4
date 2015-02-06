/* Javascript version of multtable.php */

function MultiParams(params) {
  this.min_multiplicand = params.min_multiplicand;
  this.max_multiplicand = params.max_multiplicand;
  this.min_multiplier = params.min_multiplier;
  this.max_multiplier = params.max_multiplier;
  }
  
var testVal = new MultiParams (
      {min_multiplicand: 2,
       max_multiplicand: 2,
       min_multiplier: 3,
       max_multiplier: 3 });
  
var chkValid = function(val, str) {
    if (!(val)) {
        return ('Missing parameter ' + str);
    }
    else {
      if (checker(val) < 0) {
        return(str + ' not a number');
      }
    }
    return(0);
};

var checker = function(val)  {
  if (typeof(val) === 'number')
  {
    return(val);
  }
  else {
    return (-1);
  }
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
  for (var i = valParams.min_multiplier; i < valParams.min_multiplier + val ; i++) {
    // creates a table row
    var row = document.createElement('tr');
    // create first element in row
    var cell1 = document.createElement('td');
    cell1.innerHTML = i;
    row.appendChild(cell1);
    for (var j = valParams.min_multiplicand; j < valParams.min_multiplicand + val; j++) {
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
  var multiplicand = testVal.max_multiplicand - testVal.min_multiplicand + 2;
  var multiplier = testVal.max_multiplier - testVal.min_multiplier + 2;

  // creates a <table> element and a <tbody> element
  var elementId = document.getElementById('putTableHere');
  var tbl = document.createElement('table');
 
  // generate table header
  generateHeader(tbl,testVal.min_multiplicand,multiplicand);
  
  // generate table body
  generateBody(tbl,testVal,multiplier);
  
   // appends <table> into <body>
  elementId.appendChild(tbl);
};


buildTable = function() {
  var result = chkValid(testVal.min_multiplicand,'min-multiplicand');
  if ( result !== 0) {
    console.log(result);
  }
  else {
    var result = chkValid(testVal.max_multiplicand,'max-multiplicand');
    if ( result !== 0) {
      console.log(result);
    }
    else {
    var result = chkValid(testVal.min_multiplier,'min-multiplier');
    if ( result !== 0) {
      console.log(result);
    }
    else {
    var result = chkValid(testVal.max_multiplier,'max-multiplier');
    if ( result !== 0) {
      console.log(result);
    }
    else {
    var result = chkParams(testVal.min_multiplicand,testVal.max_multiplicand,'multiplicand');
    if ( result !== 0) {
      console.log(result);
    }
    else {
    var result = chkParams(testVal.min_multiplier,testVal.max_multiplier,'multiplier');
    if ( result !== 0) {
      console.log(result);
    }
    else {
    generateTable();
    }
    }}}}
  }
};


window.onload = function() {
  console.log('Start script');
  buildTable();
}