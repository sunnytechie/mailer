<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @media screen and (max-width: 640px) {
            .spacer {
                display: none;
            }
        }
        .msg p {
            font-size: 16px;
            line-height: 24px;
        }
    </style>
</head>
<body style="background: #E3E3E3">
    <div class="spacer" style="height: 20px"></div>
    <div style="width: 640px; margin: 0 auto; background: #fff">
        <div style="width: 100%; background: #ffffff; margin-bottom: 5px; text-align: center; padding: 15px; border-bottom: 0.1rem solid #aaa;">
            <img class="img-thumbnail" height="60px" width="60px" src="https://sfiloveinaction.org/wp-content/uploads/2022/07/cropped-SFI-Logo.png" alt="Loading">
        </div>
        <div class="msg" style="padding: 15px 18px; font-size: 14px;">
            {!! $compose['message'] !!}
        </div>
        <div style="background: #f8eaea; padding: 30px; text-align: center; border-bottom: 0.1rem solid #fff; border-top: 0.1rem solid #fff;">
            <div style="margiin-bottom: 5px; text-align: center">Get our God's heartbeat mobile app</div>
            <br>
            <a style="margin-right: 10px" href="https://apps.apple.com/gb/app/sfghb/id1564125722"><img style="border-radius: 0.2rem;" src="https://sfiloveinaction.org/wp-content/uploads/2022/06/Untitled-design-17.png" alt=""></a>
            <a href="https://play.google.com/store/apps/details?id=godsheartbeat.net"><img style="border-radius: 0.2rem" src="https://sfiloveinaction.org/wp-content/uploads/2022/06/Untitled-design-18.png" alt=""></a>
        </div>
        <footer style="background: #f8eaea; padding: 20px 0;">
            <div style="padding: 5px 20px">
                <a style="font-size: 12px; text-decoration: none; border-bottom: 0.1rem solid #ddd; color: #aaa;" href="#">Unsubscribe</a> | <a style="font-size: 12px; text-decoration: none; border-bottom: 0.2rem solid #ddd; color: #aaa;" href="https://www.sfiloveinaction.org/">Privacy Policy</a> <br>
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