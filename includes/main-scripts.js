/*
	Main Scripts
	* Look Don't Copy*
*/

$(document).ready(function () {
    
    
    // Ajax those results
	$.ajaxSetup ({ cache: false });
	var ajax_load = "<img src='includes/images/ajax-loader.gif' alt='loading...' /><p>This may take up to 5 minutes. You might want to go get some coffee.</p>";
	

	//	load() functions
	var loadUrl = "grab.php";
	$("#urlForm").submit(function(){
		var urltopass = $('#urlForm .txt').val();
		$("#results").html(ajax_load).load(loadUrl, "url=" + urltopass, function(responseText){
			$("#demo").wijgrid({
			    allowPaging: true,
			    pageSize: 25,
			    allowSorting: true,
			    columns: [
			        {},
			        { dataType: "number", dataFormatString: "n0" }
			    ]
			});	 
		});		
		return false; 
	});        
    
    
});