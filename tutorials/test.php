<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />


<!DOCTYPE html>
<html>

<head>
    <title>Simple Table</title>
</head>

<body>

    <h2>Sample Table</h2>

    <table class="table table-striped table-bordered" id="testtable" class="display">
        <thead class="thead-dark">
            <tr>
                <!-- <th>#</th> -->
                <th>Username</th>
                <th>Email</th>
                <th>Last name</th>
                <th>First name</th>
                <th>Middle name</th>
                <th>Birthday</th>
                <th>Address</th>
                <th>Mobile</th>
                <th>Last Login</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
        <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Last name</th>
        <th>First name</th>
        <th>Middle name</th>
        <th>Birthday</th>
        <th>Address</th>
        <th>Mobile</th>
        <th>Last Login</th>
        <th>Action</th>
    </tr>
    <tr>
        <td>user123</td>
        <td>random1@example.com</td>
        <td>Doe</td>
        <td>John</td>
        <td>A.</td>
        <td>1990-01-15</td>
        <td>123 Elm St.</td>
        <td>+1234567890</td>
        <td>2023-10-31 10:45</td>
        <td>Edit | Delete</td>
    </tr>
    <tr>
        <td>coolguy45</td>
        <td>random2@example.com</td>
        <td>Smith</td>
        <td>Alex</td>
        <td>B.</td>
        <td>1985-05-20</td>
        <td>456 Oak Ave.</td>
        <td>+1234567891</td>
        <td>2023-10-29 08:30</td>
        <td>Edit | Delete</td>
    </tr>
    <tr>
        <td>starrynight</td>
        <td>random3@example.com</td>
        <td>Johnson</td>
        <td>Emma</td>
        <td>C.</td>
        <td>1992-12-10</td>
        <td>789 Pine Rd.</td>
        <td>+1234567892</td>
        <td>2023-11-01 15:00</td>
        <td>Edit | Delete</td>
    </tr>

        </tbody>


</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

<Script>
$(document).ready(function() {
    $('#testtable').DataTable();
});
</script>