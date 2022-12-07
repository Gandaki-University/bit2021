function myrequest(){

  document.getElementById('content').innerText  = this.responseText;
  // console.log(this.responseText);
}

function loadContent() {
  myajaxVar = new XMLHttpRequest();
  myajaxVar.onload = myrequest;
  myajaxVar.open("POST", "https://graphql.datocms.com/");
  myajaxVar.setRequestHeader("Authorization","Bearer 99ed8680e81dab4baad6db86218aff");
  body= { query:`
    {
  myWebsite {
    address
    contactNumber
    ownerName
    title
  }
}
  `
  }

  myajaxVar.send(JSON.stringify(body));

}
