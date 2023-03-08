$(document).ready(function () {
  window._token = $('meta[name="csrf-token"]').attr('content')

  moment.updateLocale('en', {
    week: {dow: 1} // Monday is the first day of the week
  })

  $('.date').datetimepicker({
    format: 'DD-MM-YYYY',
    locale: 'en',
    icons: {
      up: 'fas fa-chevron-up',
      down: 'fas fa-chevron-down',
      previous: 'fas fa-chevron-left',
      next: 'fas fa-chevron-right'
    }
  })

  $('.datetime').datetimepicker({
    format: 'DD-MM-YYYY HH:mm:ss',
    locale: 'en',
    sideBySide: true,
    icons: {
      up: 'fas fa-chevron-up',
      down: 'fas fa-chevron-down',
      previous: 'fas fa-chevron-left',
      next: 'fas fa-chevron-right'
    }
  })

  $('.timepicker').datetimepicker({
    format: 'HH:mm:ss',
    icons: {
      up: 'fas fa-chevron-up',
      down: 'fas fa-chevron-down',
      previous: 'fas fa-chevron-left',
      next: 'fas fa-chevron-right'
    }
  })

  $('.select-all').click(function () {
    let $select2 = $(this).parent().siblings('.select2')
    $select2.find('option').prop('selected', 'selected')
    $select2.trigger('change')
  })
  $('.deselect-all').click(function () {
    let $select2 = $(this).parent().siblings('.select2')
    $select2.find('option').prop('selected', '')
    $select2.trigger('change')
  })

  $('.select2').select2()

  $('.treeview').each(function () {
    var shouldExpand = false
    $(this).find('li').each(function () {
      if ($(this).hasClass('active')) {
        shouldExpand = true
      }
    })
    if (shouldExpand) {
      $(this).addClass('active')
    }
  })

$('button.sidebar-toggler').click(function () {
    setTimeout(function() {
      $($.fn.dataTable.tables(true)).DataTable().columns.adjust();
    }, 275);
  })
})

      $(document).ready(function(){

        $('#searchbar').focus();

        $('#donate-buttons').on('click', '.btn-blue', function(e) {
          e.preventDefault();
          $('.active').removeClass('active');
          $('#other-input').hide().siblings('#other').show();
          $(this).filter('.btn-blue').addClass("active");
          var value = $(this).data('impact');
          $(this).closest('div').find('p').text("" + value);
          $('#other-input').find('input').val('');  
        });
          
        $('.btn-green').on('click', function() {
            
          var dollar;
          var input = $('#other-input').find('input').val();
          if ( !input ) {
            dollar = $('.active').data('dollars');
            
           } else if ( $.trim(input) === '' || isNaN(input)) {
            // empty space leaves value = 'undefined'. 
            // Have to fix $.trim(input) == '' above so that it works.
            console.log('Yes');
            dollar = "Please enter a number."; 
          } else {
            dollar = input;
          }
          $('#price').text(""+dollar);
          $('input#bacon').val(dollar);
           //alert($('input#bacon').val());
        });

        $('#other').on('click', function(e) {
          e.preventDefault(); 
          var buttons = $(this).parent('#donate-buttons');
          buttons.find('.active').removeClass('active');
          var other = $(this).hide().siblings('#other-input');
          other.show();
          other.find('input').focus();
          var pText = buttons.siblings('p');
          pText.text("Thank you!");
          var oValue = other.find('input');
          oValue.keyup(function() {
            if ( oValue.val() > 50 ) {
              pText.text("Thank you!" + " You\'re donation covers conservation services for " + oValue.val()/25 + " animals.");
            } else {
              pText.text("Thank you!");
            }
          });
        }); 

      });