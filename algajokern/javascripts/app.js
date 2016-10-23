(function (window, document, $, undefined) {

    new Vue({
        el: 'form',
        data: {
            'lotNumbers': [],
            'name': '',
            'phonenumber': '',
            'payment_method': 'Swish',
            'weeks': 1,
            'cost': 0
        },
        computed: {
            selectedLotNumbers: function () {
                return this.lotNumbers.join(', ');
            },
            cost: function () {
                return (this.lotNumbers.length * 20) * this.weeks;
            }
        },
        methods: {
            selectLotNumber: function (event) {
                var checkbox = event.target;
                var label = checkbox.parentElement;
                var li = label.parentElement;
                li.classList.toggle('reserved');
            }
        }
    });

})(window, document, jQuery);