<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="web.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/3/34/Home-icon.svg" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link href="https://fonts.googleapis.com/css2?family=Gudea&family=Kanit:wght@300&family=Petrona:wght@200;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
        body {
        background: url('img/pop/homebg.jpg') no-repeat center center fixed;  /* ภาพพื้นหลัง */
        background-size: cover;  /* ขยายภาพให้ครอบคลุม */
        height: 100vh;  /* ให้ภาพเต็มพื้นที่หน้าจอ */
        }

        .expanded-text {
            font-size: 54px; /* ขยายขนาดตัวอักษร */
            text-align: center; /* จัดตัวอักษรชิดซ้าย */
            color: #FFFFFF; /* เปลี่ยนสีตัวอักษรเป็นสีขาว */
            margin-left: 50px;
            transition: transform 0.3s ease-in-out; /* ทำให้การเคลื่อนไหวของตัวหนังสือช้าลง */
        }
        .expanded-text:hover {
            transform: translateY(-10px); /* ยกตัวหนังสือขึ้น 10px เมื่อเมาส์ชี้ */
        }
        /* กำหนดขนาดคารูเซล */
        #carouselExampleIndicators {
        max-width: 750px;  /* ขนาดกว้างสูงสุด */
        margin: 0 auto;    /* ให้อยู่กลางหน้า */
        }

        /* ปรับขนาดภาพภายในคารูเซล */
        .carousel-inner img {
        width: 100%;      /* กำหนดให้ภาพกว้างเต็มความกว้างของคารูเซล */
        height: auto;     /* ให้ภาพยืดหยุ่นตามอัตราส่วน */
        }
        /* ปรับขนาดภาพและเพิ่มความโค้งที่ขอบ */
        .carousel-inner img {
        width: 100%;      /* กำหนดให้ภาพกว้างเต็มความกว้างของคารูเซล */
        height: auto;     /* ให้ภาพยืดหยุ่นตามอัตราส่วน */
        border-radius: 15px; /* เพิ่มความโค้งให้ขอบภาพ */
        }
        .leaf {
            position: absolute;
            width: 30px;
            height: 30px;
            background-color: #FFD700 ; /* สีใบไม้ */
            clip-path: ellipse(50% 50% at 50% 50%);
            animation: fall 5s linear infinite;
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
        @media (max-width: 768px) {
        #carouselExampleIndicators {
            max-width: 100%; /* ขยายคารูเซลให้เต็มหน้าจอในอุปกรณ์ขนาดเล็ก */
        }
        }
        nav a {
        color: black; /* หรือสีที่คุณต้องการ */
        text-decoration: none; /* กำหนดไม่ให้มีเส้นใต้ */
        }
        /* เปลี่ยนสีเมื่อ hover */
        nav a:hover {
            color: #FF5733; /* เปลี่ยนสีเมื่อ hover ตามต้องการ */
            text-decoration: underline; /* ให้เส้นใต้เมื่อ hover */
        }
</style>
    
<header>
        <nav>
            <li><a href="home.php" class="hvr-underline-from-center">Main</a></li>
            <li><a href="travelmenu.php" class="hvr-underline-from-center">Travel</a></li>
            <li><a target="_blank" href="contact.php" class="hvr-underline-from-center">Contact</a></li>
            <li><a href="logout.php">Loguot</a></li>
        </nav>
    </header>
    
<body>
        <br><br><br><br><br><br><br><br>
  <!-- Carousel -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/pop/edinburghcl.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h5>Edinburgh Castle</h5>
        <p>Edinburgh Castle From Scotland.</p>
      </div>
      </div>
      <div class="carousel-item">
        <img src="img/pop/fujicl.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h5>Fuji</h5>
        <p>Fuji Moutain From Japanese.</p>
      </div>
      </div>
      <div class="carousel-item">
        <img src="img/pop/skotlandcl.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h5>Jacobite Steam Train</h5>
        <p>Jacobite Steam Train From Skotland.</p>
      </div>
      </div>
      <div class="carousel-item">
        <img src="img/pop/usamaincl.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h5>New York City</h5>
        <p>New York City From united states.</p>
      </div>
      </div>
      <div class="carousel-item">
        <img src="img/pop/fraumunstercl.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h5>Fraumunster</h5>
        <p>Fraumunster From Switzerland.</p>
      </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <section class="body">
            <div class="ani">
                <br><br><br>
                <div class="expanded-text">DISCOVER THE WORLD</div>
                <hr>
                <a href="travelmenu.php" class="insect2" ><center>(CLICK HERE)  YOUR NEXT ADVENTURE STARTS HERE  (CLICK HERE)</center></a>
            </div>
        </section>
        <br><br><br><br>
  <!-- Bootstrap 5.0.2 JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

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
</body>
</html>
