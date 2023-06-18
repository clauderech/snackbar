//const enviar = document.querySelector('.cart--finalizar')
let cart_save = sessionStorage.getItem("cart_save");

//console.log('itens do carrinho: ' + cart_save)

//document.querySelector('#pedido').value = cart_save

//let formPedidos = document.getElementById("form_pedidos")

$(document).ready(() => {
	$(".cart--finalizar").click(() => {
		$.ajax({
			url:"registra_pedido.php",
			type: "POST",
			data:{
				pedido: cart_save				
			},
			success: (resultado)=>{
				//var alerta = "<div style='top:300px'>"
				alert(resultado)
				//alerta += "</div>"
				//sessionStorage.clear()
				//window.location.href = "index.php"
				//window.location.reload(true);
			}
		});
			
	});
	
});



/*function submitForm() {
	let formPedidos = document.getElementById("form_pedidos")
	formPedidos.submit();
}

/*enviar.addEventListener("click", function(e) {
	//e.preventDefault();
	//Pega os dados do formulario.
    //const pedido = document.querySelector('#pedido').value

	//let formPedidos = document.getElementById("form_pedidos")
	//formPedidos.submit();
	/*if(formPedidos){
		formClient.addEventListener("submit", async (e) => {
			//para não recarregar a página
			//e.preventDefault();
			//recebe os dados do formulario "formClient"
			
			const dadosForm = new FormData(formPedidos);
			
			const dados = await fetch("registra_pedido.php",{
				method: "POST",
				body: dadosForm
			})

			const resposta_pedido = await dadosForm.json();
			console.log(resposta_pedido);
		})
	}
})*/