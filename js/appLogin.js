const app = new Vue({
  el: "#app",
  data: {
    pass: "",
    passC: "",
    respuesta: "",
  },
  methods: {
    registro() {
      if (this.pass === this.passC) {
        const form = document.getElementById("formRegistro");
        axios
          .post("../api/loginRegistro/registro.php", new FormData(form))
          .then((respuesta) => {
            this.respuesta = respuesta.data;
            this.direccionamiento();
          });
      } else {
        alert("Error en la contraseña");
      }
    },

    direccionamiento() {
      if (this.respuesta === "success") {
        location.href = "index.php";
      } else {
          alert("No se puedo registrar");
      }
    },
  },
});
