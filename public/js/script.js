$(document).ready(function () {
   $(".take_subject").click(function (e) {
       e.preventDefault();
      ids =  $(this).attr('id')
           var formData = {
               'content_id'              : $(this).attr('id'),
               '_token'    : $('input[name=_token]').val()


           };

           console.log(formData);
           //return false;
           $.ajax({
               type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
               url         : BaseURL + '/DisplaySubjectContent', // the url where we want to POST
               data        : formData, // our data object
               beforeSend: function() {

                   $('#loader_page').fadeIn('fast');
                   $("#Objectives").fadeOut('fast');
       },

   })
           // using the done promise callback
               .done(function(data) {

                  console.log(data);

                  $('.hide_course_page').fadeOut('fast');
                   $("#display_content").html('No tutorials found');

                      $("#display_content").html(data.d.content);
                     title = $('#sub_' + ids).text();

                   $("#tut_header").html(title + 'Tutorials');
                   $('#testobj').fadeIn('slow');
                   $('#obje_id').html('');
                      $('#obje_id').html(ids);

                   $('#loader_page').fadeOut('slow');
               })
               .fail(function(response) {

                   // log data to the console so we can see
                   console.log(response.responseText);

               });
   });


    $(".take_quiz").click(function (e) {
        e.preventDefault();
        ids =  $(this).attr('id')
        var formData = {
            'content_id'              : $('#obje_id').text(),
            '_token'    : $('input[name=_token]').val()


        };

        title = $('#sub_' + ids).text();

        $("#tut_header").html(title + 'Multiple Choice Question');
        console.log(formData);
        //return false;
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : BaseURL + '/DisplayQuizContent', // the url where we want to POST
            data        : formData, // our data object
            beforeSend: function() {

                $('#loader_page').fadeIn('fast');
                $('#testobj').fadeOut('fast');
                $("#display_content").html('');
            },

        })
        // using the done promise callback
            .done(function(data) {

                console.log(data);

                var stae ='';

                $.each(data.d, function(index, quiz) {
                    $("#Objectives").fadeIn('slow').append('<p class="text-info">' + quiz.content + '</p>');
                    $.each(quiz.answers, function(index, q) {
                        $("#Objectives").append('<p>' + q.answer + '</p>');
                    })

                });
                //$("#Objectives").append(stae);

                $('#loader_page').fadeOut('slow');

            })
            .fail(function(response) {

                // log data to the console so we can see
                console.log(response.responseText);

            });
    });
});