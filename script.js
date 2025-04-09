// Banner rotativo
let currentBanner = 0;
const banners = document.querySelectorAll(".baner-img");

setInterval(() => {
  banners[currentBanner].classList.remove("active");
  currentBanner = (currentBanner + 1) % banners.length;
  banners[currentBanner].classList.add("active");
}, 4000); // Un poco más lento

// Ofertas
const oficios = [
  { nombre: "Juan", edad: 28, zona: "Resistencia", oficio: "Gomero", precio: 3000, img: "gomero.jpg" },
  { nombre: "María", edad: 34, zona: "Fontana", oficio: "Gasista", precio: 2500, img: "gasista.jpg" },
  { nombre: "Pedro", edad: 30, zona: "Barranqueras", oficio: "Plomero", precio: 2800, img: "plomero.jpg" },
  { nombre: "Lucía", edad: 26, zona: "Resistencia", oficio: "Electricista", precio: 3100, img: "electricista.jpg" },
  { nombre: "Carlos", edad: 40, zona: "Vilelas", oficio: "Pintor", precio: 2600, img: "gomero.jpg" },
  { nombre: "Ana", edad: 32, zona: "Fontana", oficio: "Jardinera", precio: 2700, img: "gasista.jpg" }
];

const contenedor = document.getElementById("ofertas-container");

let duplicadas = [...oficios, ...oficios]; // duplicamos para un bucle suave

duplicadas.forEach(oferta => {
  const descuento = Math.floor(Math.random() * 21) + 10;
  contenedor.innerHTML += `
    <div class="card-container">
      <div class="card">
        <div class="precio">${oferta.precio} ARS</div>
        <div class="descuento">${descuento}% DCTO</div>
        <img src="imagenes/${oferta.img}" alt="${oferta.oficio}">
        <div class="info">
          <h2>${oferta.oficio}</h2>
          <p><strong>Nombre:</strong> ${oferta.nombre} (${oferta.edad})</p>
          <p><strong>Zona:</strong> ${oferta.zona}</p>
        </div>
      </div>
    </div>
  `;
});
