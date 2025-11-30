<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Status</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            padding: 50px 40px;
            max-width: 500px;
            width: 100%;
            text-align: center;
            animation: slideIn 0.5s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            animation: scaleIn 0.6s ease-out 0.2s both;
        }

        @keyframes scaleIn {
            from {
                transform: scale(0);
            }
            to {
                transform: scale(1);
            }
        }

        .icon.success {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .icon.failed {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white;
        }

        .icon.unknown {
            background: linear-gradient(135deg, #ffa726 0%, #fb8c00 100%);
            color: white;
        }

        h1 {
            color: #2d3748;
            font-size: 28px;
            margin-bottom: 15px;
            font-weight: 700;
        }

        p {
            color: #718096;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 35px;
        }

        .btn {
            display: inline-block;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 14px 40px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.6);
        }

        .btn:active {
            transform: translateY(0);
        }

        @media (max-width: 600px) {
            .container {
                padding: 40px 25px;
            }

            h1 {
                font-size: 24px;
            }

            .icon {
                width: 70px;
                height: 70px;
                font-size: 35px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Success State -->
        <!-- Uncomment the section you need based on $status -->

        @if($status == 'success')
            <div class="icon success">✓</div>
            <h1>Payment Successful!</h1>
            <p>Your transaction has been completed successfully...</p>
        @elseif($status == 'failed')
            <div class="icon failed">✕</div>
            <h1>Payment Failed</h1>
            <p>Unfortunately, your payment could not be processed...</p>
        @else
            <div class="icon unknown">?</div>
            <h1>Payment Status Unknown</h1>
            <p>We're unable to determine your payment status...</p>
        @endif
        <!-- SUCCESS -->
        {{-- <div class="icon success">✓</div>
        <h1>Payment Successful!</h1>
        <p>Your transaction has been completed successfully. A confirmation email has been sent to your inbox.</p> --}}

        <!-- FAILED -->
        <!--
        <div class="icon failed">✕</div>
        <h1>Payment Failed</h1>
        <p>Unfortunately, your payment could not be processed. Please check your payment details and try again.</p>
        -->

        <!-- UNKNOWN -->
        <!--
        <div class="icon unknown">?</div>
        <h1>Payment Status Unknown</h1>
        <p>We're unable to determine your payment status at the moment. Please contact support if you have any questions.</p>
        -->

        <a href="/" class="btn">Return to Home</a>
    </div>
</body>
</html>
