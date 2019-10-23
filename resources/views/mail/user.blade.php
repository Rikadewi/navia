<!DOCTYPE html>
<html>
<body>
    <h4>
        @if ($data['name'] == '')
            Hi!
        @else
            Hi, {{ $data['name'] }}!
        @endif
    </h4>
    
    Thank you for getting in touch! 
    <br>We have received your message. 
    One of our colleagues will get back in touch with you soon!
    <br>
    <br>Best regards,
    <br>Navia
</body>
</html>