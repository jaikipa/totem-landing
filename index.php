<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Totem Hub - Gestión de Viajes Grupales</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <!-- Header -->
    <header class="header">
        <div class="container nav-container">
            <div class="logo">
                <div class="logo-icon">T</div>
                <span class="logo-text">Totem <span>Hub</span></span>
            </div>
            <nav class="main-nav">
                <a href="#problema">El Problema</a>
                <a href="#beneficios">Beneficios</a>
                <a href="#como-funciona">Cómo Funciona</a>
                <a href="#faq">FAQ</a>
            </nav>
            <div class="nav-actions">
                <a href="#demo" class="btn-login">Ingresar</a>
                <a href="#demo" class="btn-primary">Agenda tu demo</a>
            </div>
            <button class="mobile-menu-btn" type="button" aria-label="Abrir menú" aria-controls="mobileNav" aria-expanded="false"><i class='bx bx-menu'></i></button>
        </div>
        <div class="mobile-nav-overlay" data-mobile-nav-overlay></div>
        <nav id="mobileNav" class="mobile-nav" aria-label="Menú móvil" aria-hidden="true">
            <div class="mobile-nav-header">
                <div class="logo">
                    <div class="logo-icon">T</div>
                    <span class="logo-text">Totem <span>Hub</span></span>
                </div>
                <button class="mobile-nav-close" type="button" aria-label="Cerrar menú" data-mobile-nav-close><i class='bx bx-x'></i></button>
            </div>
            <div class="mobile-nav-links">
                <a href="#problema">El Problema</a>
                <a href="#beneficios">Beneficios</a>
                <a href="#como-funciona">Cómo Funciona</a>
                <a href="#faq">FAQ</a>
            </div>
            <div class="mobile-nav-actions">
                <a href="#demo" class="btn-secondary">Ingresar</a>
                <a href="#demo" class="btn-primary">Agenda tu demo</a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container hero-container">
            <div class="hero-content">
                <div class="badge">
                    <span class="dot"></span> Agencias que gestionan +30 viajes/año ya están en lista de espera
                </div>
                <h1>Deja de gestionar viajes grupales con <span>hojas de cálculo</span></h1>
                <p>Totem Hub centraliza inscripciones, pagos fraccionados, documentos e itinerarios en una sola plataforma.</p>
                <div class="hero-buttons">
                    <a href="#demo" class="btn-primary">Agenda tu demo de 30 min <i class='bx bx-right-arrow-alt'></i></a>
                    <a href="#demo" class="btn-secondary">Únete a la lista de espera</a>
                </div>
                <div class="hero-checks">
                    <span><i class='bx bx-check-circle'></i> Sin tarjeta de crédito</span>
                    <span><i class='bx bx-check-circle'></i> Configuración en 24hs</span>
                    <span><i class='bx bx-check-circle'></i> Soporte en español</span>
                </div>
            </div>
            <div class="hero-image">
                <div class="mockup-window">
                    <div class="mockup-header">
                        <span class="dot red"></span>
                        <span class="dot yellow"></span>
                        <span class="dot green"></span>
                    </div>
                    <div class="mockup-body">
                        <div class="mockup-sidebar"></div>
                        <div class="mockup-content">
                            <div class="mockup-cards">
                                <div class="m-card"></div>
                                <div class="m-card"></div>
                                <div class="m-card"></div>
                            </div>
                            <div class="mockup-list">
                                <div class="m-list-item"></div>
                                <div class="m-list-item"></div>
                                <div class="m-list-item"></div>
                                <div class="m-list-item"></div>
                            </div>
                        </div>
                        <div class="mockup-notification">
                            <i class='bx bx-check-circle'></i>
                            <div>
                                <small>Pago recibido</small>
                                <strong>+$450.00 USD</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Problem Section -->
    <section id="problema" class="problem">
        <div class="container">
            <div class="section-header">
                <h2>¿Te suena familiar?</h2>
                <p>El caos de gestionar viajes grupales con herramientas que no fueron hechas para esto.</p>
            </div>

            <div class="compare">
                <div class="compare-grid" role="table" aria-label="Comparación: antes vs Totem Hub">
                    <div class="compare-head" role="rowgroup">
                        <div class="compare-col-title" role="columnheader">Criterio</div>
                        <div class="compare-col-title compare-col-title--before" role="columnheader">
                            <span class="compare-pill compare-pill--before"><i class='bx bx-time-five'></i> Antes</span>
                        </div>
                        <div class="compare-col-title compare-col-title--after" role="columnheader">
                            <span class="compare-pill compare-pill--after"><i class='bx bx-check-circle'></i> Totem Hub</span>
                        </div>
                    </div>

                    <div class="compare-body" role="rowgroup">
                        <div class="compare-row" role="row">
                            <div class="compare-crit" role="rowheader">Eficiencia operativa</div>
                            <div class="compare-cell compare-cell--before" role="cell"><i class='bx bx-x-circle'></i> Trabajo manual, seguimiento disperso</div>
                            <div class="compare-cell compare-cell--after" role="cell"><i class='bx bx-check-circle'></i> Flujo centralizado, tareas automatizadas</div>
                        </div>
                        <div class="compare-row" role="row">
                            <div class="compare-crit" role="rowheader">Costos y errores</div>
                            <div class="compare-cell compare-cell--before" role="cell"><i class='bx bx-x-circle'></i> Reproceso por datos duplicados y versiones</div>
                            <div class="compare-cell compare-cell--after" role="cell"><i class='bx bx-check-circle'></i> Menos reproceso con información única y actualizada</div>
                        </div>
                        <div class="compare-row" role="row">
                            <div class="compare-crit" role="rowheader">Implementación</div>
                            <div class="compare-cell compare-cell--before" role="cell"><i class='bx bx-x-circle'></i> Plantillas, parches y dependencias del equipo</div>
                            <div class="compare-cell compare-cell--after" role="cell"><i class='bx bx-check-circle'></i> Setup guiado y migración asistida</div>
                        </div>
                        <div class="compare-row" role="row">
                            <div class="compare-crit" role="rowheader">Facilidad de uso</div>
                            <div class="compare-cell compare-cell--before" role="cell"><i class='bx bx-x-circle'></i> Excel, email y WhatsApp sin trazabilidad</div>
                            <div class="compare-cell compare-cell--after" role="cell"><i class='bx bx-check-circle'></i> Portal del viajero + panel operativo en tiempo real</div>
                        </div>
                        <div class="compare-row" role="row">
                            <div class="compare-crit" role="rowheader">Resultados medibles</div>
                            <div class="compare-cell compare-cell--before" role="cell"><i class='bx bx-x-circle'></i> Difícil medir atrasos, faltantes y cuellos</div>
                            <div class="compare-cell compare-cell--after" role="cell"><i class='bx bx-check-circle'></i> Visibilidad por grupo: pagos, docs e hitos</div>
                        </div>
                    </div>
                </div>

                <div class="compare-foot">
                    <div class="compare-foot-text">
                        <h3>Convierte el caos en un proceso claro</h3>
                        <p>Centraliza inscripciones, pagos y documentación sin perseguir a nadie y con visibilidad total del estado de cada grupo.</p>
                    </div>
                    <div class="compare-foot-actions">
                        <a href="#demo" class="btn-primary">Agenda tu demo <i class='bx bx-right-arrow-alt'></i></a>
                        <a href="#demo" class="btn-secondary compare-secondary">Ver cómo funciona</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="beneficios" class="benefits">
        <div class="container">
            <div class="section-header">
                <span class="badge-light">Por qué elegir Totem Hub</span>
                <h2>De una trastienda ruidosa a una <br><span>torre de control impecable</span></h2>
                <p>Todo lo que necesitas para operar viajes grupales exitosos, diseñado específicamente para agencias de Latinoamérica.</p>
            </div>
            <div class="benefits-grid">
                <div class="benefit-item">
                    <div class="icon-wrapper blue-light"><i class='bx bx-file'></i></div>
                    <h3>Inscripciones y documentación 100% online</h3>
                    <p>Olvídate del papel y los emails. Recopila datos de viajeros y documentos directamente en la plataforma con formularios seguros.</p>
                </div>
                <div class="benefit-item">
                    <div class="icon-wrapper blue-light"><i class='bx bx-credit-card'></i></div>
                    <h3>Pagos fraccionados con conciliación</h3>
                    <p>Permite pagos en cuotas con recordatorios automáticos. Visualiza en tiempo real quién pagó, quién debe y concilia comprobantes en un solo lugar.</p>
                </div>
                <div class="benefit-item">
                    <div class="icon-wrapper blue-light"><i class='bx bx-list-check'></i></div>
                    <h3>Listados para proveedores en un clic</h3>
                    <p>Genera manifiestos de pasajeros, rooming lists para hoteles y reportes para aerolíneas al instante, siempre con la información más actualizada.</p>
                </div>
                <div class="benefit-item">
                    <div class="icon-wrapper blue-light"><i class='bx bx-mobile'></i></div>
                    <h3>Portal exclusivo para el viajero</h3>
                    <p>Cada pasajero tiene su propio acceso para subir documentos, reportar pagos y consultar su itinerario, reduciendo consultas por WhatsApp.</p>
                </div>
                <div class="benefit-item">
                    <div class="icon-wrapper blue-light"><i class='bx bx-line-chart'></i></div>
                    <h3>Gestiona 3X más viajes</h3>
                    <p>Automatiza el trabajo manual y repetitivo. Crece la capacidad operativa de tu agencia sin necesidad de aumentar tu equipo administrativo.</p>
                </div>
                <div class="benefit-item">
                    <div class="icon-wrapper blue-light"><i class='bx bx-map-alt'></i></div>
                    <h3>Dashboard de operaciones en tiempo real</h3>
                    <p>Ten visibilidad total del estado de cada grupo. Identifica cuellos de botella, documentos faltantes o pagos atrasados de un vistazo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="como-funciona" class="how-it-works">
        <div class="container">
            <div class="hiw-grid">
                <div class="hiw-content">
                    <h2>Cómo funciona Totem Hub</h2>
                    <p class="hiw-subtitle">Un flujo de trabajo optimizado para que tú y tu equipo se enfoquen en vender y diseñar mejores experiencias, no en tareas administrativas.</p>
                    
                    <div class="steps">
                        <div class="step">
                            <div class="step-number">01</div>
                            <div class="step-text">
                                <h3>Crea tu viaje en minutos</h3>
                                <p>Configura las fechas, el itinerario, los cupos disponibles y el plan de pagos (cuotas y fechas de vencimiento).</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="step-number">02</div>
                            <div class="step-text">
                                <h3>Comparte el enlace de inscripción</h3>
                                <p>Envía un link único a tus prospectos. Ellos se registran solos, llenan sus datos y suben sus documentos desde cualquier dispositivo.</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="step-number">03</div>
                            <div class="step-text">
                                <h3>Recibe pagos sin perseguir a nadie</h3>
                                <p>Totem Hub envía recordatorios automáticos antes del vencimiento de cada cuota. Los viajeros suben sus comprobantes o pagan online.</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="step-number">04</div>
                            <div class="step-text">
                                <h3>Exporta para tus proveedores</h3>
                                <p>Con un clic, descarga el rooming list para el hotel o la lista de pasajeros para la aerolínea, sin copiar y pegar datos.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hiw-image">
                    <div class="tech-graphic">
                        <div class="app-carousel" data-carousel>
                            <div class="app-carousel-track">
                                <div class="app-slide is-active">
                                    <div class="app-screen app-screen--trip">
                                        <div class="app-alert">
                                            <i class='bx bx-error'></i>
                                            <span>Juan está en la lista de espera para el viaje Viaje a Pirineos y Port Aventura | Curso 25/26</span>
                                        </div>
                                        <div class="app-title">Barcelona, Pirineos, Port Aventura</div>
                                        <div class="app-panel">
                                            <div class="app-panel-col">
                                                <div class="app-kicker">FECHAS</div>
                                                <div class="app-value">17 – 22 jun 2026</div>
                                            </div>
                                            <div class="app-panel-col">
                                                <div class="app-kicker">CENTRO</div>
                                                <div class="app-value">IES IBN JALDUN <span>(Sevilla)</span></div>
                                            </div>
                                            <div class="app-panel-col">
                                                <div class="app-kicker">CURSO</div>
                                                <div class="app-value">4º de SECUNDARIA</div>
                                            </div>
                                        </div>
                                        <div class="app-section">
                                            <div class="app-section-title"><i class='bx bx-calendar'></i> ITINERARIO</div>
                                            <div class="app-days">
                                                <div class="app-day">
                                                    <div class="app-day-top">
                                                        <span>Día 1</span>
                                                        <i class='bx bx-calendar'></i>
                                                    </div>
                                                    <div class="app-day-name">Dos Hermanas – SEVILLA – …</div>
                                                    <div class="app-day-pill">mié 17 Jun</div>
                                                </div>
                                                <div class="app-day">
                                                    <div class="app-day-top">
                                                        <span>Día 2</span>
                                                        <i class='bx bx-calendar'></i>
                                                    </div>
                                                    <div class="app-day-name">PORT AVENTURA + FERRARI …</div>
                                                    <div class="app-day-pill">jue 18 Jun</div>
                                                </div>
                                                <div class="app-day">
                                                    <div class="app-day-top">
                                                        <span>Día 3</span>
                                                        <i class='bx bx-calendar'></i>
                                                    </div>
                                                    <div class="app-day-name">PORT AVENTURA – RIALP</div>
                                                    <div class="app-day-pill">vie 19 Jun</div>
                                                </div>
                                                <div class="app-day">
                                                    <div class="app-day-top">
                                                        <span>Día 4</span>
                                                        <i class='bx bx-calendar'></i>
                                                    </div>
                                                    <div class="app-day-name">RIALP</div>
                                                    <div class="app-day-pill">sáb 20 Jun</div>
                                                </div>
                                                <div class="app-day">
                                                    <div class="app-day-top">
                                                        <span>Día 5</span>
                                                        <i class='bx bx-calendar'></i>
                                                    </div>
                                                    <div class="app-day-name">—</div>
                                                    <div class="app-day-pill">dom 21 Jun</div>
                                                </div>
                                                <div class="app-day">
                                                    <div class="app-day-top">
                                                        <span>Día 6</span>
                                                        <i class='bx bx-calendar'></i>
                                                    </div>
                                                    <div class="app-day-name">PIRINEOS – BARCELONA – S…</div>
                                                    <div class="app-day-pill">lun 22 Jun</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="app-tabs">
                                            <div class="app-tab is-active"><i class='bx bx-cart'></i> Viaje</div>
                                            <div class="app-tab"><i class='bx bx-folder'></i> Documentos</div>
                                            <div class="app-tab"><i class='bx bx-plane-take-off'></i> Vuelos</div>
                                            <div class="app-tab"><i class='bx bx-hotel'></i> Hoteles</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="app-slide">
                                    <div class="app-screen app-screen--docs">
                                        <div class="app-doc-head">
                                            <div class="app-title">Documentos</div>
                                            <div class="app-chip"><i class='bx bx-lock-alt'></i> Seguro</div>
                                        </div>
                                        <div class="app-doc-list">
                                            <div class="app-doc-card">
                                                <div class="app-doc-meta">
                                                    <div class="app-badge app-badge--req">OBLIGATORIO</div>
                                                    <div class="app-doc-name">Seguro médico de viaje</div>
                                                    <div class="app-doc-sub">Póliza de seguro médico con cobertura para el período y destino del viaje.</div>
                                                </div>
                                                <div class="app-doc-actions">
                                                    <div class="app-status app-status--rejected"><i class='bx bx-x-circle'></i> Rechazado — vuelve a subir</div>
                                                    <div class="app-btn">Volver a subir</div>
                                                </div>
                                            </div>
                                            <div class="app-doc-card">
                                                <div class="app-doc-meta">
                                                    <div class="app-badge app-badge--opt">OPCIONAL</div>
                                                    <div class="app-doc-name">Ficha médica del alumno</div>
                                                    <div class="app-doc-sub">Formulario con alergias, medicación habitual, grupo sanguíneo y contacto de emergencia.</div>
                                                </div>
                                                <div class="app-doc-actions">
                                                    <div class="app-status app-status--pending"><i class='bx bx-time-five'></i> Pendiente</div>
                                                    <div class="app-btn is-primary">Subir documento</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="app-doc-foot">
                                            <span>Todos los documentos son tratados conforme a nuestra Política de Privacidad.</span>
                                        </div>
                                        <div class="app-tabs">
                                            <div class="app-tab"><i class='bx bx-cart'></i> Viaje</div>
                                            <div class="app-tab is-active"><i class='bx bx-folder'></i> Documentos</div>
                                            <div class="app-tab"><i class='bx bx-plane-take-off'></i> Vuelos</div>
                                            <div class="app-tab"><i class='bx bx-hotel'></i> Hoteles</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="app-carousel-btn is-prev" type="button" aria-label="Anterior">
                                <i class='bx bx-chevron-left'></i>
                            </button>
                            <button class="app-carousel-btn is-next" type="button" aria-label="Siguiente">
                                <i class='bx bx-chevron-right'></i>
                            </button>

                            <div class="app-carousel-dots" aria-label="Paginación">
                                <button class="app-dot is-active" type="button" aria-label="Slide 1"></button>
                                <button class="app-dot" type="button" aria-label="Slide 2"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Beta / Early Access Section -->
    <section class="beta-section">
        <div class="container">
            <div class="beta-container">
                <div class="beta-content">
                    <span class="badge-light">Programa de Acceso Anticipado</span>
                    <h2>Sé de los primeros en evolucionar tu agencia</h2>
                    <p>Actualmente operamos con un grupo selecto de agencias para garantizar el mejor servicio. Únete a la beta cerrada y obtén beneficios exclusivos de por vida.</p>
                    <ul class="beta-features">
                        <li><i class='bx bx-check-circle'></i> Onboarding personalizado gratuito</li>
                        <li><i class='bx bx-check-circle'></i> Soporte prioritario 24/7</li>
                        <li><i class='bx bx-check-circle'></i> Precio preferencial garantizado de por vida</li>
                    </ul>
                </div>
                <div class="beta-card-wrapper">
                    <div class="beta-card">
                        <h3>Plazas Limitadas</h3>
                        <p>Cerramos el registro al completar el cupo mensual para mantener la calidad.</p>
                        <h2>Beta</h2>
                        <a href="#demo" class="btn-primary w-100">Solicitar acceso <i class='bx bx-right-arrow-alt'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="faq">
        <div class="container">
            <div class="section-header">
                <h2>Preguntas frecuentes</h2>
                <p>Respuestas claras para decisiones informadas.</p>
            </div>
            <div class="faq-list">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>¿Es segura la información de mis viajeros?</h3>
                        <i class='bx bx-chevron-down'></i>
                    </div>
                    <div class="faq-answer">
                        <p>Sí, utilizamos encriptación de nivel bancario para proteger todos los datos personales y documentos de tus clientes.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>¿Qué pasa con mis viajes que ya están en curso?</h3>
                        <i class='bx bx-chevron-down'></i>
                    </div>
                    <div class="faq-answer">
                        <p>Nuestro equipo te ayuda a migrar la información de tus viajes actuales a la plataforma de forma rápida y sencilla.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>¿Cómo se integra con mis pagos actuales?</h3>
                        <i class='bx bx-chevron-down'></i>
                    </div>
                    <div class="faq-answer">
                        <p>Puedes seguir recibiendo transferencias bancarias y registrar los comprobantes en la plataforma, o integrar pasarelas de pago para cobros con tarjeta.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>¿Tienen soporte en español?</h3>
                        <i class='bx bx-chevron-down'></i>
                    </div>
                    <div class="faq-answer">
                        <p>Absolutamente. Todo nuestro equipo de soporte habla español nativo y entiende las necesidades de las agencias latinoamericanas.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>¿Hay periodo de prueba?</h3>
                        <i class='bx bx-chevron-down'></i>
                    </div>
                    <div class="faq-answer">
                        <p>Sí, ofrecemos una demostración gratuita y un periodo de prueba para que evalúes la plataforma con tu equipo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer CTA -->
    <section id="demo" class="footer-cta">
        <div class="container">
            <div class="footer-cta-header">
                <span class="badge-dark"><i class='bx bx-calendar'></i> AGENDA TU DEMO</span>
                <h2>Transforma tu agencia hoy</h2>
                <p>Cuéntanos un poco sobre tu operación y nos pondremos en contacto en las próximas 24 horas.</p>
            </div>

            <div class="cta-card">
                <div class="cta-card-left">
                    <p class="cta-lead">Nos encantaría escucharte. Llena el formulario y nos pondremos en contacto contigo lo antes posible.</p>
                    <div class="cta-form-embed">
                        <div class="hs-form-frame" data-region="na1" data-form-id="47a10f3e-4826-4150-a097-07225083c71b" data-portal-id="51382169"></div>
                        <script src="https://js.hsforms.net/forms/embed/51382169.js" defer></script>
                    </div>
                </div>

                <div class="cta-card-right">
                    <h3 class="cta-side-title">¿Qué sucede después?</h3>

                    <div class="cta-steps">
                        <div class="cta-step">
                            <div class="cta-step-num">1</div>
                            <div class="cta-step-body">
                                <h4>Revisamos tu perfil</h4>
                                <p>Validamos que Totem Hub sea la herramienta ideal para la operativa de tu agencia.</p>
                            </div>
                        </div>
                        <div class="cta-step">
                            <div class="cta-step-num">2</div>
                            <div class="cta-step-body">
                                <h4>Coordinamos la llamada</h4>
                                <p>Te enviaremos un enlace para agendar una demo en el horario que mejor te convenga.</p>
                            </div>
                        </div>
                        <div class="cta-step">
                            <div class="cta-step-num">3</div>
                            <div class="cta-step-body">
                                <h4>Conoce la plataforma</h4>
                                <p>En 30 minutos te mostraremos cómo centralizar tu operación y resolver tus cuellos de botella.</p>
                            </div>
                        </div>
                    </div>

                    <div class="cta-notes">
                        <div class="cta-note">
                            <i class='bx bx-shield-quarter'></i>
                            <p>Tus datos están protegidos. Nunca compartimos tu información.</p>
                        </div>
                        <div class="cta-note">
                            <i class='bx bx-time-five'></i>
                            <p>Respuesta en menos de 24 horas hábiles.</p>
                        </div>
                    </div>

                    <div class="cta-quote">
                        <p class="cta-quote-text">“Desde que usamos Totem Hub, ya no tenemos que perseguir comprobantes por WhatsApp. El tiempo administrativo se redujo a la mitad.”</p>
                        <p class="cta-quote-author">— Agencia Totem Travel (Lima, Perú)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="site-footer">
        <div class="container footer-grid">
            <div class="footer-brand">
                <div class="logo footer-logo">
                    <div class="logo-icon">T</div>
                    <span class="logo-text">Totem <span>Hub</span></span>
                </div>
                <p class="footer-desc">La plataforma definitiva que centraliza operaciones para agencias de viajes grupales. Tu equipo hace en minutos lo que hoy le toma días.</p>
                <div class="footer-social">
                    <a href="#" aria-label="Twitter"><i class='bx bxl-twitter'></i></a>
                    <a href="#" aria-label="LinkedIn"><i class='bx bxl-linkedin'></i></a>
                    <a href="#" aria-label="Instagram"><i class='bx bxl-instagram'></i></a>
                </div>
            </div>

            <div class="footer-links">
                <h4>Producto</h4>
                <a href="#beneficios">Beneficios</a>
                <a href="#como-funciona">Cómo funciona</a>
                <a href="#faq">Preguntas frecuentes</a>
                <a href="#demo">Agenda una demo</a>
            </div>

            <div class="footer-contact">
                <h4>Contacto</h4>
                <a class="footer-email" href="mailto:totemhubapp@gmail.com"><i class='bx bx-envelope'></i> totemhubapp@gmail.com</a>
                <a class="footer-pill" href="#demo"><i class='bx bx-support'></i> Soporte en español</a>
            </div>
        </div>
        <div class="container footer-legal">
            <p>&copy; <?php echo date('Y'); ?> Totem Hub. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
