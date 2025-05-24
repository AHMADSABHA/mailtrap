<!-- filepath: resources/views/mail/interview_mail.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>دعوة مقابلة</title>
</head>
<body>
    صديقي العزيز,
    <br>
    <p>هذه الرسالة من قسم <b>{{ $details['department'] }} </b>تدعوك للحضور للمقابلةبتاريخ اليوم</p>
    
    <br>
    
   
    <p>{{ $details['body'] }}</p>
    <p>شكرا لكم,</p>
</body>
</html>