<?php
require('../common.php');

$title = "Frequenty Asked Questions";
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$templ->setTitle($title);
$templ->setOpenGraph($title, $url, "Read answers on our FAQ to learn more about us!");
$templ->setVar('header', 'jsLoad', '$(\'div#faqQuestions\').accordion();');
$templ->render('header');
?>

<link href="/styles/old.css" rel="stylesheet">
	<section>
		<div class="one column post">
			<h1><span>Frequently Asked Questions</span></h1>
			<p>These FAQs allow a deeper insight to the essence of what OA STEM is and what exactly we do. Most of the questions everyone asks us goes here, and so we hope, by reading through this section, your questions will all be answered. If not, you can always attend our meetings to learn about us firsthand and ask us questions in person - or, you can always e-mail us using our <a href="/contact">contact form</a>.</p>
			<div id="faqQuestions">
				<h3><a href="#">What is OA STEM?</a></h3>
				<div><p>Oxford Academy STEM is a student-run pathway apart from health and business. We have five departments based on each letter of STEM: Science, Technology, Engineering, and Math. We help students learn more about these branches through laid out lesson plans, interactive resources, and competitions on varying degrees.</p></div>

				<h3><a href="#">How are the departments different?</a></h3>
				<div><p>Further details about each department can be found in the About section, or by clicking <a href="/about.html">here</a>.</p></div>
				
				<h3><a href="#">Can you join multiple departments?</a></h3>
				<div><p>Yes, in fact joining multiple departments is encouraged as each department is unique in their own way.</p></div>
				
				<h3><a href="#">Why join this club?</a></h3>
				<div>
					<p>If you're interested in being a scientist, mathematician, or engineer, there's no other club or team at Oxford that gives you the same amount of opportunities as we do. Just saying science is your favorite class is one thing - getting to actually build your own robot or do your own experiments is something else entirely.</p>
					<p>We also have mentors from JPL. You know the guys who landed the Curiosity rover on Mars? Yeah. Them.</p>
				</div>

				<h3><a href="#">How will this club help me?</a></h3>
				<div><p>Learn more about science, not just the stuff in chem or bio. We don't have an engineering class, AP Comp Sci only scratches the surface, and where else do you get to learn about astronomy and geology? There are also plenty of scholarships involved, and competing in these nationwide competitions looks good on college apps too.</p></div>

				<h3><a href="#">Can I get an officer position?</a></h3>
				<div><p>Officer positions open up towards the end of the year. You may apply for any position given that you are determined to be qualified by the current board. You do not need to be a member nor have seniority over the other candidates, though these are qualities looked at during the interview process. More information will be released once interview season begins.</p></div>

				<h3><a href="#">What if I don't have experience?</a></h3>
				<div><p>Then you'll get some by joining STEM! While experience definitely helps, we're not looking for experience so much as a willingness to learn.</p></div>

				<h3><a href="#">Can anybody join, or do they have to get selected?</a></h3>
				<div>
					<p>Anyone can join, regardless of experience. We will look for ways to keep you preoccupied and interested. Those who appear to exceed in skill level may be allowed to work on more difficult tasks, such as being selected to participate in competitions.</p>
				</div>

				<h3><a href="#">Even junior high?</a></h3>
				<div><p>Yeah! If you show dedication to STEM over a number of years, not only will it benefit us, but it will also look nice on your college application.</p></div>

				<h3><a href="#">How time consuming are the club and its separate departments?</a></h3>
				<div><p>After school weekly meetings generally last about 60-90 minutes per branch, but more time may be required as the competition season nears.</p></div>
			</div>
		</div>
	</section>
<?php
$templ->render('footer');
?>