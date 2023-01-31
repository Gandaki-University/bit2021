body = document.getElementsByTagName('body')[0];

myfunc = (()=>{
  y = document.getElementsByTagName('script')

  for (x of y) {
    script_code = document.getElementById('code');
    script_code.innerText = script_code.innerText + "\n" + x.innerText
  }
})

window.addEventListener("load", myfunc);
