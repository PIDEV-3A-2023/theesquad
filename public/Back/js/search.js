$(document).ready(function() {
    $('.js-search-input').on('input', function() {
        var query = $(this).val();
        if (query.length >= 2) {
            $.ajax({
                url: "{{ path('app_evenement_recherche') }}",
                data: {search: query},
                method: 'POST',
                success: function(response) {
                    $('.js-search-results').html(response);
                }
            });
        }
    });
});