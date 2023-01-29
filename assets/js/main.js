var redeSocialLink = document.querySelectorAll('.redeSocialLink');

if (redeSocialLink) {
  redeSocialLink.forEach((button) => {
    button.addEventListener('click', () => {handleSocialLink(button)});
  });
}
var formatter = new Intl.NumberFormat('pt-BR', {
  style: 'currency',
  currency: 'BRL',
});

function handleSocialLink(button) {
  var http = new XMLHttpRequest();
  var url = 'handleSocialLink.php';
  var linkid = 'linkid=' + button.dataset.linkid;

  http.open('POST', url, true);
  http.onreadystatechange = function() {
    if(http.readyState == 4 && http.status == 200) {

        let res = JSON.parse(http.responseText);

        if(res.dailyLimit === true){
          var amount = document.getElementById('amount');
          amount.innerText = formatter.format(res.newAmount);
          window.open(res.link, '_parent').focus();
            
        } else if(res.dailyLimit === false) {
          console.log('Daily limit exceeded');

        } else {
          console.log('erro');
        }

    } else if (http.status != 200){
      console.log('erro no ajax');
    }
  }
  http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  http.send(linkid);
}