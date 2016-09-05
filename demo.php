
//from postman export

var settings = {
  "async": true,
  "crossDomain": true,
  "url": "http://api.wpswebservices.com/item",
  "method": "GET",
  "headers": {
    "authorization": "Basic RDIwNjA0MDg6MDAwMTEw==",
    "accept": "application/vnd.wps_api.v3+json",
    "cache-control": "no-cache",
    "postman-token": "5f6c65a6-5ebb-f5c2-fc03-6d867e1145ac"
  }
}

$.ajax(settings).done(function (response) {
  console.log(response);
});