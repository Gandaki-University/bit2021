function checkStatus(){
  if (this.readyState == 4 && this.status == 200){
    changeContent(this.responseText);
  }
}

function changeContent(text_message){
  // document.getElementById('response')
  parser = new DOMParser();
  xmlDOM = parser.parseFromString(text_message, 'text/xml');
  // all_fnames = xmlDOM.getElementsByTagName('fname');

  students = xmlDOM.getElementsByTagName('students')[0];
  console.log(students);

  fname = students.getElementsByTagName('fname');

  console.log(fname);

  prakriti_name = fname[0];
  console.log(prakriti_name);

  student = students.childNodes[0];
  console.log()
  // prakriti_name = student.getElementsByTagName('fname')[0];
  //
  console.log(prakriti_name);


  // console.log(all_fnames);
  // innerText = text_message;
}

function callAJAX(){
  var xmlDoc = new XMLHttpRequest();
  xmlDoc.onreadystatechange = checkStatus;
  xmlDoc.open("GET", 'data.xml');
  xmlDoc.send();

}
