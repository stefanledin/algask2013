(function (window, document, $, undefined) {

    new Vue({
        el: 'form',
        data: {
            'lot_number': []
        },
        watch: {
            lot_number: function (newValue) {
                console.log(newValue);
            }
        }
    });

})(window, document, jQuery);