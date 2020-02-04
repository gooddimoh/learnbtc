var coinbase = require('coinbase-commerce-node');
var Client = coinbase.Client;

Client.init('bd96d073-c822-4490-8493-0751a51cce56');

var params = {
    'limit': 2,
    'order': 'desc'
};

Checkout.list(params, function (error, list, pagination) {
    console.log(error);
    console.log(list);
    console.log(pagination);
});
