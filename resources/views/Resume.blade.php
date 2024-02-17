<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <style>
        
    </style>
</head>
<body>
    <div>
        <button onclick="showAboutMe()">About Me</button>
        <button onclick="showSkills()">Skills</button>
        <button onclick="showHobbies()">Hobbies</button>
    </div>

    <div id="aboutMeSection" style="display: none;">
        <h2>About Me</h2>
        <h1>Hi, I am Jazen Loise Licudine</h1>
            <p>Information Technology
                student.</p>
               <p>I consider my self a
                responsible and orderly
                person.</p>
        </section>
    
        <section id="education">
            <h2>Education</h2>
            <ul>
                <li>
                    <h3>Primary</h3>
                    <p>LOAKAN ELEMENTARY SCHOOL, LOAKAN BAGUIO CITY,
                        BENGUET, PHILIPPINES</p>
                    <p>Graduation Year: 2013</p>
                </li>
                <li>
                    <h3>Secondary/ Junior High School</h3>
                    <p>SAN MACARIO NATIONAL HIGH
                        SCHOOL, SAN MACARIO SUR NATIVIDAD,
                        PANGASINAN, PHILIPPINES</p>
                    <p>Graduation Year: 2018</p>
                </li>
                <li>
                    <h3>Senior High School</h3>
                    <p>SAN MACARIO NATIONAL HIGH
                        SCHOOL, SAN MACARIO SUR NATIVIDAD,
                        PANGASINAN, PHILIPPINES</p>
                    <p>Graduation Year: 2020</p>
                </li>
                
                
            </ul>
        </section>
    
        <section id="personal-data">
            <h2>Personal Data</h2>
            <ul>
              <li><strong>Birthday:</strong> March 21, 2001</li>
              <li><strong>Hometown:</strong> San Macario Norte Natividad, Pangasinan</li>
              <li><strong>Religion:</strong> Roman Catholic</li>
              <li><strong>Citizenship:</strong> Filipino</li>
              <li><strong>Civil Status:</strong> Single</li>
              
            </ul>
          </section>
    
        <section id="experience">
            <h2>Experience</h2>
            <ul>
                <li>
                    <h3>Area in Charge/ Merchandiser</h3>
                    <p>C and Tripple A, Abanao Square Baguio City, Philippines</p>
                    <p>January 2022 - April 2022</p>
                   
                </li>
                
            </ul>
        </section>
    </div>

    <div id="skillsSection" style="display: none;">
        <h2>Skills</h2>
        <ul>
            <li><strong>Photo Editing</strong></li>
            <li><strong>Video Editing</strong> </li>
          </ul>
    </div>

    <div id="hobbiesSection" style="display: none;">
        <h2>Hobbies</h2>
        <ul>
            <li><strong>Traveling</strong></li>
            <li><strong>Playing Basketball</strong> </li>
            <li><strong>Watching Anime</strong></li>
            <li><strong>Playing Video Game</strong></li>
          </ul>
        
    </div>

    <script>
        function showAboutMe() {
            document.getElementById('aboutMeSection').style.display = 'block';
            document.getElementById('skillsSection').style.display = 'none';
            document.getElementById('hobbiesSection').style.display = 'none';
        }

        function showSkills() {
            document.getElementById('aboutMeSection').style.display = 'none';
            document.getElementById('skillsSection').style.display = 'block';
            document.getElementById('hobbiesSection').style.display = 'none';
        }

        function showHobbies() {
            document.getElementById('aboutMeSection').style.display = 'none';
            document.getElementById('skillsSection').style.display = 'none';
            document.getElementById('hobbiesSection').style.display = 'block';
        }
    </script>
</body>
</html>
