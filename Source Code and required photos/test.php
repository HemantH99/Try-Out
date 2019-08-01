
<html>
<head>
<style type='text/css'>
#wrapper {
	
	width:950px;
	 height:auto;
	 padding: 13px;
	 margin-right:auto;
	 margin-left:auto;
	 background-color:#fff;
	
}
</style>
</head>

<body bgcolor='#e1e1e1'>

<?php


	$rid = rand(1,3);
?>

<div id='wrapper'>

<center><font face='Andalus' size='5'>Test</b></font></center>
<br />
<br />
<br /><br />

<?php

if ($rid == 1){
	
	echo "
<form action='process.php?id=1' method='post' id='quizForm' id='1'>


	<ol>
    
   
    	<li>
        <h3>abase</h3>
        
        <div>
        <input type='radio' name='answerone' id='answerone' value='A' />
        <label for='answeronenA'>A) lower; degrade </label>
        </div>
        
        <div>
        <input type='radio' name='answerone' id='answerone' value='B' />
        <label for='answeroneB'>B) embarrass</label>
        </div>
        
        <div>
        <input type='radio' name='answerone' id='answerone' value='C' />
        <label for='answeroneC'>C) subside or moderate</label>
        </div>
        </li>
        
     
        <li>
        <h3>aberration</h3>
        
        <div>
        <input type='radio' name='answertwo' id='answertwo' value='A' />
        <label for='answertwoA'>A) A Search Engine </label>
        </div>
        
        <div>
        <input type='radio' name='answertwo' id='answertwo' value='B' />
        <label for='answertwoB'>B) deviation from the normal</label>
        </div>
        
        <div>
        <input type='radio' name='answertwo' id='answertwo' value='C' />
        <label for='answertwoC'>C) suspended action</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>adhere</h3>
        
        <div>
        <input type='radio' name='answerthree' id='answerthree' value='A' />
        <label for='answerthreeA'>A) expert at</label>
        </div>
        
        <div>
        <input type='radio' name='answerthree' id='answerthree' value='B' />
        <label for='answerthreeB'>B) WebSpider</label>
        </div>
        
        <div>
        <input type='radio' name='answerthree' id='answerthree' value='C' />
        <label for='answerthreeC'>C) stick fast</label>
        </div>
        </li>
		<li>
        <h3>bait</h3>
        
        <div>
        <input type='radio' name='answerfour' id='answerfour' value='A' />
        <label for='answerfourA'>A) harass; tease</label>
        </div>
        
        <div>
        <input type='radio' name='answerfour' id='answerfour' value='B' />
        <label for='answerfourB'>B) joking talk</label>
        </div>
        
        <div>
        <input type='radio' name='answerfour' id='answerfour' value='C' />
        <label for='answerfourC'>C)barrier laid down by artillery fire</label>
        </div>
        </li>
        
     
        <li>
        <h3>bemused</h3>
        
        <div>
        <input type='radio' name='answerfive' id='answerfive' value='A' />
        <label for='answerfive'>A) express sorrow or disapproval  </label>
        </div>
        
        <div>
        <input type='radio' name='answerfive' id='answerfive' value='B' />
        <label for='answerfiveB'>B) confused; lost in thought</label>
        </div>
        
        <div>
        <input type='radio' name='answerfive' id='answerfive' value='C' />
        <label for='answerfiveC'>C) None of the above</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>blowhard</h3>
        
        <div>
        <input type='radio' name='answersix' id='answersix' value='A' />
        <label for='answersixA'>A) joyous </label>
        </div>
        
        <div>
        <input type='radio' name='answersix' id='answersix' value='B' />
        <label for='answersixB'>B) complete happiness</label>
        </div>
        
        <div>
        <input type='radio' name='answersix' id='answersix' value='C' />
        <label for='answersixC'>C) talkative boaster</label>
        </div>
        </li>
		<li>
        <h3>canter</h3>
        
        <div>
        <input type='radio' name='answerseven' id='answerseven' value='A' />
        <label for='answersevenA'>A) slow gallop </label>
        </div>
        
        <div>
        <input type='radio' name='answerseven' id='answerseven' value='B' />
        <label for='answersevenB'>B) spacious</label>
        </div>
        
        <div>
        <input type='radio' name='answerseven' id='answerseven' value='C' />
        <label for='answersevenC'>C) mental or physical ability</label>
        </div>
        </li>
        
     
        <li>
        <h3>choir</h3>
        
        <div>
        <input type='radio' name='answereight' id='answereight' value='A' />
        <label for='answereightA'>A) courteous </label>
        </div>
        
        <div>
        <input type='radio' name='answereight' id='answereight' value='B' />
        <label for='answereightB'>B) group of people who sing together</label>
        </div>
        
        <div>
        <input type='radio' name='answereight' id='answereight' value='C' />
        <label for='answereightC'>C) None of the above</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>clamor</h3>
        
        <div>
        <input type='radio' name='answernine' id='answernine' value='A' />
        <label for='answernineA'>A) small exclusive group of people </label>
        </div>
        
        <div>
        <input type='radio' name='answernine' id='answernine' value='B' />
        <label for='answernineB'>B) Spider</label>
        </div>
        
        <div>
        <input type='radio' name='answernine' id='answernine' value='C' />
        <label for='answernineC'>C) loud continous noise</label>
        </div>
        </li>
		<li>
        <h3>covetous</h3>
        
        <div>
        <input type='radio' name='answerten' id='answerten' value='A' />
        <label for='answertenA'>A) avaricious</label>
        </div>
        
        <div>
        <input type='radio' name='answerten' id='answerten' value='B' />
        <label for='answertenB'>B) attempt to gain </label>
        </div>
        
        <div>
        <input type='radio' name='answerten' id='answerten' value='C' />
        <label for='answertenC'>C) shrink quivering as from fear</label>
        </div>
        </li>
        
     
        <li>
        <h3>diadem</h3>
        
        <div>
        <input type='radio' name='answereleven' id='answereleven' value='A' />
        <label for='answerelevenA'>A) shoes </label>
        </div>
        
        <div>
        <input type='radio' name='answereleven' id='answereleven' value='B' />
        <label for='answerelevenB'>B) crown</label>
        </div>
        
        <div>
        <input type='radio' name='answereleven' id='answereleven' value='C' />
        <label for='answerelevenC'>C) bottle</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>disgorge</h3>
        
        <div>
        <input type='radio' name='answertwelve' id='answertwelve' value='A' />
        <label for='answertwelveA'>A) dig up </label>
        </div>
        
        <div>
        <input type='radio' name='answertwelve' id='answertwelve' value='B' />
        <label for='answertwelveB'>B) uncouple</label>
        </div>
        
        <div>
        <input type='radio' name='answertwelve' id='answertwelve' value='C' />
        <label for='answertwelveC'>C) surrender something</label>
        </div>
        </li>
		
		<li>
        <h3>dogged</h3>
        
        <div>
        <input type='radio' name='answerthirteen' id='answerthirteen' value='A' />
        <label for='answerthirteenA'>A) dogged</label>
        </div>
        
        <div>
        <input type='radio' name='answerthirteen' id='answerthirteen' value='B' />
        <label for='answerthirteenB'>B) untidy (of a woman or clothes)</label>
        </div>
        
        <div>
        <input type='radio' name='answerthirteen' id='answerthirteen' value='C' />
        <label for='answerthirteenC'>C) exercising the most influence</label>
        </div>
        </li>
        
     
        <li>
        <h3>dyslexia</h3>
        
        <div>
        <input type='radio' name='answerfourteen' id='answerfourteen' value='A' />
        <label for='answerfourteenA'>A)oddity </label>
        </div>
        
        <div>
        <input type='radio' name='answerfourteen' id='answerfourteen' value='B' />
        <label for='answerfourteenB'>B) word blindness</label>
        </div>
        
        <div>
        <input type='radio' name='answerfourteen' id='answerfourteen' value='C' />
        <label for='answerfourteenC'>C) abnormal</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>efface</h3>
        
        <div>
        <input type='radio' name='answerfifteen' id='answerfifteen' value='A' />
        <label for='answerfifteenA'>A) having womanly traits  </label>
        </div>
        
        <div>
        <input type='radio' name='answerfifteen' id='answerfifteen' value='B' />
        <label for='answerfifteenB'>B) able to produce a desired effect</label>
        </div>
        
        <div>
        <input type='radio' name='answerfifteen' id='answerfifteen' value='C' />
        <label for='answerfifteenC'>C) rub out</label>
        </div>
        </li>
		<li>
        <h3>enamored</h3>
        
        <div>
        <input type='radio' name='answersixteen' id='answersixteen' value='A' />
        <label for='answersixteenA'>A) in love</label>
        </div>
        
        <div>
        <input type='radio' name='answersixteen' id='answersixteen' value='B' />
        <label for='answersixteenB'>B) make beloved </label>
        </div>
        
        <div>
        <input type='radio' name='answersixteen' id='answersixteen' value='C' />
        <label for='answersixteenC'>C) territory enclosed within an alien land</label>
        </div>
        </li>
        
     
        <li>
        <h3>enduring</h3>
        
        <div>
        <input type='radio' name='answerseventeen' id='answerseventeen' value='A' />
        <label for='answerseventeenA'>A) provide with some quality </label>
        </div>
        
        <div>
        <input type='radio' name='answerseventeen' id='answerseventeen' value='B' />
        <label for='answerseventeenB'>B)lasting; surviving </label>
        </div>
        
        <div>
        <input type='radio' name='answerseventeen' id='answerseventeen' value='C' />
        <label for='answerseventeenC'>C) weaken; take away energy from</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>exodus</h3>
        
        <div>
        <input type='radio' name='answereighteen' id='answereighteen' value='A' />
        <label for='answereighteenA'>A) small in amount </label>
        </div>
        
        <div>
        <input type='radio' name='answereighteen' id='answereighteen' value='B' />
        <label for='answereighteenB'>B) drive out evil spirits</label>
        </div>
        
        <div>
        <input type='radio' name='answereighteen' id='answereighteen' value='C' />
        <label for='answereighteenC'>C) departure (of a large number of people)</label>
        </div>
        </li>
		<li>
        <h3>fertile</h3>
        
        <div>
        <input type='radio' name='answernineteen' id='answerninteen' value='A' />
        <label for='answernineteenA'>A) producing many young, fruits, or seeds</label>
        </div>
        
        <div>
        <input type='radio' name='answernineteen' id='answernineteen' value='B' />
        <label for='answernineteenB'>B) ardent; zealous; hot</label>
        </div>
        
        <div>
        <input type='radio' name='answernineteen' id='answernineteen' value='C' />
        <label for='answernineteenC'>C) intensity of feeling</label>
        </div>
        </li>
        
     
        <li>
        <h3>figment</h3>
        
        <div>
        <input type='radio' name='answertwenty' id='answertwenty' value='A' />
        <label for='answertwentyA'>A) destruction</label>
        </div>
        
        <div>
        <input type='radio' name='answertwenty' id='answertwenty' value='B' />
        <label for='answertwentyB'>B) invention</label>
        </div>
        
        <div>
        <input type='radio' name='answertwenty' id='answertwenty' value='C' />
        <label for='answertwentyC'>C) explore</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>finicky</h3>
        
        <div>
        <input type='radio' name='answertwentyone' id='answertwentyone' value='A' />
        <label for='answertwentyoneA'>A) surface texture feeling</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentyone' id='answertwentyone' value='B' />
        <label for='answertwentyoneB'>B) properly made and complete</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentyone' id='answertwentyone' value='C' />
        <label for='answertwentyoneC'>C) too particular; fussy </label>
        </div>
        </li>
		<li>
        <h3>gourmet</h3>
        
        <div>
        <input type='radio' name='answertwentytwo' id='answertwentytwo' value='A' />
        <label for='answertwentytwoA'>A) connoisseur of food and drink</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentytwo' id='answertwentytwo' value='B' />
        <label for='answertwentytwoB'>B) clothing </label>
        </div>
        
        <div>
        <input type='radio' name='answertwentytwo' id='answertwentytwo' value='C' />
        <label for='answertwentytwoC'>C) arranged by degrees</label>
        </div>
        </li>
        
     
        <li>
        <h3>gratuity</h3>
        
        <div>
        <input type='radio' name='answertwentythree' id='answertwentythree' value='A' />
        <label for='answertwentythreeA'>A) beg </label>
        </div>
        
        <div>
        <input type='radio' name='answertwentythree' id='answertwentythree' value='B' />
        <label for='answertwentythreeB'>B) tip</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentythree' id='answertwentythree' value='C' />
        <label for='answertwentythreeC'>C) buy</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>juxtapose</h3>
        
        <div>
        <input type='radio' name='answertwentyfour' id='answertwentyfour' value='A' />
        <label for='answertwentyfourA'>A) right and power to apply the law</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentyfour' id='answertwentyfour' value='B' />
        <label for='answertwentyfourB'>B) science of law</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentyfour' id='answertwentyfour' value='C' />
        <label for='answertwentyfourC'>C) place side by side</label>
        </div>
        </li>
		<li>
		
		<h3>knack</h3>
        
        <div>
        <input type='radio' name='answertwentyfive' id='answertwentyfive' value='A' />
        <label for='answertwentyfiveA'>A) special talent; art</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentyfive' id='answertwentyfive' value='B' />
        <label for='answertwentyfiveB'>B) contract into wrinkles</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentyfive' id='answertwentyfive' value='C' />
        <label for='answertwentyfiveC'>C) demanding much work or care</label>
        </div>
        </li>
        
     
        <li>
        <h3>languish</h3>
        
        <div>
        <input type='radio' name='answertwentysix' id='answertwentysix' value='A' />
        <label for='answertwentysixA'>A) freedom from narrow limitations </label>
        </div>
        
        <div>
        <input type='radio' name='answertwentysix' id='answertwentysix' value='B' />
        <label for='answertwentysixB'>B) lose animation or strength</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentysix' id='answertwentysix' value='C' />
        <label for='answertwentysixC'>C) pantry; place where food is kept</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>maculated</h3>
        
        <div>
        <input type='radio' name='answertwentyseven' id='answertwentyseven' value='A' />
        <label for='answertwentysevenA'>A) pastoral song </label>
        </div>
        
        <div>
        <input type='radio' name='answertwentyseven' id='answertwentyseven' value='B' />
        <label for='answertwentysevenB'>B) crafty; double-dealing</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentyseven' id='answertwentyseven' value='C' />
        <label for='answertwentysevenC'>C) spotted; stained</label>
        </div>
        </li>
		<li>
        <h3>nubile</h3>
        
        <div>
        <input type='radio' name='answertwentyeight' id='answertwentyeight' value='A' />
        <label for='answertwentyeightA'>A) marriageable; of marriageable age</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentyeight' id='answertwentyeight' value='B' />
        <label for='answertwentyeightB'>B) worthless; futile</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentyeight' id='answertwentyeight' value='C' />
        <label for='answertwentyeightC'>C) related to marriage or the wedding ceremony</label>
        </div>
        </li>
        
     
        <li>
        <h3>obsequy</h3>
        
        <div>
        <input type='radio' name='answertwentynine' id='answertwentynine' value='A' />
        <label for='answertwentynineA'>A) slander; disgrace; infamy </label>
        </div>
        
        <div>
        <input type='radio' name='answertwentynine' id='answertwentynine' value='B' />
        <label for='answertwentynineB'>B) funeral ceremony</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentynine' id='answertwentynine' value='C' />
        <label for='answertwentynineC'>C) blunt; not sharp; stupid</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>wiggle</h3>
        
        <div>
        <input type='radio' name='answerthirty' id='answerthirty' value='A' />
        <label for='answerthirtyA'>A)small ride on a smooth surface </label>
        </div>
        
        <div>
        <input type='radio' name='answerthirty' id='answerthirty' value='B' />
        <label for='answerthirtyB'>B)young animal </label>
        </div>
        
        <div>
        <input type='radio' name='answerthirty' id='answerthirty' value='C' />
        <label for='answerthirtyC'>C)  move from side to side with irregular twice</label>
        </div>
        </li>
    </ol>
     <input type='submit' value='Submit Quiz' />
    
</form>";

}

if ($rid == 2){
	
	echo "


<form action='process.php?id=2' method='post' id='quizForm' id='2'>


	<ol>
    
    <li>
        <h3>abate</h3>
        
        <div>
        <input type='radio' name='answerone' id='answerone' value='A' />
        <label for='answeronenA'>A)subside or moderate </label>
        </div>
        
        <div>
        <input type='radio' name='answerone' id='answerone' value='B' />
        <label for='answeroneB'>B)heat; passion</label>
        </div>
        
        <div>
        <input type='radio' name='answerone' id='answerone' value='C' />
        <label for='answeroneC'>C)lower; degrade</label>
        </div>
        </li>
        
     
        <li>
        <h3>archaic</h3>
        
        <div>
        <input type='radio' name='answertwo' id='answertwo' value='A' />
        <label for='answertwoA'>A)hard; strenuous </label>
        </div>
        
        <div>
        <input type='radio' name='answertwo' id='answertwo' value='B' />
        <label for='answertwoB'>B)antiquated; no longer used</label>
        </div>
        
        <div>
        <input type='radio' name='answertwo' id='answertwo' value='C' />
        <label for='answertwoC'>C) suspended action</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>bandy</h3>
        
        <div>
        <input type='radio' name='answerthree' id='answerthree' value='A' />
        <label for='answerthreeA'>A)stop short </label>
        </div>
        
        <div>
        <input type='radio' name='answerthree' id='answerthree' value='B' />
        <label for='answerthreeB'>B)something that relieves pain</label>
        </div>
        
        <div>
        <input type='radio' name='answerthree' id='answerthree' value='C' />
        <label for='answerthreeC'>C)discuss lightly or glibly</label>
        </div>
        </li>
		<li>
        <h3>bantering</h3>
        
        <div>
        <input type='radio' name='answerfour' id='answerfour' value='A' />
        <label for='answerfourA'>A)joking talk; good-naturedly ridiculing</label>
        </div>
        
        <div>
        <input type='radio' name='answerfour' id='answerfour' value='B' />
        <label for='answerfourB'>B)posion; cause of ruin</label>
        </div>
        
        <div>
        <input type='radio' name='answerfour' id='answerfour' value='C' />
        <label for='answerfourC'>C)barrier laid down by artillery fire</label>
        </div>
        </li>
        
     
        <li>
        <h3>baroque</h3>
        
        <div>
        <input type='radio' name='answerfive' id='answerfive' value='A' />
        <label for='answerfive'>A)railing in a courtroom  </label>
        </div>
        
        <div>
        <input type='radio' name='answerfive' id='answerfive' value='B' />
        <label for='answerfiveB'>B)highly ornate</label>
        </div>
        
        <div>
        <input type='radio' name='answerfive' id='answerfive' value='C' />
        <label for='answerfiveC'>C)None of the above</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>cartographer</h3>
        
        <div>
        <input type='radio' name='answersix' id='answersix' value='A' />
        <label for='answersixA'>A)film maker </label>
        </div>
        
        <div>
        <input type='radio' name='answersix' id='answersix' value='B' />
        <label for='answersixB'>B)home maker</label>
        </div>
        
        <div>
        <input type='radio' name='answersix' id='answersix' value='C' />
        <label for='answersixC'>C)Map maker</label>
        </div>
        </li>
		<li>
        <h3>caucus</h3>
        
        <div>
        <input type='radio' name='answerseven' id='answerseven' value='A' />
        <label for='answersevenA'>A)private meeting of a group of people </label>
        </div>
        
        <div>
        <input type='radio' name='answerseven' id='answerseven' value='B' />
        <label for='answersevenB'>B)public meeting</label>
        </div>
        
        <div>
        <input type='radio' name='answerseven' id='answerseven' value='C' />
        <label for='answersevenC'>C)casual gathering </label>
        </div>
        </li>
        
     
        <li>
        <h3>celerity</h3>
        
        <div>
        <input type='radio' name='answereight' id='answereight' value='A' />
        <label for='answereightA'>A)slow </label>
        </div>
        
        <div>
        <input type='radio' name='answereight' id='answereight' value='B' />
        <label for='answereightB'>B)speed; rapidity</label>
        </div>
        
        <div>
        <input type='radio' name='answereight' id='answereight' value='C' />
        <label for='answereightC'>C)cruise</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>decry</h3>
        
        <div>
        <input type='radio' name='answernine' id='answernine' value='A' />
        <label for='answernineA'>A)lure or bait</label>
        </div>
        
        <div>
        <input type='radio' name='answernine' id='answernine' value='B' />
        <label for='answernineB'>B)honeytrap</label>
        </div>
        
        <div>
        <input type='radio' name='answernine' id='answernine' value='C' />
        <label for='answernineC'>C)express strong disapproval of; condemn openly</label>
        </div>
        </li>
		<li>
        <h3>depredation</h3>
        
        <div>
        <input type='radio' name='answerten' id='answerten' value='A' />
        <label for='answertenA'>A)plundering; destruction</label>
        </div>
        
        <div>
        <input type='radio' name='answerten' id='answerten' value='B' />
        <label for='answertenB'>B)construction </label>
        </div>
        
        <div>
        <input type='radio' name='answerten' id='answerten' value='C' />
        <label for='answertenC'>C)disaster</label>
        </div>
        </li>
        
     
        <li>
        <h3>disdain</h3>
        
        <div>
        <input type='radio' name='answereleven' id='answereleven' value='A' />
        <label for='answerelevenA'>A)able to see differences </label>
        </div>
        
        <div>
        <input type='radio' name='answereleven' id='answereleven' value='B' />
        <label for='answerelevenB'>B)treat with scorn or contempt</label>
        </div>
        
        <div>
        <input type='radio' name='answereleven' id='answereleven' value='C' />
        <label for='answerelevenC'>C)good hospitality</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>elope</h3>
        
        <div>
        <input type='radio' name='answertwelve' id='answertwelve' value='A' />
        <label for='answertwelveA'>A)walk slowly</label>
        </div>
        
        <div>
        <input type='radio' name='answertwelve' id='answertwelve' value='B' />
        <label for='answertwelveB'>B)run fastly</label>
        </div>
        
        <div>
        <input type='radio' name='answertwelve' id='answertwelve' value='C' />
        <label for='answertwelveC'>C)run away secretly</label>
        </div>
        </li>
		
		<li>
        <h3>enrapture</h3>
        
        <div>
        <input type='radio' name='answerthirteen' id='answerthirteen' value='A' />
        <label for='answerthirteenA'>A)please intensely </label>
        </div>
        
        <div>
        <input type='radio' name='answerthirteen' id='answerthirteen' value='B' />
        <label for='answerthirteenB'>B)satisfy</label>
        </div>
        
        <div>
        <input type='radio' name='answerthirteen' id='answerthirteen' value='C' />
        <label for='answerthirteenC'>C) exercising the most influence</label>
        </div>
        </li>
        
     
        <li>
        <h3>felon</h3>
        
        <div>
        <input type='radio' name='answerfourteen' id='answerfourteen' value='A' />
        <label for='answerfourteenA'>A)prisoner</label>
        </div>
        
        <div>
        <input type='radio' name='answerfourteen' id='answerfourteen' value='B' />
        <label for='answerfourteenB'>B)person convicted of a grave crime</label>
        </div>
        
        <div>
        <input type='radio' name='answerfourteen' id='answerfourteen' value='C' />
        <label for='answerfourteenC'>C) abnormal</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>efface</h3>
        
        <div>
        <input type='radio' name='answerfifteen' id='answerfifteen' value='A' />
        <label for='answerfifteenA'>A) having womanly traits  </label>
        </div>
        
        <div>
        <input type='radio' name='answerfifteen' id='answerfifteen' value='B' />
        <label for='answerfifteenB'>B) able to produce a desired effect</label>
        </div>
        
        <div>
        <input type='radio' name='answerfifteen' id='answerfifteen' value='C' />
        <label for='answerfifteenC'>C) rub out</label>
        </div>
        </li>
		<li>
        <h3>flippant</h3>
        
        <div>
        <input type='radio' name='answersixteen' id='answersixteen' value='A' />
        <label for='answersixteenA'>A)lacking proper seriousness</label>
        </div>
        
        <div>
        <input type='radio' name='answersixteen' id='answersixteen' value='B' />
        <label for='answersixteenB'>B)focused</label>
        </div>
        
        <div>
        <input type='radio' name='answersixteen' id='answersixteen' value='C' />
        <label for='answersixteenC'>C)determined</label>
        </div>
        </li>
        
     
        <li>
        <h3>gauche</h3>
        
        <div>
        <input type='radio' name='answerseventeen' id='answerseventeen' value='A' />
        <label for='answerseventeenA'>A)well dressed </label>
        </div>
        
        <div>
        <input type='radio' name='answerseventeen' id='answerseventeen' value='B' />
        <label for='answerseventeenB'>B)clumsy (in social behavior) </label>
        </div>
        
        <div>
        <input type='radio' name='answerseventeen' id='answerseventeen' value='C' />
        <label for='answerseventeenC'>C)good behavior</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>gnarl</h3>
        
        <div>
        <input type='radio' name='answereighteen' id='answereighteen' value='A' />
        <label for='answereighteenA'>A)horns </label>
        </div>
        
        <div>
        <input type='radio' name='answereighteen' id='answereighteen' value='B' />
        <label for='answereighteenB'>B)scars</label>
        </div>
        
        <div>
        <input type='radio' name='answereighteen' id='answereighteen' value='C' />
        <label for='answereighteenC'>C)protruding knot on a tree</label>
        </div>
        </li>
		<li>
        <h3>haggard</h3>
        
        <div>
        <input type='radio' name='answernineteen' id='answerninteen' value='A' />
        <label for='answernineteenA'>A)wasted away; gaunt</label>
        </div>
        
        <div>
        <input type='radio' name='answernineteen' id='answernineteen' value='B' />
        <label for='answernineteenB'>B)saving</label>
        </div>
        
        <div>
        <input type='radio' name='answernineteen' id='answernineteen' value='C' />
        <label for='answernineteenC'>C) intensity of feeling</label>
        </div>
        </li>
        
     
        <li>
        <h3>hoodwink</h3>
        
        <div>
        <input type='radio' name='answertwenty' id='answertwenty' value='A' />
        <label for='answertwentyA'>A)good-naturedly</label>
        </div>
        
        <div>
        <input type='radio' name='answertwenty' id='answertwenty' value='B' />
        <label for='answertwentyB'>B)deceive; delude</label>
        </div>
        
        <div>
        <input type='radio' name='answertwenty' id='answertwenty' value='C' />
        <label for='answertwentyC'>C) explore</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>igneous</h3>
        
        <div>
        <input type='radio' name='answertwentyone' id='answertwentyone' value='A' />
        <label for='answertwentyoneA'>A)angry</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentyone' id='answertwentyone' value='B' />
        <label for='answertwentyoneB'>B)rocket</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentyone' id='answertwentyone' value='C' />
        <label for='answertwentyoneC'>C)produced by fire; of fire; volcanic </label>
        </div>
        </li>
		<li>
        <h3>jingoist</h3>
        
        <div>
        <input type='radio' name='answertwentytwo' id='answertwentytwo' value='A' />
        <label for='answertwentytwoA'>A)extremely aggressive and militant patriot</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentytwo' id='answertwentytwo' value='B' />
        <label for='answertwentytwoB'>B)moderate</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentytwo' id='answertwentytwo' value='C' />
        <label for='answertwentytwoC'>C)calm</label>
        </div>
        </li>
        
     
        <li>
        <h3>kindle</h3>
        
        <div>
        <input type='radio' name='answertwentythree' id='answertwentythree' value='A' />
        <label for='answertwentythreeA'>A)To stop </label>
        </div>
        
        <div>
        <input type='radio' name='answertwentythree' id='answertwentythree' value='B' />
        <label for='answertwentythreeB'>B)start a fire; inspire</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentythree' id='answertwentythree' value='C' />
        <label for='answertwentythreeC'>C)to set on sail</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>lien</h3>
        
        <div>
        <input type='radio' name='answertwentyfour' id='answertwentyfour' value='A' />
        <label for='answertwentyfourA'>A) ight and power to apply the law</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentyfour' id='answertwentyfour' value='B' />
        <label for='answertwentyfourB'>B)science of law</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentyfour' id='answertwentyfour' value='C' />
        <label for='answertwentyfourC'>C)legal claim or right on a property</label>
        </div>
        </li>
		<li>
		
		<h3>misconstrue</h3>
        
        <div>
        <input type='radio' name='answertwentyfive' id='answertwentyfive' value='A' />
        <label for='answertwentyfiveA'>A)interpret incorrectly; misinterpret</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentyfive' id='answertwentyfive' value='B' />
        <label for='answertwentyfiveB'>B)contract into wrinkles</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentyfive' id='answertwentyfive' value='C' />
        <label for='answertwentyfiveC'>C)minor crime; misdeed</label>
        </div>
        </li>
        
     
        <li>
        <h3>olfactory</h3>
        
        <div>
        <input type='radio' name='answertwentysix' id='answertwentysix' value='A' />
        <label for='answertwentysixA'>A)Aroma </label>
        </div>
        
        <div>
        <input type='radio' name='answertwentysix' id='answertwentysix' value='B' />
        <label for='answertwentysixB'>B)concerning the sense of smell</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentysix' id='answertwentysix' value='C' />
        <label for='answertwentysixC'>C)pantry; place where food is kept</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>pique</h3>
        
        <div>
        <input type='radio' name='answertwentyseven' id='answertwentyseven' value='A' />
        <label for='answertwentysevenA'>A)pleasure </label>
        </div>
        
        <div>
        <input type='radio' name='answertwentyseven' id='answertwentyseven' value='B' />
        <label for='answertwentysevenB'>B)crafty; double-dealing</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentyseven' id='answertwentyseven' value='C' />
        <label for='answertwentysevenC'>C)irritation; resentment from wounded pride</label>
        </div>
        </li>
		<li>
        <h3>queer</h3>
        
        <div>
        <input type='radio' name='answertwentyeight' id='answertwentyeight' value='A' />
        <label for='answertwentyeightA'>A)strange; eccentric; deviating from the normal</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentyeight' id='answertwentyeight' value='B' />
        <label for='answertwentyeightB'>B)worthless; futile</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentyeight' id='answertwentyeight' value='C' />
        <label for='answertwentyeightC'>C)related to marriage or the wedding ceremony</label>
        </div>
        </li>
        
     
        <li>
        <h3>rustle</h3>
        
        <div>
        <input type='radio' name='answertwentynine' id='answertwentynine' value='A' />
        <label for='answertwentynineA'>A)funeral ceremony </label>
        </div>
        
        <div>
        <input type='radio' name='answertwentynine' id='answertwentynine' value='B' />
        <label for='answertwentynineB'>B)make slight sounds like silk moving</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentynine' id='answertwentynine' value='C' />
        <label for='answertwentynineC'>C)blunt; not sharp; stupid</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>zest</h3>
        
        <div>
        <input type='radio' name='answerthirty' id='answerthirty' value='A' />
        <label for='answerthirtyA'>A)fast </label>
        </div>
        
        <div>
        <input type='radio' name='answerthirty' id='answerthirty' value='B' />
        <label for='answerthirtyB'>B)young animal </label>
        </div>
        
        <div>
        <input type='radio' name='answerthirty' id='answerthirty' value='C' />
        <label for='answerthirtyC'>C)outer skin of an orange</label>
        </div>
        </li>
    	
    </ol>
     <input type='submit' value='Submit Quiz' />
    
</form>
";
}

if ($rid == 3){
	
	echo "
<form action='process.php?id=3' method='post' id='quizForm' id='3'>


	<ol>
    <li>
        <h3>aberrant</h3>
        
        <div>
        <input type='radio' name='answerone' id='answerone' value='A' />
        <label for='answeronenA'>A) abnormal or deviant</label>
        </div>
        
        <div>
        <input type='radio' name='answerone' id='answerone' value='B' />
        <label for='answeroneB'>B) embarrass</label>
        </div>
        
        <div>
        <input type='radio' name='answerone' id='answerone' value='C' />
        <label for='answeroneC'>C) subside or moderate</label>
        </div>
        </li>
        
     
        <li>
        <h3>abstruse</h3>
        
        <div>
        <input type='radio' name='answertwo' id='answertwo' value='A' />
        <label for='answertwoA'>A) A Search Engine </label>
        </div>
        
        <div>
        <input type='radio' name='answertwo' id='answertwo' value='B' />
        <label for='answertwoB'>B) obscure; profound</label>
        </div>
        
        <div>
        <input type='radio' name='answertwo' id='answertwo' value='C' />
        <label for='answertwoC'>C) suspended action</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>abortive</h3>
        
        <div>
        <input type='radio' name='answerthree' id='answerthree' value='A' />
        <label for='answerthreeA'>A) expert at</label>
        </div>
        
        <div>
        <input type='radio' name='answerthree' id='answerthree' value='B' />
        <label for='answerthreeB'>B) WebSpider</label>
        </div>
        
        <div>
        <input type='radio' name='answerthree' id='answerthree' value='C' />
        <label for='answerthreeC'>C) unsuccessful; fruitless</label>
        </div>
        </li>
		<li>
        <h3>boisterous</h3>
        
        <div>
        <input type='radio' name='answerfour' id='answerfour' value='A' />
        <label for='answerfourA'>A) violent; rough; noisy</label>
        </div>
        
        <div>
        <input type='radio' name='answerfour' id='answerfour' value='B' />
        <label for='answerfourB'>B) joking talk</label>
        </div>
        
        <div>
        <input type='radio' name='answerfour' id='answerfour' value='C' />
        <label for='answerfourC'>C)barrier laid down by artillery fire</label>
        </div>
        </li>
        
     
        <li>
        <h3>bemused</h3>
        
        <div>
        <input type='radio' name='answerfive' id='answerfive' value='A' />
        <label for='answerfive'>A) express sorrow or disapproval  </label>
        </div>
        
        <div>
        <input type='radio' name='answerfive' id='answerfive' value='B' />
        <label for='answerfiveB'>B) confused; lost in thought</label>
        </div>
        
        <div>
        <input type='radio' name='answerfive' id='answerfive' value='C' />
        <label for='answerfiveC'>C) None of the above</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>clasp</h3>
        
        <div>
        <input type='radio' name='answersix' id='answersix' value='A' />
        <label for='answersixA'>A) joyous </label>
        </div>
        
        <div>
        <input type='radio' name='answersix' id='answersix' value='B' />
        <label for='answersixB'>B) complete happiness</label>
        </div>
        
        <div>
        <input type='radio' name='answersix' id='answersix' value='C' />
        <label for='answersixC'>C) hold firmly within arms</label>
        </div>
        </li>
		<li>
        <h3>canter</h3>
        
        <div>
        <input type='radio' name='answerseven' id='answerseven' value='A' />
        <label for='answersevenA'>A) slow gallop </label>
        </div>
        
        <div>
        <input type='radio' name='answerseven' id='answerseven' value='B' />
        <label for='answersevenB'>B) spacious</label>
        </div>
        
        <div>
        <input type='radio' name='answerseven' id='answerseven' value='C' />
        <label for='answersevenC'>C) mental or physical ability</label>
        </div>
        </li>
        
     
        <li>
        <h3>browbeat</h3>
        
        <div>
        <input type='radio' name='answereight' id='answereight' value='A' />
        <label for='answereightA'>A) courteous </label>
        </div>
        
        <div>
        <input type='radio' name='answereight' id='answereight' value='B' />
        <label for='answereightB'>B) bully; intimidate</label>
        </div>
        
        <div>
        <input type='radio' name='answereight' id='answereight' value='C' />
        <label for='answereightC'>C) None of the above</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>bucolic</h3>
        
        <div>
        <input type='radio' name='answernine' id='answernine' value='A' />
        <label for='answernineA'>A) small exclusive group of people </label>
        </div>
        
        <div>
        <input type='radio' name='answernine' id='answernine' value='B' />
        <label for='answernineB'>B) Spider</label>
        </div>
        
        <div>
        <input type='radio' name='answernine' id='answernine' value='C' />
        <label for='answernineC'>C) rustic; pastoral</label>
        </div>
        </li>
		<li>
        <h3>chivalrous</h3>
        
        <div>
        <input type='radio' name='answerten' id='answerten' value='A' />
        <label for='answertenA'>A) courteous; faithful</label>
        </div>
        
        <div>
        <input type='radio' name='answerten' id='answerten' value='B' />
        <label for='answertenB'>B) attempt to gain </label>
        </div>
        
        <div>
        <input type='radio' name='answerten' id='answerten' value='C' />
        <label for='answertenC'>C) shrink quivering as from fear</label>
        </div>
        </li>
        
     
        <li>
        <h3>defoliate</h3>
        
        <div>
        <input type='radio' name='answereleven' id='answereleven' value='A' />
        <label for='answerelevenA'>A) shoes </label>
        </div>
        
        <div>
        <input type='radio' name='answereleven' id='answereleven' value='B' />
        <label for='answerelevenB'>B) weak and in bad condition from old age or hard use</label>
        </div>
        
        <div>
        <input type='radio' name='answereleven' id='answereleven' value='C' />
        <label for='answerelevenC'>C) bottle</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>doff</h3>
        
        <div>
        <input type='radio' name='answertwelve' id='answertwelve' value='A' />
        <label for='answertwelveA'>A) dig up </label>
        </div>
        
        <div>
        <input type='radio' name='answertwelve' id='answertwelve' value='B' />
        <label for='answertwelveB'>B) uncouple</label>
        </div>
        
        <div>
        <input type='radio' name='answertwelve' id='answertwelve' value='C' />
        <label for='answertwelveC'>C) take off</label>
        </div>
        </li>
		
		<li>
        <h3>efface</h3>
        
        <div>
        <input type='radio' name='answerthirteen' id='answerthirteen' value='A' />
        <label for='answerthirteenA'>A) rub out</label>
        </div>
        
        <div>
        <input type='radio' name='answerthirteen' id='answerthirteen' value='B' />
        <label for='answerthirteenB'>B) untidy (of a woman or clothes)</label>
        </div>
        
        <div>
        <input type='radio' name='answerthirteen' id='answerthirteen' value='C' />
        <label for='answerthirteenC'>C) exercising the most influence</label>
        </div>
        </li>
        
     
        <li>
        <h3>dyslexia</h3>
        
        <div>
        <input type='radio' name='answerfourteen' id='answerfourteen' value='A' />
        <label for='answerfourteenA'>A)oddity </label>
        </div>
        
        <div>
        <input type='radio' name='answerfourteen' id='answerfourteen' value='B' />
        <label for='answerfourteenB'>B) word blindness</label>
        </div>
        
        <div>
        <input type='radio' name='answerfourteen' id='answerfourteen' value='C' />
        <label for='answerfourteenC'>C) abnormal</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>engross</h3>
        
        <div>
        <input type='radio' name='answerfifteen' id='answerfifteen' value='A' />
        <label for='answerfifteenA'>A) rub-out  </label>
        </div>
        
        <div>
        <input type='radio' name='answerfifteen' id='answerfifteen' value='B' />
        <label for='answerfifteenB'>B) able to produce a desired effect</label>
        </div>
        
        <div>
        <input type='radio' name='answerfifteen' id='answerfifteen' value='C' />
        <label for='answerfifteenC'>C) occupy fully; absorb </label>
        </div>
        </li>
		<li>
        <h3>felicity</h3>
        
        <div>
        <input type='radio' name='answersixteen' id='answersixteen' value='A' />
        <label for='answersixteenA'>A) happiness; appropriateness  </label>
        </div>
        
        <div>
        <input type='radio' name='answersixteen' id='answersixteen' value='B' />
        <label for='answersixteenB'>B) make beloved </label>
        </div>
        
        <div>
        <input type='radio' name='answersixteen' id='answersixteen' value='C' />
        <label for='answersixteenC'>C) territory enclosed within an alien land</label>
        </div>
        </li>
        
     
        <li>
        <h3>pilfer</h3>
        
        <div>
        <input type='radio' name='answerseventeen' id='answerseventeen' value='A' />
        <label for='answerseventeenA'>A) provide with some quality </label>
        </div>
        
        <div>
        <input type='radio' name='answerseventeen' id='answerseventeen' value='B' />
        <label for='answerseventeenB'>B) steal things of small value </label>
        </div>
        
        <div>
        <input type='radio' name='answerseventeen' id='answerseventeen' value='C' />
        <label for='answerseventeenC'>C) weaken; take away energy from</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>exodus</h3>
        
        <div>
        <input type='radio' name='answereighteen' id='answereighteen' value='A' />
        <label for='answereighteenA'>A) small in amount </label>
        </div>
        
        <div>
        <input type='radio' name='answereighteen' id='answereighteen' value='B' />
        <label for='answereighteenB'>B) drive out evil spirits</label>
        </div>
        
        <div>
        <input type='radio' name='answereighteen' id='answereighteen' value='C' />
        <label for='answereighteenC'>C) departure (of a large number of people)</label>
        </div>
        </li>
		<li>
        <h3>fluke</h3>
        
        <div>
        <input type='radio' name='answernineteen' id='answerninteen' value='A' />
        <label for='answernineteenA'>A) unlikely occurrence; stroke of fortune</label>
        </div>
        
        <div>
        <input type='radio' name='answernineteen' id='answernineteen' value='B' />
        <label for='answernineteenB'>B) ardent; zealous; hot</label>
        </div>
        
        <div>
        <input type='radio' name='answernineteen' id='answernineteen' value='C' />
        <label for='answernineteenC'>C) intensity of feeling</label>
        </div>
        </li>
        
     
        <li>
        <h3>stammer</h3>
        
        <div>
        <input type='radio' name='answertwenty' id='answertwenty' value='A' />
        <label for='answertwentyA'>A) destruction</label>
        </div>
        
        <div>
        <input type='radio' name='answertwenty' id='answertwenty' value='B' />
        <label for='answertwentyB'>B) speak with involuntarily pauses or repetitions</label>
        </div>
        
        <div>
        <input type='radio' name='answertwenty' id='answertwenty' value='C' />
        <label for='answertwentyC'>C) explore</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>finicky</h3>
        
        <div>
        <input type='radio' name='answertwentyone' id='answertwentyone' value='A' />
        <label for='answertwentyoneA'>A) surface texture feeling</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentyone' id='answertwentyone' value='B' />
        <label for='answertwentyoneB'>B) properly made and complete</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentyone' id='answertwentyone' value='C' />
        <label for='answertwentyoneC'>C) too particular; fussy </label>
        </div>
        </li>
		<li>
        <h3>galleon</h3>
        
        <div>
        <input type='radio' name='answertwentytwo' id='answertwentytwo' value='A' />
        <label for='answertwentytwoA'>A) large three-masted sailing ship</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentytwo' id='answertwentytwo' value='B' />
        <label for='answertwentytwoB'>B) clothing </label>
        </div>
        
        <div>
        <input type='radio' name='answertwentytwo' id='answertwentytwo' value='C' />
        <label for='answertwentytwoC'>C) arranged by degrees</label>
        </div>
        </li>
        
     
        <li>
        <h3>romp</h3>
        
        <div>
        <input type='radio' name='answertwentythree' id='answertwentythree' value='A' />
        <label for='answertwentythreeA'>A) beg </label>
        </div>
        
        <div>
        <input type='radio' name='answertwentythree' id='answertwentythree' value='B' />
        <label for='answertwentythreeB'>B) play or frolic boisterously</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentythree' id='answertwentythree' value='C' />
        <label for='answertwentythreeC'>C) buy</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>juxtapose</h3>
        
        <div>
        <input type='radio' name='answertwentyfour' id='answertwentyfour' value='A' />
        <label for='answertwentyfourA'>A) right and power to apply the law</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentyfour' id='answertwentyfour' value='B' />
        <label for='answertwentyfourB'>B) science of law</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentyfour' id='answertwentyfour' value='C' />
        <label for='answertwentyfourC'>C) place side by side</label>
        </div>
        </li>
		<li>
		
		<h3>garrulous</h3>
        
        <div>
        <input type='radio' name='answertwentyfive' id='answertwentyfive' value='A' />
        <label for='answertwentyfiveA'>A) loquacious; wordy; talkative</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentyfive' id='answertwentyfive' value='B' />
        <label for='answertwentyfiveB'>B) contract into wrinkles</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentyfive' id='answertwentyfive' value='C' />
        <label for='answertwentyfiveC'>C) demanding much work or care</label>
        </div>
        </li>
        
     
        <li>
        <h3>gaunt</h3>
        
        <div>
        <input type='radio' name='answertwentysix' id='answertwentysix' value='A' />
        <label for='answertwentysixA'>A) freedom from narrow limitations </label>
        </div>
        
        <div>
        <input type='radio' name='answertwentysix' id='answertwentysix' value='B' />
        <label for='answertwentysixB'>B) lean and angular; thin and bony</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentysix' id='answertwentysix' value='C' />
        <label for='answertwentysixC'>C) pantry; place where food is kept</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>maculated</h3>
        
        <div>
        <input type='radio' name='answertwentyseven' id='answertwentyseven' value='A' />
        <label for='answertwentysevenA'>A) pastoral song </label>
        </div>
        
        <div>
        <input type='radio' name='answertwentyseven' id='answertwentyseven' value='B' />
        <label for='answertwentysevenB'>B) crafty; double-dealing</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentyseven' id='answertwentyseven' value='C' />
        <label for='answertwentysevenC'>C) spotted; stained</label>
        </div>
        </li>
		<li>
        <h3>nubile</h3>
        
        <div>
        <input type='radio' name='answertwentyeight' id='answertwentyeight' value='A' />
        <label for='answertwentyeightA'>A) marriageable; of marriageable age</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentyeight' id='answertwentyeight' value='B' />
        <label for='answertwentyeightB'>B) worthless; futile</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentyeight' id='answertwentyeight' value='C' />
        <label for='answertwentyeightC'>C) related to marriage or the wedding ceremony</label>
        </div>
        </li>
        
     
        <li>
        <h3>gawk</h3>
        
        <div>
        <input type='radio' name='answertwentynine' id='answertwentynine' value='A' />
        <label for='answertwentynineA'>A) slander; disgrace; infamy </label>
        </div>
        
        <div>
        <input type='radio' name='answertwentynine' id='answertwentynine' value='B' />
        <label for='answertwentynineB'>B) stare foolishly; look in open-mouthed awe</label>
        </div>
        
        <div>
        <input type='radio' name='answertwentynine' id='answertwentynine' value='C' />
        <label for='answertwentynineC'>C) blunt; not sharp; stupid</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>scowl</h3>
        
        <div>
        <input type='radio' name='answerthirty' id='answerthirty' value='A' />
        <label for='answerthirtyA'>A)small ride on a smooth surface </label>
        </div>
        
        <div>
        <input type='radio' name='answerthirty' id='answerthirty' value='B' />
        <label for='answerthirtyB'>B)young animal </label>
        </div>
        
        <div>
        <input type='radio' name='answerthirty' id='answerthirty' value='C' />
        <label for='answerthirtyC'>C)  frown angrily</label>
        </div>
        </li>
   
    	
    </ol>
     <input type='submit' value='Submit Quiz' />
    
</form>";

}

?>
</div>

</body>
</html>