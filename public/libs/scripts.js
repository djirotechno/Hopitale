function renderMovies(code) {
    var items = [];

    // For each movie loaded, insert the markup for it in an "items" array.
    $.each(codet, function(key, val) {
        items.push('<div id="' + key + '"><h4>' + val.libelle + '</h4>' );
    });

    // Create a <div class="movies col-md-6 center-block"> element with the movie items,
    // And insert it in the #movies-list section
    $('<div/>', {
        class: 'movies col-md-6 center-block',
        html: items.join('')
    }).appendTo('#movies-list');
}

$(document).ready(function() {


    // Load all movies that are included via the file /data/movies.js

    var allMovies = $code;
    renderMovies(allMovies);
    $('#search-button').click(function() {
               $("#movies-list").empty();
        // Get the value of the movie name search field
        var movieTitle = $('#input-moviename').val();
        var result =[];
        if (movieTitle !== '' && movieTitle !== undefined){
             $.each(allMovies, function(key, val){
             if (movieTitle.toLowerCase() == val.libelle.toLowerCase()){
               // result.push('<div id="' + key + '"><h4>' + val.title + '</h4>' +'<img src="'+val.info.image_url+'"/>' +'<p>' + val.info.directors + '</p>'+'<p>'+ val.info.release_date + '</p>'+'<p>'+ val.info.rating + '</p>'+'<p>'+ val.info.genres[0] + '</p> </div>');
               result.push(val);

             }
        });
        }    
        

         else  {
            result = allMovies;
         }
        
         renderMovies(result);
    
        // Print out the value searched for
        //alert("You searched for " + result);
    })

});