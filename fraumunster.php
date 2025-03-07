<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fraumünster Church</title>
    <link rel="stylesheet" href="web.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/f/f3/Flag_of_Switzerland.svg" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link href="https://fonts.googleapis.com/css2?family=Gudea&family=Kanit:wght@300&family=Petrona:wght@200;600&display=swap" rel="stylesheet">
</head>
<style>
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
        .expanded-text {
            font-size: 54px; /* ขยายขนาดตัวอักษร */
            color: #FFFFFF; /* เปลี่ยนสีตัวอักษรเป็นสีขาว */
            position: relative; /* เพื่อให้สามารถใช้ตำแหน่ง left ได้ */
            padding-left: 50px; /* เพิ่มช่องว่างระหว่างข้อความกับขอบซ้าย */
            margin-left: 50px; /* เพิ่มช่องว่างด้านซ้ายของกล่อง (ถ้าต้องการ) */
            transition: transform 0.3s ease-in-out; /* ทำให้การเคลื่อนไหวของตัวหนังสือช้าลง */
            text-align: left; /* ให้ข้อความอยู่ทางซ้าย */
        }
        .expanded-text:hover {
            transform: translateY(-10px); /* ยกตัวหนังสือขึ้น 10px เมื่อเมาส์ชี้ */
        }

        .leaf {
            position: absolute;
            width: 30px;
            height: 30px;
            background-color: #FF6666 ; /* สีใบไม้ */
            clip-path: ellipse(50% 50% at 50% 50%);
            animation: fall 5s linear infinite;
        }
        .insect2 {
            font-size: 18px; /* ขยายขนาดตัวอักษร */
            text-align: left; /* จัดตัวอักษรชิดซ้าย */
            color: #FFFFFF; /* เปลี่ยนสีตัวอักษรเป็นสีขาว */
            margin-left: 50px;
            transition: transform 0.3s ease-in-out; /* ทำให้การเคลื่อนไหวของตัวหนังสือช้าลง */
        }
        /* สไตล์สำหรับวงกลม */
        .sparkle {
            position: absolute;
            width: 20px;  /* ขนาดวงกลม */
            height: 20px; /* ขนาดวงกลม */
            border-radius: 50%;  /* ทำให้เป็นวงกลม */
            pointer-events: none;
            animation: sparkle-animation 1s forwards, color-change 8s infinite; /* เอฟเฟกต์วิบวับและการเปลี่ยนสี */
            opacity: 0;
        }
        /* การเคลื่อนไหวของแสงระยิบระยับ */
        @keyframes sparkle-animation {
            0% {
                opacity: 1;
                transform: scale(0);
            }
            50% {
                opacity: 0.6;
                transform: scale(1.5);
            }
            100% {
                opacity: 0;
                transform: scale(2);
            }
        }
        /* การสลับสีของวงกลม (12 สี) */
        @keyframes color-change {
            0% {
                background: #00CC00; /* เขียว */
            }
            5.33% {
                background: #66CCFF; /* ฟ้า */
            }
            8.66% {
                background: #FFFF33; /* เหลือง */
            }
        }
        @keyframes fall {
            0% {
                top: -50px;
                opacity: 1;
                transform: rotate(0deg);
            }
            100% {
                top: 100vh;
                opacity: 0;
                transform: rotate(360deg);
            }
        }
    </style>
    
<body>
    <!-- วิดีโอพื้นหลัง -->
    <video autoplay muted loop class="video-background">
        <source src="img/pop/Fraumünster.mp4" type="video/mp4">
        <!-- เพิ่มตัวเลือกอื่นๆ ถ้าต้องการ เช่น webm หรือ ogg -->
        <source src="your-video.webm" type="video/webm">
        <source src="your-video.ogv" type="video/ogv">
        <!-- ข้อความนี้จะแสดงหากเบราว์เซอร์ไม่รองรับวิดีโอ -->
        Your browser does not support the video tag.
    </video>
    <a id="Home"></a>
    <header>
        <nav>
            <li><a href="home.php" class="hvr-underline-from-center">Home</a></li>
            <li><a href="travelmenu.php" style="cursor: not-allowed;" class="hvr-underline-from-center">Travel</a></li>
            <li><a target="_blank" href="contact.php" style="cursor: not-allowed;" class="hvr-underline-from-center">Contact</a></li>
        </nav>
    </header>
    </div>
  
</style>

        <section class="body">
            <div class="ani">
                <br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <a href="chapel.php" class="previous round">&#8249;</a>
                    <a href="matternhorn.php" class="next round">&#8250;</a>
                <div class="expanded-text">Fraumünster Church</div>
                <div class="insect2">โบสถ์ฟราวมุนสเตอร์ (Fraumünster Church) โดดเด่นด้วยสถาปัตยกรรมแบบโกธิคและกระจกสีสันสดใสที่
                    <br>ออกแบบโดยมาร์ก ชากัลล์ สร้างความงดงามให้กับทั้งภายในและภายนอกของโบสถ์ วิหารนี้ยังเป็นสถานที่
                    <br>ที่มีความสงบเงียบและศักดิ์สิทธิ์ ที่เชื่อมโยงประวัติศาสตร์และศิลปะเข้าด้วยกันอย่างลงตัว</div>
                <p class="insect2">The Fraumünster Church, with its Gothic architecture and colourful stained glass designed 
                    <br>by Marc Chagall, graces both the interior and exterior of the church. It is also a place of tranquility
                    <br> and sanctuary, where history and art meet.</p>
            </section>
            
        <script>
        // ฟังก์ชันเพื่อสร้างใบไม้ร่วง
        function createLeaf() {
            const leaf = document.createElement('div');
            leaf.classList.add('leaf');

            // ตั้งค่าตำแหน่งเริ่มต้นของใบไม้
            const xPosition = Math.random() * window.innerWidth; // ตำแหน่งเริ่มต้นแบบสุ่ม
            leaf.style.left = `${xPosition}px`;

            // ตั้งค่าความเร็วและระยะเวลาของการเคลื่อนไหว
            const fallDuration = Math.random() * 3 + 3; // ระยะเวลาร่วง (3-6 วินาที)
            leaf.style.animationDuration = `${fallDuration}s`;

            // เพิ่มใบไม้ลงในหน้าจอ
            document.body.appendChild(leaf);

            // ลบใบไม้หลังจากตกลงถึงพื้น
            setTimeout(() => {
                leaf.remove();
            }, fallDuration * 1000);
        }

        // สร้างใบไม้ใหม่ทุกๆ 300 มิลลิวินาที
        setInterval(createLeaf, 200);
    </script>
    <script>
        // ฟังก์ชันสร้างแสงระยิบระยับวงกลมเมื่อเมาส์เคลื่อนที่
        document.addEventListener('mousemove', (e) => {
            // สร้าง div สำหรับแสงระยิบระยับวงกลม
            const sparkle = document.createElement('div');
            sparkle.classList.add('sparkle');

            // กำหนดตำแหน่งให้แสงระยิบระยับอยู่ที่ตำแหน่งเมาส์
            sparkle.style.left = `${e.pageX - 20}px`;  // ลบ 20px เพื่อให้ตรงกลางแสงอยู่ที่เมาส์
            sparkle.style.top = `${e.pageY - 20}px`;

            // เพิ่มแสงลงในหน้าจอ
            document.body.appendChild(sparkle);

            // ลบแสงออกจาก DOM หลังจากเคลื่อนไหวเสร็จ
            setTimeout(() => {
                sparkle.remove();
            }, 1000); // ระยะเวลา 1 วินาที (ตามความยาวของแอนิเมชัน)
        });
    </script>  
    
    <style>
  .previous, .next {
    font-size: 66px; /* ปรับขนาดตัวอักษร */
    padding: 1px 5px; /* เพิ่มระยะห่างภายในปุ่ม */
    text-decoration: none; /* ลบเส้นขีดใต้ */
    color: #B0C4DE; /* กำหนดสีของตัวอักษร */
    background-color: ; /* กำหนดสีพื้นหลัง */
    border-radius: 15%; /* ทำให้ปุ่มเป็นวงกลม */
    display: inline-block; /* ให้ปุ่มอยู่ติดกัน */
    border-radius: 15%; /* ทำให้ปุ่มเป็นวงกลม */
    position: fixed; /* ให้ตำแหน่งของปุ่มคงที่ */
    top: 50%; /* ตั้งให้ปุ่มอยู่กลางแนวตั้ง */
    transform: translateY(-50%); /* เลื่อนปุ่มไปยังตำแหน่งกลางแนวตั้ง */
    display: inline-block; /* ให้ปุ่มอยู่ติดกัน */
    z-index: 1000; /* ทำให้ปุ่มอยู่เหนือเนื้อหาอื่นๆ */
    transition: background-color 0.3s ease; /* เพิ่มเอฟเฟกต์การเปลี่ยนสีพื้นหลัง */
  }

  /* ปุ่ม previous อยู่ด้านซ้าย */
  .previous {
    left: 10px; /* ตั้งให้ปุ่มอยู่ห่างจากขอบซ้าย */
  }

  /* ปุ่ม next อยู่ด้านขวา */
  .next {
    right: 10px; /* ตั้งให้ปุ่มอยู่ห่างจากขอบขวา */
  }
  .previous:hover, .next:hover {
    background-color: #ddd; /* สีพื้นหลังเมื่อเอาเมาส์ไปวาง */
  }
  
</body>
</html>