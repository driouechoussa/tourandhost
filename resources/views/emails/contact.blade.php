<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="{{ asset('styles/main.css') }}">

</head>
<body>

<div class="email-container text-center w-100 d-flex flex-column align-items-center ">
    <!-- Header -->
    <div class="m-4">
        <div class="header-icon">📬</div>
        <h2 class="text-primary section-title">New Contact Message from visitor</h2>
        <p class="text-muted">You have received a new message from your website contact form</p>
    </div>

    <!-- Message Fields -->
    <div class="text-start mb-3">
        <p class="field-title">👤 Name</p>
        <p>{{ $data['name'] }}</p>
    </div>

     <div class="text-start mb-3 phone">
        <p class="field-title">📞 phone</p>
        <p>{{ $data['phone'] }}</p>
    </div>

    <div class="text-start mb-3">
        <p class="field-title">📧 Email</p>
        <p>{{ $data['email'] }}</p>
    </div>


    <div class="text-start mb-4">
        <p class="field-title">💬 Message</p>
        <p style="white-space: pre-line;">{{ $data['message'] }}</p>
    </div>

    <!-- Reply Button -->
    <div class="mb-4">
        <a href="mailto:{{ $data['email'] }}" class="btn btn-lg text-white reply-btn">Reply to Sender</a>
    </div>

    <!-- Footer -->
    <div class="text-muted" style="font-size: 12px;">
        This message was sent automatically from your website contact form.
    </div>
</div>

</body>
</html>
