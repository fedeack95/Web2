


let url = "https://web-unicen.herokuapp.com/api/groups/GasSMart/ideas";
function uploadIdea(){
  let destiny = document.getElementById('dashboard-section');
  let title = document.getElementById('titleFrom').value;
  let description = document.getElementById('descriptionFrom').value;
  let imagen = document.getElementById('imagenFrom').value;
  let author = document.getElementById('authorFrom').value;

  let edad = 33;
  let mail = "sarasa@gmail.com"

  let idea = {
  "thing": {
    "title": title,
    "description": description,
    "imagen": imagen,
    "author":author
    }
  };

  fetch(url, {method:"POST",
              headers:{"Content-Type":"application/json"},
              body:JSON.stringify(idea)}).then(
    function(response){
      if(!response.ok){
        destiny.innerHTML = "Error: "+ response.error;
      } else{
          return response.json().then(
            function(obj){
              console.log(JSON.stringify(obj));
              let html = '';
              html += JSON.stringify(obj.information.thing);
              destiny.innerHTML = html;
            }
          )
        }
      }
    )
  }
