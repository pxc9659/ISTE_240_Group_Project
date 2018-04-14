<?php
	$title='PATLS : ';
	$path='';
	$nav='';
	include($path.'assets/inc/header.php');
?>



<body>
  <h2 class="quizHeader">Take a Quiz!</h2>
  
	
	  	<div>
	  		<p class="question">1.How do you list files in human readable form?</p>

	    	<ul>
	    	<input class="answer" type="radio" name="q1" value="1">
	        <label id="correctString1">ls -hl</label>
	    	<br>
	        <input class="answer" type="radio" name="q1" value="0">
	        <label>ls -lt</label>
	        <br>
	        <input class="answer" type="radio" name="q1" value="0">
	        <label>ls</label>
	        <br>
	        <input class="answer" type="radio" name="q1" value="0">
	        <label>ls -l</label>
    		</ul>
	  	</div>
	  
	  	<div>
	  		<p class="question">2.How do you create a directory?</p>

	    	<ul>
	        <input class="answer" type="radio" name="q2" value="0">
	        <label>mdir</label>
	        <br>
	        <input class="answer" type="radio" name="q2" value="1">
	        <label id="correctString2">mkdir</label>
	        <br>
	        <input class="answer" type="radio" name="q2" value="0">
	        <label>mkfile</label>
	        <br>
	        <input class="answer" type="radio" name="q2" value="0">
	        <label>mkd</label>
	    	</ul>
	  	</div>
		
		<div>
	  		<p class="question">3.How do you go to root directory?</p>

	    	<ul>
	        <input class="answer" type="radio" name="q3" value="0">
	        <label>cd ..</label>
	        <br>
	        <input class="answer" type="radio" name="q3" value="1">
	        <label id="correctString3">cd /</label>
	        <br>
	        <input class="answer" type="radio" name="q3" value="0">
	        <label>cd /..</label>
	        <br>
	        <input class="answer" type="radio" name="q3" value="0">
	        <label>cd -</label>
	    	</ul>
		</div>
		
		<div>
	  		<p class="question">4.How to display manual page for ls command?</p>

	    	<ul>
	        <input class="answer" type="radio" name="q4" value="0">
	        <label>ls man</label>
	        <br>
	        <input class="answer" type="radio" name="q4" value="1">
	        <label id="correctString4">man ls</label>
	        <br>
	        <input class="answer" type="radio" name="q4" value="0">
	        <label>man</label>
	        <br>
	        <input class="answer" type="radio" name="q4" value="0">
	        <label>manual ls</label>
	    	</ul>
		</div>
		
	  	<div>
	  		<p class="question">5.What command do you use to remove directory?</p>

	    	<ul>
	        <input class="answer" type="radio" name="q5" value="0">
	        <label>rdir</label>
	        <br>
	        <input class="answer" type="radio" name="q5" value="0">
	        <label>rd</label>
	        <br>
			<input class="answer" type="radio" name="q5" value="1">
	        <label id="correctString5">rmdir</label>
	        <br>
	        <input class="answer" type="radio" name="q5" value="0">
	        <label>removedir</label>
    		</ul>
	  	</div>
		
		<div>
	  		<p class="question">6.What does rm -r command do? </p>

	    	<ul>
	        <input class="answer" type="radio" name="q6" value="1">
	        <label id="correctString6">It makes sure the directory is empty before deleting it.</label>
			<br>
			<input class="answer" type="radio" name="q6" value="0">
	        <label>It just removes the directory.</label>
	        <br>
	        <input class="answer" type="radio" name="q6" value="0">
	        <label>It renames the directory</label>
	        <br>
	        <input class="answer" type="radio" name="q6" value="0">
	        <label>"rm" command does not exist.</label>
    		</ul>
	  	</div>
		
		<div>
	  		<p class="question">7.What command prints the current working directory? </p>

	    	<ul>
	        <input class="answer" type="radio" name="q7" value="0">
	        <label>pdf</label>
	        <br>
	        <input class="answer" type="radio" name="q7" value="1">
	        <label id="correctString7">pwd</label>
	        <br>
	        <input class="answer" type="radio" name="q7" value="0">
	        <label>printDir</label>
	        <br>
	        <input class="answer" type="radio" name="q7" value="0">
	        <label>pdir</label>
    		</ul>
	  	</div>
		
		
	  
<br/>
  <div class="submitter">
          <input class="quizSubmit" id="submitButton" onClick="submitQuiz()"
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
    	<h2 class="quizScore" id="userScore"></h2>
    </div>
	</div>

</body>



<?php
	include($path.'assets/inc/footer.php');
?>