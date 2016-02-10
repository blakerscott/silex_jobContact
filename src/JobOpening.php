<?php
    class JobOpening
    {
        private $title;
        private $desc;

        function __construct($title, $desc)
        {
            $this->title = $title;
            $this->desc = $desc;

        }

        function setTitle($job_title)
        {
            $this->title = $job_title;
        }

        function getTitle()
        {
            return $this->title;
        }

        function setDesc($job_desc)
        {
            $this->desc = $job_desc;
        }

        function getDesc()
        {
            return $this->desc;
        }

        function getWholeTitle()
        {
          return "<h1>We are accepting applications for: " . $this->title . "<br>and the job description is: " . $this->desc . "</h1>";

        }

    }


?>
