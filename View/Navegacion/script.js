function toggleNavbar() {
    const navbarLinks = document.querySelector('.navbar-links');
    navbarLinks.classList.toggle('active');
  
    // Obtén todos los enlaces y agrega o quita la clase "hidden" para mostrar u ocultar los enlaces
    const links = document.querySelectorAll('.navbar-links a');
    links.forEach(link => link.classList.toggle('hidden'));
  
    // Añade lógica para cambiar el estilo de la barra de navegación
    const navbar = document.querySelector('.navbar');
    navbar.classList.toggle('expanded');
  }