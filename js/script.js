

//Variavel global para receber o indice da categoria
let categKey = ''
// criar a variavel global para receber o indice dos itens
let modalKey = 0
//Variavel global para receber a quantidade de itens
let quantItens = 1
// carrinho
let cart = []

// funcoes auxiliares uteis
const seleciona = (elemento) => document.querySelector(elemento)
const selecionaTodos = (elemento) => document.querySelectorAll(elemento)

// formata os valores em moeda Brasileira o Real
const formatoReal = (valor => {
    return valor.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL'})
})

const formatoMonetario = (valor) => {
    if(valor) {
        return valor.toFixed(2)
    }
}


const abrirModal = () => {
    seleciona('.itemWindowArea').style.opacity = 0
    seleciona('.itemWindowArea').style.display = 'flex'
    setTimeout(() => {
        seleciona('.itemWindowArea').style.opacity = 1
    }, 150)
}

const fecharModal = () => {
    seleciona('.itemWindowArea').style.opacity = 0
    setTimeout(() => {
        seleciona('.itemWindowArea').style.display = 'none'
    }, 500)
}

const botoesFechar = () => {
    //botoes  fexar modal
    selecionaTodos('.itemInfo--cancelButton, .itemInfo--cancelMobileButton').forEach((item) => {
        item.addEventListener('click', fecharModal)
    })
}

const preencherItens = (itens, xitem, index) => {
    //setar um atributo para identificar qual elemento foi clicado
    itens.setAttribute('data-key', index)
    //preencher os modelos com os dados dos itens de acordo com a categoria
    itens.querySelector('.itens .item--name').innerHTML = xitem.name
    itens.querySelector('.itens .item--preco').innerHTML =  `R$ ${xitem.price}`
    itens.querySelector('.itens .item--descr').innerHTML = xitem.descricao
}

const preecherModal = (xitem) => {
    //preencher os dados do modal
    document.querySelector('.itemInfo h1').innerHTML = xitem.name
    document.querySelector('.itemInfo .itemInfo--actualPrice').innerHTML =  `R$ ${xitem.price}`
    document.querySelector('.itemInfo .itemInfo--desc').innerHTML = xitem.descricao
    
}

const mudarQuantidade = () => {
    seleciona('.itemInfo--qtmais').addEventListener('click', () => {
        quantItens++
        seleciona('.itemInfo--qt').innerHTML = quantItens
    })

    seleciona('.itemInfo--qtmenos').addEventListener('click', () => {
        if (quantItens > 1) {
            quantItens--
            seleciona('.itemInfo--qt').innerHTML = quantItens
        }
    })
}

const pegarKey = (e) => {
    // .closest retorna o elemento mais proximo que tem a class que passamos
    // do .itens ele vai pegar o valor do atributo data-key
    let key = e.target.closest('.itens').getAttribute('data-key')
    
    // garantir que a quantidade inicial de itens é 1
    quantPizzas = 1

    // Para manter a informação de qual item foi clicado
    modalKey = key

    return key
}

const adicionarNocarrinho = () => {
    seleciona('.itemInfo--addButton').addEventListener('click', () => {
        //Pegar o preço do item e formatar para numero
        let price = seleciona('.itemInfo--actualPrice').innerHTML.replace('R$ ', '')
        //identificador para juntar a categoria e item
        let identificador = produtos[categKey][modalKey].id
        // antes de adicionar verifique se ja tem aquele codigo
        // para adicionarmos a quantidade
        let key = cart.findIndex( (item) => item.identificador === identificador )
        //console.log(categKey)
        //se já não tiver um item igual adicionar ao carrinho ou só aumenta a quantidade.
        let observ = seleciona('#msg').value
        if (observ == null || observ == '')
            observ = 'normal'
        console.log(observ)
        if(key > -1) {
            cart[key].qt += quantItens
        } else {
            // adicionar objeto item no carrinho
            let item = {
                identificador,
                categ: categKey,
                id: produtos[categKey][modalKey].id,
                qt: quantItens,
                price: parseFloat(price), // price: price
                observacao: observ
            }
            cart.push(item)
            //Salva os dados do carrinho em sessionStorage.
            cartTextSet = JSON.stringify(cart)
            sessionStorage.setItem('cart_save', cartTextSet)
            //console.log(item)
            //console.log('Sub total R$ ' + (item.qt * item.price).toFixed(2))
        }
        window.location.reload(true);
        fecharModal()
        abrirCarrinho()
        atualizarCarrinho()
          
    })
}

const abrirCarrinho = () => {
    //console.log('Qtd de itens no carrinho ' + cart.length)
    if(cart.length > 0) {
        // mostrar o carrinho
	    seleciona('aside').classList.add('show')
        seleciona('header').style.display = 'block' // mostrar barra superior
    }
}

const fecharCarrinho = () => {
    // fechar o carrinho com o botão X no modo mobile
    seleciona('.menu-closer').addEventListener('click', () => {
        seleciona('aside').classList.remove('show');
         
        seleciona('header').style.display = 'block'
    })
}

const abrirfecharcarrinho = () => {
    // exibir aside do carrinho no modo mobile
    seleciona('.menu-openner').addEventListener('click', () => {
        if (seleciona('aside').classList.contains('show')) {
            seleciona('aside').classList.remove('show');
         }else{
            seleciona('aside').classList.add('show');
         }
        seleciona('header').style.display = 'block'
    })
}

const atualizarCarrinho = () => {
    let cartTextGet = sessionStorage.getItem('cart_save')
    
    if (cartTextGet){
        cart = JSON.parse(cartTextGet)
        console.log(cart)
    }

    // exibir número de itens no carrinho
    seleciona('.header-title .menu-openner span').innerHTML = cart.length
    
    // mostrar ou nao o carrinho
    if(cart.length > 0) {
        // mostrar o carrinho
        //seleciona('aside').classList.add('show')

        // zerar meu .cart para nao fazer insercoes duplicadas
        seleciona('.cart').innerHTML = ''

        // crie as variaveis antes do for
        let subtotal = 0
        let desconto = 0
        let total    = 0
        let Itens = []
        // para preencher os itens do carrinho, calcular subtotal
        for(let i in cart) {
            //identificador para juntar a categoria e item
            //let identificador = produtos[categKey][modalKey].id
            // use o find para pegar o item por id
            Itens = produtos_pesquisa.find( (item) => item.id == cart[i].id )
            let ItemName = `${Itens.name}`                  
            // em cada item pegar o subtotal
            subtotal += cart[i].price * cart[i].qt
            //console.log(cart[i].price)

            // fazer o clone, exibir na telas e depois preencher as informacoes
            let cartItem = seleciona('.models .cart--item').cloneNode(true)
            seleciona('.cart').append(cartItem)
            
            //let ItemName = `${categ.name}`

            // preencher as informacoes
            cartItem.querySelector('.cart--item-nome').innerHTML = ItemName
            cartItem.querySelector('.cart--item--qt').innerHTML = cart[i].qt

            // selecionar botoes + e -
            cartItem.querySelector('.cart--item-qtmais').addEventListener('click', () => {
                console.log('Clicou no botão mais')
                // adicionar apenas a quantidade que esta neste contexto
                cart[i].qt++
                //Salva os dados do carrinho em sessionStorage.
                let cartTextSet = JSON.stringify(cart)
                sessionStorage.setItem('cart_save', cartTextSet)
                // atualizar a quantidade
                atualizarCarrinho()
            })

            cartItem.querySelector('.cart--item-qtmenos').addEventListener('click', () => {
                console.log('Clicou no botão menos')
                if(cart[i].qt > 1) {
                    // subtrair apenas a quantidade que esta neste contexto
                    cart[i].qt--
                    //Salva os dados do carrinho em sessionStorage.
                    let cartTextSet = JSON.stringify(cart)
                    sessionStorage.setItem('cart_save', cartTextSet)

                } else {
                    // remover se for zero
                    cart.splice(i, 1)
                }
                                
                (cart.length < 1) ? seleciona('.header').style.display = 'flex' : ''

                // atualizar a quantidade
                atualizarCarrinho()
            })

            seleciona('.cart').append(cartItem)

        } // fim do for

        // fora do for
        // calcule desconto 10% e total
        //desconto = subtotal * 0.1
        desconto = subtotal * 0
        total = subtotal - desconto
        
        // exibir na tela os resultados
        // selecionar o ultimo span do elemento
        seleciona('.subtotal span:last-child').innerHTML = formatoReal(subtotal)
        seleciona('.desconto span:last-child').innerHTML = formatoReal(desconto)
        seleciona('.total span:last-child').innerHTML    = formatoReal(total)

    } else {
        // ocultar o carrinho
        seleciona('aside').classList.remove('show')
        seleciona('aside').style.left = '100vw' 
    }
   
}

produtos.map((item, index) => {
    let categoria = ''
    if (index == 0)
        categoria = 'Xis'
    if (index == 1)
        categoria = 'Dogs'
    if (index == 2)
        categoria = 'Torradas'
    if (index == 3)
        categoria = 'Pasteis'
    if (index == 4)
        categoria = 'Porções'
    if (index == 5)
        categoria = 'Picados'
    if (index == 6)
        categoria = 'Pizzas'
               
    //clonar a area de modelo para as categorias
    let categ = document.querySelector('.models .categ').cloneNode(true)
    categ.id = categoria
    //definir o local onde vai inserir os modelos das categorias
    document.querySelector('.cardapio').append(categ)
    //preencher os modelos com os dados das categorias
    categ.querySelector('.categ .categ--name').innerHTML = categoria
    //clonar o menu da pagina
    //let menu_pagina = document.querySelector('.models .nav_pagina').cloneNode(true)
    //document.querySelector('.cardapio').append(menu_pagina)
    //mapear os itens de acordo com o indice das categoria
    item.map((xitem, xindex) => {
        //clonar a area de modelo para os itens
        let itens = document.querySelector('.models .itens').cloneNode(true)
        //definir o local onde vai inserir os modelos dos itens
        document.querySelector('.cardapio').append(itens)
        //preencher os modelos com os dados dos itens de acordo com a categoria
        preencherItens(itens, xitem, xindex)
        //Evento do click nos itens para identificar qual foi clicado.
        itens.querySelector('.itens a').addEventListener('click', (e) => {
            categKey = ''
            //Pegar o indice da categoria
            categKey = index
            //Pegar o indice do item clicado.
            let chave = pegarKey(e)    
            //abrir janela modal.
            abrirModal()
            //preencher os dados do modal.
            preecherModal(xitem)
            
        })
    })
    
    botoesFechar()
    
    
})

mudarQuantidade()
adicionarNocarrinho()
atualizarCarrinho()
abrirfecharcarrinho()
fecharCarrinho()