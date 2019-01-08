// custom js
var $ = jQuery;
// import pdfmake from 'pdfmake';

function renderWorksheetForm(){
    $(".form-post").children().after("<ion-icon class='remove-question' name=\"close\"></ion-icon><div class='post-form-ta' contenteditable=''></div><ion-icon class='add-question' name=\"add\"></ion-icon>");
    $(".form-post").prepend("<ion-icon class='add-question' name=\"add\"></ion-icon>");

    // make questions editable
    $('.form-post li').each(function(){
      $(this).attr("contenteditable","true");
      // create subtext
      if($(this).html().includes(" : ")){
        let liParts = $(this).html().split(" : ");
        $(this).html(liParts[0]);
        $(this).after(`<small contenteditable='true' class="li-subtext">${liParts[1]}</small>`);
      }
    });
    // add additional questions and textareas
    $('.written-copy').on('click','.add-question',function(){
      $(this).after("<li contenteditable='true'>Enter Text Here</li><ion-icon class='remove-question' name=\"close\"></ion-icon><div class='post-form-ta' contenteditable=''></div><ion-icon class='add-question' name=\"add\"></ion-icon>");
    });

    $('.written-copy').on('click','.remove-question',function(){
      // $(this).after("<li contenteditable='true'>Enter Text Here</li><i class='fas fa-trash remove-question'></i><textarea class='post-form-ta'/><i class='fas fa-plus add-question'></i>");
      $(this).prev('li').remove();
      $(this).next('.post-form-ta').remove();
      $(this).next('.add-question').remove();
      $(this).remove();
    });
}


$( document ).ready(function() {

    renderWorksheetForm();

    /* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
    let prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
      let currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        document.getElementsByClassName("navbar")[0].style.top = "0";
        document.getElementsByClassName("post-btns")[0].style.top = "56px";
      } else {
        document.getElementsByClassName("navbar")[0].style.top = "-60px";
        document.getElementsByClassName("post-btns")[0].style.top = "0";
      }
      prevScrollpos = currentScrollPos;
    }


    // add this and icons
    const addThis = document.createElement("script");
    const icons = document.createElement("script");
    icons.src = 'https://unpkg.com/ionicons@4.5.0/dist/ionicons.js';
    addThis.src = '//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c10200b0c4c37d0';
    addThis.async = true;
    icons.async = true;
    document.body.appendChild(addThis);
    document.body.appendChild(icons);






});