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
}

window.onload() {
  

}