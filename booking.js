$(document).ready(function() {
	function getSelectedValue(select){
	  var result = [];
      var revalue = [];
      var options = select && select.options;
      var opt;
      var sum = 0;
      
      for (var i=0, i=options.length; i<iLen; i++) 
      {
        opt = options[i];

        if (opt.selected) 
        {
          result.push(opt.value);
          revalue.push (opt.text);
        }
      }   
      var dta = result.length;
      var service = revalue.toString();
      while(dta--){
      sum +=parseInt(result[dta]); 
    }
      $('#total_price').val(sum);     
	}
});