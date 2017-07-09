<html>
	<head>
	</head>
	<body bgcolor="">

		<center><h1>Form 3</h1></center>

		

			<form action="http://localhost:8000/fillprogress" method="POST" >
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			Supported Date<input type="text" name="dateSupp">
			Name<input type="text" name="name">
			Age<input type="text" name="age">
			Education Level<input type="text" name="edulevel">
			Life Skills<input type="text" name="lifeskill">
			Vocational Skills<input type="text" name="vocaSkill">
			Skill1<input type="text" name="skill1">
			Skill2<input type="text" name="skill2">
			Current Employer<input type="text" name="currEmp">
			Salary when joined<input type="text" name="sal">
			Current Salary<input type="text" name="curSal">
			Job Responsibilities<input type="text" name="jobres">
			Location<input type="text" name="staying">
			Monthly Savings<input type="text" name="saveMon">
			Relation with Housemates<input type="text" name="house">
			Relation with Neighbours<input type="text" name="insti">
			Duration<input type="text" name="duration">
			Nature of Activity<input type="text" name="nature">
			Number of Women Victims<input type="text" name="noofWomen">
			
			Outcome Expected<input type="text" name="oute">
			Outcome Obtained<input type="text" name="outo">

			Amount Spent<input type="text" name="amt">
			Womenid<input type="text" name="womenId"><br>

			

			<input type="submit" value="login" name="submit">
		</form>
	</body>

</html>