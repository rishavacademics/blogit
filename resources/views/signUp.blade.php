<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogIt!! - Sign Up</title>
</head>
<body style="margin: 0; padding: 0; min-height: 100vh; display: flex; align-items: center; justify-content: center; background-color: #f4f4f4; font-family: sans-serif;">

    <div style="background-color: white; padding: 40px; border-radius: 15px; box-shadow: 0px 10px 25px rgba(0,0,0,0.1); width: 100%; max-width: 400px; border: 2px solid black;">
        
        <h2 style="text-align: center; margin-bottom: 30px;">
            <span style="color: #ffd700; -webkit-text-stroke: 1px black;">Blog</span>It!! Signup
        </h2>

        <form method="POST" action="{{url('/adduser')}}" enctype="multipart/form-data">
            @csrf

            <div style="display: flex; flex-direction: column; align-items: center; margin-bottom: 25px;">
                <div id="preview-container" style="width: 120px; height: 120px; border-radius: 50%; border: 3px solid #ffeb3b; background-color: #eee; overflow: hidden; display: flex; align-items: center; justify-content: center; position: relative;">
                    <img id="output" style="width: 100%; height: 100%; object-fit: cover; display: none;">
                    <span id="placeholder-text" style="color: #888; font-size: 12px; text-align: center;">No Image</span>
                </div>
                
                <label style="margin-top: 10px; cursor: pointer; background: black; color: white; padding: 5px 15px; border-radius: 20px; font-size: 12px;">
                    Browse Photo
                    <input type="file" name="profile_pic" accept="image/*" style="display: none;" 
                           onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0]); document.getElementById('output').style.display='block'; document.getElementById('placeholder-text').style.display='none';">
                </label>
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px; font-weight: bold;">Full Name</label>
                <input type="text" name="name" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;">
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px; font-weight: bold;">Username</label>
                <input type="text" name="username" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;">
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px; font-weight: bold;">Email</label>
                <input type="email" name="email" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;">
            </div>

            <div style="margin-bottom: 25px;">
                <label style="display: block; margin-bottom: 5px; font-weight: bold;">Password</label>
                <input type="password" name="password" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;">
            </div>

            <button type="submit" style="width: 100%; padding: 12px; background-color: #ffeb3b; color: black; border: 2px solid black; font-weight: bold; cursor: pointer; border-radius: 5px; font-size: 16px;">
                CREATE ACCOUNT
            </button>

            <div style="text-align: center; margin-top: 20px;">
                <a href="{{ url('/blogit') }}" style="color: #666; font-size: 14px; text-decoration: none;">Already a member? <b>Login</b></a>
            </div>
        </form>
    </div>

</body>
</html>