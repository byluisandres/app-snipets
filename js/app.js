const app = new Vue({
  el: "#app",
  data: {
    menu: true,
    respuesta: "",
    listar: [],
    buscar: "",
    itemID: "",
    formEditar: [],
    userPost: "",
    imgUser:"",
  },
  created() {
    this.traerDatos();
    this.getId();
    this.getUser();
  },
  methods: {
    traerDatos() {
      axios
        .get("http://localhost/vue-php-app/app-snipets/api/crud/getPost.php")
        .then((respuesta) => {
          this.listar = respuesta.data;
        });
    },
    alta() {
      const form = document.getElementById("altaPost");
      axios
        .post("../api/crud/altaPost.php", new FormData(form))
        .then((respuesta) => {
          this.respuesta = respuesta.data;

          if (this.respuesta === "success") {
            alert("dado de alta");
            form.reset();
          } else {
            alert("no se ha podio insertar");
          }
        });
    },
    getId() {
      const uri = window.location.href.split("?");
      if (uri.length == 2) {
        let vars = uri[1].split("&");
        let getVars = {};
        let tmp = "";
        vars.forEach((v) => {
          tmp = v.split("=");
          // if (tmp == 2) {
          //   getVars[tmp[0]] = tmp[1];
          // }
        });
        this.itemID = tmp[1];
        axios
          .get(
            "http://localhost/vue-php-app/app-snipets/api/crud/getId.php?id=" +
              this.itemID
          )
          .then((respuesta) => {
            this.formEditar = respuesta.data;
          });
      }
    },
    editar() {
      const form = document.getElementById("editarPost");
      axios
        .post("../api/crud/editarPost.php", new FormData(form))
        .then((respuesta) => {
          this.respuesta = respuesta.data;
          console.log(this.respuesta);
          if (this.respuesta === "success") {
            location.href = "index.php";
          } else {
            alert("no se ha podio editar");
          }
        });
    },
    eliminar(id) {
      Swal.fire({
        title: "¿Seguro que lo quieres eliminar?",
        showDenyButton: true,
        confirmButtonText: `Si`,
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire("Eliminado", "", "success");
          axios
            .get(
              "http://localhost/vue-php-app/app-snipets/api/crud/eliminar.php?id=" +
                id
            )
            .then((respuesta) => {
              if (respuesta.data == "success") {
                this.traerDatos();
              }
            });
        }
      });
    },
    getUser(){
      axios
          .get(
            "http://localhost/vue-php-app/app-snipets/api/crud/getUser.php")
          .then((respuesta) => {
            this.userPost = respuesta.data['user'];
            this.imgUser=respuesta.data['foto'];
          });
    }
  },
  computed: {
    datosFiltrados() {
      return this.listar.filter((filtro) => {
        return filtro.titulo.toUpperCase().match(this.buscar.toUpperCase());
      });
    },
  },
});

// var quill = new Quill("#editor", {
//   theme: "snow",
// });
