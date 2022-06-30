<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background: #E3E3E3">

    <div class="spacer" style="height: 20px"></div>
    {{-- Center div of 640px --}}
    <div style="width: 640px; margin: 0 auto; background: #fff">
        {{-- Header --}}
        <div style="width: 100%; background: #ffffff; margin-bottom: 5px;">
            <img class="img-thumbnail" src="https://sfiloveinaction.org/wp-content/uploads/2022/06/Daily-Newsletter-4.png" alt="Loading">
        </div>

        {{-- message --}}
        <div style="padding: 0px 18px; font-size: 14px; font-family: 'Roboto', sans-serif;">
    
            {!! $compose['message'] !!}
        </div>

        {{-- Downloadable Apps --}}
        <div style="background: #f8eaea; padding: 30px; text-align: center; border-bottom: 0.1rem solid #fff; border-top: 0.1rem solid #fff;">
            <div style="margiin-bottom: 5px; text-align: center">Get our God's heartbeat mobile app</div>
            <br>
            <a style="margin-right: 10px" href="#"><img style="border-radius: 0.5rem;" src="https://ci6.googleusercontent.com/proxy/EyzDZFwB6ATD3E1pZR-MnYhPHm2D7NKOtSK54BK_p3DgUVlgDS9T_2x2X9yTFeYX2hCY3NWTjVtNPv0fQCZDcYPh5LletyIW7AwQRA=s0-d-e1-ft#https://www.totaljobs.com/email-assets/appStore_Apple.gif" alt=""></a>
            <a href="#"><img style="border-radius: 0.5rem" src="https://ci4.googleusercontent.com/proxy/ONwoAU0nSWXoT80avv-r2FetSnryV5Dzl4ZvqAZ_GDZl-CI6jmtjUQ90ru1hz97sfFmg67v3NDARJsue_8oBYpCKXBfuok1waYWVvsc=s0-d-e1-ft#https://www.totaljobs.com/email-assets/appStore_Google.gif" alt=""></a>
        </div>

        {{-- Footer --}}
        <footer style="background: #f8eaea; padding: 20px 0;">
            <div style="padding: 5px 20px">
                <a style="font-size: 12px; text-decoration: none; border-bottom: 0.1rem solid #ddd; color: #aaa;" href="#">Unsubscribe</a> | <a style="font-size: 12px; text-decoration: none; border-bottom: 0.2rem solid #ddd; color: #aaa;" href="#">Privacy Policy</a> <br>
            </div>
            <div style="padding: 5px 20px">
                <span style="font-size: 12px; color: rgb(139, 138, 138);">Jesus Transformation Camp, Along Nkpor Umuoji Road, Anambra, Nigeria.</span>
            </div>
            <div style="padding: 5px 20px">
                <span style="font-size: 12px; color: rgb(139, 138, 138);">© 2022 Sisters Fellowship Int'l. All rights reserved.</span>
            </div>
        </footer>
    </div>
    <div class="spacer" style="height: 20px"></div>
    
</body>
</html>