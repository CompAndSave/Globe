/************************************************************/
/* Global Functions for Globe Project Index                 */

// Copyright 2015 CompAndSave.com Inc.
// This project licensed under a Creative Commons Attribution
// 4.0 International License.
//
// Attribution isn't required, but is always appreciated!
/************************************************************/

$(function(){
  $('#globeExample').load('globe-megan.html');

    $( "#example1" ).click(function() {
      $('#globeExample').fadeOut('slow', function(){
        $('#globeExample').load('globe-megan.html', function(){
            $('#globeExample').fadeIn('slow');
        });
      });
    });

    $( "#example2" ).click(function() {
      $('#globeExample').fadeOut('slow', function(){
        $('#globeExample').load('globe-nelly.html', function(){
            $('#globeExample').fadeIn('slow');
        });
      });
    });

    $( "#example3" ).click(function() {
      $('#globeExample').fadeOut('slow', function(){
        $('#globeExample').load('globe-adrian.html', function(){
            $('#globeExample').fadeIn('slow');
        });
      });
    });

  });