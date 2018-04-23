// Crear producto
var app = new Vue({
  el: '#app',
  created:function(){
  	this.getProductos();
  },
  data:{
  	productos:[],
  	productoModal:[],
  	newProducto:{}
  },
 methods:{
 	getProductos:function() {
 		let url = 'producto'
 		axios.get(url).then(resp => {
 			this.productos = resp.data;
 		})
 	},
 	eliminarProducto:function(producto){
 		// alert(producto.nombre)
 		let url = 'producto/'+producto.id;
 		axios.delete(url).then(resp=>{
 			this.getProductos();
 			console.log('Producto eliminado')
 		})
 	},
 	llenarModals:function(producto){
 		this.productoModal = producto;
 	},
 	actualizarProducto:function(producto){
 		let url = 'producto/'+producto.id;
 		console.log(producto)
 	},
 	crearProducto:function(){
 		let url = 'producto';
 		axios.post(url,
 			// Parámetros
 			this.newProducto
 		).then(resp => {
 			this.getProductos()
 			// this.newProducto = ''
 			this.newProducto = {
			    nombre: "",
			    descripcion: "",
			    precio: ""
			  }

 			$('#crear').modal('hide');
 			console.log('Se creo el produnto')
 		}).catch(error => {
 			console.log(error.response)
 			console.log(this.newProducto)
 		})
 	}
 }

  
})

