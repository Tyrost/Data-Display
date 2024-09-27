
// Thanks, ChatGPT :)

function fetchOptions(callback) {
    $.ajax({
        url: '../../backend/all_tickers.txt', // Relative path to used HTML not JS script 
        method: 'GET',
        dataType: 'text',
        success: function(data) {
            const codes = data.split('\n').map(line => line.trim()).filter(line => line !== '');
            callback(codes);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error('AJAX Error:', textStatus, errorThrown);
            $('#error-message').show();
        }
    });
}

$(document).ready(function() {
    $('#error-message').hide();
    $('#loading-message').show();

    fetchOptions(function(codes) {
        $("#code-input").autocomplete({
            source: function(request, response) {
                // Filter the results based on the input value
                const filteredResults = $.ui.autocomplete.filter(codes, request.term);
                
                // Limit the results to 5 items
                response(filteredResults.slice(0, 5));
            },
            minLength: 1,
            delay: 100,
            select: function(event, ui) {
                console.log("Selected: " + ui.item.value);
            }
        });

        $('#loading-message').hide();
    });
});
