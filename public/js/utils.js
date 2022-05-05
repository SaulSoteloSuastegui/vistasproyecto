$(document).ready(function() {
    
	$.fn.selectpicker.Constructor.BootstrapVersion = '4';
	$('.selectpicker').selectpicker({
		noneSelectedText : 'Por Favor Seleccione',
		noneResultsText: 'No Hay Resultados de Búsqueda =(',
		dropdownAlignRight: 'auto'
    });

    $("#chora").datetimepicker({
        datepicker:false,
        format:'H:i',
        step:1
       }); 


    jQuery.datetimepicker.setLocale('es');
    $("#cfecha").datetimepicker({

        i18n: {
            es: {
                months: ['Enero', 'Febrero', 'Marzo', 'Abril',
                    'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
                    'Octubre', 'Noviembre', 'Diciembre' ],
                dayOfWeek: ["DOM", "LUN", "MAR", "MIE", "JUE", "VIE", "SAB"]
            }
        },
        timepicker: false,
        minDate:'2014.01.01',
        formatDate:'Y.m.d',
        format:'Y-m-d',
        maxDate:0,
    });

    
  $("#cfechafinal").datetimepicker({

    i18n: {
      es: {
        months: ['Enero', 'Febrero', 'Marzo', 'Abril',
          'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
          'Octubre', 'Noviembre', 'Diciembre'],
        dayOfWeek: ["DOM", "LUN", "MAR", "MIE", "JUE", "VIE", "SAB"]
      }
    },
    timepicker: false,
    minDate:'2014.01.01',
    formatDate:'Y.m.d',
    format:'Y-m-d',
    maxDate: 0
  });

});