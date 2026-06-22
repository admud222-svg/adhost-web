@extends('layouts.app')

@section('title', 'AdHost — Premium Addons')

@section('content')

<section id="home" class="hero-dark">
  <div class="hero-pattern"></div>
  <div class="hero-content">
    <div class="reveal">
      <h1 class="hero-title">
        <span class="hero-title-main">Manage Your Server</span><br>
        <span class="word-rotator">
          <span class="italic gradient-text">with ease</span>
          <span class="italic gradient-text">let's go</span>
          <span class="italic gradient-text">no hassle</span>
          <span class="italic gradient-text">auto profit</span>
        </span>
      </h1>
    </div>
    <div class="reveal reveal-d1">
      <p class="hero-sub">
        All complete Bedrock server tools are right here.<br class="hide-mobile">
        Clean interface, easy to use, instant pro.
      </p>
    </div>
    <div class="hero-actions reveal reveal-d2">
      <a href="#features" class="btn btn-primary">See Features</a>
      <a href="{{ url('/free-downloads') }}" class="btn btn-outline">
        <i class="fa-solid fa-download"></i> Try Free
      </a>
    </div>
  </div>
</section>

<section class="section- rounded-top bg-cream -mt-8 z-1">
  <div class="section-inner py-20">
    <div class="stats-row reveal">
      <div class="stat-item">
        <p class="stat-val">1K+</p>
        <p class="stat-lbl">Servers running AdHost</p>
      </div>
      <div class="stat-item">
        <p class="stat-val">Active</p>
        <p class="stat-lbl"><span class="dot dot-blue"></span> Development</p>
      </div>
    </div>
    <p class="trust-note reveal reveal-d1">
      Trusted by 1,000+ Bedrock servers. Since 2025.
    </p>
  </div>
</section>

<section id="features" class="section- rounded-top bg-white -mt-2 z-2">
  <div class="section-inner py-20">
    <div class="section-label reveal">Features</div>
    <h2 class="section-h2 reveal reveal-d1">
      Features <em class="italic gradient-text">Powerful</em>
    </h2>
    <p class="section-p reveal reveal-d1">Core tools for faster and neater server management.</p>

    <div class="features-grid reveal reveal-d2">
      <div class="feat-card">
        <i class="fa-solid fa-table-columns feat-icon"></i>
        <h3>Admin Menu</h3>
        <p>Fast admin panel for all server management.</p>
      </div>
      <div class="feat-card">
        <i class="fa-regular fa-comments feat-icon"></i>
        <h3>NPC Dialog</h3>
        <p>Custom NPC dialog with interactive menus.</p>
      </div>
      <div class="feat-card">
        <i class="fa-solid fa-gauge-high feat-icon"></i>
        <h3>Performance</h3>
        <p>Lightweight, minimal lag, max efficiency.</p>
      </div>
      <div class="feat-card">
        <i class="fa-solid fa-users feat-icon"></i>
        <h3>Member</h3>
        <p>Roles, permissions, and player management.</p>
      </div>
      <div class="feat-card">
        <i class="fa-solid fa-shield-halved feat-icon"></i>
        <h3>Anti Dupe</h3>
        <p>Prevent item duplication and exploits.</p>
      </div>
      <div class="feat-card">
        <i class="fa-solid fa-cart-shopping feat-icon"></i>
        <h3>Custom Shop</h3>
        <p>Fully customizable player shop system.</p>
      </div>
    </div>
  </div>
</section>

<section id="pricing" class="section- rounded-top bg-cream -mt-2 z-3">
  <div class="section-inner py-20">
    <div class="section-label reveal">Pricing</div>
    <h2 class="section-h2 reveal reveal-d1">
      Pricing <em class="italic gradient-text">Affordable</em>
    </h2>
    <p class="section-p reveal reveal-d1">Choose a plan that fits your needs.</p>

    <div class="pricing-grid reveal reveal-d2">
      <div class="price-card">
        <div class="price-header">
          <h3>Free</h3>
          <div class="price-val">Rp 0</div>
          <span class="price-period">/mo</span>
        </div>
        <ul class="price-feats">
          <li><i class="fa-regular fa-circle-check check"></i> Free Add-on</li>
          <li><i class="fa-regular fa-circle-check check"></i> Community</li>
          <li><i class="fa-regular fa-circle-check check"></i> Basic Management</li>
          <li><i class="fa-regular fa-circle-check check"></i> BDS + Realms</li>
          <li><i class="fa-regular fa-circle-check cross"></i> Premium Add-ons</li>
          <li><i class="fa-regular fa-circle-check cross"></i> Anti Dupe</li>
          <li><i class="fa-regular fa-circle-check cross"></i> Custom Shop</li>
          <li><i class="fa-regular fa-circle-check cross"></i> Priority Support</li>
        </ul>
      </div>
      <div class="price-card price-featured">
        <div class="price-badge">POPULAR</div>
        <div class="price-header">
          <h3>VIP</h3>
          <div class="price-val">Rp 35K</div>
          <span class="price-period">/mo</span>
        </div>
        <ul class="price-feats">
          <li><i class="fa-regular fa-circle-check check"></i> All Free Features</li>
          <li><i class="fa-regular fa-circle-check check"></i> Premium Add-ons</li>
          <li><i class="fa-regular fa-circle-check check"></i> Anti Dupe</li>
          <li><i class="fa-regular fa-circle-check check"></i> Custom Shop</li>
          <li><i class="fa-regular fa-circle-check check"></i> Custom UI</li>
          <li><i class="fa-regular fa-circle-check check"></i> Whitelist</li>
          <li><i class="fa-regular fa-circle-check check"></i> Priority Support</li>
          <li><i class="fa-regular fa-circle-check cross"></i> Early Access</li>
        </ul>
      </div>
      <div class="price-card">
        <div class="price-header">
          <h3>MVP</h3>
          <div class="price-val">Rp 75K</div>
          <span class="price-period">/mo</span>
        </div>
        <ul class="price-feats">
          <li><i class="fa-regular fa-circle-check check"></i> All VIP Features</li>
          <li><i class="fa-regular fa-circle-check check"></i> Early Access</li>
          <li><i class="fa-regular fa-circle-check check"></i> All Premium Add-ons</li>
          <li><i class="fa-regular fa-circle-check check"></i> Custom Shop UI</li>
          <li><i class="fa-regular fa-circle-check check"></i> Discord Role</li>
          <li><i class="fa-regular fa-circle-check check"></i> Lifetime Access</li>
          <li><i class="fa-regular fa-circle-check check"></i> 24/7 Support</li>
          <li><i class="fa-regular fa-circle-check check"></i> Beta Features</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section id="community" class="section- rounded-top bg-white -mt-2 z-4">
  <div class="section-inner py-20">
    <div class="section-label reveal">Community</div>
    <h2 class="section-h2 reveal reveal-d1">
      Join the <em class="italic gradient-text">Community</em>
    </h2>
    <p class="section-p reveal reveal-d1">Join our WhatsApp group or other social media for updates and discussions.</p>

    <div class="community-cards reveal reveal-d2">
      <a href="#" class="community-card">
        <div class="comm-icon comm-icon-wa">
          <i class="fa-brands fa-whatsapp"></i>
        </div>
        <div class="comm-body">
          <h3>WhatsApp</h3>
          <p>Updates, discussion, and community support.</p>
        </div>
        <span class="comm-arrow">Join <i class="fa-solid fa-arrow-right"></i></span>
      </a>
      <a href="#" class="community-card">
        <div class="comm-icon comm-icon-discord">
          <i class="fa-brands fa-discord"></i>
        </div>
        <div class="comm-body">
          <h3>Discord</h3>
          <p>Chat, support, and announcements.</p>
        </div>
        <span class="comm-arrow">Join <i class="fa-solid fa-arrow-right"></i></span>
      </a>
    </div>
  </div>
</section>

<section id="docs" class="section- rounded-top bg-cream -mt-2 z-5">
  <div class="section-inner py-20">
    <div class="section-label reveal">Documentation</div>
    <h2 class="section-h2 reveal reveal-d1">
      Docs <em class="italic gradient-text">Complete Guide</em>
    </h2>
    <p class="section-p reveal reveal-d1">Follow the menu guides for Admin Menu, Back to Die, and Custom Shop.</p>
    <div class="docs-cta reveal reveal-d2">
      <a href="{{ url('/docs') }}" class="btn btn-primary">Open Docs <i class="fa-solid fa-arrow-right"></i></a>
    </div>
  </div>
</section>

@endsection
