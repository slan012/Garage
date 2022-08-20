// Car form 
$(document).ready(function() {
  $('#car-options').select2();
});

Livewire.on('optionUpdate', () => {
  $('#car-options').select2();
});

$('#add-option-button').click(function (e) { 
  e.preventDefault();
  $('#add-option').toggle('hidden');

  $('#add-option-button').text(function(i, text) {
    return text === 'Ajouter une option' ? 'Annuler l\'ajout' : 'Ajouter une option';
  });
});

// Backoffice menu
if ($('#mobile-button').is(':visible')) {
  // Mobile menu
  $('.dropdown-toggle').click(function (e) { 
    $(this).siblings().find('.dropdown-menu').hide();
    if ($(this).find('.dropdown-menu').is(':visible')) {
      $(this).find('.dropdown-menu').hide();
    } else {
      $(this).find('.dropdown-menu').show();
    }
  });
} else {
  //Desktop menu
  $('.dropdown-toggle').mouseover(function (e) { 
    e.preventDefault();
    $(this).find('.dropdown-menu').show();
  });
  $('.dropdown-toggle').mouseleave(function (e) { 
    e.preventDefault();
    $(this).find('.dropdown-menu').hide();
  });
}

// Mobile menu display 
$('#mobile-button').click(function (e) { 
  e.preventDefault();
  $(this).parent().find('#menu-open-icon').toggle();
  $(this).parent().find('#menu-close-icon').toggle();
  $(this).parent().find('#admin-menu').toggleClass('flex');
  $(this).parent().find('#admin-menu').toggleClass('hidden');
  $('#mobile-button-label').text(function(i, text) {
    return text === 'Menu' ? 'Fermer' : 'Menu';
  });
});

//Holidays alert
$('.holidays-alert').each(function() {
  console.log($(this).find('.holidays-alert-value').prop("checked"));
  if($(this).find('.holidays-alert-value').prop("checked")) {
   $(this).addClass('bg-green-300');
  } else {
    $(this).addClass('bg-pink-300');
  }
})
