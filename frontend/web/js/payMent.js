function token() {
    event.preventDefault();

    var api = $('#publicApiPayJp').val();
    Payjp.setPublicKey(api);

    var form = $("#charge-form"),
        number = form.find('input[name="number"]'),
        cvc = form.find('input[name="cvc"]'),
        exp_month = form.find('input[name="exp_month"]'),
        exp_year = form.find('input[name="exp_year"]'),
        name = form.find('input[name="name-user"]');

    form.find("input[type=button]").prop("disabled", true);

    var card = {
        number: number.val(),
        cvc: cvc.val(),
        exp_month: exp_month.val(),
        exp_year: exp_year.val(),
        name : name.val()
    };

    Payjp.createToken(card, function(s, response) {
      if (response.error) {
        form.find('.charge-errors').text(translateErrorMessage(response.error.code));
        form.find('button').prop('disabled', false);
      } else {
        $(".number").removeAttr("name");
        $(".cvc").removeAttr("name");
        $(".exp_month").removeAttr("name");
        $(".exp_year").removeAttr("name");
        $(".name").removeAttr("name");

        var token = response.id;

        form.append($('<input type="hidden" name="payjpToken" />').val(token));
        form.get(0).submit();
      }
    });
};