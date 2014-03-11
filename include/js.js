function getXhr(){

                    var xhr = null; 

				if(window.XMLHttpRequest) // Firefox et autres

				   xhr = new XMLHttpRequest(); 

				else if(window.ActiveXObject){ // Internet Explorer 

				   try {

			                xhr = new ActiveXObject("Msxml2.XMLHTTP");

			            } catch (e) {

			                xhr = new ActiveXObject("Microsoft.XMLHTTP");

			            }

				}

				else { // XMLHttpRequest non supporté par le navigateur 

				   alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest..."); 

				   xhr = false; 

				} 

                                return xhr;

			}

			

			

			

function go(source,fichierphp,desti){ 
sel = document.getElementById(source);
idauteur = sel.options[sel.selectedIndex].value;
if(idauteur==0) return false;
document.getElementById(desti).innerHTML = '<img src="ajax-loader.gif" width="16" height="16" style="display:block" id="loaderajax">';

                /*document.getElementById('loaderajax').style.display='block';*/ 

				var xhr = getXhr();

				// On défini ce qu'on va faire quand on aura la réponse

				xhr.onreadystatechange = function(){

					// On ne fait quelque chose que si on a tout reçu et que le serveur est ok

					if(xhr.readyState == 4 && xhr.status == 200){

						leselect = xhr.responseText;

						// On se sert de innerHTML pour rajouter les options a la liste

						

						document.getElementById(desti).innerHTML = leselect;

						/*document.getElementById('loaderajax').style.display='none';*/

					}

				}



				// Ici on va voir comment faire du post

				xhr.open("POST",fichierphp,true);

				// ne pas oublier ça pour le post

				xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

				// ne pas oublier de poster les arguments

				// ici, l'id de l'auteur

				sel = document.getElementById(source);

				idauteur = sel.options[sel.selectedIndex].value;

				xhr.send("source="+idauteur);

			}
