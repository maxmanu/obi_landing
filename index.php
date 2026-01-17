<!DOCTYPE html>

<html class="light" lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <link rel="icon" type="image/png" href="assets/img/obi-ico.png" />
  <title>Obi Consulting | Transformación Digital y Estrategia</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&amp;display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "primary": "#996DF5",
            "secondary": "#1CA3FD",
            "tertiary": "#67D644",
            "tertiary-dark": "#39AF13",
            "background-light": "#f6f6f8",
            "background-dark": "#101622",
            "background-obi-dark": "#272626",
            "background-obi-sky": "#89D0FF",
            "background-obi-green": "#A6FF8B"
          },
          fontFamily: {
            "display": ["Manrope", "sans-serif"]
          },
          borderRadius: {
            "DEFAULT": "0.25rem",
            "lg": "0.5rem",
            "xl": "0.75rem",
            "full": "9999px"
          },
        },
      },
    }
  </script>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="bg-white dark:bg-background-dark text-[#111318] dark:text-white transition-colors duration-300">
  <!-- Top Navigation Bar -->
  <header class="sticky top-0 z-50 w-full bg-white/80 dark:bg-background-dark/80 backdrop-blur-md border-b border-[#f0f2f4] dark:border-gray-800">
    <div class="container mx-auto px-6 lg:px-10 h-20 flex items-center justify-between">
      <div class="flex items-center gap-3">
        <img class="w-64 max-w-full h-auto" src="assets/img/logo_obi.svg" alt="logo">
      </div>
      <nav class="hidden md:flex items-center gap-10">
        <a class="text-lg font-semibold hover:text-primary transition-colors" href="#hero-section">Nosotros</a>
        <a class="text-lg font-semibold hover:text-primary transition-colors" href="#services-section">Servicios</a>
        <a class="text-lg font-semibold hover:text-primary transition-colors" href="#clients-section">Clientes</a>
        <a class="text-lg font-semibold hover:text-primary transition-colors" href="https://wa.me/51958624548?text=Hola%20estoy%20interesado%20en%20sus%20servicios" target="_blank">Contáctanos</a>
      </nav>
      <button id="menuToggle" class="md:hidden p-2">
        <span class="material-symbols-outlined">menu</span>
      </button>
    </div>
    <!-- Mobile Menu -->
    <nav id="mobileMenu" class="md:hidden hidden bg-white dark:bg-background-dark border-t border-[#f0f2f4] dark:border-gray-800">
      <div class="container mx-auto px-6 py-4 flex flex-col gap-4">
        <a class="text-lg font-semibold hover:text-primary transition-colors py-2" href="#hero-section">Nosotros</a>
        <a class="text-lg font-semibold hover:text-primary transition-colors py-2" href="#services-section">Servicios</a>
        <a class="text-lg font-semibold hover:text-primary transition-colors py-2" href="#clients-section">Clientes</a>
        <a class="text-lg font-semibold hover:text-primary transition-colors py-2" href="https://wa.me/51958624548?text=Hola%20estoy%20interesado%20en%20sus%20servicios" target="_blank">Contáctanos</a>
      </div>
    </nav>
  </header>
  <main class="flex flex-col">
    <!-- Hero Section -->
    <section id="hero-section" class="relative overflow-hidden pt-16 pb-24 lg:pt-24 lg:pb-40">
      <div class="container mx-auto px-6 lg:px-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
          <div class="flex flex-col gap-8 z-10">
            <img class="lg:max-w-xl max-w-full h-auto" src="assets/img/card_text_1.svg" alt="">
            <p class="text-lg lg:text-xl dark:text-gray-400 leading-relaxed lg:max-w-xl text-justify">
              Somos una consultora que acompaña a empresas y emprendedores <b>en cada etapa de su evolución tecnológica.</b> Creemos que una idea no está terminada hasta que genera un cambio real en su negocio.
            </p>
            <p class="text-lg lg:text-xl dark:text-gray-400 leading-relaxed lg:max-w-xl text-justify">
              Nos integramos a su organización para entender sus desafíos desde adentro y <b>co-crear una hoja de ruta digital estratégica.</b> Nuestro compromiso es asegurar que cada inversión en tecnología esté validada y <b>genere un impacto real en su crecimiento.</b>
            </p>
            <p class="text-lg lg:text-xl dark:text-gray-400 leading-relaxed lg:max-w-xl text-justify">Nuestro compromiso es asegurar que cada inversión en tecnología esté validada y genere un impacto real en su crecimiento.</p>
            <div class="flex flex-wrap justify-center lg:justify-start gap-4">
              <a href="https://wa.me/51958624548?text=Hola%20estoy%20interesado%20en%20sus%20servicios" target="_blank" class="h-14 px-8 bg-primary text-white rounded-xl font-bold text-lg hover:shadow-xl hover:shadow-primary/30 transition-all flex items-center gap-2">
                Contáctanos aquí
                <span class="material-symbols-outlined">arrow_forward</span>
              </a>
            </div>
          </div>
          <div class="relative">
            <img class="max-w-full h-auto mx-auto" src="assets/img/banner_hero.png" alt="banner-hero">
          </div>
        </div>
      </div>
    </section>
    <!-- Service Cards Grid -->
    <section id="services-section" class="pb-24 bg-background-obi-sky/40">
      <div class="pt-20 pb-10 container mx-auto px-6 lg:px-10">
        <!-- <h3 class="text-4xl font-extrabold text-[#111318] dark:text-white">SERVICIOS</h3> -->
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/80 border border-secondary/20 text-secondary text-lg font-bold uppercase tracking-widest w-fit">
          <span class="material-symbols-outlined text-lg">verified</span>
          SERVICIOS
        </div>
      </div>
      <div class="container mx-auto px-6 lg:px-10">
        <div class="grid md:grid-cols-2 gap-14">
          <div class="group">
            <h4 class="text-3xl font-bold mb-[35px] underline">Consultoría Estratégica <br /> e Innovación</h4>
            <div class="grid sm:grid-cols-2 gap-2">
              <img class="max-w-full h-auto mx-auto" src="assets/img/service_img_1.png" alt="">
              <img class="max-w-full h-auto mx-auto" src="assets/img/service_img_2.png" alt="">
            </div>
          </div>
          <div class="group">
            <p class="text-lg dark:text-gray-400 leading-relaxed mb-6 text-justify max-w-[650px]">
              Antes de construir, validamos. Analizamos su empresa para asegurar que la tecnología responda a sus objetivos reales y no a simples suposiciones. Este servicio le permite identificar dónde la tecnología generará mayor valor, probando soluciones mediante prototipos antes de realizar la inversión final.
            </p>
            <img class="max-w-full h-auto" src="assets/img/card_text_2.svg" alt="">
          </div>
        </div>
      </div>
    </section>
    <!-- Recent Case Studies -->
    <section id="solutions-section" class="py-24 dark:bg-gray-900/50">
      <div class="container mx-auto px-6 lg:px-10">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
          <div>
            <h3 class="text-4xl font-extrabold text-[#111318] dark:text-white underline">Soluciones <br /> Digitales</h3>
          </div>
        </div>
        <div class="flex flex-col lg:flex-row items-start gap-10">
          <ul class="vertical-line-list space-y-4 lg:space-y-8 w-full lg:w-auto lg:min-w-[230px] lg:inline-block py-3 mt-0 lg:mt-6">
            <li id="homeTab"
              class="tab flex items-center text-sm text-slate-900 font-semibold bg-tertiary py-2 px-4 cursor-pointer transition-all">
              <img class="max-w-[60px] h-auto mr-3 bg-icon bg-icon-active" src="assets/img/desarrollo_icon.svg" alt="">
              Desarrollo <br class="hidden lg:inline" /> Personalizado
            </li>
            <li id="settingTab"
              class="tab flex items-center text-sm text-slate-900 font-medium py-2 px-4 cursor-pointer transition-all">
              <img class="max-w-[60px] h-auto mr-3 bg-icon" src="assets/img/ecommerce_icon.svg" alt="">
              Sitios Web e <br class="hidden lg:inline" />
              E-commerce
            </li>
            <li id="profileTab"
              class="tab flex items-center text-sm text-slate-900 font-medium py-2 px-4 cursor-pointer transition-all">
              <img class="max-w-[60px] h-auto mr-3 bg-icon" src="assets/img/soporte_icon.svg" alt="">
              Acompañamiento <br class="hidden lg:inline" />
              y Soporte
            </li>
            <li id="inboxTab"
              class="tab flex items-center text-sm text-slate-900 font-medium py-2 px-4 cursor-pointer transition-all">
              <img class="max-w-[60px] h-auto mr-3 bg-icon" src="assets/img/marketing_icon.svg" alt="">
              Marketing Digital
            </li>
          </ul>

          <div class="flex-1 w-full">
            <div id="homeContent" class="tab-content block mt-4">
              <img class="max-w-[full] h-auto mx-auto" src="assets/img/desarrollo_banner_image.png" alt="banner-hero">
              <p class="text-lg mt-4 leading-relaxed max-w-[1030px] pe-0 lg:pe-[110px] mx-auto text-justify">
                Creamos herramientas de software diseñadas exclusivamente para las reglas y procesos únicos de su empresa. Si su negocio tiene una forma especial de trabajar, nosotros nos encargamos.
              </p>
            </div>

            <div id="settingContent" class="tab-content hidden mt-4">
              <img class="max-w-[full] h-auto mx-auto" src="assets/img/ecommerce_banner_image.png" alt="banner-hero">
              <p class="text-lg mt-4 leading-relaxed max-w-[1030px] pe-0 lg:pe-[110px] mx-auto text-justify">
                Creamos páginas web y tiendas virtuales que no solo se ven bien, sino que son fáciles de usar y están enfocadas en atraer clientes y generar ventas.
              </p>
            </div>

            <div id="profileContent" class="tab-content hidden mt-4">
              <img class="max-w-[full] h-auto mx-auto" src="assets/img/soporte_banner_image.png" alt="banner-hero">
              <p class="text-lg mt-4 leading-relaxed max-w-[1030px] pe-0 lg:pe-[110px] mx-auto text-justify">
                No lo dejamos solo después del lanzamiento. Nos encargamos de que sus plataformas digitales siempre estén operativas, seguras y actualizadas, dándole la tranquilidad de que su negocio nunca se detiene.
              </p>
            </div>

            <div id="inboxContent" class="tab-content hidden mt-4">
              <img class="max-w-[full] h-auto mx-auto" src="assets/img/marketing_banner_image.png" alt="banner-hero">
              <p class="text-lg mt-4 leading-relaxed max-w-[1030px] pe-0 lg:pe-[110px] mx-auto text-justify">
                Conectamos su marca con el público correcto a través de estrategias que atraen visitas y las convierten en oportunidades reales de negocio.
              </p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- CTA Section -->
    <section id="clients-section" class="py-24 bg-background-obi-green/40 relative overflow-hidden">
      <div class="pb-20 container mx-auto px-6 lg:px-10">
        <!-- <h3 class="text-4xl font-extrabold text-[#111318] dark:text-white">Clientes</h3> -->
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/80 border border-tertiary/20 text-tertiary-dark text-lg font-bold uppercase tracking-widest w-fit">
          <span class="material-symbols-outlined text-lg">verified</span>
          CLIENTES
        </div>
        <p class="pt-6">Empresas que confían en nuestra visión</p>
      </div>
      <div class="container mx-auto px-6 lg:px-10">
        <div class="relative overflow-hidden carousel-fade">
          <div class="flex items-center gap-12 lg:gap-24 animate-scroll" id="logoCarousel">
            <span class="text-2xl font-black italic opacity-50 grayscale hover:grayscale-0 transition-all whitespace-nowrap">
              <img class="w-32" src="assets/img/logo_uniendo_sonrisas.png" alt=""></span>
            <span class="text-2xl font-black italic opacity-50 grayscale hover:grayscale-0 transition-all whitespace-nowrap">
              <img class="w-32" src="assets/img/logo_peru_compras.png" alt=""></span>
            <span class="text-2xl font-black italic opacity-50 grayscale hover:grayscale-0 transition-all whitespace-nowrap">
              <img class="w-32" src="assets/img/logo_bizlinks.png" alt=""></span>
            <span class="text-2xl font-black italic opacity-100 grayscale hover:grayscale-0 transition-all whitespace-nowrap">
              <img class="w-32" src="assets/img/logo-hans.png" alt=""></span>
            <span class="text-2xl font-black italic opacity-50 grayscale hover:grayscale-0 transition-all whitespace-nowrap">
              <img class="w-32" src="assets/img/logo-novatronic.png" alt=""></span>
            <span class="text-2xl font-black italic opacity-50 grayscale hover:grayscale-0 transition-all whitespace-nowrap">
              <img class="w-32" src="assets/img/logo-rumi.svg" alt=""></span>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- Footer -->
  <footer class="bg-background-obi-dark dark:bg-background-dark pt-20 pb-10">
    <div class="container mx-auto px-6 lg:px-10">
      <div class="grid grid-cols-2 md:grid-cols-6 lg:grid-cols-6 gap-12 mb-20">
        <div class="col-span-2">
          <div class="flex items-center gap-3 mb-6">
            <img class="w-32 max-w-full h-auto" src="assets/img/logo_obi_footer.svg" alt="logo">
          </div>
          <p class="text-white max-w-xs mb-6">Dirección: Av. Caminos del Inka <br />
            Cel. 97504678</p>
          <div class="flex gap-4">
            <a href="https://www.facebook.com/obiconsulting/" rel="noopener noreferrer" target="_blank" class="size-10 rounded-full border border-gray-200 dark:border-gray-700 flex items-center justify-center text-white hover:text-primary hover:border-primary transition-all">
              <img src="assets/img/facebook-icon.svg" alt="">
            </a>
            <a href="https://www.instagram.com/obiconsulting/" rel="noopener noreferrer" target="_blank" class="size-10 rounded-full border border-gray-200 dark:border-gray-700 flex items-center justify-center text-white hover:text-primary hover:border-primary transition-all">
              <img src="assets/img/instagram-icon.svg" alt="">
            </a>
            <!-- <a href="https://www.linkedin.com/company/obi_consulting/" rel="noopener noreferrer" target="_blank" class="size-10 rounded-full border border-gray-200 dark:border-gray-700 flex items-center justify-center text-white hover:text-primary hover:border-primary transition-all">
              <img src="assets/img/linkedin-icon.svg" alt="">
            </a> -->
          </div>
          <p class="pt-8 text-gray-400 text-sm">© 2026 Obi Consulting. Todos los derechos reservados.</p>
        </div>
        <div>
          <h5 class="font-bold  text-white mb-6">Nosotros</h5>
        </div>
        <div>
          <h5 class="font-bold  text-white mb-6">Innovación</h5>
        </div>
        <div>
          <h5 class="font-bold text-white mb-6">Soluciones Digitales</h5>
          <ul class="space-y-4 text-gray-500 text-sm">
            <li><a class="hover:text-primary transition-colors" href="#solutions-section">Desarrollo Personalizado</a></li>
            <li><a class="hover:text-primary transition-colors" href="#solutions-section">Sitios Web e E-commerce</a></li>
            <li><a class="hover:text-primary transition-colors" href="#solutions-section">Acompañamiento y Soporte</a></li>
            <li><a class="hover:text-primary transition-colors" href="#solutions-section">Marketing Digital</a></li>
          </ul>
        </div>
        <div>
          <h5 class="font-bold text-white mb-6">Clientes</h5>
        </div>
      </div>
    </div>
  </footer>
  <!-- Botón flotante de WhatsApp -->
  <a href="https://wa.me/51958624548?text=Hola%20estoy%20interesado%20en%20sus%20servicios" target="_blank" class="whatsapp-float" aria-label="Contactar por WhatsApp">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-8 h-8">
      <path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
    </svg>
  </a>
  <script src="assets/js/main.js"></script>
</body>

</html>