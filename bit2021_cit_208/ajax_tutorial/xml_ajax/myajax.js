function checkStatus(){
  if (this.readyState == 4 && this.status == 200){
    changeContent(this.responseText);
  }
}

function changeContent(text_message){
  document.getElementById('response').innerText = text_message;
}

function callAJAX(){
  var mrBil = new XMLHttpRequest();
  mrBil.onreadystatechange = checkStatus;
  mrBil.open("GET", 'sabhyata.txt');
  mrBil.send();

}
