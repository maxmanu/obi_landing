<!DOCTYPE html>

<html class="light" lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Obi Consulting - Innovative IT Solutions</title>
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
    <div class="max-w-7xl mx-auto px-6 lg:px-10 h-20 flex items-center justify-between">
      <div class="flex items-center gap-3">
        <img class="w-64 max-w-full h-auto" src="assets/img/logo_obi.svg" alt="logo">
      </div>
      <nav class="hidden md:flex items-center gap-10">
        <a class="text-lg font-semibold hover:text-primary transition-colors" href="#">Nosotros</a>
        <a class="text-lg font-semibold hover:text-primary transition-colors" href="#">Servicios</a>
        <a class="text-lg font-semibold hover:text-primary transition-colors" href="#">Clientes</a>
        <a class="text-lg font-semibold hover:text-primary transition-colors" href="#">Contáctanos</a>
      </nav>
      <button class="md:hidden p-2">
        <span class="material-symbols-outlined">menu</span>
      </button>
    </div>
  </header>
  <main class="flex flex-col">
    <!-- Hero Section -->
    <section class="relative overflow-hidden pt-16 pb-24 lg:pt-32 lg:pb-40">
      <div class="max-w-7xl mx-auto px-6 lg:px-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
          <div class="flex flex-col gap-8 z-10">
            <img class="max-w-full h-auto" src="assets/img/card_text_1.svg" alt="">
            <p class="text-lg lg:text-xl text-gray-600 dark:text-gray-400 leading-relaxed lg:max-w-xl">
              Somos una consultora que acompaña a empresas y emprendedores en cada etapa de su evolución tecnológica. Creemos que una idea no está terminada hasta que genera un cambio real en su negocio.
            </p>
            <p class="text-lg lg:text-xl text-gray-600 dark:text-gray-400 leading-relaxed lg:max-w-xl">
              Nos integramos a su organización para entender sus desafíos desde adentro y co-crear una hoja de ruta digital estratégica. Nuestro compromiso es asegurar que cada inversión en tecnología esté validada y genere un impacto real en su crecimiento.
            </p>
            <div class="flex flex-wrap justify-center lg:justify-start gap-4">
              <button class="h-14 px-8 bg-primary text-white rounded-xl font-bold text-lg hover:shadow-xl hover:shadow-primary/30 transition-all flex items-center gap-2">
                Contáctanos aquí
                <span class="material-symbols-outlined">arrow_forward</span>
              </button>
            </div>
          </div>
          <div class="relative">
            <img class="max-w-full h-auto mx-auto" src="assets/img/banner_hero.png" alt="banner-hero">
          </div>
        </div>
      </div>
    </section>
    <!-- Service Cards Grid -->
    <section class="pb-24 bg-background-obi-sky/40">
      <div class="py-20 max-w-7xl mx-auto px-6 lg:px-10 text-center">
        <h3 class="text-4xl font-extrabold text-[#111318] dark:text-white">SERVICIOS</h3>
      </div>
      <div class="max-w-7xl mx-auto px-6 lg:px-10">
        <div class="grid md:grid-cols-2 gap-8">
          <div class="group p-8">
            <h4 class="text-3xl font-bold mb-[35px]">Consultoría Estratégica e Innovación</h4>
            <div class="grid sm:grid-cols-2 gap-4">
              <img class="max-w-full h-auto mx-auto" src="assets/img/service_img_1.png" alt="">
              <img class="max-w-full h-auto mx-auto" src="assets/img/service_img_2.png" alt="">
            </div>
          </div>
          <div class="group p-8">
            <p class="text-lg text-gray-600 dark:text-gray-400 leading-relaxed mb-6">
              Antes de construir, validamos. Analizamos su empresa para asegurar que la tecnología responda a sus objetivos reales y no a simples suposiciones. Este servicio le permite identificar dónde la tecnología generará mayor valor, probando soluciones mediante prototipos antes de realizar la inversión final.
            </p>
            <img class="max-w-full h-auto" src="assets/img/card_text_2.svg" alt="">
          </div>
        </div>
      </div>
    </section>
    <!-- Recent Case Studies -->
    <section class="py-24 bg-gray-50 dark:bg-gray-900/50">
      <div class="max-w-7xl mx-auto px-6 lg:px-10">
        <!-- <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
          <div>
            <h2 class="text-primary font-bold tracking-widest uppercase text-sm mb-4">Case Studies</h2>
            <h3 class="text-4xl font-extrabold text-[#111318] dark:text-white">Our Success Stories</h3>
          </div>
          <button class="text-primary font-bold flex items-center gap-2 hover:underline">
            View all projects
            <span class="material-symbols-outlined">arrow_outward</span>
          </button>
        </div>
        <div class="grid md:grid-cols-2 gap-10">
          <div class="group cursor-pointer">
            <div class="w-full aspect-video rounded-2xl overflow-hidden mb-6 relative">
              <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity z-10 flex items-center justify-center">
                <button class="bg-white text-primary rounded-full size-12 flex items-center justify-center">
                  <span class="material-symbols-outlined">visibility</span>
                </button>
              </div>
              <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110" data-alt="Data visualization dashboard on a tablet showing analytics" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDd4iOnsUmCaN7OYLhQ9YONO8Ql1Og_O0pILzqPjH7QP-EBltRswCcbE0w5oDmaMVocULdOIrKqHX9lCBM2JzA6mdpStrMGBzuIbLAs1-iYZ0_4rHdJwauYvf_fKDBQB_H7R-nFhA3iLiAI3Jxy-tCuIk07fTANYNg-7r8xUMx2yr6DxflmFFRyeraEGNPJWe-RaqTtWfinlpcjq3xZpKsztNGZ2BJ8oVPSQt0uFwCbmNamqYs_d7Ot6NlG2VFl7XJoyotcR5arBTIE');"></div>
            </div>
            <div class="flex items-center gap-3 mb-3">
              <span class="text-xs font-bold text-primary px-2 py-1 bg-primary/10 rounded">FinTech</span>
              <span class="text-xs text-gray-400">2024</span>
            </div>
            <h4 class="text-2xl font-bold mb-2 group-hover:text-primary transition-colors">Global Banking Infrastructure Overhaul</h4>
            <p class="text-gray-600 dark:text-gray-400">Migrating a legacy banking system to a secure, cloud-native architecture with zero downtime.</p>
          </div>
          <div class="group cursor-pointer">
            <div class="w-full aspect-video rounded-2xl overflow-hidden mb-6 relative">
              <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity z-10 flex items-center justify-center">
                <button class="bg-white text-primary rounded-full size-12 flex items-center justify-center">
                  <span class="material-symbols-outlined">visibility</span>
                </button>
              </div>
              <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110" data-alt="Digital network security visualization showing cyber protection" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB_AJP1XMfL6qXkdYvgbHvVMPRVNAl-xlyE02pWa2I08jztw5Hq3R47buSZARlYmV3fxrB58J0iPBsWlFCfIvaQqU0F3IliwFuCvih8aE5FW7Rra2-pmJLdDdFmBAE_uCpflgAZccyp5ndkd2bM49xPfOVOlOqZ3V2WSWASmceg7IDWI11WosYSpLWnz0_zY2pqIXrKygX-aOlS9rRHlvFAMSb42g3M5EGyXAoe-3Tu7G4kayrxCjTeg0aWZpO1L-lSNpy0FpWV3pdW');"></div>
            </div>
            <div class="flex items-center gap-3 mb-3">
              <span class="text-xs font-bold text-primary px-2 py-1 bg-primary/10 rounded">Retail</span>
              <span class="text-xs text-gray-400">2023</span>
            </div>
            <h4 class="text-2xl font-bold mb-2 group-hover:text-primary transition-colors">Enterprise Security Strategy Implementation</h4>
            <p class="text-gray-600 dark:text-gray-400">Reducing security vulnerabilities by 95% for a global retail chain across 500+ locations.</p>
          </div>
        </div> -->
      </div>
    </section>
    <!-- CTA Section -->
    <section class="py-24 bg-background-obi-green/40 relative overflow-hidden">
      <div class="pb-20 max-w-7xl mx-auto px-6 lg:px-10 text-center">
        <h3 class="text-4xl font-extrabold text-[#111318] dark:text-white">Clientes</h3>
        <p class="pt-6 max-w-xl mx-auto">Creamos herramientas de software diseñadas exclusivamente para las reglas y procesos únicos de su empresa.</p>
      </div>
      <div class="max-w-7xl mx-auto px-6 lg:px-10">
        <div class="flex flex-wrap justify-center items-center gap-12 lg:gap-24 opacity-50 grayscale hover:grayscale-0 transition-all">
          <span class="text-2xl font-black italic">TECHNO</span>
          <span class="text-2xl font-black italic">GLOBAL</span>
          <span class="text-2xl font-black italic">QUANTUM</span>
          <span class="text-2xl font-black italic">STREAM</span>
          <span class="text-2xl font-black italic">NEXUS</span>
        </div>
      </div>
    </section>
  </main>
  <!-- Footer -->
  <footer class="bg-background-obi-dark dark:bg-background-dark pt-20 pb-10">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">
      <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-12 mb-20">
        <div class="col-span-2">
          <div class="flex items-center gap-3 mb-6">
            <img class="w-32 max-w-full h-auto" src="assets/img/logo_obi_footer.svg" alt="logo">
          </div>
          <p class="text-white max-w-xs mb-6">Leading the way in digital transformation and enterprise IT strategy. We turn technology into your competitive advantage.</p>
          <div class="flex gap-4">
            <a class="size-10 rounded-full border border-gray-200 dark:border-gray-700 flex items-center justify-center text-white hover:text-primary hover:border-primary transition-all" href="#">
              <span class="material-symbols-outlined text-lg">share</span>
            </a>
            <a class="size-10 rounded-full border border-gray-200 dark:border-gray-700 flex items-center justify-center text-white hover:text-primary hover:border-primary transition-all" href="#">
              <span class="material-symbols-outlined text-lg">alternate_email</span>
            </a>
          </div>
          <p class="pt-8 text-gray-400 text-sm">© 2026 Obi Consulting. Todos los derechos reservados.</p>
        </div>
        <div>
          <h5 class="font-bold  text-white mb-6">Innovación</h5>
          <ul class="space-y-4 text-gray-500 text-sm">
            <li><a class="hover:text-primary transition-colors" href="#">Cloud Solutions</a></li>
            <li><a class="hover:text-primary transition-colors" href="#">Cybersecurity</a></li>
            <li><a class="hover:text-primary transition-colors" href="#">Data Analytics</a></li>
            <li><a class="hover:text-primary transition-colors" href="#">DevOps</a></li>
          </ul>
        </div>
        <div>
          <h5 class="font-bold text-white mb-6">Soluciones Digitales</h5>
          <ul class="space-y-4 text-gray-500 text-sm">
            <li><a class="hover:text-primary transition-colors" href="#">About Us</a></li>
            <li><a class="hover:text-primary transition-colors" href="#">Our Team</a></li>
            <li><a class="hover:text-primary transition-colors" href="#">Careers</a></li>
            <li><a class="hover:text-primary transition-colors" href="#">Contact</a></li>
          </ul>
        </div>
        <div>
          <h5 class="font-bold text-white mb-6">Mapa</h5>
          <ul class="space-y-4 text-gray-500 text-sm">
            <li><a class="hover:text-primary transition-colors" href="#">Knowledge Base</a></li>
            <li><a class="hover:text-primary transition-colors" href="#">Privacy Policy</a></li>
            <li><a class="hover:text-primary transition-colors" href="#">Terms of Service</a></li>
            <li><a class="hover:text-primary transition-colors" href="#">Security</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <script src="assets/js/main.js"></script>
</body>

</html>