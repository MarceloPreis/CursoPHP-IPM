function at1(){
    var x = document.getElementById('x').value;
    var y =document.getElementById('y').value;

    if(x == "" || y == "") alert("Preencha todos os campos"); 
    else {
        x = parseInt(x);
        y = parseInt(y);
        alert(x + y)}
}

function at2 (div){
    if (document.getElementById(div).style.display == "none") document.getElementById(div).style.display = "block";
    else document.getElementById(div).style.display = "none";
}

function at3 (array){
    var elemento_pai = document.getElementById("elementos");
    for (let i = 0; i < array.length; i++){
        var span = document.createElement("span");
        elemento_pai.appendChild(span);
        var content = document.createTextNode(array[i]+" ");
        span.appendChild(content);
    }
}

function at4(){
    var string = document.getElementById('at4').value;
    var array = string.split('');
    var soma = 0;

    for (let i = 0; i < array.length; i++) {
        array[i] = parseInt(array[i])
        soma += array[i];
    }
    
    alert(soma)
}

function at5 (){
    var elemento_pai = document.getElementById("novosBotoes");
    var botao = document.createElement('button');
    elemento_pai.appendChild(botao);
    botao.setAttribute('onclick', 'at5()')
    var texto  = document.createTextNode("Novo botão");
    botao.appendChild(texto);
}

function at6 (){
    var op = document.getElementById('at6').value;
    var elemento_pai = document.body;
    var div = document.createElement('div')
    elemento_pai.appendChild(div);

    console.log(op);
        if (op == 1){
            div.setAttribute('style', 'background-color: green; color: white; height: 300px; width: 300px; font-size: 18px');
            div.innerText = "Que bom";
        }else if (op == 2){
            div.setAttribute('style', 'background-color: blue; color: yellow; height: 400px; width: 600px; border: 10px solid green; font-size: 18px ');
            var content = document.createTextNode("Vai melhorar");
        }else{
            div.setAttribute('style', 'background-color: red; color: white; font-size: 18px');
            var content = document.createTextNode("Procure ajuda");
            alert("Para psicólogos ligue: (47) 9999 - 9999")
        }
        div.appendChild(content);
}

