import './bootstrap';

import swal from 'sweetalert';
import Alpine from 'alpinejs';

window.confirmDeletion = function (e) {
    e.preventDefault();
    let form = e.target.form;
    swal({
        title: "Czy na pewno?",
        text: "Usunięcia nie da się cofnąć",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then(willDelete => {
        if (willDelete) {
          form.submit();
        }
      });
}
window.Alpine = Alpine;

Alpine.start();
