var Chance = require('chance');
var chance = new Chance;

const express = require('express')
const app = express()
const port = 3000

app.get('/', (req, res) => {
  res.send(generateRandomJSON())
})

app.listen(port, () => {
  console.log(`Example app listening at http://localhost:${port}`)
})

function generateRandomJSON(){
    var numJSON = chance.integer({min: 1, max: 7})

    console.log(numJSON);
    var JSONs = []

    for (var i = 1; i <= numJSON; ++i) {
      JSONs.push({
        _id : chance.string({ length: 8, pool: '0123456789ABCDEF' }),
        date: chance.date({string: true, american: false}),
        origin: chance.country({full : true}),
        about: chance.paragraph()
        })
        
    }
    console.log(JSONs);
    return JSONs;
}
