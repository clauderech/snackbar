for (let i = 0; i < 7; i++) {
let categ = produtos.find((item) => item[i].id === '1.3.1')
let Item = categ.find(item => item.id === '1.3.1') 
console.log(Item.name)
}