<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation List</title>
    <link rel="stylesheet" href="{{ asset('css/donation_list.css') }}">
</head>
<body>
    <div class="container">
        <h1>Donation List</h1>
        <table>
            <thead>
                <tr>
                    <th>Donor Name</th>
                    <th>Amount</th>
                    <th>Fundraiser/Organization</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John Doe</td>
                    <td>$100</td>
                    <td>Helping Hands</td>
                    <td>2024-12-01</td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>$250</td>
                    <td>Feed the Poor</td>
                    <td>2024-12-03</td>
                </tr>
                <tr>
                    <td>Michael Lee</td>
                    <td>$500</td>
                    <td>Orphanage Aid</td>
                    <td>2024-12-04</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
