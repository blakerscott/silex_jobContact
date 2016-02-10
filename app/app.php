<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/JobOpening.php";
    require_once __DIR__."/../src/Contact.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return "
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset='utf-8'>
                <title>Job Posting</title>
            </head>
            <body>
                <h1>Submit Job Posting</h1>
                    <form class='' action='/job_postings' method='get'>
                        <label for='title'>Job Post Title</label>
                        <input type='text' name='title' id='title'>
                        <label for='desc'>Job Description</label>
                        <input type='text' name='desc' id='desc'>
                        <label for='name'>Your Name</label>
                        <input type='text' name='name' id='name'>
                        <label for='email'>Your Email</label>
                        <input type='email' name='email' id='email'>
                        <label for='phone'>Your Phone</label>
                        <input type='number' name='phone' id='phone'>
                        <button type='submit'>Post Job</button>
                    </form>
            </body>
        </html>";
    });


    $app->get("/job_postings", function() {
      $output = "";
      $this_posting = new JobOpening($_GET['title'], $_GET['desc']);
      $contact_info = new Contact($_GET['name'], $_GET['email'], $_GET['phone']);
      $contactoutput = $contact_info->getWholeContact();
      $postattempt = $this_posting->getWholeTitle();
      $output = $output . "
      <h1>" . $postattempt . "</h1>
      <h2>" . $contactoutput . "</h1>"

      ;

      return $output;
  });
    return $app;
?>
