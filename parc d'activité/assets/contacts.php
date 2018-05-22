<?php 
include_once('header.php');
 ?>
 <main class="container-fluid">
 	<img src="assets/img/agenda.png" class="forest d-none d-md-block">
	<img src="assets/img/letter.png" class="build d-none d-md-block">
 	<div class="row ">
 		<div class="offset-2 col-8">
 			<form class="needs-validation bg-black px-5 py-3 ">
 				<div class="row">
 					<div class="col-md-12  mb-3">
 						<p class=" text-center text-contact">
 							Vous souhaitez un renseignement ?<br>
 							Par téléphone au 06.62.32.35.35<br>
 							ou<br>
 							Laissez-nous un message via ce formulaire de contact, nous y répondrons dans les plus brefs délais.
 						</p>
 					</div>
 					<div class="col-md-6 col-xs-12  mb-3">
 						<label for="validationCustom01">Prénom : *</label>
 						<input type="text" class="form-control w-100" id="validationCustom01" required>
 					</div>
 					<div class="col-md-6 col-xs-12 mb-3">
 						<label for="validationCustom02">Nom : *</label>
 						<input type="text" class="form-control w-100" id="validationCustom02" required>
 					</div>
 					<div class="col-md-6 col-xs-12 mb-3">
 						<label for="validationCustom01">Email : *</label>
 						<input type="email" class="form-control w-100" id="colFormLabelSm" required>
 					</div>
 					<div class="col-md-6 col-xs-12 mb-3">
 						<label for="validationCustom03">Téléphone : *</label>
 						<input type="text" class="form-control w-100" id="validationCustom03"  required>
 						<div class="valid-feedback">
 						</div>
 					</div>
 					<div class="col-md-12  mb-3">
 						<label for="validationCustom04">Objet de votre message : *</label>
 						<input type="text" class="form-control " id="validationCustom04"  required>
 						<div class="invalid-feedback">
 						</div>
 					</div>
 					<div class="col-md-12 mb-3">
 						<label for="exampleFormControlTextarea1">Votre message : *</label>
 						<textarea class="form-control" id="exampleFormControlTextarea1" rows="5" required></textarea>
 					</div>
 					<div class="col-12 mb-5">
 						<button class="btn btn-letter bg-orange text-light btn-lg btn-block" type="submit">Valider</button>
 					</div>
 				</div>	
 			</form>
 		</div>
 	</div>
 </main>
<?php 
include_once('footer.php');
 ?>