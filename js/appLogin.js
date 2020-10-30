const app = new Vue({
  el: "#app",
  data: {
    usuario: "",
    pass: "",
    passC: "",
    respuesta: "",
    correo: "",
    menu: false,
  },
  methods: {
    registro() {
      if (this.usuario === "" || this.pass === "" || this.passC === "") {
        Swal.fire("¡Error!", "Todos los campos son obligatorios", "error");
      } else {
        if (this.pass === this.passC) {
          const form = document.getElementById("formRegistro");
          axios
            .post("../api/loginRegistro/registro.php", new FormData(form))
            .then((respuesta) => {
              this.respuesta = respuesta.data;
              this.direccionamiento();
            });
        } else {
          Swal.fire("¡Error!", "La contraseña debe coincidir", "error");
        }
      }
    },

    direccionamiento() {
      if (this.respuesta === "success") {
        Swal.fire({
          title: "El registro se ha realizado con exito",
          showCancelButton: true,
          confirmButtonText: `Aceptar`,
        }).then((result) => {
          if (result.isConfirmed) {
            location.href = "index.php";
          }
        });
      } else {
        Swal.fire("¡Error!", "No se puedo realizar el registro", "error");
      }
    },

    validarCorreo() {
      if (this.validEmail(this.correo)) {
        const formData = new FormData();
        formData.append("correo", this.correo);
        axios
          .post("../api/loginRegistro/validarCorreo.php", formData)
          .then((respuesta) => {
            this.respuesta = respuesta.data;
            if (this.respuesta === "success") {
              app.$refs.btnDisabled.removeAttribute("disabled");
              Swal.fire("¡Error!", "El correo electronico ya existe", "error");
            }
          });
      } 
    },
    validEmail(email) {
      var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
    },

    login() {
      const form = document.getElementById("inicioSesion");
      axios
        .post("../api/loginRegistro/login.php", new FormData(form))
        .then((respuesta) => {
          this.respuesta = respuesta.data;
          if (this.respuesta === "success") {
            location.href = ".././principal/";
          } else {
            Swal.fire(
              "¡Error!",
              "Es usuario y/o contraseña son incorrectos",
              "error"
            );
          }
        });
    },
  },
});
