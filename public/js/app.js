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
