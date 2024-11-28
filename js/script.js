document.getElementById('email').addEventListener('input', function (e) {
    var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (pattern.test(e.target.value)) {
        e.target.setCustomValidity('');
    } else {
        e.target.setCustomValidity('Please enter a valid email address');
    }
});