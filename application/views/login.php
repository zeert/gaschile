<?php $this->load->view('includes/header'); ?>


    <?php
    $usrname = array('name'=>'username','id'=>'username','value'=>''); 
    $passwd = array('name'=>'password','id'=>'password','value'=>'');
    $submit = array('name'=>'Submit','id'=>'submit','value'=>'Entrar', 'class'=>'fr submit');
    ?>
		</header>
		<section id="content">
			<?= form_open('login/validate_credentials'); ?>
			<fieldset>
				<section><label for="username">Usuario</label>
					<div><?= form_input($usrname);?></div>
				</section>
				<section><label for="password">Clave</label>
					<div><?= form_password($passwd);?></div>
					<div><input type="checkbox" id="remember" name="remember"><label for="remember" class="checkbox">remember me</label></div>
				</section>
				<section>
					<div><?= form_submit($submit);?></div>
				</section>
			</fieldset>
		<?= form_close(); ?>
		</section>
		<footer>Gaschile 2012</footer>