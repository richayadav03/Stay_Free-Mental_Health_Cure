<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FAQs</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      margin: 0;
      padding: 0;
     /* background-color: #ffff; */
     background-image: url('https://i.pinimg.com/736x/4e/95/4c/4e954c7444f2fae32ce636a3c32dd2bd.jpg');
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }

    h1 {
      color: #000137;
    }

    .faq-container {
      margin-top: 40px;
    }

    .faq-question {
      font-size: 18px;
      font-weight: bold;
      color: #000137;
      cursor: pointer;
      margin-bottom: 8px;
    }

    .faq-answer {
      font-size: 16px;
      color: #000137;
      display: none;
      margin-bottom: 20px;
      border-left: 2px solid #000137;
      padding-left: 10px;
    }

    .faq-answer.show {
      display: block;
    }

    .faq-question:hover {
      color: #e3389f;
    }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script>
    function myFunction() {
  var input = document.getElementById("Search");
  var filter = input.value.toLowerCase();
  var nodes = document.getElementsByClassName('faq-question');

  for (i = 0; i < nodes.length; i++) {
    if (nodes[i].innerText.toLowerCase().includes(filter)) {
      nodes[i].style.display = "block";
    } else {
      nodes[i].style.display = "none";
    }
  }
}
  </script>
</head>

<body>
  <?php require 'partials/_nav.php'; ?>
  <div class="container">
    <h1 align="center" >FAQs</h1>
    <table align="center" width="20%">
  <tr>
    <td><i class="fa fa-search" style="font-size: 40px; color: #ac71c1;"></i></td>

    <td>

      <input type="text" style="width:700px; height: 45px; border-radius: 25px; border-color: #ac71c1;"id="Search" onkeyup="myFunction()" placeholder="Search..." title="Type in a name"></td>
  </tr>
</table>
<br>
    <div class="faq-container">
    
      <div class="faq-question" onclick="toggleAnswer(1)">Q: What is online counseling?</div>
      <div class="faq-answer hide" id="answer-1">
        A: Online counseling is a type of mental health treatment that occurs via the internet and is often referred to
        as teletherapy or e-counseling. It enables people to communicate with certified therapists and counselors from
        the comfort of their homes or any place with an internet connection via video conferencing.
      </div>

      <div class="faq-question" onclick="toggleAnswer(2)">Q: How effective is online therapy compared to in-person
        therapy?</div>
      <div class="faq-answer hide" id="answer-2">
        A: Online counseling is a practical choice for people with busy schedules or limited access to traditional
        treatment because of its accessibility and ease.
      </div>

      <div class="faq-question" onclick="toggleAnswer(3)">Q: How does virtual treatment operate?</div>
      <div class="faq-answer hide" id="answer-3">
        A: Based on your choices and requirements, a licensed therapist will be paired with you when you sign up for
        online therapy through our website. Depending on your preferred means of contact, sessions will either be
        performed by secure video conferencing. Together, you and your therapist will talk about your issues and get
        support and advice.
      </div>

      <div class="faq-question" onclick="toggleAnswer(4)">Q: How secure is my personal information?</div>
      <div class="faq-answer hide" id="answer-4">
        A: We take seriously the privacy and security of your personal data. Our website uses the most recent encryption
        techniques to secure your data and complies with industry regulations to ensure your privacy.
      </div>

      <div class="faq-question" onclick="toggleAnswer(5)">Q: Which therapists are on your platform?</div>
      <div class="faq-answer hide" id="answer-5">
        A: All of the therapists on our site hold valid licenses and have backgrounds in different areas of mental
        health.
      </div>

      <div class="faq-question" onclick="toggleAnswer(6)">Q: What kinds of problems may I address in therapy?</div>
      <div class="faq-answer hide" id="answer-6">
        A: Our platform offers therapeutic services for a wide range of mental health difficulties, including anxiety,
        depression, stress management, marital problems, grief and loss, trauma, self-esteem, and personal development.
      </div>

      <div class="faq-question" onclick="toggleAnswer(7)">Q: How do I begin an online counseling session?</div>
      <div class="faq-answer hide" id="answer-7">
        A: Sign up on our website and establish an account to start your adventure with online treatment. Please
        complete a short intake form so we can better understand your requirements and interests. Once an appropriate
        therapist has been found for you, you can set up your first appointment whenever it's most convenient for you.
      </div>

      <div class="faq-question" onclick="toggleAnswer(8)">Q: How frequently and how long are treatment sessions?</div>
      <div class="faq-answer hide" id="answer-8">
        A: Treatment sessions frequency and duration depend on your requirements and the therapist's advice. Sessions
        typically run for 120 minutes and are held weekly.
      </div>

      <div class="faq-question" onclick="toggleAnswer(9)">Q: Is online therapy appropriate for people of all ages?</div>
      <div class="faq-answer hide" id="answer-9">
        A: People of all ages, including toddlers, adolescents, adults, and elderly, can benefit from online therapy. We
        have therapists that focus on working with various age groups and can adjust their style to suit each person's
        particular requirements.
      </div>

      <div class="faq-question" onclick="toggleAnswer(10)">Q: What happens if I'm not happy with my therapist?</div>
      <div class="faq-answer hide" id="answer-10">
        A: We invite you to let us know if your allocated therapist does not make you feel at ease. You can fill details
        regarding your problem with the therapist in the feedback form, and we assure you of allocating a new therapist.
      </div>

      <div class="faq-question" onclick="toggleAnswer(11)">Q: What should I do if I can't figure out which problem I am
        facing but I am barely having instability?</div>
      <div class="faq-answer hide" id="answer-11">
        A: You can attend the first free session to check whether you're having any mental issues or not, and that will
        help to further trace your therapy journey.
      </div>

      <div class="faq-question" onclick="toggleAnswer(12)">Q: How much does online treatment cost?</div>
      <div class="faq-answer hide" id="answer-12">
        A: Depending on the credentials and expertise of the therapist, the cost of online therapy sessions may change.
        You may select a therapist whose fees fit your budget by viewing their upfront pricing on our website.
      </div>
    </div>
  </div>

  <script>
    function toggleAnswer(faqId) {
      const answer = document.getElementById('answer-' + faqId);
      answer.classList.toggle('show');
    }
  </script>
</body>

</html>