<div class="lev">
			  <div class="leave">
				<h4>Laissez une Commentaire</h4>
			  </div>
				<form id="commentform" method="POST" action="/posts/{{$post->id}}/{{Auth::user()->id}}/comments">
                 {{csrf_field() }}
					
						<label for="body">Commentaire</label>
						<textarea name="body" placeholder="Vos commentaires ici"></textarea>
					 <div class="clearfix"></div>
			           <input name="submit" type="submit" id="submit" value="Envoyer">
					 <div class="clearfix"></div>
				 </form>
			
</div>
