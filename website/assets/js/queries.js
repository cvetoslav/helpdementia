function upDown(){
    $(".hero__float").animate({top: '-=30px'}, 3000);
    $(".hero__float").animate({top: '+=30px'}, 3000);
    setTimeout(upDown, 1000);
}; upDown();


$( ".switch" ).click(function() {
  	$(".signin").toggleClass("hidden");
  	$(".signup").toggleClass("hidden");
});

$( "#popup" ).click(function() {
  	$(".popup").toggleClass("hidden");
});


$( "#calc" ).click(function(){
	var country =  100*parseFloat($("#country").val());
	var age =  100*parseFloat($("#age").val());
	var gender =  100*parseFloat($("#gender").val());

	$("#countryout").text("Country: " + Math.round(country*100)/100 + "%");
	$("#ageout").text("Age: " + Math.round(age*100)/100 + "%");
	$("#genderout").text("Gender: " + Math.round(gender*100)/100 + "%");
});

var i = 0;

$( ".card" ).click(function(){
	var questions = "What is the date?,When is your birthday?";
	arrayq = questions.split(',');

	if(i<2) {
		$( "#cardq" ).text(arrayq[i]);
		i++;
	}
	else {
		$(".popup").toggleClass("hidden");
	}
	

});