<?php require('header.php'); ?>
<?php require('menu.php'); ?>

	<section id="welcome"> 
		<p> {{ message }} </p>
	</section>

	<section id="example">
	  	<example></example>
	</section>

	<script>
		new Vue ({
			el: '#welcome',
			data: {
				message: "Accounting made easy"
			}
		})

		// register
		Vue.component('example', {
		  template: '<div>why i need this?...</div>'
		})
		// create a root instance
		new Vue({
		  el: '#example'
		})
	</script>

<?php require('footer.php'); ?>
