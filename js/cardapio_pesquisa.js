

//Menu dos xis.
const produtos_pesquisa = [{id: '1.1.1', name: 'Xis Salada', price: '20,00', descricao: 'Pão de xis, maionese temperada, ketchup, milho, ervilha, tomate, alface, hamburguer, queijo, fiambre e ovo'}, 
{id: '1.1.2', name: 'Xis Calabresa', price: '24,00', descricao: 'Pão de xis, maionese temperada, ketchup, milho, ervilha, tomate, alface, hamburguer, calabresa, queijo, fiambre e ovo'},
{id: '1.1.3', name: 'Xis Bacon', price: '27,00', descricao: 'Pão de xis, maionese temperada, ketchup, milho, ervilha, tomate, alface, hamburguer, bacon, queijo, fiambre e ovo'},
{id: '1.1.4', name: 'Xis Coração', price: '25,00', descricao: 'Pão de xis, maionese temperada, ketchup, milho, ervilha, tomate, alface, hamburguer, coração, queijo, fiambre e ovo'},
{id: '1.1.5', name: 'Xis Frango', price: '17,00', descricao: 'Pão de xis, maionese temperada, ketchup, milho, ervilha, tomate, alface, peito de frango, queijo, fiambre e ovo'},
{id: '1.1.6', name: 'Xis Frango Bacon', price: '24,00', descricao: 'Pão de xis, maionese temperada, ketchup, milho, ervilha, tomate, alface, peito de frango, bacon, queijo, fiambre e ovo'},
{id: '1.1.7', name: 'Xis Frango Calabresa', price: '20,00', descricao: 'Pão de xis, maionese temperada, ketchup, milho, ervilha, tomate, alface, peito de frango, calabresa, queijo, fiambre e ovo'},
{id: '1.1.8', name: 'Xis Frango Coração', price: '22,00', descricao: 'Pão de xis, maionese temperada, ketchup, milho, ervilha, tomate, alface, peito de frango, coração, queijo, fiambre e ovo'},
{id: '1.1.9', name: 'Xis Tudo', price: '36,00', descricao: 'Pão de xis, maionese temperada, ketchup, milho, ervilha, tomate, alface, hamburguer, bacon, coração, calabresa, queijo, fiambre e ovo'},
//Menu de dogs.
{id: '1.2.1', name: 'dog_Simples', price: '10.00', descricao: 'Pão de dog, maionese temperada, ketchup, milho, ervilha, tomate e duas salsichas'},
{id: '1.2.2', name: 'dog Duplo', price: '11.00', descricao: 'Pão de dog, maionese temperada, ketchup, milho, ervilha, tomate e tres salsichas'},
{id: '1.2.3', name: 'dog Especial', price: '14.00', descricao: 'Pão de dog, maionese temperada, ketchup, milho, ervilha, tomate, queijo parmesão ralado, palha e duas salsichas'},
{id: '1.2.4', name: 'dog Especial Duplo', price: '16.00', descricao: 'Pão de dog, maionese temperada, ketchup, milho, ervilha, tomate, queijo parmesão ralado, palha e tres salsichas'},
{id: '1.2.5', name: 'dog Frango', price: '14.00', descricao: 'Pão de dog, maionese temperada, ketchup, milho, ervilha, tomate, frango e duas salsichas'},
{id: '1.2.6', name: 'dog Coração', price: '16.00', descricao: 'Pão de dog, maionese temperada, ketchup, milho, ervilha, tomate, coração e duas salsichas'},
{id: '1.2.7', name: 'dog Bacon', price: '18.00', descricao: 'Pão de dog, maionese temperada, ketchup, milho, ervilha, tomate, bacon e duas salsichas'},

//Menu de torradas
{id: '1.3.1', name: 'Torrada Simples', price: '11.00', descricao: 'Pão de xis, queijo, fiambre'},
{id: '1.3.2', name: 'Torrada Americana', price: '12.00', descricao: 'Pão de xis, queijo, fiambre, tomate, alface e ovo'},
{id: '1.3.3', name: 'Torrada Frango', price: '14.00', descricao: 'Pão de xis, queijo, fiambre, frango'},
{id: '1.3.4', name: 'Torrada Ameircana Frango', price: '15.00', descricao: 'Pão de xis, queijo, fiambre, tomate, alface, frango e ovo'},
{id: '1.3.5', name: 'Torrada Dupla', price: '15.00', descricao: 'Pão de xis, 4 fatias de queijo e duas de fiambre'},
{id: '1.3.6', name: 'Torrada Americana Burguer', price: '19.00', descricao: 'Pão de xis, queijo, fiambre, hamburguer e ovo'},
{id: '1.3.7', name: 'Torrada Americana Bacon', price: '19.00', descricao: 'Pão de xis, queijo, fiambre, ovo e bacon'},
{id: '1.3.8', name: 'Torrada Americana Calabresa', price: '16.00', descricao: 'Pão de xis, queijo, fiambre, ovo e calabresa'},
{id: '1.3.9', name: 'Torrada Americana Coração', price: '17.00', descricao: 'Pão de xis, queijo, fiambre, ovo e coração'},

//Menu de pasteis.
{id: '1.4.1', name: 'Pastel Carne', price: '4.00', descricao: 'massa de pastel DG e guisado'},
{id: '1.4.2', name: 'Pastel Frango', price: '3.00', descricao: 'massa de pastel DG e frango desfiado'},
{id: '1.4.3', name: 'Pastel Queijo', price: '4.00', descricao: 'massa de pastel DG e mussarela'},
{id: '1.4.4', name: 'Pastel Queijo Milho', price: '4.00', descricao: 'massa de pastel DG, mussarela e milho '},
{id: '1.4.5', name: 'Pastel Queijo Presunto', price: '4.00', descricao: 'massa de pastel DG, mussarela e fiambre'},
{id: '1.4.6', name: 'Pastel Queijo Coração', price: '5.00', descricao: 'massa de pastel DG, mussarela e coração'},
{id: '1.4.7', name: 'Pastel Queijo calabresa', price: '4.00', descricao: 'massa de pastel DG, mussarela e calabresa'},
{id: '1.4.8', name: 'Pastel Chocolate Baton', price: '4.00', descricao: 'massa de pastel DG e dois chocolates baton branco ou preto'},

//Menu de porções.
{id: '1.5.1', name: 'Porção Fritas', price: '14.00', descricao: '500 gramas de batata palito'},
{id: '1.5.2', name: 'Porção Coração', price: '11.00', descricao: '250 gramas de coração'},
{id: '1.5.3', name: 'Porção Frango', price: '10.00', descricao: '300 gramas de frango'},
{id: '1.5.4', name: 'Porção Calabresa', price: '10.00', descricao: '250 gramas de calabresa'},

//Menu de picados.
{id: '1.6.1', name: 'Picado Pequeno', price: '31.00', descricao: '500g de batata palito, 150g de frango, 150g de coração e 150g de calabresa'},
{id: '1.6.2', name: 'Picado Medio', price: '47.00', descricao: '500g de batata palito, 300g de frango, 300g de coração e 300g de calabresa'},
{id: '1.6.3', name: 'Picado Medio Especial', price: '67.00', descricao: '500g de batata palito, 200g de bacon, 100g de mussarela, 300g de frango, 300g de coração e 300g de calabresa'},

//Menu das pizzas.
{id: '1.7.1', name: 'Pizza mussarela', price: '25.00', descricao: 'massa média, molho, mussarela, oregano e azeitonas'}]


