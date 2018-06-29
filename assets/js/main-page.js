$(document).ready(function() {
	$("#login").hide();

	$("#to_login").click(function(){
		$("#login").show();
		$("#daftar").hide();
	});

	$("#to_daftar").click(function(){
		$("#daftar").show();
		$("#login").hide();
	});

});