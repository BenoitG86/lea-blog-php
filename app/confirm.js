const elements = document.querySelectorAll(`.confirmDelete`);
console.log(elements);

elements.forEach(element => {
      element.addEventListener('click', function (event) {
            let confirmation = confirm(`Êtes vous sûr.e de vouloir supprimer ?`);
            if (confirmation === false) {
                  event.preventDefault();
            }
      }
      );

});