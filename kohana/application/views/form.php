<h2> Fill the details </h2>
<?php 
	echo Form::open();
	
	echo Form::Label('name','Name');
	echo Form::input('name');
	
	echo Form::Label('phone','Phone');
	echo Form::input('phone');

	echo Form::Label('age','Age');
	echo Form::input('age');

	echo Form::Label('email','Email');
	echo Form::input('email');

	echo Form::Label('occupation','Occupation');
	echo Form::input('occupation');
		
	echo Form::submit('submit', 'Submit');
		

	echo Form::close();		
>
