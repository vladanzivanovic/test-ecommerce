const Private = Symbol('private');

class SignUpController {
    init(){
        this[Private]().registerEvents();
    }

    [Private]() {
        let Private = {};

        Private.registerEvents = () => {
            $('.form-signup').on('submit', e => {
                e.stopPropagation();
                e.preventDefault();

                $('span[id$="error"]').each((index, item) => {
                    item.textContent = '';
                });

                let form = $('.form-signup').serializeArray();

                $.post('/api/sign-up', form)
                    .then(response => {
                        location.href = '/sign-in';
                    })
                    .fail(error => {
                        console.log(error);
                        let errors = error.responseJSON.errors;

                        for (let prop in errors) {
                            $(`#${prop}-error`).text(errors[prop]);
                        }
                    })
            });
        }

        return Private;
    }
};

export default SignUpController;