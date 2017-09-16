$('#table_responsables').DataTable({
    language: {
        url: "<?php echo $ruta_base;?>/assets/js/Spanish.json"
    }
    ,pageLength: 25
    , responsive: true
    , dom: '<"html5buttons"B>lTfgitp'
    , buttons: [
        {
            extend: 'copy'
            , text: 'Copiar'
        }
        , {
            extend: 'csv'
        }
        , {
            extend: 'excel'
            , title: 'Resultados de la busqueda'
        }
        , {
            extend: 'pdf'
            , title: 'Resultados de la busqueda'
        },
        {
            extend: 'print'
            , title: 'Resultados de la busqueda'
            , text: 'Imprimir'
            , customize: function (win) {
                $(win.document.body).addClass('white-bg');
                $(win.document.body).css('font-size', '10px');
                $(win.document.body).find('table').addClass('compact').css('font-size', 'inherit');
            }
        }
    ]
});
