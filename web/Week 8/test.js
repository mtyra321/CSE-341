const http = require('http');
const port = 8000;


const requestListener = (req, res) => {

    if (req.url == "/home") {
        res.writeHead(200, { 'Content-Type': 'text/html' });
        res.write("<h1>hello world</h1>");
    } else if (req.url == "/") {
        res.writeHead(200, { 'Content-Type': 'text/html' });

        res.write("<h1>default page</h1>");
    } else if (req.url == "/another") {
        res.writeHead(200, { 'Content-Type': 'text/html' });

        res.write("<h1>another page</h1>");
    }
    res.end();

}


var server = http.createServer(requestListener);
server.listen(port, () => {
    console.log(`Server is listening on port ${port}`);
});