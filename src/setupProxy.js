const { createProxyMiddleware } = require('http-proxy-middleware');
const express = require('express');

const app = express();

module.exports = function(app) {
    app.use("/reactcrud", 
    createProxyMiddleware({
        target: 'http://localhost/reactjscrud/',
        changeOrigin: true,
      })
    );
    

    

   

    
}