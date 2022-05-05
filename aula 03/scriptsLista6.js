function at1(){
    var elemento_pai = document.getElementById('divAt1');
    var n1  = document.createElement('input');
    var n2  = document.createElement('input');
    var button = document.createElement('button');
    var content = document.createTextNode("Soma");

    button.setAttribute('onclick', 'soma("n1At1", "n2At1")');
    n1.setAttribute("type", "number");
    n1.setAttribute("id", "n1At1")
    n2.setAttribute("type", "number");
    n2.setAttribute("id", "n2At1")

    elemento_pai.appendChild(n1);
    elemento_pai.appendChild(n2);
    elemento_pai.appendChild(button);
    button.appendChild(content);

}

function at2(){
    var elemento_pai = document.getElementById('divAt2');
    var n1  = document.createElement('input');
    var n2  = document.createElement('input');
    

    n1.setAttribute('onkeyup', 'soma("n1At2","n2At2")');
    n1.setAttribute("type", "number");
    n1.setAttribute("id", "n1At2")
    n2.setAttribute('onkeyup', 'soma("n1At2","n2At2")');
    n2.setAttribute("type", "number");
    n2.setAttribute("id", "n2At2")

    elemento_pai.appendChild(n1);
    elemento_pai.appendChild(n2);

}

function at3(){
    var elemento_pai = document.getElementById('divAt3');
    var n1  = document.createElement('input');
    var n2  = document.createElement('input');
    

    n1.setAttribute('onkeyup', 'somaAt3()');
    n1.setAttribute("type", "number");
    n1.setAttribute("id", "n1At3")
    n2.setAttribute('onkeyup', 'somaAt3()');
    n2.setAttribute("type", "number");
    n2.setAttribute("id", "n2At3")

    elemento_pai.appendChild(n1);
    elemento_pai.appendChild(n2);

}

    /* ----------------------------------------------------------------------------------------------*/

function at4 (){
    var qtd = document.getElementById("qtd").value;
    var divs = document.getElementsByClassName("divs");

    /*for (var i = 0; i < divs.length; i++){
        divs[i].length
    }*/

    for (var i = divs.length; i > 0;){
        i--;
        divs[i].remove();
    }

    for (var i = 0; i <= qtd; i++){
        elemento_pai = document.getElementById('divsAt4')
        novaDiv = document.createElement('div');
        content = document.createTextNode(i);
        
        novaDiv.setAttribute("class", "divs");
        
        elemento_pai.appendChild(novaDiv)
        novaDiv.appendChild(content);

    }
}

function at5() {
    var qtd = parseInt(document.getElementById("qtd1").value);
    var divs = document.getElementsByClassName("divs1");

    qtd += divs.length;

    for (var i = divs.length; i <= qtd; i++){

        elemento_pai = document.getElementById('divsAt5');
        novaDiv = document.createElement('div');
        content = document.createTextNode(i);
        
        novaDiv.setAttribute("class", "divs1");
        
        elemento_pai.appendChild(novaDiv)
        novaDiv.appendChild(content)

    }
}

function at6 () {

    var divs = document.getElementsByClassName('random');

    for (var i = divs.length; i > 0;){
        i--;
        divs[i].remove();
    }

    var cores = ["aqua","black", "brown", "gold", "grey", "red", "yellow", "green", "blue", "magenta", "tomato", "orange","olive", "navy"];

    var randomIndex = Math.floor(Math.random() * cores.length);
    var corFundo = cores[randomIndex];

    randomIndex = Math.floor(Math.random() * cores.length);
    var corBorda = cores[randomIndex];

    var elemento_pai = document.getElementById('divsAt6')
    var div = document.createElement('div');    
    elemento_pai.appendChild(div);

    div.setAttribute('style', 'background-color:'+corFundo+'; height: 30px ; width: 30px;border: 3px solid '+corBorda);
    div.setAttribute('class', 'random')
}

function soma (n1, n2) {
    var x = document.getElementById(n1).value;
    var y =document.getElementById(n2).value;

    if(x == "" || y == "") alert("Preencha todos os campos"); 
    else {
        x = parseInt(x);
        y = parseInt(y);
        alert(x + y)
    }
}

function somaAt3 (){
    var x = parseInt(document.getElementById('n1At3').value);
    var y = parseInt(document.getElementById('n2At3').value);

    if (isNaN(y)) y = 0;
    if (isNaN(x)) x = 0;
            
    document.getElementById('at3').value = x+y;
}

