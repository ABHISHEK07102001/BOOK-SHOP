

function viewMoreBooks(){
  $(".showMoreBooks").toggle(function() {
        if ($('.showMoreBooks').is(":visible")) {
            $(".showMoreBooks").show();
            $(".toggleButton").text('view less');
            $('.toggleButton').css({'backgroundColor':'red', 'color':'white'});
        }
        else {
            $(".showMoreBooks").hide(); 
            $(".toggleButton").text('view more');
            $(".toggleButton").css('backgroundColor','green');
        };
    });
}