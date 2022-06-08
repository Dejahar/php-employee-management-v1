//!CHECKS LOGIN COOKIE
setInterval(getCookie, 1000);
function getCookie() {
  console.log('This is Interval');
  //post data to send
  const data = new FormData();
  data.set("function", "cookie");
  fetch(urlPHP, {
    method: "POST",
    body: data,
  })
  .then((response) => response.text())
  .then((data) => {
    if (data == true) {
      window.location.href = '../../';
    }
  });
}