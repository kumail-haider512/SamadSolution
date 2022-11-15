<!DOCTYPE html>
<html>
<head>
    <title>Email</title>
</head>
<body>
    
    <h2 style="text-align:center;"> {{$setting['pay_email_title'] ?? ''}} </h2>
    <br>  
    <h3>{{$setting['pay_email_head'] ?? ''}}   </h3>
    <br>
    <h4>{{$setting['pay_email_desc'] ?? ''}} </h4>
    <h5>Course Name: {{ $data['course_name']}}</h5>
    <h5>Order Number: {{ $data['order_number'] }}</h5>
    <h5>Course Price: {{ $data['course_price'] }}</h5>
    <br>
    <h6>{{$setting['pay_email_note'] ?? ''}}</h6>
    <img src="{{ asset($setting['pay_email_footer'] ?? '')}}" height="150px" width="200px">
</body>
</html>