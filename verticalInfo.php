
	<div class="navigation" style="position: fixed;">
		<ul style="margin-top: 200px;">
			<li class="list active">
				<a href="logout.php">
					<span class="icon"><i class="fa fa-user" aria-hidden="true"></i></span>
					<span class="title" style="right: -500px;">
						<?php
							if(!isset($_SESSION['name']) && !isset($_SESSION['password'])){
								header("Location: index.php");
							}
							else
								echo " Disconnect ".$_SESSION['name'];
						?>
					</span>
				</a>
			</li>
			<li class="list">
				<a href="">
					<span class="icon"><i class="fa-solid fa-window-maximize"></i></span>
					<span class="title" style="right: -500px;">Easy to book</span>
				</a>
			</li>
			<li class="list">
				<a href="">
					<span class="icon"><i class="fa-solid fa-bolt"></i></span>
					<span class="title" style="right: -500px;">Comfortable, non-polluting, smart solutions</span>
				</a>
			</li>
			<li class="list">
				<a href="">
					<span class="icon"><i class="fa-solid fa-tag"></i></span>
					<span class="title" style="right: -500px;">After 2 rentals you receive 15% of the next</span>
				</a>
			</li>
			<div class="indicator"></div>
		</ul>
	</div>

	<!-- add active class on hovered item -->
	<script>
		let list = document.querySelectorAll('li');
		for (let i=0; i<list.length; i++){
			list[i].onmouseover = function(){
				let j = 0;
				while (j < list.length){
					list[j++].className = 'list';
				}
				list[i].className = 'list active';
			}
		}

		// change body color according to indicator

		list.forEach(elements => {
			elements.addEventListener('mouseenter',function(event){
				let bg = document.querySelector('body');
				let color = event.target.getAttribute('data-color');
				bg.style.backgroundColor = color;
			})
		})
	</script>

