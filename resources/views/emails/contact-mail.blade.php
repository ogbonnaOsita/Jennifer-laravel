<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Mail</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f8f8f8; color: #333;">
<section style="max-width: 600px; margin: 0 auto; padding: 20px; background-color: #ffffff; border-radius: 8px;">
    <header style="border-bottom: 1px solid #e2e8f0; padding-bottom: 10px; margin-bottom: 20px;">
        <a href="{{ route('index-page') }}" style="display: flex; align-items: center; text-decoration: none; color: #333;">
            <div style="height: 24px; width: 24px; background-color: #2a2454;"></div>
            <span style="margin-left: 8px; font-size: 20px; font-weight: bold;">Jennifer Ugwa</span>
        </a>
    </header>

    <main style="margin-top: 20px;">
        <h3 style="color: #4a5568; margin-top: 10px;">Hi Jennifer,</h3>
        <p style="margin-top: 10px;">
            {{ $data['message'] }}
        </p>
        <p style="margin-top: 30px;">
            Thanks, <br>
            {{ $data['name'] }} &nbsp;
            {{ $data['email'] }}
        </p>

        {{-- <div class="border-top: 1px solid #e2e8f0; padding-top: 10px;">
            <h4>Contact Info</h4>
        <p>Name: {{$data['name']}} </p>
        <p>Email: {{$data['email']}} </p>
        </div> --}}
    </main>

    <footer style="margin-top: 30px; border-top: 1px solid #e2e8f0; padding-top: 10px; color: #a0aec0;">
        <p>This email was sent from your portfolio</p>
    </footer>
</section>
</body>
</html>
