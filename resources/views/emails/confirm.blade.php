<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>确认注册链接</title>
</head>
    <h1>感谢您在 Sample 网站进行注册！</h1>

    <p>
        请点击下面的链接完成注册：
        <a href="{{ route('confirm_email', $user->activation_token) }}">
            {{ route('confirm_email', $user->activation_token) }}
        </a>
    </p>

    <p>
        如果这不是您本人的操作，请忽略此邮件
    </p>
</html>