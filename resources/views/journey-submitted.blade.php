<!-- resources/views/journey-submitted.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="icon" href="hack-lg.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images\hack-lg.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journey Submitted</title>
    <!-- Include SweetAlert2 library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>

    <div class="container">
        <h2 class="text-center mt-5">Journey Submitted Successfully</h2>

        <script>
            // Show Sweet Alert
            Swal.fire({
                title: 'Finding You a Vehicle',
                text: 'Expect to hear from us in a Few!',
                icon: 'success',
                showConfirmButton: true,
                confirmButtonText: 'Go Back Home'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect to the home page
                    window.location.href = '/';
                }
            });
        </script>
    </div>

</body>

</html>
