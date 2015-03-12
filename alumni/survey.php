<?php include "header.php"?>
<?php include "bottombar.php" ?>
  <link rel="stylesheet" href="css/survey.css">
  
<title>Surveying</title>


<div class="aboutbox">
	
	<div class="headstyle">
		Survey
	</div>
	
	<div>

<form  action="surveying.php" method="post" id="survey_login" onsubmit="return validate_surveying()" >
	
	<div class='row'>
		<div class='cell'><br>Name: </div>
		<div class='cell'>
			<input type="text" name="name" id="id_name" class="survey" /><br>
		</div>
		
	</div>
	
	
	<div class='row'>
		<div class='cell'><br>Email ID: </div>
		<div class='cell'>
			<input type="text" name="email" id="id_email" class="survey" /><br>
		</div>
		
	</div>
	
	<div class='row'>
		<div class='cell'><br>Year Of Graduation: </div>
		<div class='cell'>
			<input type="text" name="name" id="id_name" class="survey" /><br>
		</div>
		
	</div>
	
	<div class='row'>
		<div class='cell'><br>Branch: </div>
		<div class='cell'>
			<select id="id_branch" name="branch" style='width:135px;' >
				<option>Please Choose</option>
				<option value="computer science">Computer Science</option>
				<option value="electronics">Electronics</option>
				<option value="mechanical">Mechanical</option>
				<option value="information technology">Information Technology</option>
				<option value="computational linguistic">Computational Linguistic</option>
			</select>
		</div>
		
	</div>
	
	<div class='row'>
		<div class='cell'><br>1.What was the first job you held after completing your bachelor's degree? <br> <h5>(if you went for higher studies specify the course and institution)</h5></div>
		<div class='cell'>
			<input type="text" name="job" id="id_job" class="survey" /><br>
		</div>
		
	</div>
	
	<div class='row'>
		<div class='cell'><br>2.What is your current employment status? </div>
		<div class='cell'>
			<input type="radio" name="status" id="id_status" class="survey" /><label>Full time job</label><br>
			<input type="radio" name="status" id="id_status" class="survey" /><label>Part time job</label><br>
			<input type="radio" name="status" id="id_status" class="survey" /><label>Not working</label><br>
			<input type="radio" name="status" id="id_status" class="survey" /><label>Never worked</label><br>
		</div>
	</div>
	
	<div class='row'>
		<div class='cell'><br>3.What is your present profession/job title?</div>
		<div class='cell'>
			<input type="text" name="title" id="id_title" class="survey" /><br>
		</div>
		
	</div>
	
	<div class='row'>
		<div class='cell'><br>4.In what occupational area are you working?</div>
		<div class='cell'>
			<input type="radio" name="status" id="id_status" class="survey" /><label>Government job</label><br>
			<input type="radio" name="status" id="id_status" class="survey" /><label>Private job</label><br>
			<input type="radio" name="status" id="id_status" class="survey" /><label>Business</label><br>
			<input type="radio" name="status" id="id_status" class="survey" /><label>Self employed</label><br>
		</div>
	</div>
	
	
	<div class='row'>
		<div class='cell'><br>5.How satisfied are you with your present employment? </div>
		<div class='cell'>
			<input type="radio" name="status" id="id_status" class="survey" /><label>Extremely satisfied</label><br>
			<input type="radio" name="status" id="id_status" class="survey" /><label>Very satisfied</label><br>
			<input type="radio" name="status" id="id_status" class="survey" /><label>Somewhat satisfied</label><br>
			<input type="radio" name="status" id="id_status" class="survey" /><label>Not at all satisfied</label><br>
		</div>
	</div>
	
	
	<div class='row'>
		<div class='cell'><br>6.How satisfied are you with the progress you have made in your career? </div>
		<div class='cell'>
			<input type="radio" name="status" id="id_status" class="survey" /><label>Extremely satisfied</label><br>
			<input type="radio" name="status" id="id_status" class="survey" /><label>Very satisfied</label><br>
			<input type="radio" name="status" id="id_status" class="survey" /><label>Somewhat satisfied</label><br>
			<input type="radio" name="status" id="id_status" class="survey" /><label>Not at all satisfied</label><br>
		</div>
		
	</div>
		
	<div class='row'>
		<div class='cell'><br>7.What is your annual salary?</div>
		<div class='cell'>
			<input type="text" name="salary" id="id_salary" class="survey" /><br>
		</div>
	</div>
	
	
	<div class='row'>
		<div class='cell'><br>8.Rate the helpfulness of following items in acquiring the skills and knowledge needed to perform your present job. </div><br>
		<div class='cell'><br>a.Courses in major field<br>
		<div class='cell'>	
			<input type="radio" name="status_a" id="id_status_a" class="survey" /><label>Extremely Helpful</label><br>
			<input type="radio" name="status_a" id="id_status_a" class="survey" /><label>Very Helpful</label><br>
			<input type="radio" name="status_a" id="id_status_a" class="survey" /><label>Somewhat Helpful</label><br>
			<input type="radio" name="status_a" id="id_status_a" class="survey" /><label>Not at all Helpful</label><br>
			<input type="radio" name="status_a" id="id_status_a" class="survey" /><label>Does not apply</label><br>
		</div>
		</div>
		
		<div class='cell'><br>b.Elective courses<br>
		<div class='cell'>	
			<input type="radio" name="status_b" id="id_status_b" class="survey" /><label>Extremely Helpful</label><br>
			<input type="radio" name="status_b" id="id_status_b" class="survey" /><label>Very Helpful</label><br>
			<input type="radio" name="status_b" id="id_status_b" class="survey" /><label>Somewhat Helpful</label><br>
			<input type="radio" name="status_b" id="id_status_b" class="survey" /><label>Not at all Helpful</label><br>
			<input type="radio" name="status_b" id="id_status_b" class="survey" /><label>Does not apply</label><br>
		</div>
		</div>
		
		<div class='cell'><br>c.Practicals<br>
		<div class='cell'>	
			<input type="radio" name="status_c" id="id_status_c" class="survey" /><label>Extremely Helpful</label><br>
			<input type="radio" name="status_c" id="id_status_c" class="survey" /><label>Very Helpful</label><br>
			<input type="radio" name="status_c" id="id_status_c" class="survey" /><label>Somewhat Helpful</label><br>
			<input type="radio" name="status_c" id="id_status_c" class="survey" /><label>Not at all Helpful</label><br>
			<input type="radio" name="status_c" id="id_status_c" class="survey" /><label>Does not apply</label><br>
		</div>
		</div>
		
		<div class='cell'><br>d.Seminars<br>
		<div class='cell'>	
			<input type="radio" name="status_d" id="id_status_d" class="survey" /><label>Extremely Helpful</label><br>
			<input type="radio" name="status_d" id="id_status_d" class="survey" /><label>Very Helpful</label><br>
			<input type="radio" name="status_d" id="id_status_d" class="survey" /><label>Somewhat Helpful</label><br>
			<input type="radio" name="status_d" id="id_status_d" class="survey" /><label>Not at all Helpful</label><br>
			<input type="radio" name="status_d" id="id_status_d" class="survey" /><label>Does not apply</label><br>
		</div>
		</div>
		
		<div class='cell'>
		<div class='cell'><br>e.Projects<br>	
			<input type="radio" name="status_e" id="id_status_e" class="survey" /><label>Extremely Helpful</label><br>
			<input type="radio" name="status_e" id="id_status_e" class="survey" /><label>Very Helpful</label><br>
			<input type="radio" name="status_e" id="id_status_e" class="survey" /><label>Somewhat Helpful</label><br>
			<input type="radio" name="status_e" id="id_status_e" class="survey" /><label>Not at all Helpful</label><br>
			<input type="radio" name="status_e" id="id_status_e" class="survey" /><label>Does not apply</label><br>
		</div>
		</div>
		
		<div class='cell'><br>f.Industrial visits/training<br>
		<div class='cell'>	
			<input type="radio" name="status_f" id="id_status_f" class="survey" /><label>Extremely Helpful</label><br>
			<input type="radio" name="status_f" id="id_status_f" class="survey" /><label>Very Helpful</label><br>
			<input type="radio" name="status_f" id="id_status_f" class="survey" /><label>Somewhat Helpful</label><br>
			<input type="radio" name="status_f" id="id_status_f" class="survey" /><label>Not at all Helpful</label><br>
			<input type="radio" name="status_f" id="id_status_f" class="survey" /><label>Does not apply</label><br>
		</div>
		</div>
		
		<div class='cell'><br>g.Formal placement training<br>
		<div class='cell'>	
			<input type="radio" name="status_g" id="id_status_g" class="survey" /><label>Extremely Helpful</label><br>
			<input type="radio" name="status_g" id="id_status_g" class="survey" /><label>Very Helpful</label><br>
			<input type="radio" name="status_g" id="id_status_g" class="survey" /><label>Somewhat Helpful</label><br>
			<input type="radio" name="status_g" id="id_status_g" class="survey" /><label>Not at all Helpful</label><br>
			<input type="radio" name="status_g" id="id_status_g" class="survey" /><label>Does not apply</label><br>
		</div>
		</div>
		
	</div>
	
		<div class='row'>
		<div class='cell'><br>9.What are the problems encountered while seeking employment after receiving your bachelor's degree?</div>
		<div class='cell'>	
			<input type="radio" name="prob" id="id_prob" class="survey" /><label>Skill qualifications</label><br>
			<input type="radio" name="prob" id="id_prob" class="survey" /><label>Educational qualifications</label><br>
			<input type="radio" name="prob" id="id_prob" class="survey" /><label>A tight job market in my field</label><br>
			<input type="radio" name="prob" id="id_prob" class="survey" /><label>Not knowing what I wanted to do</label><br>
			<input type="radio" name="prob" id="id_prob" class="survey" /><label>Gender discrimination</label><br>
		</div>
	   </div>
	   
		<div class='row'>
		<div class='cell'><br>10.Rate the helpfulness of following abilities in developing competency. </div><br>
		<div class='cell'><br>a.Ability to apply major field knowledge to new problems<br>
		<div class='cell'>	
			<input type="radio" name="ability_a" id="id_ability_a" class="survey" /><label>Effective</label><br>
			<input type="radio" name="ability_a" id="id_ability_a" class="survey" /><label>Somewhat Effective</label><br>
			<input type="radio" name="ability_a" id="id_ability_a" class="survey" /><label>Not Effective</label><br>
		</div>
		</div>
		
		<div class='cell'><br>b.Ability to acuire new skills and understanding my own<br>
		<div class='cell'>	
			<input type="radio" name="ability_b" id="id_ability_b" class="survey" /><label>Effective</label><br>
			<input type="radio" name="ability_b" id="id_ability_b" class="survey" /><label>Somewhat Effective</label><br>
			<input type="radio" name="ability_b" id="id_ability_b" class="survey" /><label>Not Effective</label><br>
		</div>
		</div>
		
		<div class='cell'><br>c.Ability to write well<br>
		<div class='cell'>	
			<input type="radio" name="ability_c" id="id_ability_c" class="survey" /><label>Effective</label><br>
			<input type="radio" name="ability_c" id="id_ability_c" class="survey" /><label>Somewhat Effective</label><br>
			<input type="radio" name="ability_c" id="id_ability_c" class="survey" /><label>Not Effective</label><br>
		</div>
		</div>
		
		<div class='cell'><br>d.Ability to communicate effectively orally<br>
		<div class='cell'>	
			<input type="radio" name="ability_d" id="id_ability_d" class="survey" /><label>Effective</label><br>
			<input type="radio" name="ability_d" id="id_ability_d" class="survey" /><label>Somewhat Effective</label><br>
			<input type="radio" name="ability_d" id="id_ability_d" class="survey" /><label>Not Effective</label><br>
		</div>
		</div>
		
		<div class='cell'><br>e.Ability to formulate creative and original ideas and solutions<br>
		<div class='cell'>	
			<input type="radio" name="ability_e" id="id_ability_e" class="survey" /><label>Effective</label><br>
			<input type="radio" name="ability_e" id="id_ability_e" class="survey" /><label>Somewhat Effective</label><br>
			<input type="radio" name="ability_e" id="id_ability_e" class="survey" /><label>Not Effective</label><br>
		</div>
		</div>
		
		<div class='cell'><br>f.Ability to work in a team<br>
		<div class='cell'>	
			<input type="radio" name="ability_f" id="id_ability_f" class="survey" /><label>Effective</label><br>
			<input type="radio" name="ability_f" id="id_ability_f" class="survey" /><label>Somewhat Effective</label><br>
			<input type="radio" name="ability_f" id="id_ability_f" class="survey" /><label>Not Effective</label><br>
		</div>
		</div>
		
		<div class='cell'><br>g.Ability to organise and supervise the work of others<br>
		<div class='cell'>	
			<input type="radio" name="ability_g" id="id_ability_g" class="survey" /><label>Effective</label><br>
			<input type="radio" name="ability_g" id="id_ability_g" class="survey" /><label>Somewhat Effective</label><br>
			<input type="radio" name="ability_g" id="id_ability_g" class="survey" /><label>Not Effective</label><br>
		</div>
		</div>
		
		<div class='cell'><br>h.Ability to use computers as an analytical tool<br>
		<div class='cell'>	
			<input type="radio" name="ability_h" id="id_ability_h" class="survey" /><label>Effective</label><br>
			<input type="radio" name="ability_h" id="id_ability_h" class="survey" /><label>Somewhat Effective</label><br>
			<input type="radio" name="ability_h" id="id_ability_h" class="survey" /><label>Not Effective</label><br>
		</div>
		</div>
		
		<div class='cell'><br>i.Ability to participate in career advancement programs<br>
		<div class='cell'>	
			<input type="radio" name="ability_i" id="id_ability_i" class="survey" /><label>Effective</label><br>
			<input type="radio" name="ability_i" id="id_ability_i" class="survey" /><label>Somewhat Effective</label><br>
			<input type="radio" name="ability_i" id="id_ability_i" class="survey" /><label>Not Effective</label><br>
		</div>
		</div>
	</div>
		
		
		<div class='row'>
		<div class='cell'><br>Please list any other abilities which you consider important and its effectiveness </div>
		<div class='field'>
				<textarea name="abil" id="id_abil" rows="8" cols="50"></textarea><br>
		</div>
		</div>
		
	</div>
	
	<div class ='row'>
		<div class='cell'><br>11.If you have obtained an additional degree(s), Please enter Degree, year and Institution </div>
		<div class='field'>
				<textarea name="add_deg" id="id_add_deg" rows="8" cols="50"></textarea><br>
		</div>
		
	</div>
	
	
	<div class ='row'>
		<div class='cell'><br>12.If you are currently studying, or wish to obtain additonal academic degrees(s), pleae enter the details  </div>
		<div class='field'>
				<textarea name="add deg1" id="id_add_deg1" rows="8" cols="50"></textarea><br>
		</div>
		
	</div>
	
	<div class='row'>
		<div class='cell'><br>13.For each of the items below, rate your undergraduate program </div><br>
		<div class='cell'><br>a.Relevance of Career Goals<br>
		<div class='cell'>
			<input type="radio" name="rate_a" id="id_rate_a" class="survey" /><label>Extremely satisfied</label><br>
			<input type="radio" name="rate_a" id="id_rate_a" class="survey" /><label>Very satisfied</label><br>
			<input type="radio" name="rate_a" id="id_rate_a" class="survey" /><label>Somewhat satisfied</label><br>
			<input type="radio" name="rate_a" id="id_rate_a" class="survey" /><label>Not at all satisfied</label><br>
			<input type="radio" name="rate_a" id="id_rate_a" class="survey" /><label>Does not apply</label><br>
		</div>
		</div>
		
		<div class='cell'><br>b.Flexibility/adaptability to student needs<br>
		<div class='cell'>
			<input type="radio" name="rate_b" id="id_rate_b" class="survey" /><label>Extremely satisfied</label><br>
			<input type="radio" name="rate_b" id="id_rate_b" class="survey" /><label>Very satisfied</label><br>
			<input type="radio" name="rate_b" id="id_rate_b" class="survey" /><label>Somewhat satisfied</label><br>
			<input type="radio" name="rate_b" id="id_rate_b" class="survey" /><label>Not at all satisfied</label><br>
			<input type="radio" name="rate_b" id="id_rate_b" class="survey" /><label>Does not apply</label><br>
		</div>
		</div>
		
		<div class='cell'><br>c.Academic advising and guidance<br>
		<div class='cell'>
			<input type="radio" name="rate_c" id="id_rate_c" class="survey" /><label>Extremely satisfied</label><br>
			<input type="radio" name="rate_c" id="id_rate_c" class="survey" /><label>Very satisfied</label><br>
			<input type="radio" name="rate_c" id="id_rate_c" class="survey" /><label>Somewhat satisfied</label><br>
			<input type="radio" name="rate_c" id="id_rate_c" class="survey" /><label>Not at all satisfied</label><br>
			<input type="radio" name="rate_c" id="id_rate_c" class="survey" /><label>Does not apply</label><br>
		</div>
		</div>
	
		<div class='cell'><br>d.Quality of instruction<br>
		<div class='cell'>
			<input type="radio" name="rate_d" id="id_rate_d" class="survey" /><label>Extremely satisfied</label><br>
			<input type="radio" name="rate_d" id="id_rate_d" class="survey" /><label>Very satisfied</label><br>
			<input type="radio" name="rate_d" id="id_rate_d" class="survey" /><label>Somewhat satisfied</label><br>
			<input type="radio" name="rate_d" id="id_rate_d" class="survey" /><label>Not at all satisfied</label><br>
			<input type="radio" name="rate_d" id="id_rate_d" class="survey" /><label>Does not apply</label><br>
		</div>
		</div>
		
		<div class='cell'><br>e.Inspiration and encouragement<br>
		<div class='cell'>
			<input type="radio" name="rate_e" id="id_rate_e" class="survey" /><label>Extremely satisfied</label><br>
			<input type="radio" name="rate_e" id="id_rate_e" class="survey" /><label>Very satisfied</label><br>
			<input type="radio" name="rate_e" id="id_rate_e" class="survey" /><label>Somewhat satisfied</label><br>
			<input type="radio" name="rate_e" id="id_rate_e" class="survey" /><label>Not at all satisfied</label><br>
			<input type="radio" name="rate_e" id="id_rate_e" class="survey" /><label>Does not apply</label><br>
		</div>
		</div>
		
		<div class='cell'><br>f.Interaction with students<br>
		<div class='cell'>
			<input type="radio" name="rate_f" id="id_rate_f" class="survey" /><label>Extremely satisfied</label><br>
			<input type="radio" name="rate_f" id="id_rate_f" class="survey" /><label>Very satisfied</label><br>
			<input type="radio" name="rate_f" id="id_rate_f" class="survey" /><label>Somewhat satisfied</label><br>
			<input type="radio" name="rate_f" id="id_rate_f" class="survey" /><label>Not at all satisfied</label><br>
			<input type="radio" name="rate_f" id="id_rate_f" class="survey" /><label>Does not apply</label><br>
		</div>
		</div>
		
		<div class='cell'><br>g.Level of rigor and scholarship<br>
		<div class='cell'>
			<input type="radio" name="rate_g" id="id_rate_g" class="survey" /><label>Extremely satisfied</label><br>
			<input type="radio" name="rate_g" id="id_rate_g" class="survey" /><label>Very satisfied</label><br>
			<input type="radio" name="rate_g" id="id_rate_g" class="survey" /><label>Somewhat satisfied</label><br>
			<input type="radio" name="rate_g" id="id_rate_g" class="survey" /><label>Not at all satisfied</label><br>
			<input type="radio" name="rate_g" id="id_rate_g" class="survey" /><label>Does not apply</label><br>
		</div>
		</div>
		
		<div class='cell'><br>h.Career Services<br>
		<div class='cell'>
			<input type="radio" name="rate_h" id="id_rate_h" class="survey" /><label>Extremely satisfied</label><br>
			<input type="radio" name="rate_h" id="id_rate_h" class="survey" /><label>Very satisfied</label><br>
			<input type="radio" name="rate_h" id="id_rate_h" class="survey" /><label>Somewhat satisfied</label><br>
			<input type="radio" name="rate_h" id="id_rate_h" class="survey" /><label>Not at all satisfied</label><br>
			<input type="radio" name="rate_h" id="id_rate_h" class="survey" /><label>Does not apply</label><br>
		</div>
		</div>
		
		<div class='cell'><br>i.Interaction with faculty<br>
		<div class='cell'>
			<input type="radio" name="rate_i" id="id_rate_i" class="survey" /><label>Extremely satisfied</label><br>
			<input type="radio" name="rate_i" id="id_rate_i" class="survey" /><label>Very satisfied</label><br>
			<input type="radio" name="rate_i" id="id_rate_i" class="survey" /><label>Somewhat satisfied</label><br>
			<input type="radio" name="rate_i" id="id_rate_i" class="survey" /><label>Not at all satisfied</label><br>
			<input type="radio" name="rate_i" id="id_rate_i" class="survey" /><label>Does not apply</label><br>
		</div>
		</div>
	</div>
	
	<div class='row'>
		<div class='cell'><br>14.How does you evaluate your undergraduate study at Govt Engineering College ,Sreekrishnapuram?<br>
		(compare to that of your peers from other engineering institutions)</div>
		<div class='cell'>	
			<input type="radio" name="ug" id="id_ug" class="survey" /><label>Much Stronger</label><br>
			<input type="radio" name="ug" id="id_ug" class="survey" /><label>Stronger</label><br>
			<input type="radio" name="ug" id="id_ug" class="survey" /><label>Similar</label><br>
			<input type="radio" name="ug" id="id_ug" class="survey" /><label>Weaker</label><br>
			<input type="radio" name="ug" id="id_ug" class="survey" /><label>Much Weaker</label><br>
		</div>
	   </div>
	
	<div class='row'>
		<div class='cell'><br>15.How does you evaluate the laboratory experience at Govt Engineering College ,Sreekrishnapuram?</div>
		<div class='cell'>	
			<input type="radio" name="lab" id="id_lab" class="survey" /><label>Extremely satisfied</label><br>
			<input type="radio" name="lab" id="id_lab" class="survey" /><label>Very satisfied</label><br>
			<input type="radio" name="lab" id="id_lab" class="survey" /><label>Somewhat satisfied</label><br>
			<input type="radio" name="lab" id="id_lab" class="survey" /><label>Not at all satisfied</label><br>
			<input type="radio" name="lab" id="id_lab" class="survey" /><label>Does not apply</label><br>
		</div>
	   </div>
	

	<div class='row'>
		<div class='cell'><br>16.How well did your undergraduate curriculum prepare you for obtaining professional registrations or certifications? </div>
		<div class='cell'>	
			<input type="radio" name="curr" id="id_curr" class="survey" /><label>Extremely well</label><br>
			<input type="radio" name="curr" id="id_curr" class="survey" /><label>Very well</label><br>
			<input type="radio" name="curr" id="id_curr" class="survey" /><label>Somewhat well</label><br>
			<input type="radio" name="curr" id="id_curr" class="survey" /><label>Not at all well</label><br>
		</div>
	   </div>
	   
	   <div class='row'>
		<div class='cell'><br>17.How well has Govt Engineering College , Sreekrishnapuram is keeping in touch with you, since graduation? </div>
		<div class='cell'>	
			<input type="radio" name="grad" id="id_grad" class="survey" /><label>Extremely well</label><br>
			<input type="radio" name="grad" id="id_grad" class="survey" /><label>Very well</label><br>
			<input type="radio" name="grad" id="id_grad" class="survey" /><label>Somewhat well</label><br>
			<input type="radio" name="grad" id="id_grad" class="survey" /><label>Not at all well</label><br>
		</div>
	   </div>
	
	<div class='row'>
		<div class='cell'><br>Thank you for taking the time to complete this questionnaire. If you wish to make further comments about our college, please use the space below </div>
		<div class='field'>
				<textarea name="add deg1" id="id_add_deg1" rows="8" cols="50"></textarea><br>
		</div>	
	   </div>
	   
	   
	  <div class="buttonWrapper" style="width:600px;">
          <input value="Submit" class="blueBtn" type="submit">
       </div>
 </div>
