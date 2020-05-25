function numberChange(par) {
        
  if(par.value == '' || par.value < 0){
      par.value = 0;
  }
  
}

document.addEventListener("DOMContentLoaded", function(){

  $(document).ajaxStart(function(){
      $('.loading-img').show();
      $('.result-div').hide();
  }).ajaxStop(function(){
      $('.loading-img').hide();
  });

  $('.btn-convert').click(function(par) {
      par.preventDefault();
      var data = new FormData(document.getElementById('currency-form-submit'));    

      $.ajax({
          url: 'submit-convertion',
          method: 'POST',
          data: data,
          contentType: false,
          processData: false,
          beforeSend: function () {
          
          },
          complete: function () {
          
          },
          success: function (data) {
          
              $('.result-div').show(300);
              $('#result').html(data[0]);
              $('#result_currency').html(data[1]);
              
          },
          error: function (data) {
              console.log(data.responseJSON.error);
              notify.error(data.responseJSON.error);
          }
      });  
  })
});
