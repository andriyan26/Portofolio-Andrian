/**
 * ANDRIAN — PORTFOLIO MAIN JAVASCRIPT
 * Tabs, Filters, Contact Form AJAX & Interactive Animations
 */

document.addEventListener('DOMContentLoaded', () => {
  // 1. Header scroll effect
  const header = document.querySelector('.site-header');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 40) {
      header?.classList.add('scrolled');
    } else {
      header?.classList.remove('scrolled');
    }
  });

  // 2. Mobile Menu Toggle
  const mobileToggle = document.querySelector('.mobile-toggle');
  const navLinks = document.querySelector('.nav-links');
  if (mobileToggle && navLinks) {
    mobileToggle.addEventListener('click', () => {
      navLinks.classList.toggle('open');
      const isOpen = navLinks.classList.contains('open');
      mobileToggle.innerHTML = isOpen ? '✕' : '☰';
    });

    // Close menu when clicking nav link
    document.querySelectorAll('.nav-link').forEach(link => {
      link.addEventListener('click', () => {
        navLinks.classList.remove('open');
        mobileToggle.innerHTML = '☰';
      });
    });
  }

  // 3. Experience & Timeline Tabs
  const tabButtons = document.querySelectorAll('.tab-btn');
  const tabPanels = document.querySelectorAll('.tab-content-panel');

  tabButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const targetTab = btn.getAttribute('data-tab');

      tabButtons.forEach(b => b.classList.remove('active'));
      tabPanels.forEach(p => p.classList.remove('active'));

      btn.classList.add('active');
      const activePanel = document.getElementById(`tab-${targetTab}`);
      if (activePanel) {
        activePanel.classList.add('active');
        // Smoothly reveal cards inside newly active tab
        const cards = activePanel.querySelectorAll('.reveal-on-scroll');
        cards.forEach((card, idx) => {
          card.classList.remove('is-revealed');
          setTimeout(() => {
            card.classList.add('is-revealed');
          }, idx * 90 + 40);
        });
      }
    });
  });

  // 4. Projects Category Filter
  const filterButtons = document.querySelectorAll('.filter-btn');
  const projectCards = document.querySelectorAll('.project-card');

  filterButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const category = btn.getAttribute('data-filter');

      filterButtons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      let visibleIdx = 0;
      projectCards.forEach(card => {
        if (category === 'all' || card.getAttribute('data-category') === category) {
          card.style.display = 'flex';
          card.classList.remove('is-revealed');
          setTimeout(() => {
            card.classList.add('is-revealed');
          }, visibleIdx * 80 + 40);
          visibleIdx++;
        } else {
          card.style.display = 'none';
        }
      });
    });
  });

  // 5. Contact Form AJAX Submission
  const contactForm = document.getElementById('contact-form');
  if (contactForm) {
    contactForm.addEventListener('submit', async (e) => {
      e.preventDefault();

      const submitBtn = contactForm.querySelector('button[type="submit"]');
      const originalText = submitBtn.innerHTML;
      submitBtn.disabled = true;
      submitBtn.innerHTML = 'Mengirim Pesan...';

      const formData = new FormData(contactForm);

      try {
        const response = await fetch('/contact', {
          method: 'POST',
          headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Accept': 'application/json',
          },
          body: formData
        });

        const data = await response.json();

        if (response.ok && data.success) {
          showToast(data.message);
          contactForm.reset();

          // Offer optional WhatsApp handoff
          if (data.wa_url && confirm('Pesan tersimpan! Apakah Anda ingin langsung terhubung via WhatsApp juga?')) {
            window.open(data.wa_url, '_blank');
          }
        } else {
          showToast(data.message || 'Mohon lengkapi seluruh isian formulir.', 'error');
        }
      } catch (error) {
        console.error('Error submitting contact form:', error);
        showToast('Terjadi gangguan pengiriman pesan. Silakan hubungi langsung via WhatsApp.', 'error');
      } finally {
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalText;
      }
    });
  }

  // 7. Active Nav Spy on Scroll
  const sections = document.querySelectorAll('section[id]');
  window.addEventListener('scroll', () => {
    let current = '';
    const scrollY = window.pageYOffset;

    sections.forEach(section => {
      const sectionHeight = section.offsetHeight;
      const sectionTop = section.offsetTop - 120;
      if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
        current = section.getAttribute('id');
      }
    });

    document.querySelectorAll('.nav-link').forEach(link => {
      link.classList.remove('active');
      if (link.getAttribute('href') === `#${current}` || link.getAttribute('href') === `/#${current}`) {
        link.classList.add('active');
      }
    });
  });
});


// Global Toast Notice
function showToast(message, type = 'success') {
  const existingToast = document.querySelector('.toast-notice');
  if (existingToast) existingToast.remove();

  const toast = document.createElement('div');
  toast.className = 'toast-notice';
  toast.innerHTML = `
    <span>${type === 'success' ? '✅' : '⚠️'}</span>
    <div>${message}</div>
  `;

  document.body.appendChild(toast);

  setTimeout(() => {
    toast.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
    toast.style.opacity = '0';
    toast.style.transform = 'translateY(20px)';
    setTimeout(() => toast.remove(), 400);
  }, 4500);
}

// =========================================================================
// INTERACTIVE CURSOR GLOW & CARD SPOTLIGHT DETECTION (BAYANGAN KURSOR)
// =========================================================================
function initCursorAndSpotlight() {
  const cursorDot = document.getElementById('cursor-dot');
  const cursorGlow = document.getElementById('cursor-glow');

  if (!cursorDot || !cursorGlow) return;

  // Check if touch device
  if (window.matchMedia('(hover: none) and (pointer: coarse)').matches) {
    cursorDot.style.display = 'none';
    cursorGlow.style.display = 'none';
    return;
  }

  let mouseX = window.innerWidth / 2;
  let mouseY = window.innerHeight / 2;
  let dotX = mouseX;
  let dotY = mouseY;
  let glowX = mouseX;
  let glowY = mouseY;
  let isMoving = false;

  // Track mouse coordinates
  window.addEventListener('mousemove', (e) => {
    mouseX = e.clientX;
    mouseY = e.clientY;

    if (!isMoving) {
      isMoving = true;
      cursorDot.classList.add('active');
      cursorGlow.classList.add('active');
    }
  }, { passive: true });

  // Handle window leave / enter
  document.addEventListener('mouseleave', () => {
    cursorDot.classList.remove('active');
    cursorGlow.classList.remove('active');
  });

  document.addEventListener('mouseenter', () => {
    cursorDot.classList.add('active');
    cursorGlow.classList.add('active');
  });

  // Click animation
  window.addEventListener('mousedown', () => {
    cursorDot.classList.add('cursor-click');
    cursorGlow.classList.add('cursor-click');
  });

  window.addEventListener('mouseup', () => {
    cursorDot.classList.remove('cursor-click');
    cursorGlow.classList.remove('cursor-click');
  });

  // Smooth animation loop using requestAnimationFrame
  function renderCursor() {
    // Dot follows with swift easing
    dotX += (mouseX - dotX) * 0.75;
    dotY += (mouseY - dotY) * 0.75;
    cursorDot.style.transform = `translate3d(${dotX}px, ${dotY}px, 0) translate(-50%, -50%)`;
    cursorDot.style.setProperty('--cur-x', `${dotX}px`);
    cursorDot.style.setProperty('--cur-y', `${dotY}px`);

    // Glow aura follows with organic fluid damping (bayangan kursor halus)
    glowX += (mouseX - glowX) * 0.14;
    glowY += (mouseY - glowY) * 0.14;
    cursorGlow.style.transform = `translate3d(${glowX}px, ${glowY}px, 0) translate(-50%, -50%)`;

    requestAnimationFrame(renderCursor);
  }
  requestAnimationFrame(renderCursor);

  // Dynamic interactive element detection ("Kedetek!")
  const interactiveTarget = 'a, button, input, textarea, select, .btn, .nav-link, .social-icon, .tab-btn, .filter-btn, .project-card, .skill-card, .stat-card, .timeline-card, .contact-item-card, .contact-form-card, .code-window, .hero-image-wrap, .hero-float-card, [role="button"]';

  document.addEventListener('mouseover', (e) => {
    if (e.target.closest(interactiveTarget)) {
      cursorDot.classList.add('cursor-hover');
      cursorGlow.classList.add('cursor-hover');
    }
  }, { passive: true });

  document.addEventListener('mouseout', (e) => {
    if (e.target.closest(interactiveTarget)) {
      cursorDot.classList.remove('cursor-hover');
      cursorGlow.classList.remove('cursor-hover');
    }
  }, { passive: true });

  // Real-time Card Spotlight (Bayangan Kursor Mendeteksi Koordinat Kartu)
  const spotlightSelector = '.stat-card, .timeline-card, .skill-card, .project-card, .code-window, .contact-form-card, .comment-form-card, .contact-info-card, .contact-item-card, .about-details, .hero-float-card';
  
  document.querySelectorAll(spotlightSelector).forEach((card) => {
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      card.style.setProperty('--mouse-x', `${x}px`);
      card.style.setProperty('--mouse-y', `${y}px`);
    }, { passive: true });
  });
}

// 7. Dynamic Text Rotator for Hero Status Card (Animasi Tulisan Status)
function initHeroTextRotator() {
  const statusEl = document.querySelector('.dynamic-status-text');
  if (!statusEl) return;

  const statuses = [
    'AVAILABLE FOR WORK',
    'OPEN FOR PROJECTS',
    'READY TO COLLABORATE',
    'FULL-STACK READY'
  ];
  let currentIndex = 0;

  setInterval(() => {
    statusEl.style.opacity = '0';
    statusEl.style.transform = 'translateY(-6px)';

    setTimeout(() => {
      currentIndex = (currentIndex + 1) % statuses.length;
      statusEl.textContent = statuses[currentIndex];
      statusEl.style.opacity = '1';
      statusEl.style.transform = 'translateY(0)';
    }, 280);
  }, 3200);
}

// 8. Scroll-Triggered Reveal Animations ("Muncul Halus saat Di-Scroll")
function initScrollReveal() {
  const revealElements = document.querySelectorAll('.reveal-on-scroll');
  if (!revealElements.length) return;

  // Use modern high-performance IntersectionObserver
  if ('IntersectionObserver' in window) {
    const revealObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-revealed');
          observer.unobserve(entry.target); // keep revealed once scrolled into view
        }
      });
    }, {
      root: null,
      threshold: 0.08,
      rootMargin: '0px 0px -40px 0px'
    });

    revealElements.forEach(el => {
      revealObserver.observe(el);
    });
  } else {
    // Fallback for older browsers
    const checkScroll = () => {
      const vh = window.innerHeight || document.documentElement.clientHeight;
      revealElements.forEach(el => {
        const rect = el.getBoundingClientRect();
        if (rect.top <= vh - 40 && rect.bottom >= 0) {
          el.classList.add('is-revealed');
        }
      });
    };
    checkScroll();
    window.addEventListener('scroll', checkScroll, { passive: true });
  }
}

// Initialize on DOM ready
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', () => {
    initCursorAndSpotlight();
    initHeroTextRotator();
    initScrollReveal();
  });
} else {
  initCursorAndSpotlight();
  initHeroTextRotator();
  initScrollReveal();
}



