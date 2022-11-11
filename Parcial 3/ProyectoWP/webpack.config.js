console.log(__dirname);
console.log(__filename);

console.log(module);

const path = require('path');

module.exports = {
    entry: './src/index.js',
    output: {
        filename: 'bundle.js',
        path: path.resolve(__dirname,'dist')
    }
}