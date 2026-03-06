<?php require_once 'templates/header.php'; ?>

<section class="hero">
  <div class="hero-overlay"></div>
  <div class="container hero-content">
    <div class="row">
      <div class="col-12 col-md-6">
        <span class="decor-text btn-lg">CATÁLOGO</span>
        <h1 class="hero-title mt-3">REVESTIMIENTO CERÁMICOS</h1>
        <p class="hero-description">Elegancia atemporal plasmada en piedra. Explore nuestra cuidada selección de acabados de mármol premium.</p>
      </div>
    </div>
  </div>
</section>

<!-- Catálogo de productos -->
<section class="catalogo py-5">
  <div class="container">
    <div class="row g-4">

      <!-- Botón filtros móvil (fixed) -->
      <button class="btn-filtros-mobile d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#filtrosOffcanvas">
        <i class="bi bi-sliders"></i> Filtros
      </button>

      <!-- Sidebar de filtros -->
      <aside class="col-12 col-lg-3">
        <div class="offcanvas-lg offcanvas-start" id="filtrosOffcanvas" tabindex="-1">
          <div class="offcanvas-header d-lg-none">
            <h5 class="offcanvas-title fw-bold" style="color: var(--primary-color)">Filtrar por</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#filtrosOffcanvas"></button>
          </div>
          <div class="offcanvas-body p-0">
            <div class="filtros-panel">
              <h5 class="filtros-titulo d-none d-lg-block">Filtrar por</h5>
              <button id="btn-limpiar" class="btn-limpiar-filtros">Limpiar filtros</button>

              <!-- Categorías -->
              <div class="filtro-grupo">
                <button class="filtro-toggle" data-bs-toggle="collapse" data-bs-target="#filtro-categorias">Categorías</button>
                <div class="collapse show" id="filtro-categorias">
                  <div class="filtro-body">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="filtro-categoria" id="cat-todas" data-filter="categoria" value="" checked />
                      <label class="form-check-label" for="cat-todas">Todas</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="filtro-categoria" id="cat-pisos" data-filter="categoria" value="pisos" />
                      <label class="form-check-label" for="cat-pisos">Pisos</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="filtro-categoria" id="cat-revestimientos" data-filter="categoria" value="revestimientos" />
                      <label class="form-check-label" for="cat-revestimientos">Revestimientos</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="filtro-categoria" id="cat-porcelanato" data-filter="categoria" value="porcelanato" />
                      <label class="form-check-label" for="cat-porcelanato">Porcelanato</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="filtro-categoria" id="cat-ceramica" data-filter="categoria" value="ceramica" />
                      <label class="form-check-label" for="cat-ceramica">Cerámica</label>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Precio -->
              <div class="filtro-grupo">
                <button class="filtro-toggle" data-bs-toggle="collapse" data-bs-target="#filtro-precio">Precio</button>
                <div class="collapse show" id="filtro-precio">
                  <div class="filtro-body">
                    <div class="precio-rango">
                      <div class="precio-input-grupo">
                        <label for="precio-desde">Desde</label>
                        <input type="number" id="precio-desde" class="form-control precio-input" placeholder="$ 0" min="0" step="100" />
                      </div>
                      <span class="precio-separador">—</span>
                      <div class="precio-input-grupo">
                        <label for="precio-hasta">Hasta</label>
                        <input type="number" id="precio-hasta" class="form-control precio-input" placeholder="$ 99999" min="0" step="100" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Estilo -->
              <div class="filtro-grupo">
                <button class="filtro-toggle" data-bs-toggle="collapse" data-bs-target="#filtro-estilo">Estilo</button>
                <div class="collapse show" id="filtro-estilo">
                  <div class="filtro-body">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="est-moderno" data-filter="estilo" value="moderno" />
                      <label class="form-check-label" for="est-moderno">Moderno</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="est-rustico" data-filter="estilo" value="rustico" />
                      <label class="form-check-label" for="est-rustico">Rústico</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="est-clasico" data-filter="estilo" value="clasico" />
                      <label class="form-check-label" for="est-clasico">Clásico</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="est-industrial" data-filter="estilo" value="industrial" />
                      <label class="form-check-label" for="est-industrial">Industrial</label>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Acabado -->
              <div class="filtro-grupo">
                <button class="filtro-toggle collapsed" data-bs-toggle="collapse" data-bs-target="#filtro-acabado">Acabado</button>
                <div class="collapse" id="filtro-acabado">
                  <div class="filtro-body">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="acab-mate" data-filter="acabado" value="mate" />
                      <label class="form-check-label" for="acab-mate">Mate</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="acab-brillante" data-filter="acabado" value="brillante" />
                      <label class="form-check-label" for="acab-brillante">Brillante</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="acab-satinado" data-filter="acabado" value="satinado" />
                      <label class="form-check-label" for="acab-satinado">Satinado</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="acab-texturado" data-filter="acabado" value="texturado" />
                      <label class="form-check-label" for="acab-texturado">Texturado</label>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Tránsito -->
              <div class="filtro-grupo">
                <button class="filtro-toggle collapsed" data-bs-toggle="collapse" data-bs-target="#filtro-transito">Tránsito</button>
                <div class="collapse" id="filtro-transito">
                  <div class="filtro-body">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="trans-bajo" data-filter="transito" value="bajo" />
                      <label class="form-check-label" for="trans-bajo">Bajo</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="trans-medio" data-filter="transito" value="medio" />
                      <label class="form-check-label" for="trans-medio">Medio</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="trans-alto" data-filter="transito" value="alto" />
                      <label class="form-check-label" for="trans-alto">Alto</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="trans-intensivo" data-filter="transito" value="intensivo" />
                      <label class="form-check-label" for="trans-intensivo">Intensivo</label>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Medidas -->
              <div class="filtro-grupo">
                <button class="filtro-toggle collapsed" data-bs-toggle="collapse" data-bs-target="#filtro-medidas">Medidas</button>
                <div class="collapse" id="filtro-medidas">
                  <div class="filtro-body">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="med-20x20" data-filter="medida" value="20x20" />
                      <label class="form-check-label" for="med-20x20">20 × 20 cm</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="med-30x60" data-filter="medida" value="30x60" />
                      <label class="form-check-label" for="med-30x60">30 × 60 cm</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="med-45x45" data-filter="medida" value="45x45" />
                      <label class="form-check-label" for="med-45x45">45 × 45 cm</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="med-60x60" data-filter="medida" value="60x60" />
                      <label class="form-check-label" for="med-60x60">60 × 60 cm</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="med-60x120" data-filter="medida" value="60x120" />
                      <label class="form-check-label" for="med-60x120">60 × 120 cm</label>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </aside>

      <!-- Grilla de productos -->
      <div class="col-12 col-lg-9">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <p class="resultados-texto mb-0">Mostrando <strong id="resultados-count">0</strong> productos</p>
          <select id="ordenar-select" class="form-select ordenar-select">
            <option value="">Ordenar por</option>
            <option value="precio-asc">Menor precio</option>
            <option value="precio-desc">Mayor precio</option>
            <option value="nombre">Nombre A–Z</option>
          </select>
        </div>

        <div id="grilla-productos" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
          <!-- Renderizado por JS -->
        </div>

        <div class="row mt-5">
          <div class="col-12 d-flex justify-content-center mt-4">
            <nav>
              <ul class="pagination align-items-center">
                <li id="pag-prev" class="page-item"><a class="page-link" href="#"><i class="bi bi-arrow-left"></i></a></li>
                <span id="pag-info" class="mx-4">PÁGINA 1 DE 1</span>
                <li id="pag-next" class="page-item"><a class="page-link" href="#"><i class="bi bi-arrow-right"></i></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php require_once 'templates/footer.php'; ?>