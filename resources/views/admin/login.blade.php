<script>
    function login() {
        let username = prompt("Enter Username:");
        let password = prompt("Enter Password:");
        fetch('/admin/login', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ email: username, password: password, '_token': "{{csrf_token()}}" })
        })
        .then(response => response.json())
        .then(function(response) {
            if (response.status) {
                window.location.href = response.url;
            } else {
                alert("Login failed. Please try again.");
                login();
            }
        })
        .catch(function(error) {
            console.error('Error:', error);
            alert("An error occurred. Please try again.");
            login();
        });
    }
    login();
</script>
