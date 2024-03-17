/*!
* Start Bootstrap - Agency v7.0.12 (https://startbootstrap.com/theme/agency)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-agency/blob/master/LICENSE)
*/
//
// Scripts
// 

$(document).ready(function() {


	// Create Li
	var newItem = $("<li></li>");
	newItem.addClass("nav-item");
	
	// Create link
	var link = $('<a></a>');
    link.attr('href', 'mypage.html');
    link.text("My Page");
    link.addClass("nav-link");
    
    // Add link to Li
    newItem.append(link);
	
	// Add Li to ul
	$("#navbarResponsive ul").append(newItem);

	
	
});


//  $(document).ready(function() {
//         // Create a new <li> element
//         var newItem = $("<li class='nav-item'><a class='nav-link' href='#'>My Page</a></li>");
//         
//         // Append the new <li> element to the <ul> inside the specified <div>
//         $("#navbarResponsive ul").append(newItem);
//     });