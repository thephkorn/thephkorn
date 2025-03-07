<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
        .facebook-icon img {
            width: 40px; /* ขนาดไอคอน */
            height: 40px;
            transition: transform 0.3s; /* เพิ่มการขยายเมื่อ hover */
        }

        .facebook-icon:hover img {
            transform: scale(2.2); /* ขยายขนาดเมื่อ hover */
        }
        /* กำหนดพื้นหลังเป็นวิดีโอ */
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
        }

        /* สไตล์วิดีโอที่ใช้เป็นพื้นหลัง */
        .video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;  /* ให้วิดีโอครอบคลุมพื้นที่ทั้งหมด */
            z-index: -1; /* ให้วิดีโออยู่ด้านหลังเนื้อหาทั้งหมด */
        }

        /* สไตล์ของเนื้อหาที่จะทับวิดีโอ */
        .content {
            position: relative;
            z-index: 1; /* ให้เนื้อหาหลักอยู่เหนือวิดีโอ */
            color: white;
            text-align: center;
            padding: 20px;
        }

        /* ตัวอย่างการตั้งสไตล์ของข้อความ */
        h1 {
            font-size: 4rem;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }

        p {
            font-size: 1.5rem;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
        }
    </style>
</head>
<body>

    <!-- วิดีโอพื้นหลัง -->
    <video autoplay muted loop class="video-background">
        <source src="img/pop/plane.mp4" type="video/mp4">
        <!-- เพิ่มตัวเลือกอื่นๆ ถ้าต้องการ เช่น webm หรือ ogg -->
        <source src="your-video.webm" type="video/webm">
        <source src="your-video.ogv" type="video/ogv">
        <!-- ข้อความนี้จะแสดงหากเบราว์เซอร์ไม่รองรับวิดีโอ -->
        Your browser does not support the video tag.
    </video>

    <!-- เนื้อหาหลัก -->
    <div class="content">
        <h1>THANK FOR WATCHING</h1>
        <p>ขอบคุณที่เข้ามารับชมผลงานของฉัน</p>
        <p>สามารถติดต่อฉันได้ จากไอคอนข้างล่าง</p>
    </div>
     <!-- ลิงก์ไปยัง Facebook -->
    <center><a href="https://www.facebook.com" class="facebook-icon" target="_blank">
        <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook"></center>
            </a>
    <center><a href="https://mail.google.com/mail/u/0/#inbox?compose=new" class="facebook-icon" target="_blank"> 
    <img src="https://upload.wikimedia.org/wikipedia/commons/7/7e/Gmail_icon_%282020%29.svg" alt="Facebook" width="40" height="40"></center>
            </a>
            <center><a href="https://line.me/ti/p/aUgM6HiR8u" class="facebook-icon" target="_blank"> 
    <img src="https://upload.wikimedia.org/wikipedia/commons/2/2e/LINE_New_App_Icon_%282020-12%29.png" alt="Facebook" width="40" height="40"></center>
            </a>
</body>
</html>