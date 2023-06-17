<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
if (isset($_POST["contact"])) {
  $from = "me@sulemanmohd.com";
  $to = "ms181181181@gmail.com";
  $subject = "New Contact Form Fillup from sulemanmohd.com";
  $message = "
    Name: " . $_REQUEST["name"] . "
    Email: " . $_REQUEST["email"] . "
    Project: " . $_REQUEST["project"] . "
    Budget: " . $_REQUEST["budget"] . "
    message: " . $_REQUEST["message"];
  $headers = "From:" . $from;
  if (mail($to, $subject, $message, $headers)) {
    echo "<script>alert('Message was successfully sent.');</script>";
  } else {
    echo "<script>alert('Something went wrong! Try mailing me instead :)');window.location.href='mailto:ms181181181@gmail.com'</script>";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact - Suleman Mohammed</title>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Urbanist");

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Urbanist;
      color: white;
      transition: 0.3s;
      -webkit-tap-highlight-color: transparent;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      background-color: #000;
      overflow-x: hidden;
    }

    input:-webkit-autofill,
    input:-webkit-autofill:hover,
    input:-webkit-autofill:focus,
    input:-webkit-autofill:active {
      -webkit-box-shadow: 0 0 0 30px black inset !important;
      -webkit-text-fill-color: white !important;
    }

    .button {
      background-color: #1572f7;
      text-decoration: none;
      padding: 0.5rem 1.5rem;
      border-radius: 0.2rem;
      border: none;
      outline: none;
      font-size: 1.1rem;
      cursor: pointer;
    }

    .button.button-sm {
      padding: 0.4rem 1.2rem;
      font-size: 1rem;
    }

    .button:hover {
      background-color: #090909;
    }

    #contact {
      width: 100vw;
      padding: 4rem 10rem;
    }

    #contact h1 {
      font-size: 4.5rem;
      font-weight: 500;
    }

    #contact form {
      width: 100%;
      margin: 5rem 0;
      display: flex;
      flex-direction: column;
      gap: 1rem;
      align-items: start;
    }

    #contact form .inline-two {
      width: 100%;
      display: flex;
      gap: 1rem;
    }

    #contact form .form-group {
      width: 100%;
      display: flex;
      flex-direction: column;
      gap: 0.5rem;
    }

    #contact form .form-group label {
      font-size: 0.9rem;
    }

    #contact form .form-group .form-control {
      padding: 0.75rem;
      background-color: transparent;
      outline: none;
      border: 1px solid #fff2;
    }

    #contact form .form-group textarea.form-control {
      height: 12rem;
    }

    #contact form .form-group select.form-control option {
      background-color: #000;
    }

    #contact form .form-group select.form-control option:checked {
      background-color: #161616;
    }

    @media screen and (max-width: 800px) {
      #contact {
        padding: 1.5rem;
      }

      #contact h1 {
        font-size: 3.2rem;
      }

      #contact form .inline-two {
        flex-direction: column;
      }
    }
  </style>
</head>

<body>
  <section id="contact">
    <h1>
      Love to hear from you, <br />
      Get in touch 👋
    </h1>
    <form method="POST">
      <div class="inline-two">
        <div class="form-group">
          <label for="name">Your name</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="John Doe" />
        </div>
        <div class="form-group">
          <label for="email">Your email</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="johndoe@example.com" />
        </div>
      </div>
      <div class="inline-two">
        <div class="form-group">
          <label for="project">What are you intrested in?</label>
          <select class="form-control" name="project" id="project">
            <option value="Website Development">Website Development</option>
            <option value="Software Development">Software Development</option>
            <option value="App Development">App Development</option>
            <option value="Graphic Designing">Graphic Designing</option>
            <option value="Logo Design">Logo Design</option>
            <option value="Motion Graphics">Motion Graphics</option>
            <option value="Video Editing">Video Editing</option>
            <option value="Other">Other</option>
          </select>
        </div>
        <div class="form-group">
          <label for="budget">Project Budget</label>
          <select class="form-control" name="budget" id="budget">
            <option value="$200-$1000">$200-$1000</option>
            <option value="$1000-$2500">$1000-$2500</option>
            <option value="$2500-$5000">$2500-$5000</option>
            <option value="$5000-$10000">$5000-$10000</option>
            <option value="$10000-$15000">$10000-$15000</option>
            <option value="$15000++">$15000++</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" name="message" id="message" placeholder="Tell us what your project is about"></textarea>
      </div>
      <button class="button" type="submit" name="contact">
        Send us a message!
      </button>
    </form>
  </section>
</body>

</html>