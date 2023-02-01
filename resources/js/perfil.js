window.addEventListener("load", function() {
    this.document.getElementById('btnEliminarCuenta').addEventListener('click', borrarCuenta);
} , true)

function borrarCuenta(event) {
    event.preventDefault();

    // Swal.fire({
    //     text: "Estas seguro de que quieres borrar tu cuenta?",
    //     icon: 'warning',
    //     showCancelButton: true,
    //     confirmButtonColor: '#3085d6',
    //     cancelButtonColor: '#d33',
    //     cancelButtonText: 'Cancelar',
    //     confirmButtonText: 'Si'
    // }).then((result) => {
    //     if (result.isConfirmed) {
    //         document.getElementById('formEliminarCuenta').submit();
    //     }
    // });

    Swal.fire({
        title: 'Estas seguro?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
        }
      })

}
