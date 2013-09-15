(function() {
    var passwords = document.querySelectorAll('input[type="password"]');

    if (passwords.length === 2) {
        document.querySelector('form').addEventListener('submit', function(e) {
            if (passwords[0].value !== passwords[1].value || passwords[0].value === '') {
                e.preventDefault();

                passwords[0].classList.add('error');
                passwords[1].classList.add('error');
            }
        });
    }
}());