<?php
$page="home";
include_once($_SERVER['DOCUMENT_ROOT'].'/includes/session.inc.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/includes/header.inc.php');
?>
<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit">
<h1>Hackdays Near You!</h1>
<p>This site has been created to help provide a detailed list of upcoming Hackdays, Conferences and Geek-Meets across the UK and World. Despite a huge number of events going on every year, people often don't hear about events until too close to the event.</p>
<p><a class="btn btn-primary btn-large" href="/events">Find Events &raquo;</a></p>
</div>

<!-- Example row of columns -->
<div class="row">
<div class="span4">
  <h2>Hackday (defined)</h2>
   <p>A hackathon (also known as a hack day, hackfest or codefest) is an event in which computer programmers and others in the field of software development, like graphic designers, interface designers and project managers, collaborate intensively on software-related projects. <a href="http://en.wikipedia.org/wiki/Hackathon" target="_blank">[Definition]</a></p>
  <p><a class="btn" href="/events?type=hackday">View Hackdays &raquo;</a></p>
</div>
<div class="span4">
  <h2>Geek-Meet</h2>
   <p>A Geek-Meet is an arraged meetup for like-minded technology-based people to discuss, chat and generally network over a few drinks of preference. Often these Geek-Meets form Hack Day's.</p>
  <p><a class="btn" href="/events?type=geekmeet">View Geek-Meets &raquo;</a></p>
</div>
<div class="span4">
  <h2>Conference</h2>
  <p>Conferences are sometimes also called seminars, which are usually smaller groups of delegates, or symposiums &ndash; a conference or meeting to discuss a particular subject. Whatever the title, and whatever the subject, one thing is instrumental to them all: that is <i>communication.</i> <a href="http://www.howto.co.uk/business/conference-management/what_is_a_conference/" target="_blank">[Definition]</a></p>
  <p><a class="btn" href="/events?type=conference">View Conferences &raquo;</a></p>
</div>
</div>

<hr>
<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/includes/footer.inc.php');
?>