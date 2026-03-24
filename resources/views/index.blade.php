<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Login</title>
    <style>
    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
        100% { transform: translateY(0px); }
    }

    .floating-logo {
        animation: float 4s ease-in-out infinite;
        font-size: 80px; /* Big and bold */
        font-family: 'Arial Black', sans-serif;
        text-transform: uppercase;
        letter-spacing: -2px;
    }
</style>
</head>
<body style="margin: 0; padding: 0; height: 100vh; display: flex; font-family: sans-serif;">

    <div style="flex: 5; background-color: white; display: flex; align-items: center; justify-content: center;">
    
    <h1 class="floating-logo">
        <span style="color: #ffeb3b; text-shadow: 2px 2px 0px #000;">Blog</span><span style="color: black;">It!!</span>
    </h1>

</div>

    <div style="flex: 2; background-color: yellow; border-left: 2px solid black; display: flex; align-items: center; justify-content: center; padding: 20px;">
        
        <div style="width: 100%; max-width: 250px;">
            <h2 style="text-align: center;">Login</h2>
            
            <form method="POST" action="">
                @csrf <div style="margin-bottom: 15px;">
                    <label>Username</label>
                    <input type="text" name="username" style="width: 100%; padding: 8px; box-sizing: border-box;">
                </div>

                <div style="margin-bottom: 20px;">
                    <label>Password</label>
                    <input type="password" name="password" style="width: 100%; padding: 8px; box-sizing: border-box;">
                </div>

                <button type="submit" style="width: 100%; padding: 10px; background-color: black; color: white; border: none; cursor: pointer;">
                    Sign In
                </button>
                <div style="text-align: center; margin-top: 15px;">
     <span style="font-size: 14px; color: #333;">New here? 
        <a href="{{ url('/register') }}" style="color: black; font-weight: bold; text-decoration: underline;">
            Sign up
        </a>
    </span>
</div>
            </form>
        </div>
    </div>

</body>
</html>