<!DOCTYPE html>

<html lang="en">

<head <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THERAPIST's-PORTPFOLIO</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="p2style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
<style>
    .education {
     font-size: 20px;
      padding: 20px;
      margin-bottom: 30px;
    }
    .work-experience {
     font-size: 20px;
      padding: 20px;
      margin-bottom: 30px;
    }
    .awards {
        font-size: 20px;
      padding: 20px;
      margin-bottom: 30px;
    }
    .btn-custom  {
  background:#bb45c6b6; color:#fff; border-radius:20px
}
.btn-custom :hover {
  /* background:#455dc6b6; color:#fff; border-radius:20px */
  transform: scale(1.05);
  background-color: blue;
}
.btn {
      background-color: #0080c0;
      color: #fff;
 margin-left: 40px;
      padding: 10px 20px;
      border-radius: 5px;
      text-decoration: none;
      display: inline-block;
    }
    .btn:hover {
      background-color: #005b8e;
    }
</style>

<body>

    <header>
        <nav>
            <div class="left">
                Dr. Alexander Greene - CBT Expert, Stanford
                <a href="nominal_plan.php" class="btn" id ="btn">book a session</a>
                <script>
                    // document.getElementById('btn').addEventListener('click', function() {
                    //   var userInput = prompt('Successfully booked session .Kindly check your mail for link');
                    //   if (userInput) {   
                    //     alert('Hello,' + userInput + '! Thanks for your response');
                    //   }
                    // });
                  </script>
            <!-- <div class="right">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/">About</a></li>
                    <li><a href="/">services</a></li>
                    <li><a href="/">Projects</a></li>
                    <li><a href="/">Contact me</a></li>
                </ul> -->

            </div>
        </nav>
    </header>
    <main>
        <section class="firstsection">
            <div class="leftsection">Hi, My Name is <span class="name">  Dr. Alexander Greene</span><br>
                <!-- Transforming Ideas into Reality: <br> -->
                <div class="wrapper">
                    <span class="first-text" style="font-size: 30px;">I'm a passionate<br>
                        <span id="element"></span>

                        <!-- </span><ul class="sec-text">
                    <li><span>Web Developer</span></li>
                    <li><span>Video-Edditor</span></li>
                    <li><span>You-Tuber</span></li>
                    <li><span>Competitive coder</span></li> --> -->
                        <!-- </ul> -->
                </div>
                <div class="subheading">Mindfulness and Relaxation Techniques</div>

            </div>
            <div class="rightsection">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-85zn3gpEj9BjAfSseea424n080SfusWkUA&usqp=CAU" alt="">
            </div>
        </section>
        <section class="second">
            <hr>
            <span class="text-gray">What I have done so far</span>
            <div class="education">
                <h1>Education</h1>
                <ul>                 
                        <li>Doctorate in Clinical Psychology - Stanford University</li>
                  <li>Master's in Counseling Psychology - University of California, Los Angeles</li>
                  <li>Bachelor's in Psychology - University of California, Berkeley</li>                 
                  
                </ul>
              </div>
              <div class="awards">
                <h2>Notable Awards and Recognitions</h2>
                <ul>
                  <li>Excellence in Mental Health Care Award - American Psychological Association (APA)</li>
                  <li>Outstanding Contributions to the Field of Psychology - National Psychologists Association (NPA)</li>
                  <li>Innovative Therapist of the Year - International Association of Cognitive Behavioral Therapists (IACBT)</li>
                </ul>
              </div>
 
            <h1>Work Experience</h1>
            <div class="work-experience">
              
                <ul>
                  <li><strong>Clinical Psychologist (Private Practice)</strong><br>
                    - Conduct individual therapy sessions with clients experiencing a wide range of mental health issues, including anxiety, depression, trauma, and relationship difficulties.<br>
                    - Administer various psychological assessments to diagnose and develop treatment plans tailored to each client's needs.<br>
                    - Implement evidence-based therapeutic approaches, including Cognitive Behavioral Therapy (CBT), Dialectical Behavior Therapy (DBT), and Mindfulness-based techniques.<br>
                    - Collaborate with clients to set treatment goals, monitor progress, and adjust interventions accordingly.<br>
                    - Provide crisis intervention and support for clients facing acute emotional distress or life transitions.<br>
                    - Maintain detailed and confidential client records, ensuring compliance with ethical and legal standards.</li><br><br>
            
                  <li><strong>University Counseling Center - Senior Staff Therapist</strong><br>
                    - Offered individual and group counseling services to university students dealing with academic stress, adjustment issues, and emotional challenges.<br>
                    - Facilitated workshops and psychoeducational groups on topics like stress management, mindfulness, and coping skills development.<br>
                    - Conducted initial intake assessments and made referrals to specialized services as needed.<br>
                    - Collaborated with a multidisciplinary team of counselors, psychiatrists, and social workers to provide comprehensive care for students.<br>
                    - Acted as a clinical supervisor for trainee therapists, providing guidance and feedback on their therapeutic work.</li>    
                </ul>
              </div>
        <section id="skills">
            <!-- Your skills section goes here -->
        </section>
        </main>
       
    <script>
        var typed = new Typed('#element', {
            strings: ['Mental Health Professional', 'Healer', 'Therapeutic Expert'],
            typeSpeed: 50,
        });
    </script>

</body>

</html>