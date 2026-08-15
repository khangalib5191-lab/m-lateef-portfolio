<!DOCTYPE html>
<html>
<head>
    <title>New Consultation Request</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">
    <div style="max-width: 600px; background: #ffffff; padding: 20px; border-radius: 8px;">
        <h2 style="color: #6366f1;">New Consultation Request Received!</h2>
        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Engagement Type:</strong> {{ $data['engagement_type'] }}</p>
        <p><strong>Project Summary:</strong></p>
        <p style="background: #f1f5f9; padding: 15px; border-radius: 5px;">{{ $data['message'] }}</p>
    </div>
</body>
</html>