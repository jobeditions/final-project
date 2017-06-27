<div class="lev">
			  <div class="leave">
				<h4>Laissez une Commentaire</h4>
			  </div>
				<form id="commentform" method="POST" action="/posts/{post}/comments ">
                 {{csrf_field() }}

				    <label for="author">Nom</label>
						<input id="author" name="author" type="text" value="" size="30" aria-required="true">
						<label for="email">Mail Electronique</label>
						<input id="email" name="email" type="text" value="" size="30" aria-required="true">
						<label for="website">Site du Web</label>
						<input id="website" name="website" type="text" value="" size="30">
						<label for="body">Commentaire</label>
						<textarea name="body" placeholder="Vos commentaires ici"></textarea>
					 <div class="clearfix"></div>
			           <input name="submit" type="submit" id="submit" value="Envoyer">
					 <div class="clearfix"></div>
				 </form>
			
</div>
