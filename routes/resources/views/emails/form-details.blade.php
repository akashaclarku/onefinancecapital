<!DOCTYPE html>
<html>
<head>
    <title>Form Submission Details</title>
</head>
<body>
    <h1>Form Submission Details</h1>
    <p><strong>First Name:</strong> {{ $formData['First_Name'] }}</p>
    <p><strong>Last Name:</strong> {{ $formData['Last_Name'] }}</p>
    <p><strong>Street Address:</strong> {{ $formData['Street_Address'] }}</p>
    <p><strong>Street Address Line 2:</strong> {{ $formData['Street_Address_Line_2'] }}</p>
    <p><strong>City:</strong> {{ $formData['City'] }}</p>
    <p><strong>State:</strong> {{ $formData['State'] }}</p>
    <p><strong>Zip Code:</strong> {{ $formData['Zip_code'] }}</p>
    <p><strong>Social Security Number (Last 3 digits):</strong> {{ $formData['Social_Security_Number'] }}</p>
    <p><strong>Date of Birth:</strong> {{ $formData['dob'] }}</p>
    <p><strong>Email Address:</strong> {{ $formData['Email_Address'] }}</p>
    <p><strong>Phone:</strong> {{ $formData['Phone'] }}</p>
    <p><strong>Selected Loan:</strong> ${{ $formData['select_loan'] }}</p>
</body>
</html>
