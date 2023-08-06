<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>About Us</title>
</head>
<style>
  body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    background-image: url('https://i.pinimg.com/736x/4e/95/4c/4e954c7444f2fae32ce636a3c32dd2bd.jpg'); /* Background image URL */
    background-size: cover; /* Adjust the image to cover the whole page */
    background-repeat: no-repeat; /* Prevent image from repeating */
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

h1 {
    color: #000137;
    font-weight: bold;
    font-style: italic;
    text-decoration: underline; /* Underline the heading */
}

h2 {
    color: #000137;
    font-weight: bold;
    font-style: italic;
    text-decoration: underline; /* Underline the heading */
}

ul {
    list-style-type: disc;
    margin-left: 20px;
}

p, li {
    color: #311432; /* Darker shade of purple for text */

}

p:first-of-type {
    font-weight: bold;
}

ul li {
    margin-bottom: 8px;
}
.quote-container {
    display: flex;
    flex-wrap: wrap;
}

.quote {
    font-size: 24px;
    font-weight: bold;
    font-style: italic;
    color: #6c3483; /* Darker shade of purple for quote text */
    padding: 10px;
    border: 2px solid #9b59b6; /* Slightly darker border color */
    border-radius: 8px;
    position: relative;
    margin: 10px; /* Added margin between quotes */
}

.quote:before {
    content: "“";
    font-size: 36px;
    color: #9b59b6; /* Darker shade of purple for quote marks */
    position: absolute;
    top: -10px;
    left: -20px;
}

.quote:after {
    content: "”";
    font-size: 36px;
    color: #9b59b6; /* Darker shade of purple for quote marks */
    position: absolute;
    bottom: -10px;
    right: -20px;
}

.quote-container .quote:nth-child(odd) {
    margin-right: auto;
    order: 1;
}

.quote-container .quote:nth-child(even) {
    margin-left: auto;
    order: 2;
}

.quote:hover {
    background-color: #f2e6f3; /* Lighter shade of purple on hover */
    transform: scale(1.05);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
}

@media screen and (max-width: 480px) {
    .quote {
        margin-right: auto;
        margin-left: auto;
    }
}

/* Updated styles for "About Us" section */
.container h1 {
    color: #000137; /* Darker shade of purple for header text */


    background-color: ; /* Light shade of purple for header background */
    padding: 10px;
    border-radius: 8px;
}

</style>
<body>
<?php require 'partials/_nav.php'; ?>
  <div class="container">
    <h1>About Us</h1>
    <p>Hey, if you are</p>
    <ul>
        <li>Frustrated and can't find peace</li>
        <li>In a stressful situation and can't find anyone to talk with</li>
        <li>Feeling depressed due to any reason and want the solution without losing privacy</li>
        <li>Not feeling okay and don't even know what happens to you</li>
        <li>Having any issues with your mental health and you don't have facility of psychiatrists or therapists nearby your location</li>
        <li>Not able to afford expensive mental health care</li>
    </ul>
    <p>Then relax, you are at the right place.</p>
    <p>We are here to solve your problems by providing you well-educated and licensed doctors, therapists, and counselors with an affordable price and in the most interactive and efficient way.</p>
    <h2>Who Are We?</h2>
    <p>We are the solution to your problem. We are the people who sincerely work to enhance the lives of the people who are suffering from stress, anxiety, and depression. We are providing the most effective and efficient way for getting a connection with highly qualified doctors, counselors, and therapists for the people who cannot afford expensive health care functionalities.</p>
    <h2>Our Vision</h2>
    <p>The internal peace of each and every individual is our first priority. The world should become so peaceful that no one ever needs us.</p>
    <h2>Our Mission</h2>
    <p>We want to live our dream that no one is having any hesitation to talk about their mental health issues because whenever anyone has such hesitation, then he/she will say: "no need to worry when Stay Free is with us."</p>
    <div class="quote-container">
        <q class="quote">“Thinking about our users before thinking about us.”</q>
        <q class="quote">“Let's convert the stressful lives into joyful lives.”</q>
        <q class="quote">“Motivation comes from within and we take care about that within personality.”</q>
        <q class="quote">“People without stress emit peace and positivity around the world and that’s how the world will become a peaceful place.”</q>
        <q class="quote">“Yes, we are always there for you.”</q>
        <q class="quote">“Your privacy is our biggest concern and that is our strength too.”</q>
        <q class="quote">“Not everyone judges you as Stay Free is always there to understand you and will never judge you.”</q>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

</body>
</html>