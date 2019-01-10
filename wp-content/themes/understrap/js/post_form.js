// custom js
var $ = jQuery;


function createPDF(){
  var title = post.post_title;
  const exerciseDescription = post.post_excerpt;
  var questions = []
  var answers = []
  var date = new Date();
      date.setHours(0, 0, 0, 0);
      date = date.toDateString();
  // var date = this.state.date;
  console.log('lk')
  $('.form-post').children('li').each(function() {
    var question = $(this).html().trim();
    // replace inputs with their values in the pdf
    if(question.includes('<input')){
      $(this).children('input').each(function() {
        // console.log($(this).val());
        var val = $(this).val();
        if(!val) val = "____________________";
        question = question.replace('<input type="text">',val);
      })
    }
    // set temp div value to retrieve in order to remove html formating
    question = $('#tempDiv').html(question).text();
    // push question to questions list for pdfmake
    questions.push(question);
  });
  
  $('.form-post').children('.post-form-ta').each(function() {
    var text = $(this).html().trim().replace(/<\/div>/g,'')
    text = text.replace(/<div>/g,'\n').replace(/<br>/g,'\n');
    answers.push(text);
  });

  var doc = {
    footer: { 
      text: "Everything In All - " + title,
      style: "footer"
    },
    content: [
      {
        text: 'EVERYTHING IN ALL',
        style: 'brand'
      },
      {
        text: date,
        style: 'date'
      },
      {
        text: title,
        style: 'title'
      },
      {
        text: exerciseDescription,
        style: 'description'
      },
      
    ],
    styles: {
      brand: {
        fontSize: 18,
        bold: true,
        alignment: 'center',
        marginBottom: 16
      },
      title: {
        fontSize: 16,
        bold: true,
        alignment: 'center',
        marginBottom: 32
      },
      description: {
        fontSize: 12,
        bold: false,
        alignment: 'justify',
        marginBottom: 32
      },
      question: {
        fontSize: 12,
        italics: true,
        marginBottom: 16,
        bold: true
      },
      answer: {
        fontSize: 12,
        marginBottom: 32,
        bold: false,
        marginLeft: 20
      },
      footer: {
        fontSize: 9,
        // marginBottom: 32,
        bold: false,
        marginLeft: 36,
        italics: true
      },
      date: {
        // fontSize: 9,
        marginBottom: 16,
        // bold: false,
        alignment: 'center',
        // italics: true
      }
    }
  }

  for(var i = 0; i < questions.length; i++){
    doc.content.push(
      {
      text: (i+1).toString() + '. ' + questions[i],
      style: 'question'
      },
      {
      text: answers[i],
      style: 'answer'
      }
    )
  }

  const filename = title.replace(/ /g, '-').toLowerCase();

  console.log(pdfMake)

  pdfMake.createPdf(doc).download(filename);
 
}

function renderWorksheetForm(){
    $(".form-post").children().after("<ion-icon class='remove-question' name=\"close\"></ion-icon><div class='post-form-ta' contenteditable=''></div><ion-icon class='add-question' name=\"add\"></ion-icon>");
    $(".form-post").prepend("<ion-icon class='add-question' name=\"add\"></ion-icon>");

    // make questions editable
    $('.form-post li').each(function(){
      $(this).attr("contenteditable","true");
      // create subtext
      if($(this).html().includes(" : ")){
        var liParts = $(this).html().split(" : ");
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
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
      var currentScrollPos = window.pageYOffset;
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

    $("#create-pdf").click(function(){
      console.log(post);
      createPDF();
    })





});