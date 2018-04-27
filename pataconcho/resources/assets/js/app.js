// Crear producto
var app = new Vue({
  el: '#app',
  created:function(){
  	this.getProductos();
  },
  data:{
  	productos:[],
  	newProducto:{},
    editProducto:{
      id:'',
      nombre:'',
      descripcion:'',
      precio:''
    }
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
 		this.editProducto.id = producto.id;
    this.editProducto.nombre = producto.nombre;
    this.editProducto.descripcion = producto.descripcion;
    this.editProducto.precio = producto.precio;

    // console.log(producto.id)
 	},
 	actualizarProducto:function(id){
 		let url = 'producto/'+id;

    axios.put(url, this.editProducto).then(resp => {
      this.getProductos();
      this.editProducto = {
        id:'',
      nombre:'',
      descripcion:'',
      precio:''
      }
      $('#editar').modal('hide');
    }).catch(error => {
      console.log(error.response)
      console.log(this.newProducto)
    })
 		
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

