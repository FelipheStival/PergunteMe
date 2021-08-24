const URL_BASE = 'http://127.0.0.1:8000/';
const TOKEN = document.getElementsByName('csrf-token')[0].getAttribute('content');
const HEADERS =  {
    'X-CSRF-TOKEN' : TOKEN,
    "Content-Type": "application/json",
    "Accept": "application/json"
};