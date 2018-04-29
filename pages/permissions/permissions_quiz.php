<?php
	$title='PALTS : Permissions Quiz';
	$path='../../';
	$nav='permissions_quiz';
	include($path.'assets/inc/head.php');
?>
  <h2 class="quizHeader">Take a Quiz!</h2>


		<div class="quizQuestion">
			<p class="question">1.What permissions do 754 stand for?</p>

		<input class="answer" type="radio" name="q1" value="1" id="q1a1">
		<label for="q1a1">user: rwx, group: rwx, other: r--</label>
		<br>
		<input class="answer" type="radio" name="q1" value="0" id="q1a2">
		<label id="correctString1" for="q1a2">user: rwx, group: r-x, other: r--</label>
		<br>
		<input class="answer" type="radio" name="q1" value="2" id="q1a3">
		<label for="q1a3">user: -wx, group: --x, other: --x</label>
		<br>
		<input class="answer" type="radio" name="q1" value="3" id="q1a4">
		<label for="q1a4">user: r-x, group: rwx, other: rwx</label>
		</div>

		<div class="quizQuestion">
			<p class="question">2. What does the command 'chown root:palts file.txt' do?</p>

		<input class="answer" type="radio" name="q2" value="0" id="q2a1">
		<label for="q2a1">It sets file.txt's group to root and its user to palts</label>
		<br>
		<input class="answer" type="radio" name="q2" value="1" id="q2a2">
		<label for="q2a2">It sets the user of file.txt to both root and palts</label>
		<br>
		<input class="answer" type="radio" name="q2" value="2" id="q2a3">
		<label id="correctString2" for="q2a3">It sets file.txt's user to root and its group to palts</label>
		<br>
		<input class="answer" type="radio" name="q2" value="3" id="q2a4">
		<label for="q2a4">It sets the group of file.txt to both root and palts</label>
		</div>

		<div class="quizQuestion">
			<p class="question">3. A file can have more than one user attached as the 'user' of the file.</p>

		<input class="answer" type="radio" name="q3" value="0" id="q3a1">
		<label for="q3a1">True</label>
		<br>
		<input class="answer" type="radio" name="q3" value="1" id="q3a2">
		<label id="correctString3" for="q3a2">False</label>
		</div>

		<div class="quizQuestion">
			<p class="question">4. There is a list somewhere on the system that defines who 'other' is for files and folders.</p>

		<input class="answer" type="radio" name="q4" value="0" id="q4a1">
		<label for="q4a1">True</label>
		<br>
		<input class="answer" type="radio" name="q4" value="1" id="q4a2">
		<label id="correctString4" for="q4a2">False</label>
		</div>

		<div class="quizQuestion">
			<p class="question">5.What does the command 'free -t' do?</p>

		<input class="answer" type="radio" name="q5" value="0" id="q5a1">
		<label for="q5a1">Displays the total amount of memory on the system.</label>
		<br>
		<input class="answer" type="radio" name="q5" value="0" id="q5a2">
		<label id="correctString5" for="q5a2">It displays the regular 'free' information in addition to the total amount of memory calculated in each column.</label>
		<br>
		<input class="answer" type="radio" name="q5" value="1" id="q5a3">
		<label id="correctString5" for="q5a3">It displays the total amount of memory in each column.</label>
		<br>
		<input class="answer" type="radio" name="q5" value="0" id="q5a4">
		<label for="q5a4">It displays the total amount of memory used on the system.</label>
		</div>

		<div class="quizQuestion">
			<p class="question">6.How does the du command differ from the df command?</p>

		<input class="answer" type="radio" name="q6" value="1" id="q6a1">
		<label for="q6a1">It displays the disk usage information of df in human readable form.</label>
		<br>
		<input class="answer" type="radio" name="q6" value="0" id="q6a2">
		<label for="q6a2">It displays the disk usage information of one disk only.</label>
		<br>
		<input class="answer" type="radio" name="q6" value="0" id="q6a3">
		<label id="correctString6" for="q6a3">It displays the disk usage information of specific files and folders.</label>
		<br>
		<input class="answer" type="radio" name="q6" value="0" id="q6a4">
		<label for="q6a4">It displays the disk information of the currently active disk.</label>
		</div>

		<div class="quizQuestion">
			<p class="question">7.The top command is used to display what statistic on the computer?</p>

		<input class="answer" type="radio" name="q7" value="0" id="q7a1">
		<label for="q7a1">CPU Usage</label>
		<br>
		<input class="answer" type="radio" name="q7" value="1" id="q7a2">
		<label id="correctString7" for="q7a2">Processes</label>
		<br>
		<input class="answer" type="radio" name="q7" value="0" id="q7a3">
		<label for="q7a3">Memory Usage</label>
		<br>
		<input class="answer" type="radio" name="q7" value="0" id="q7a4">
		<label for="q7a4">Battery usage for laptops</label>
		</div>



<br/>
  <div class="submitter">
  <input class="quizSubmit" id="submitButton" onClick="submitQuiz_TCL_QUIZ()"
	  type="submit" value="Submit" />
  </div>

<!--show only wrong answers on submit-->
    <div class="quizAnswers" id="correctAnswer1"></div>
	<div class="quizAnswers" id="correctAnswer2"></div>
    <div class="quizAnswers" id="correctAnswer3"></div>
    <div class="quizAnswers" id="correctAnswer4"></div>
	<div class="quizAnswers" id="correctAnswer5"></div>
	<div class="quizAnswers" id="correctAnswer6"></div>
	<div class="quizAnswers" id="correctAnswer7"></div>


<!--show score upon submit-->
    <div>
		<h2 class="quizScore" id="userScore">Your score will appear here.</h2>
    </div>
<?php
	include($path.'assets/inc/footer.php');
?>
