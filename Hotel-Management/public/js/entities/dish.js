$(function(){

  $('.my-dish-delete').on('click', function(e) {
    e.preventDefault();

    $dishDelete = $(this);
    $dish = $dishDelete.closest('.my-dish');
    dishLabel = $dish.find('.my-filter-target').text();


    $.ajax({
      
      url: $dishDelete.attr('data-url'),
      method: 'delete',
      
      data: {
        _token: $dishDelete.attr('data-token')
      },
      

      success : function(data) {

        if(data === "ok") {
          
          $('#my-entity-delete-status')
            .addClass('my-entity-delete-status-ok')
            .removeClass('d-none')
            .html(`<i>"${dishLabel}"</i> has successfully been deleted`);

          $dish.remove();

        } 


        else {
          
          $('#my-entity-delete-status')
            .addClass('my-entity-delete-status-ko')
            .removeClass('d-none')
            .html(`Something went wrong when attempting to delete <i>"${dishLabel}"</i>`);

        }

      },
      

      error: function (error) {
        
        $('#my-entity-delete-status')
          .addClass('my-entity-delete-status-ko')
          .removeClass('d-none')
          .text(error);
      
      }

    });
  });

});
