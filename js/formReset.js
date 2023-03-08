var btn = document.getElementById('reset');
 
btn.addEventListener('click', function() {
    var confirm = document.getElementById("confirm");
   confirm.value = '';
   console.log(confirm.value)
  //submit()でフォームの内容を送信
  document.contacform.submit();
})