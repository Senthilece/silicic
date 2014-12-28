<footer>
all rights reserved
</footer>
</div>
</body>
<script>
$('#nav li span').on('mouseover',function(){
	var Username  = $('#first-text').val();
	if(Username == '')
	{
		 alert('please enter the username');
		 $('#first-text').css('border','1px solid red').focus();
		 return false;
	}
	else if(Username.length > 8)
		alert('please enter the username');
	else
		alert('validation done');
	$('#nav li ul').hide();
	$('#first-text').val('changed');
	$('#banner').append('<p>Hi i am clicked by selva</p>');
	$(this).next().find('a').css('color','green');
	$(this).next().fadeIn('slow');
});
</script>
</html>