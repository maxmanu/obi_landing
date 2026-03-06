// ============================================================
//  Catálogo – filtros, ordenamiento y paginación (data demo)
//  Reemplazar PRODUCTOS con fetch a tu API/endpoint PHP
// ============================================================

const PRODUCTOS = [
  {
    id: 1,
    nombre: 'WHITE CALACATTA I',
    sku: '1601-020001',
    categoria: 'porcelanato',
    tipo: 'PISO PIEDRA',
    estilo: 'moderno',
    acabado: 'mate',
    superficie: 'LISA',
    transito: 'alto',
    medida: '60x60',
    piezas: 4,
    m2caja: 1.44,
    precio: 2490,
    precioM2: 1730,
    marca: 'CELIMA',
    nuevo: true,
    img: 'https://images.unsplash.com/photo-1615529328331-f8917597711f?w=600&q=80',
    imgs: [
      'https://images.unsplash.com/photo-1615529328331-f8917597711f?w=900&q=80',
      'https://images.unsplash.com/photo-1600607686527-6fb886090705?w=900&q=80',
      'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=900&q=80',
      'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=900&q=80',
    ],
  },
  {
    id: 2,
    nombre: 'GREY STONE II',
    sku: '1601-020002',
    categoria: 'pisos',
    tipo: 'PISO PIEDRA',
    estilo: 'industrial',
    acabado: 'mate',
    superficie: 'RUGOSA',
    transito: 'intensivo',
    medida: '60x120',
    piezas: 2,
    m2caja: 1.44,
    precio: 3190,
    precioM2: 2215,
    marca: 'PORCELANOSA',
    descuento: 20,
    img: 'https://images.unsplash.com/photo-1600210492493-0946911123ea?w=600&q=80',
    imgs: [
      'https://images.unsplash.com/photo-1600210492493-0946911123ea?w=900&q=80',
      'https://images.unsplash.com/photo-1581858726788-75bc0f6a952d?w=900&q=80',
      'https://images.unsplash.com/photo-1523413555-19e46e5a4d56?w=900&q=80',
    ],
  },
  {
    id: 3,
    nombre: 'MÁRMOL CLASIC III',
    sku: '1601-020003',
    categoria: 'revestimientos',
    tipo: 'REVESTIMIENTO',
    estilo: 'clasico',
    acabado: 'brillante',
    superficie: 'LISA',
    transito: 'bajo',
    medida: '30x60',
    piezas: 6,
    m2caja: 1.08,
    precio: 1890,
    precioM2: 1750,
    marca: 'GRAIMAN',
    nuevo: true,
    descuento: 15,
    img: 'https://images.unsplash.com/photo-1574359411659-15573a27fd0c?w=600&q=80',
    imgs: [
      'https://images.unsplash.com/photo-1574359411659-15573a27fd0c?w=900&q=80',
      'https://images.unsplash.com/photo-1617806118233-18e1de247200?w=900&q=80',
      'https://images.unsplash.com/photo-1596204976717-1a9ff47f74ef?w=900&q=80',
      'https://images.unsplash.com/photo-1502005229762-cf1b2da7c5d6?w=900&q=80',
      'https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=900&q=80',
    ],
  },
  {
    id: 4,
    nombre: 'TERRA RUSTIC IV',
    sku: '1601-020004',
    categoria: 'ceramica',
    tipo: 'PISO RÚSTICO',
    estilo: 'rustico',
    acabado: 'texturado',
    superficie: 'RUGOSA',
    transito: 'medio',
    medida: '45x45',
    piezas: 6,
    m2caja: 1.22,
    precio: 1290,
    precioM2: 1057,
    marca: 'CELIMA',
    img: 'assets/img/img-product.png',
  },
  {
    id: 5,
    nombre: 'ONYX DARK V',
    sku: '1601-020005',
    categoria: 'porcelanato',
    tipo: 'PISO PIEDRA',
    estilo: 'moderno',
    acabado: 'brillante',
    superficie: 'LISA',
    transito: 'alto',
    medida: '60x120',
    piezas: 2,
    m2caja: 1.44,
    precio: 4290,
    precioM2: 2979,
    marca: 'PORCELANOSA',
    descuento: 10,
    img: 'assets/img/img-product.png',
  },
  {
    id: 6,
    nombre: 'ARENA NATURAL VI',
    sku: '1601-020006',
    categoria: 'pisos',
    tipo: 'PISO ARENA',
    estilo: 'rustico',
    acabado: 'mate',
    superficie: 'RUGOSA',
    transito: 'medio',
    medida: '45x45',
    piezas: 6,
    m2caja: 1.22,
    precio: 1490,
    precioM2: 1221,
    marca: 'GRAIMAN',
    img: 'assets/img/img-product.png',
  },
  {
    id: 7,
    nombre: 'BETON LOFT VII',
    sku: '1601-020007',
    categoria: 'pisos',
    tipo: 'PISO CEMENTO',
    estilo: 'industrial',
    acabado: 'satinado',
    superficie: 'LISA',
    transito: 'alto',
    medida: '60x60',
    piezas: 4,
    m2caja: 1.44,
    precio: 2890,
    precioM2: 2007,
    marca: 'CELIMA',
    nuevo: true,
    img: 'assets/img/img-product.png',
  },
  {
    id: 8,
    nombre: 'SNOW WHITE VIII',
    sku: '1601-020008',
    categoria: 'revestimientos',
    tipo: 'REVESTIMIENTO',
    estilo: 'moderno',
    acabado: 'brillante',
    superficie: 'LISA',
    transito: 'bajo',
    medida: '20x20',
    piezas: 12,
    m2caja: 0.48,
    precio: 990,
    precioM2: 2063,
    marca: 'GRAIMAN',
    img: 'assets/img/img-product.png',
  },
  {
    id: 9,
    nombre: 'BAMBOO NATURE IX',
    sku: '1601-020009',
    categoria: 'ceramica',
    tipo: 'PISO MADERA',
    estilo: 'rustico',
    acabado: 'mate',
    superficie: 'TEXTURADA',
    transito: 'bajo',
    medida: '20x20',
    piezas: 12,
    m2caja: 0.48,
    precio: 890,
    precioM2: 1854,
    marca: 'CELIMA',
    img: 'assets/img/img-product.png',
  },
  {
    id: 10,
    nombre: 'SLATE GREY X',
    sku: '1601-020010',
    categoria: 'porcelanato',
    tipo: 'PISO PIEDRA',
    estilo: 'industrial',
    acabado: 'texturado',
    superficie: 'RUGOSA',
    transito: 'intensivo',
    medida: '60x60',
    piezas: 4,
    m2caja: 1.44,
    precio: 3490,
    precioM2: 2424,
    marca: 'PORCELANOSA',
    descuento: 25,
    img: 'assets/img/img-product.png',
  },
  {
    id: 11,
    nombre: 'IVORY CLASSIC XI',
    sku: '1601-020011',
    categoria: 'ceramica',
    tipo: 'PISO CLASICO',
    estilo: 'clasico',
    acabado: 'brillante',
    superficie: 'LISA',
    transito: 'medio',
    medida: '30x60',
    piezas: 6,
    m2caja: 1.08,
    precio: 1190,
    precioM2: 1102,
    marca: 'GRAIMAN',
    img: 'assets/img/img-product.png',
  },
  {
    id: 12,
    nombre: 'CARBON BLACK XII',
    sku: '1601-020012',
    categoria: 'pisos',
    tipo: 'PISO PIEDRA',
    estilo: 'industrial',
    acabado: 'mate',
    superficie: 'RUGOSA',
    transito: 'intensivo',
    medida: '60x120',
    piezas: 2,
    m2caja: 1.44,
    precio: 4990,
    precioM2: 3465,
    marca: 'PORCELANOSA',
    img: 'assets/img/img-product.png',
  },
  {
    id: 13,
    nombre: 'ROSA VENEZIA XIII',
    sku: '1601-020013',
    categoria: 'revestimientos',
    tipo: 'REVESTIMIENTO',
    estilo: 'clasico',
    acabado: 'satinado',
    superficie: 'LISA',
    transito: 'bajo',
    medida: '30x60',
    piezas: 6,
    m2caja: 1.08,
    precio: 2190,
    precioM2: 2028,
    marca: 'CELIMA',
    img: 'assets/img/img-product.png',
  },
  {
    id: 14,
    nombre: 'VERDE TOSCANA XIV',
    sku: '1601-020014',
    categoria: 'ceramica',
    tipo: 'PISO RÚSTICO',
    estilo: 'rustico',
    acabado: 'mate',
    superficie: 'RUGOSA',
    transito: 'medio',
    medida: '45x45',
    piezas: 6,
    m2caja: 1.22,
    precio: 1390,
    precioM2: 1139,
    marca: 'GRAIMAN',
    img: 'assets/img/img-product.png',
  },
  {
    id: 15,
    nombre: 'BEIGE TRAVERTINO XV',
    sku: '1601-020015',
    categoria: 'porcelanato',
    tipo: 'PISO PIEDRA',
    estilo: 'clasico',
    acabado: 'satinado',
    superficie: 'LISA',
    transito: 'alto',
    medida: '60x60',
    piezas: 4,
    m2caja: 1.44,
    precio: 2790,
    precioM2: 1938,
    marca: 'PORCELANOSA',
    img: 'assets/img/img-product.png',
  },
  {
    id: 16,
    nombre: 'BLUE ICE XVI',
    sku: '1601-020016',
    categoria: 'revestimientos',
    tipo: 'REVESTIMIENTO',
    estilo: 'moderno',
    acabado: 'brillante',
    superficie: 'LISA',
    transito: 'bajo',
    medida: '20x20',
    piezas: 12,
    m2caja: 0.48,
    precio: 1090,
    precioM2: 2271,
    marca: 'CELIMA',
    img: 'assets/img/img-product.png',
  },
  {
    id: 17,
    nombre: 'WOOD EFFECT XVII',
    sku: '1601-020017',
    categoria: 'pisos',
    tipo: 'PISO MADERA',
    estilo: 'rustico',
    acabado: 'texturado',
    superficie: 'TEXTURADA',
    transito: 'medio',
    medida: '30x60',
    piezas: 6,
    m2caja: 1.08,
    precio: 1690,
    precioM2: 1565,
    marca: 'GRAIMAN',
    img: 'assets/img/img-product.png',
  },
  {
    id: 18,
    nombre: 'LAVA STONE XVIII',
    sku: '1601-020018',
    categoria: 'porcelanato',
    tipo: 'PISO PIEDRA',
    estilo: 'industrial',
    acabado: 'mate',
    superficie: 'RUGOSA',
    transito: 'intensivo',
    medida: '60x120',
    piezas: 2,
    m2caja: 1.44,
    precio: 5490,
    precioM2: 3813,
    marca: 'PORCELANOSA',
    img: 'assets/img/img-product.png',
  },
  {
    id: 19,
    nombre: 'CREAM MARBLE XIX',
    sku: '1601-020019',
    categoria: 'revestimientos',
    tipo: 'REVESTIMIENTO',
    estilo: 'clasico',
    acabado: 'brillante',
    superficie: 'LISA',
    transito: 'bajo',
    medida: '30x60',
    piezas: 6,
    m2caja: 1.08,
    precio: 2390,
    precioM2: 2213,
    marca: 'GRAIMAN',
    img: 'assets/img/img-product.png',
  },
  {
    id: 20,
    nombre: 'DARK OAK XX',
    sku: '1601-020020',
    categoria: 'pisos',
    tipo: 'PISO MADERA',
    estilo: 'rustico',
    acabado: 'satinado',
    superficie: 'TEXTURADA',
    transito: 'alto',
    medida: '60x60',
    piezas: 4,
    m2caja: 1.44,
    precio: 2990,
    precioM2: 2076,
    marca: 'CELIMA',
    img: 'assets/img/img-product.png',
  },
  {
    id: 21,
    nombre: 'COPPER RUST XXI',
    sku: '1601-020021',
    categoria: 'ceramica',
    tipo: 'PISO RÚSTICO',
    estilo: 'industrial',
    acabado: 'texturado',
    superficie: 'RUGOSA',
    transito: 'medio',
    medida: '45x45',
    piezas: 6,
    m2caja: 1.22,
    precio: 1590,
    precioM2: 1303,
    marca: 'GRAIMAN',
    img: 'assets/img/img-product.png',
  },
  {
    id: 22,
    nombre: 'PEARL WHITE XXII',
    sku: '1601-020022',
    categoria: 'porcelanato',
    tipo: 'PISO PIEDRA',
    estilo: 'moderno',
    acabado: 'brillante',
    superficie: 'LISA',
    transito: 'alto',
    medida: '60x120',
    piezas: 2,
    m2caja: 1.44,
    precio: 4590,
    precioM2: 3188,
    marca: 'PORCELANOSA',
    img: 'assets/img/img-product.png',
  },
  {
    id: 23,
    nombre: 'CEMENT MIX XXIII',
    sku: '1601-020023',
    categoria: 'pisos',
    tipo: 'PISO CEMENTO',
    estilo: 'industrial',
    acabado: 'mate',
    superficie: 'LISA',
    transito: 'alto',
    medida: '60x60',
    piezas: 4,
    m2caja: 1.44,
    precio: 2590,
    precioM2: 1799,
    marca: 'CELIMA',
    img: 'assets/img/img-product.png',
  },
  {
    id: 24,
    nombre: 'CORAL AZUL XXIV',
    sku: '1601-020024',
    categoria: 'ceramica',
    tipo: 'PISO CLASICO',
    estilo: 'moderno',
    acabado: 'satinado',
    superficie: 'LISA',
    transito: 'bajo',
    medida: '20x20',
    piezas: 12,
    m2caja: 0.48,
    precio: 790,
    precioM2: 1646,
    marca: 'CELIMA',
    img: 'assets/img/img-product.png',
  },
];

const POR_PAGINA = 9;
let paginaActual = 1;

// ---- Lectura de filtros activos ----
function getFilters() {
  const filters = { categoria: [], estilo: [], acabado: [], transito: [], medida: [] };
  document.querySelectorAll('[data-filter]:checked').forEach((cb) => {
    const grupo = cb.dataset.filter;
    // Ignorar el radio "Todas" (value vacío)
    if (filters[grupo] && cb.value !== '') filters[grupo].push(cb.value);
  });
  const desde = parseFloat(document.getElementById('precio-desde').value) || 0;
  const hasta = parseFloat(document.getElementById('precio-hasta').value) || Infinity;
  return { ...filters, precioDesde: desde, precioHasta: hasta };
}

// ---- Filtrado ----
function applyFilters(productos) {
  const f = getFilters();
  return productos.filter((p) => {
    if (f.categoria.length && !f.categoria.includes(p.categoria)) return false;
    if (f.estilo.length && !f.estilo.includes(p.estilo)) return false;
    if (f.acabado.length && !f.acabado.includes(p.acabado)) return false;
    if (f.transito.length && !f.transito.includes(p.transito)) return false;
    if (f.medida.length && !f.medida.includes(p.medida)) return false;
    if (p.precio < f.precioDesde || p.precio > f.precioHasta) return false;
    return true;
  });
}

// ---- Ordenamiento ----
function applySort(productos) {
  const order = document.getElementById('ordenar-select').value;
  const copia = [...productos];
  if (order === 'precio-asc') copia.sort((a, b) => a.precio - b.precio);
  if (order === 'precio-desc') copia.sort((a, b) => b.precio - a.precio);
  if (order === 'nombre') copia.sort((a, b) => a.nombre.localeCompare(b.nombre, 'es'));
  return copia;
}

// ---- Helpers ----
function formatPrecio(n) {
  return '$ ' + n.toLocaleString('es-AR');
}

function capitalize(str) {
  return str.charAt(0).toUpperCase() + str.slice(1);
}

// ---- Generar enlace de WhatsApp ----
function whatsappUrl(p) {
  const medidaLabel = p.medida.replace('x', ' x ') + ' cm';
  const mensaje =
    `Hola, me interesa cotizar el siguiente producto:\n\n` +
    `📦 *${p.nombre}*\n` +
    `🔖 Cód: ${p.sku}\n` +
    `📐 ${p.categoria.charAt(0).toUpperCase() + p.categoria.slice(1)} ${p.tipo} – ${medidaLabel}\n` +
    `🏷️ Precio x caja: $${p.precio.toLocaleString('es-AR')}\n` +
    `📏 Caja: ${p.piezas} piezas – ${p.m2caja} m² | ${p.marca}\n` +
    `✨ Acabado ${p.acabado} | Superficie ${p.superficie} | Tránsito ${p.transito}\n\n` +
    `¿Podrían brindarme más información?`;
  return `https://wa.me/51958624548?text=${encodeURIComponent(mensaje)}`;
}

// ---- Render tarjeta ----
function renderTarjeta(p) {
  const medidaLabel = p.medida.replace('x', ' X ') + ' CM';
  const categoriaUp = p.categoria.toUpperCase();
  const imgs = JSON.stringify(p.imgs || [p.img]).replace(/"/g, '&quot;');
  return `
    <div class="col producto-item">
      <div class="producto-card">
        <span class="sku">COD ${p.sku}</span>
        <h6 class="producto-nombre">${p.nombre}</h6>
        <div class="producto-img-wrap lightbox-trigger" data-imgs="${imgs}" data-nombre="${p.nombre}" title="Ver fotos" style="cursor:zoom-in">
          ${p.nuevo || p.descuento ? `<div class="producto-badges">${p.nuevo ? '<span class="badge-producto badge-nuevo">NUEVO</span>' : ''}${p.descuento ? `<span class="badge-producto badge-descuento">${p.descuento}% DSCTO</span>` : ''}</div>` : ''}
          <img src="${p.img}" alt="${p.nombre}" class="img-fluid" loading="lazy" />
        </div>
        <div class="producto-info">
          <p class="producto-tipo"><strong>${categoriaUp} ${p.tipo}</strong> ${medidaLabel}</p>
          <p class="producto-caja">CAJA CON ${p.piezas} PIEZAS &ndash; ${p.m2caja} M2* | ${p.marca}</p>
          <p class="producto-precio-caja">*PRECIO X CAJA &ndash; $ ${p.precio.toLocaleString('es-AR')}</p>
          <p class="producto-atributos">ACABADO ${p.acabado.toUpperCase()} | SUPERFICIE ${p.superficie} | TRÁNSITO ${p.transito.toUpperCase()}</p>
          <div class="producto-btns">
            <a href="#" class="btn btn-precio-m2">$ ${p.precioM2.toLocaleString('es-AR')} x m²</a>
            <a href="${whatsappUrl(p)}" target="_blank" rel="noopener noreferrer" class="btn btn-cotizar">COTIZAR</a>
          </div>
        </div>
      </div>
    </div>`;
}

// ---- Render paginación ----
function renderPaginacion(total, pagina) {
  const totalPags = Math.max(1, Math.ceil(total / POR_PAGINA));
  document.getElementById('pag-info').textContent = `PÁGINA ${pagina} DE ${totalPags}`;
  document.getElementById('pag-prev').classList.toggle('disabled', pagina === 1);
  document.getElementById('pag-next').classList.toggle('disabled', pagina >= totalPags);
}

// ---- Render principal ----
function render() {
  const filtrados = applyFilters(PRODUCTOS);
  const ordenados = applySort(filtrados);
  const total = ordenados.length;
  const totalPags = Math.max(1, Math.ceil(total / POR_PAGINA));

  if (paginaActual > totalPags) paginaActual = totalPags;

  const inicio = (paginaActual - 1) * POR_PAGINA;
  const pagina = ordenados.slice(inicio, inicio + POR_PAGINA);
  const grilla = document.getElementById('grilla-productos');

  document.getElementById('resultados-count').textContent = total;

  if (pagina.length === 0) {
    grilla.innerHTML = `
      <div class="col-12 text-center py-5">
        <p class="text-muted">No se encontraron productos con los filtros seleccionados.</p>
        <button class="btn btn-outline-secondary btn-sm mt-2" id="btn-limpiar-vacio">Limpiar filtros</button>
      </div>`;
    document.getElementById('btn-limpiar-vacio')?.addEventListener('click', limpiarFiltros);
  } else {
    grilla.innerHTML = pagina.map(renderTarjeta).join('');
  }

  renderPaginacion(total, paginaActual);

  // Indicador visual de filtros activos
  actualizarBadgeFiltros(filtrados.length < PRODUCTOS.length);

  // Deshabilitar opciones sin resultados
  actualizarDisponibilidadFiltros();
}

// ---- Badge en botón limpiar ----
function actualizarBadgeFiltros(hayFiltros) {
  const btn = document.getElementById('btn-limpiar');
  btn.classList.toggle('activo', hayFiltros);
}

// ---- Deshabilitar opciones que darían 0 resultados ----
function actualizarDisponibilidadFiltros() {
  const f = getFilters();

  document.querySelectorAll('[data-filter]').forEach((cb) => {
    // Los radio buttons de categoría son navegación: nunca se deshabilitan
    if (cb.type === 'radio') return;

    // Los checkboxes ya marcados nunca se deshabilitan (el usuario debe poder desmarcarlos)
    if (cb.checked) {
      cb.disabled = false;
      cb.closest('.form-check')?.classList.remove('filtro-opcion-disabled');
      return;
    }

    const grupo = cb.dataset.filter;
    const valor = cb.value;

    // Simulamos activar SOLO esta opción en su grupo (OR dentro del grupo),
    // para verificar si añadiría productos nuevos dados los demás filtros activos.
    const filtrosSimulados = {
      ...f,
      [grupo]: [valor],
    };

    const resultados = PRODUCTOS.filter((p) => {
      if (filtrosSimulados.categoria.length && !filtrosSimulados.categoria.includes(p.categoria)) return false;
      if (filtrosSimulados.estilo.length && !filtrosSimulados.estilo.includes(p.estilo)) return false;
      if (filtrosSimulados.acabado.length && !filtrosSimulados.acabado.includes(p.acabado)) return false;
      if (filtrosSimulados.transito.length && !filtrosSimulados.transito.includes(p.transito)) return false;
      if (filtrosSimulados.medida.length && !filtrosSimulados.medida.includes(p.medida)) return false;
      if (p.precio < filtrosSimulados.precioDesde || p.precio > filtrosSimulados.precioHasta) return false;
      return true;
    });

    const sinResultados = resultados.length === 0;
    cb.disabled = sinResultados;
    cb.closest('.form-check')?.classList.toggle('filtro-opcion-disabled', sinResultados);
  });
}

// ---- Limpiar filtros ----
function limpiarFiltros() {
  document.querySelectorAll('[data-filter]').forEach((cb) => {
    if (cb.type === 'radio') {
      // Marcar el radio "Todas" (value="")
      cb.checked = cb.value === '';
    } else {
      cb.checked = false;
    }
  });
  document.getElementById('precio-desde').value = '';
  document.getElementById('precio-hasta').value = '';
  document.getElementById('ordenar-select').value = '';
  paginaActual = 1;
  render();
}

// ---- Scroll suave al catálogo ----
function scrollACatalogo() {
  const catalogo = document.querySelector('.catalogo');
  if (catalogo) window.scrollTo({ top: catalogo.offsetTop - 20, behavior: 'smooth' });
}

// ---- Init ----
document.addEventListener('DOMContentLoaded', () => {
  render();

  // Checkboxes de filtro
  document.querySelectorAll('[data-filter]').forEach((cb) => {
    cb.addEventListener('change', () => {
      paginaActual = 1;
      render();
    });
  });

  // Rango de precio (con debounce leve)
  let precioTimer;
  ['precio-desde', 'precio-hasta'].forEach((id) => {
    document.getElementById(id).addEventListener('input', () => {
      clearTimeout(precioTimer);
      precioTimer = setTimeout(() => {
        paginaActual = 1;
        render();
      }, 400);
    });
  });

  // Ordenar
  document.getElementById('ordenar-select').addEventListener('change', () => {
    paginaActual = 1;
    render();
  });

  // Paginación – anterior
  document.getElementById('pag-prev').addEventListener('click', (e) => {
    e.preventDefault();
    if (paginaActual > 1) {
      paginaActual--;
      render();
      scrollACatalogo();
    }
  });

  // Paginación – siguiente
  document.getElementById('pag-next').addEventListener('click', (e) => {
    e.preventDefault();
    const total = applyFilters(PRODUCTOS).length;
    const totalPags = Math.ceil(total / POR_PAGINA);
    if (paginaActual < totalPags) {
      paginaActual++;
      render();
      scrollACatalogo();
    }
  });

  // Limpiar filtros
  document.getElementById('btn-limpiar').addEventListener('click', limpiarFiltros);

  // ---- Lightbox ----
  const lightbox = document.getElementById('lightbox');
  const backdrop = document.getElementById('lightbox-backdrop');
  const lbImg = document.getElementById('lightbox-img');
  const lbThumbs = document.getElementById('lightbox-thumbs');
  const lbCounter = document.getElementById('lightbox-counter');
  const lbCerrar = document.getElementById('lightbox-cerrar');
  const lbPrev = document.getElementById('lightbox-prev');
  const lbNext = document.getElementById('lightbox-next');

  let lbImgs = [];
  let lbIndex = 0;

  function lbMostrar(index) {
    lbIndex = (index + lbImgs.length) % lbImgs.length;
    lbImg.src = lbImgs[lbIndex];
    lbCounter.textContent = lbImgs.length > 1 ? `${lbIndex + 1} / ${lbImgs.length}` : '';
    lbThumbs.querySelectorAll('.lb-thumb').forEach((t, i) => t.classList.toggle('activa', i === lbIndex));
    lbPrev.style.display = lbImgs.length > 1 ? '' : 'none';
    lbNext.style.display = lbImgs.length > 1 ? '' : 'none';
  }

  function lbAbrir(imgs, index = 0) {
    lbImgs = imgs;
    // Miniaturas
    lbThumbs.innerHTML =
      imgs.length > 1
        ? imgs
            .map(
              (src, i) =>
                `<img src="${src}" class="lb-thumb${i === index ? ' activa' : ''}" data-index="${i}" alt="" />`,
            )
            .join('')
        : '';
    lbThumbs
      .querySelectorAll('.lb-thumb')
      .forEach((t) => t.addEventListener('click', () => lbMostrar(+t.dataset.index)));
    lbMostrar(index);
    lightbox.classList.add('abierto');
    backdrop.classList.add('abierto');
    document.body.style.overflow = 'hidden';
    lbCerrar.focus();
  }

  function lbCerrarFn() {
    lightbox.classList.remove('abierto');
    backdrop.classList.remove('abierto');
    document.body.style.overflow = '';
    lbImg.src = '';
  }

  // Abrir al click en imagen de tarjeta (delegado en grilla)
  document.getElementById('grilla-productos').addEventListener('click', (e) => {
    const trigger = e.target.closest('.lightbox-trigger');
    if (!trigger) return;
    const imgs = JSON.parse(trigger.dataset.imgs);
    lbAbrir(imgs, 0);
  });

  lbCerrar.addEventListener('click', lbCerrarFn);
  // Cerrar al hacer click fuera del contenido (en la zona oscura del lightbox)
  lightbox.addEventListener('click', (e) => {
    if (
      !e.target.closest('.lightbox-contenido') &&
      e.target !== lbPrev &&
      e.target !== lbNext &&
      e.target !== lbCerrar
    ) {
      lbCerrarFn();
    }
  });
  lbPrev.addEventListener('click', () => lbMostrar(lbIndex - 1));
  lbNext.addEventListener('click', () => lbMostrar(lbIndex + 1));

  // Teclado
  document.addEventListener('keydown', (e) => {
    if (!lightbox.classList.contains('abierto')) return;
    if (e.key === 'Escape') lbCerrarFn();
    if (e.key === 'ArrowLeft') lbMostrar(lbIndex - 1);
    if (e.key === 'ArrowRight') lbMostrar(lbIndex + 1);
  });

  // Swipe táctil
  let touchX = 0;
  lightbox.addEventListener(
    'touchstart',
    (e) => {
      touchX = e.touches[0].clientX;
    },
    { passive: true },
  );
  lightbox.addEventListener('touchend', (e) => {
    const diff = touchX - e.changedTouches[0].clientX;
    if (Math.abs(diff) > 50) lbMostrar(lbIndex + (diff > 0 ? 1 : -1));
  });
});
