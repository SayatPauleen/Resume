<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pauleen Joy Sayat - Resume</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function toggleList(id) {
            const list = document.getElementById(id);
            list.style.display = list.style.display === "none" ? "block" : "none";
        }
    </script>
</head>
<body>
    <div class="resume-container">
        <div class="header">
            <img src="profile.jpg" alt="Profile Picture" class="profile-pic">
            <div class="header-text">
                <h1>Pauleen Joy Sayat</h1>
                <p class="about">Hello! I’m Pauleen, also known as Pau, a passionate learner who loves technology, games, design, and helping others. I aim to combine creativity and logic in every project I do.</p>
            </div>
        </div>

        <div class="section">
            <h2>Education</h2>
            <div class="edu-item">
                <p><strong>Bachelor of Science in Computer Science</strong></p>
                <p class="school">Batangas State University - Alangilan</p>
                <p class="year">2023 – Present</p>
            </div>
            <div class="edu-item">
                <p><strong>Senior High School</strong></p>
                <p class="school">Wellspring Christian Family Schools</p>
                <p class="year">2022 – 2023</p>
            </div>
            <div class="edu-item">
                <p><strong>Senior High School, STEM Strand</strong></p>
                <p class="school">Alangilan Senior High School</p>
                <p class="year">2021 – 2022</p>
            </div>
            <div class="edu-item">
                <p><strong>Junior High School</strong></p>
                <p class="school">University of Batangas</p>
                <p class="year">2017 – 2021</p>
            </div>
        </div>

        <div class="section">
            <h2>Skills</h2>
            <ul>
                <li>
                    <span class="toggle" onclick="toggleList('webdev')">➕ Web Development</span>
                    <ul id="webdev" class="sublist">
                        <li>MySQL</li>
                        <li>PHP</li>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>JavaScript</li>
                    </ul>
                </li>
                <li>
                    <span class="toggle" onclick="toggleList('programming')">➕ Programming</span>
                    <ul id="programming" class="sublist">
                        <li>Python</li>
                        <li>Java</li>
                        <li>C++</li>
                        <li>C#</li>
                    </ul>
                <li>Problem Solving</li>
                </li>
            </ul>
        </div>

        <div class="section">
            <h2>Projects</h2>
            <ul>
                <li>Banking Portal System (Java + MySQL)</li>
                <li>Gas Leak Detection System (Arduino + GSM)</li>
                <li>Dice Game (Python)</li>
                <li>Barrio Sambat Web Page (JavaScript + HTML + CSS)</li>
            </ul>
        </div>

        <div class="section">
            <h2>Contact</h2>
            <p>Email: sayat.pauleen@email.com</p>
            <p>Phone: 0956-516-4255</p>
            <p>Address: Batangas City, Philippines</p>
            <p>GitHub: <a href="https://github.com/PauleenSayat" target="_blank">github.com/PauleenSayat</a></p>
        </div>

        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</body>
</html>
