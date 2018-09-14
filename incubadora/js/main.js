document.getElementById("dashboard-tab").addEventListener("click",uploadDashboardPage);
document.getElementById('newidea-tab').addEventListener('click',uploadNewIdeaPage);
document.getElementById('ranking-tab').addEventListener('click',uploadRankingPage);
document.getElementById('newuser-tab').addEventListener('click',uploadNewUserPage);
document.getElementById('footer-id').addEventListener('click', function(){publishRandomIdeas(3);});
document.getElementById('rules-tab').addEventListener('click',upLoadRules);

let REST_IDEAS_URL = "https://web-unicen.herokuapp.com/api/groups/GasSMart/ideas";
let REST_IDEA_URL = "https://web-unicen.herokuapp.com/api/groups/GasSMart/idea/";

window.onload = uploadDashboardPage;

function uploadDashboardPage(){
  fetch(REST_IDEAS_URL,{ method: "GET", mode: "cors" }).then(
    function(response){
      response.json().then(
        function(json){
          let contenedor = document.getElementById('dashboard-section');
          contenedor.innerHTML='';
          let rowMain = document.createElement("div");
          rowMain.classList.add("row");
          for (let data of json.ideas) {
              let colMain = document.createElement("div");
              colMain.classList.add("col-12");
              colMain.classList.add("col-md-6");
              colMain.classList.add("col-lg-4");
              colMain.classList.add("border");
              colMain.classList.add("idea");

              let rowDiv = document.createElement("div");
              rowDiv.classList.add("row");

              let colDiv = document.createElement("div");
              colDiv.classList.add("col-12");
              colDiv.classList.add("col-lg-6");
              colDiv.classList.add("idea-title");
              let textoColumna=document.createTextNode(data.thing.name);
              colDiv.appendChild(textoColumna);
              rowDiv.appendChild(colDiv);

              colDiv = document.createElement("div");
              colDiv.classList.add("col-12");
              colDiv.classList.add("col-lg-6");
              colDiv.classList.add("idea-subtitle");
              textoColumna=document.createTextNode("Impact: "+data.thing.impact);
              colDiv.appendChild(textoColumna);
              rowDiv.appendChild(colDiv);

              colDiv = document.createElement("div");
              colDiv.classList.add("col-12");
              colDiv.classList.add("border");
              colDiv.classList.add("idea-subtitle");
              textoColumna=document.createTextNode("Theme: "+data.thing.theme);
              colDiv.appendChild(textoColumna);
              rowDiv.appendChild(colDiv);

              colDiv = document.createElement("div");
              colDiv.classList.add("col-12");
              colDiv.classList.add("col-md-12");
              colDiv.classList.add("col-lg-6");
              colDiv.classList.add("description");
              textoColumna=document.createTextNode(data.thing.description);
              colDiv.appendChild(textoColumna);
              rowDiv.appendChild(colDiv);

              colDiv = document.createElement("div");
              colDiv.classList.add("col-12");
              colDiv.classList.add("col-lg-6");
              colDiv.classList.add("col-md-12");
              colDiv.classList.add("d-none");
              colDiv.classList.add("d-lg-block");
              colDiv.classList.add("col-2");
              textoColumna=document.createTextNode(data.thing.image);
              colDiv.appendChild(textoColumna);
              rowDiv.appendChild(colDiv);

              colDiv = document.createElement("div");
              colDiv.classList.add("col-12");
              colDiv.classList.add("col-md-6");
              colDiv.classList.add("col-lg-6");
              colDiv.classList.add("creator");
              textoColumna=document.createTextNode("Author: "+data.thing.author);
              colDiv.appendChild(textoColumna);
              rowDiv.appendChild(colDiv);

              colDiv = document.createElement("div");
              colDiv.classList.add("d-none");
              colDiv.setAttribute("id",data._id);
              textoColumna=document.createTextNode(data._id);
              colDiv.appendChild(textoColumna);
              rowDiv.appendChild(colDiv);

              colDiv = document.createElement("div");
              colDiv.classList.add("col-12");
              colDiv.classList.add("col-md-6");
              colDiv.classList.add("col-lg-6");
              //colDiv.classList.add("");
              textoColumna=document.createTextNode("Actions: ");
              let button = document.createElement("button");
              button.setAttribute("id", "btn-"+data._id);
              button.innerHTML = "Delete";
              button.addEventListener('click',function (){
                                                deleteIdea(data._id);
                                              }
                                      );
              colDiv.appendChild(textoColumna);
              colDiv.appendChild(button);
              button = document.createElement("button");
              button.setAttribute("id", "btn-"+data._id);
              button.innerHTML = "Edit";
              button.addEventListener('click',function (){
                                                editIdea(data._id);
                                              }
                                      );
              colDiv.appendChild(button);
              rowDiv.appendChild(colDiv);

              colMain.appendChild(rowDiv);
              rowMain.appendChild(colMain);

	        }

          contenedor.appendChild(rowMain);

        }
      );
    }
  );
}

function uploadRankingPage(ops){

  fetch(REST_IDEAS_URL,{ method: "GET", mode: "cors" }).then(
    function(response){
      response.json().then(
        function(json){
          let contenedor = document.getElementById('dashboard-section');
          contenedor.innerHTML='';

          let list = json.ideas;
          list.sort(function(a,b){
            let likeA = a.thing.likes;
            let likeB = b.thing.likes;
            if  (likeA < likeB){
              return 1;
            }
            if  (likeA < likeB){
              return -1;
            }
            return 0;

          });
          let container = document.createElement("div");
          container.classList.add("ranking");
          let table = document.createElement("table");
          let thead = document.createElement("thead");
          let th = document.createElement("th");
          let textoColumna=document.createTextNode("Likes");
          th.appendChild(textoColumna);
          thead.appendChild(th);
          th = document.createElement("th");
          textoColumna=document.createTextNode("Name");
          th.appendChild(textoColumna);
          thead.appendChild(th);
          th = document.createElement("th");
          textoColumna=document.createTextNode("Impact");
          th.appendChild(textoColumna);
          thead.appendChild(th);
          th = document.createElement("th");
          textoColumna=document.createTextNode("Theme");
          th.appendChild(textoColumna);
          thead.appendChild(th);
          th = document.createElement("th");
          textoColumna=document.createTextNode("Description");
          th.appendChild(textoColumna);
          thead.appendChild(th);
          table.appendChild(thead);
          let filters = [];
          let i = 0;
          let select = document.createElement("select");
          select.setAttribute("id","filterSelect");



          for (let data of list) {

              let row = document.createElement("tr");
              row.classList.add("col-12");

              let td = document.createElement("td");
              textoColumna=document.createTextNode(data.thing.likes);
              td.appendChild(textoColumna);
              row.appendChild(td);

              td = document.createElement("td");
              textoColumna=document.createTextNode(data.thing.name);
              td.appendChild(textoColumna);
              row.appendChild(td);

              td = document.createElement("td");
              textoColumna=document.createTextNode(data.thing.impact);
              td.appendChild(textoColumna);
              row.appendChild(td);

              let option = document.createElement("option");
              option.text = data.thing.impact;
              select.add(option);

              td = document.createElement("td");
              textoColumna=document.createTextNode(data.thing.theme);
              td.appendChild(textoColumna);
              row.appendChild(td);

              td = document.createElement("td");
              textoColumna=document.createTextNode(data.thing.description);
              td.appendChild(textoColumna);
              row.appendChild(td);
              if(data.thing.inverstions > 5000){
                row.classList.add("highligh");
              }
              console.log(ops.text);
              if(ops.text!=undefined && ops.text==data.thing.impact){
                table.appendChild(row);
              }else{
                if(ops.text==undefined){
                  table.appendChild(row);
                }
              }

	        }
          select.addEventListener('change', function(){
            let selectedOption = this.options[select.selectedIndex];
            console.log(selectedOption.text);
            uploadRankingPage(selectedOption);
          });

          contenedor.appendChild(select);
          container.appendChild(table);
          contenedor.appendChild(container);
        }
      );
    }
  );
}

function uploadRanking(){
  fetch("html/ranking.html").then(
    function(response){
      if(!response.ok){
        console.log(response.error);
      }
        else{
          response.text().then(
            function(text){
              document.getElementById('dashboard-section').innerHTML = text;
            }
          );
        }
    }
  );
}

function uploadNewIdeaPage(){
    fetch('html/newIdea.html').then(
        function(response){
          if(!response.ok){
            console.log(response.error);
          }
            else{
              response.text().then(
                function(text){
                  document.getElementById('dashboard-section').innerHTML = text;
                  document.getElementById('idea-publish-button').addEventListener('click',publishIdea);
                  document.getElementById('idea-cancel-button').addEventListener('click',cancelPublishIdea);
                }
              );
            }
        }
    );
}

function uploadNewUserPage(){
    fetch('html/newUser.html').then(
        function(response){
          if(!response.ok){
            console.log(response.error);
          }
            else{
              response.text().then(
                function(text){
                  console.log(text);
                  document.getElementById('dashboard-section').innerHTML = text;
                }
              );
            }
        }
    );
}

function getTemplate(url){
  fetch(url).then(
    function(response){
      if(!response.ok){
        cconsole.log(response.error);
      }else{
        response.text().then(
          function(page){
            document.getElementById('dashboard-section').innerHTML = page;
          }
        );
      }
    }
  );
}


function editIdea(id){
  let completeUrl = REST_IDEA_URL +id;
  getTemplate("html/editIdea.html");
  fetch(completeUrl,{ method: "GET", mode: "cors" }).then(
    function(response){
      response.json().then(
        function(data){
          //console.log(data);
          document.getElementById('idea-name').value = data.information.thing.name;
          document.getElementById('idea-impact').value = data.information.thing.impact;
          document.getElementById('idea-theme').value = data.information.thing.theme;
          document.getElementById('idea-description').value = data.information.thing.description;
          document.getElementById('idea-author').value = data.information.thing.author;
          document.getElementById('idea-imagen').value = data.information.thing.image;

          document.getElementById('idea-publish-button').addEventListener('click', function (){
                                                                                    publishEditedIdea(data.information._id);
                                                                                  }
                                                                          );
          document.getElementById('idea-cancel-button').addEventListener('click', cancelPublishIdea);
        }
      );
    }
  );
}

function cancelPublishIdea(){
  uploadDashboardPage();
}

function publishEditedIdea(id){
  let ideaName = document.getElementById('idea-name').value;
  let ideaImpact = document.getElementById('idea-impact').value;
  let ideaTheme = document.getElementById('idea-theme').value;
  let ideaDescription = document.getElementById('idea-description').value;
  let ideaImagen = document.getElementById('idea-imagen').value;

  let author = document.getElementById('idea-author').value;
  let ranking =Math.random()*100;
  let likes =Math.random()*10000;
  let donations =Math.random()*1000;
  let invertions =Math.random()*10000;
  let intelectuals =Math.random()*100;

  let newIdea = {
  "thing": {
    "name": ideaName,
    "impact": ideaImpact,
    "theme": ideaTheme,
    "description": ideaDescription,
    "author": author,
    "image": ideaImagen,
    "ranking": ranking,
    "likes": likes,
    "donations": donations,
    "inverstions": invertions,
    "intelectuals": intelectuals
    }
  };
  console.log(newIdea);
  let completeURL = REST_IDEA_URL + id;
  console.log(id);
  console.log(REST_IDEA_URL);
  fetch(completeURL, {method:"PUT",
              headers:{"Content-Type":"application/json"},
              body:JSON.stringify(newIdea)}).then(
    function(response){
      if(!response.ok){
        console.log("Error: "+ response.error);
      } else{
          return response.json().then(
            function(obj){
              console.log(JSON.stringify(obj));
              uploadDashboardPage();
            }
          )
        }
      }
    );
}


function publishRandomIdeas(numberIdeas){
  for(let i = 0; i < numberIdeas; i++){
    let ideaName = "autgenerated Name " + i;
    let ideaImpact = "autgenerated Impact " +i;
    let ideaTheme = "autgenerated Theme " + i;
    let ideaDescription = "This is a autgenerated description " + i;
    let ideaImagen = "No autgenerated image " + i;
    let author = "autgenerated author " + i;
    let ranking =Math.random()*100;
    let likes =Math.random()*10000;
    let donations =Math.random()*1000;
    let invertions =Math.random()*10000;
    let intelectuals =Math.random()*100;

    let newIdea = {
    "thing": {
      "name": ideaName,
      "impact": ideaImpact,
      "theme": ideaTheme,
      "description": ideaDescription,
      "author": author,
      "image": ideaImagen,
      "ranking": ranking,
      "likes": likes,
      "donations": donations,
      "inverstions": invertions,
      "intelectuals": intelectuals
      }
    };

    fetch(REST_IDEAS_URL, {method:"POST",
                headers:{"Content-Type":"application/json"},
                body:JSON.stringify(newIdea)}).then(
      function(response){
        if(!response.ok){
          console.log("Error: "+ response.error);
        } else{
            return response.json().then(
              function(obj){
                console.log(JSON.stringify(obj));
              }
            )
          }
        }
      );

  }

  uploadDashboardPage();
}

function publishIdea(){
  let ideaName = document.getElementById("new-idea-form").elements.namedItem("idea-name").value;
  let ideaImpact = document.getElementById("new-idea-form").elements.namedItem("idea-impact").value;
  let ideaTheme = document.getElementById("new-idea-form").elements.namedItem("idea-theme").value;
  let ideaDescription = document.getElementById("new-idea-form").elements.namedItem("idea-description").value;
  let ideaImagen = document.getElementById("new-idea-form").elements.namedItem("idea-imagen").value;
  let author = document.getElementById("idea-author").value;
  let ranking =Math.random()*100;
  let likes =Math.random()*10000;
  let donations =Math.random()*1000;
  let invertions =Math.random()*10000;
  let intelectuals =Math.random()*100;

  let newIdea = {
  "thing": {
    "name": ideaName,
    "impact": ideaImpact,
    "theme": ideaTheme,
    "description": ideaDescription,
    "author": author,
    "image": ideaImagen,
    "ranking": ranking,
    "likes": likes,
    "donations": donations,
    "inverstions": invertions,
    "intelectuals": intelectuals
    }
  };

  fetch(REST_IDEAS_URL, {method:"POST",
              headers:{"Content-Type":"application/json"},
              body:JSON.stringify(newIdea)}).then(
    function(response){
      if(!response.ok){
        destiny.innerHTML = "Error: "+ response.error;
      } else{
          return response.json().then(
            function(obj){
              console.log(JSON.stringify(obj));
              let html = '';
              html += JSON.stringify(obj.information.thing);
              uploadDashboardPage();
            }
          )
        }
      }
    );
}

function deleteIdea(id){
  let url = REST_IDEA_URL + id;

  fetch(url, {method:"DELETE"}).then(
    function(response){
      if(!response.ok){
        console.log("No lo encontro" + response.error);
      }else{
        return response.json().then(
        function(objeto){
          console.log(JSON.stringify(objeto));
          uploadDashboardPage();
        }
      );
      }
    }
  );
}

function deleteName(){
  let destiny = document.getElementById('dashboard-section');
  let userid = document.getElementById('leeme4').value;
  let url = REST_IDEA_URL + userid;

  fetch(url, {method:"DELETE"}).then(
    function(response){
      if(!response.ok){
        console.log("No lo encontro" + response.error)
      }else{
        return response.json().then(
        function(objeto){
          console.log(JSON.stringify(objeto));
        }
      );
      }
      uploadDashboardPage();
    }
  );
}

let url2 = "https://web-unicen.herokuapp.com/api/groups/ejemplos/nombre/";
  function doUpdate(){
    let destiny = document.getElementById('dashboard-section');
    let edit = document.getElementById('leeme3').value;
    let userid = document.getElementById('leeme1').value;

    let edited = {
    "thing": {
      "nombre": edit
      }
    };
    let url3 = url2 + userid;
    fetch(url3, {method:"PUT", headers: {"Content-Type": "application/json"}, body: JSON.stringify(edited)}).then(
      function(response){
        if(!response.ok){
          console.log("No lo encontro " + response.error)
        }else{
          return response.json().then(
            function(objeto){
              console.log(JSON.stringify(objeto));
              doGetOneJason(url2, 'dashboard-section');
            }
          )
        }
      }
    )
  }

  function upLoadRules(){
    let destiny = document.getElementById('dashboard-section');
    destiny.innerHTML = "";
    let ul= document.createElement('ul');
    let li = document.createElement('li');
    let textoColumna=document.createTextNode("1. Several words related to the rules......");
    li.appendChild(textoColumna);
    ul.appendChild(li);
    li = document.createElement('li');
    textoColumna=document.createTextNode("2. Several words related to the rules......");
    li.appendChild(textoColumna);
    ul.appendChild(li);
    li = document.createElement('li');
    textoColumna=document.createTextNode("3. Several words related to the rules......");
    li.appendChild(textoColumna);
    ul.appendChild(li);
    destiny.appendChild(ul);

  }

function showOnlineImage(){
  let dashboard = document.getElementById('dashboard-section');

  fetch('img/ideas/codeeta.jpg').then(res => res.blob()).then(res => {
		                                                                  let objectURL = URL.createObjectURL(res);
                                                                      dashboard.innerHTML = "<img src="+objectURL+">";
                                                                      }
                                                              );

}
