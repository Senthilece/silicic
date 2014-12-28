<?php
	include "include/header.php";
?>
<article>
	<div id="navigation">
	<div id='first-div'> Div content </div>
	<input type='text' id='first-text'  value='Test'>
	<ul id="nav">
		
		<li>
			<span> Menu 1 </span>
		   <ul class="sub1" >
				 <li><a href="" id='link_1'>test</a></li>
				 <li><a href="">test</a></li>
				 <li><a href="">test</a></li>
				 <li><a href="">test</a></li>
			</ul>
		</li>

		<li><span> Menu 2 </span>
			<ul class="sub1" >
				<li><a href="">test</a></li>
				<li><a href="">test</a></li>
				<li><a href="">test</a></li>
				<li><a href="">test</a></li>
			</ul>
		</li>

		<li><span> Menu 3 </span>
			<ul class="sub1" data-ddd=''>
				<li><a href="">test</a></li>
				<li><a href="">test</a></li>
				<li><a href="">test</a></li>
				<li><a href="">test</a></li>
			 </ul>

		</li>

		<li><span> Menu 4 </span>
			<ul class="sub1">
				<li><a href="">test</a></li>
				<li><a href="">test</a></li>
				<li><a href="">test</a></li>
				<li><a href="">test</a></li>
			</ul>
	   </li>
	</ul>
	</div>
	<div id="content_area">
	</div>
</article>
<?php
	include "include/footer.php";
?>
